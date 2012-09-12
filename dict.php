<html>
	<head>
		<meta charset="UTF-8">
		<title>葵花宝典</title>
		<style>
		    table{ border-collapse:collapse;border:1px solid #CCC;background:#efefef;width:100%; margin-bottom:1em;}  
		    table th{ text-align:left; font-weight:bold; padding:.5em 2em .5em .75em; line-height:1.6em; font-size:12px; border:1px solid #CCC;}  
		    table td{ padding:.5em .75em; line-height:1.6em; font-size:12px; border:1px solid #CCC;background-color:#fff;}
		    .c1{ width: 150px;}
		    .c2{ width: 120px;}
		    .c3{ width: 130px;}
		    .c4{ width: 130px;}
			.c5{ width: 230px;}
		    caption{ font-size:14px; font-weight:bold; line-height:2em; text-align:left; }
		    table tbody tr:hover td, .table tbody tr:hover th {
			    background-color: #F5F5F5;
			}
            .c6 div{
                display: inline;
            }
            .tableComment{
                display: inline-block;
                height: 20px;
                max-width: 400px;
                min-width: 30px;
            }
	    </style>
	    <link href="css/tooltip.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery-1.8.1.min.js" type="text/javascript" language="javascript"></script>
		<script type="text/javascript">
        var databases = '<?=@$_GET['db']?>';
        if (databases == '') {
            databases = 'mtim_test';
        }
		</script>
	</head>
	<body>
		<?php
		require_once('model.php');
        $bakFile = './bak/data.php';
		$model = new model();
		$diyComment = $model->getConfigComment();
		$lineComment = $model->getOnLineComment();
        if(!isset($_GET['fresh']) && is_file($bakFile)){
            require_once($bakFile);
        }else{
            $tableInfo = $model->getTableInfo();
            $dataBak = "<?php\n\$tableInfo=".var_export($tableInfo,true).";\n?>";
            file_put_contents('./bak/data.php',$dataBak);
        }
		foreach ($tableInfo as $table => $columns) {
		?>	
		<table>
			<caption>
				<A NAME="<?=$table?>"><?=$table?></A>
                (<div id="<?='table__'.$table?>" class="tableComment"><?=@$diyComment['table'][strtolower($table)]?></div>)
			</caption>
			<tbody>
				<tr>
					<th>字段名</th>
					<th>数据类型</th>
					<th>默认值</th>
					<th>字符编码</th>
					<th>数据库注释</th>
					<th>本地备注(可修改)</th>
				</tr>
		<?php
		    foreach($columns as $info){
		    	$content = array($info['column_key'],$info['extra'],$info['column_comment']);
				$content = array_filter($content);
				$content = implode(' , ',$content);
				$config_show = @$diyComment[$table][$info['column_name']];
				$line_show = @$lineComment[$table][$info['column_name']];
		?>
				<tr>
					<td class="c1"><?=$info['column_name']?></td>
					<td class="c2"><?=$info['column_type']?></td>
					<td class="c3"><?=$info['column_default']?></td>
					<td class="c4"><?=$info['collation_name']?></td>
					<td class="c5"><?=$content?></td>
					<td class="c6" id="<?=$table.'__'.$info['column_name']?>">
						<?
						if($line_show!="" && $config_show!=$line_show){
							echo '<a class="tip" href="#" rel="tooltip" title="'.$line_show.'">差别</a>&nbsp;&nbsp;';
						}
                        if($config_show=="" && $content!=""){
                            echo "<input class='useDbComment' type='button' value='使用数据库注释'><div></div>";
                        }else{
                            echo "<div>".$config_show."</div>";
                        }
                        ?>
                    </td>
				</tr>
		<?php
		    }
	    ?>
			</tbody>
		</table>
        <?php
		}
		?>
		<script src="js/transition.js"></script>
		<script src="js/tooltip.js"></script>
        <script type="text/javascript">
	        $('a.tip').tooltip({
		        placement:'bottom'
		    });
            $('.useDbComment').bind('click',function(){
                var ele = $(this).parent();
                var v = ele.prev().html();
                var obj = 'config__'+ele.attr('id');
                $.ajax({
                    type:'POST',
                    url:'dict_edit.php',
                    data:'id='+obj+'&intro='+v+'&databases='+databases,
                    success:function(msg){
                        var output = eval('('+msg+')');
                        if(output.error==true){
                            alert(output.errorMessage);
                        }else{
                            $('#'+obj.table+'__'+obj.field).html(output.comment);
                        }
                    }
                });
            });
            function cancel_intro(id){
                var tagTdId = id.replace("config__","");
                $("#"+tagTdId).find("div").html($("#"+id).attr('rel')).siblings().show();
            }
            function save_intro(id){
                $.ajax({
                    type:'POST',
                    url:'dict_edit.php',
                    data:'id='+id+'&intro='+$('#'+id).val()+'&databases='+databases,
                    success:function(msg){
                        var output = eval('('+msg+')');
                        if(output.error==true){
                            alert(output.errorMessage);
                        }else{
                            $('#'+obj.table+'__'+obj.field).html(output.comment);
                        }
                    }
                });
            }
            function cancel_table_intro(id){
                var tagSpanId = id.replace("edit__","");
                $("#"+tagSpanId).html($("#"+id).attr('rel'));
            }
            function save_table_intro(obj){
                $.ajax({
                    type:'POST',
                    url:'dict_edit.php',
                    data:'id='+obj+'&intro='+$('#'+obj).val()+'&type=table'+'&databases='+databases,
                    success:function(msg){
                        var output = eval('('+msg+')');
                        if(output.error==true){
                            alert(output.errorMessage);
                        }else{
                            $('#'+output.table+'__'+output.field).html(output.comment);
                        }
                    }
                });
            }
            $("td.c6").bind('dblclick',function(){
                var td = $(this);
                var ele = td.find("div");
                var id = 'config__'+td.attr('id');
                val = $.trim(ele.html());
                td.children().hide();
                ele.html('<input type="text" rel="'+val+'" value="'+val+'" id="'+id+'" size="30" /><input type="button" value="修改" onclick="save_intro(\''+id+'\')" /><input type="button" value="取消" onclick="cancel_intro(\''+id+'\')" />').show();
                $("#"+id).focus();
            });
            $("div.tableComment").bind('dblclick',function(){
                var ele = $(this);
                var editId = 'edit__'+ele.attr('id');
                val = $.trim(ele.html());
                ele.html('<input type="text" rel="'+val+'" value="'+val+'" id="'+editId+'" size="30" /><input type="button" value="修改" onclick="save_table_intro(\''+editId+'\')" /><input type="button" value="取消" onclick="cancel_table_intro(\''+editId+'\')" />').show();
                $("#"+editId).focus();
            });            
        </script>
	</body>
</html>