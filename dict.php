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
	    </style>
	    <link href="css/tooltip.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery-1.8.1.min.js" type="text/javascript" language="javascript"></script>
		<script type="text/javascript">
        var databases = '<?=@$_GET['db']?>';
        if (databases == '') {
            databases = 'mtim_test';
        }
		function edit(obj){
			var id = 'config__'+obj['id'];
			val = $('#'+obj['id']).html();
			obj.innerHTML = '<input type="text" rel="'+val+'" value="'+val+'" id="'+id+'" size="30" /><input type="button" value="修改" onclick="save_intro(\''+id+'\')" /><input type="button" value="取消" onclick="cancel_intro(\''+id+'\')" />';
		}
		function cancel_intro(id){
            var tagTdId = id.replace("config__","");
            $("#"+tagTdId).html($("#"+id).attr('rel'));
        }
		function save_intro(id){
			$.ajax({
				type:'POST',
				url:'dict_edit.php',
				data:'id='+id+'&intro='+$('#'+id).val()+'&databases='+databases,
				success:function(msg){
					if(msg==1){
						alert('修改失败');
					}else{
						var obj = eval('('+msg+')');
						$('#'+obj.table+'__'+obj.field).html($('#'+'config__'+obj.table+'__'+obj.field).val());
					}
				}
			});
		}

		function edit_table(obj){
			val = $.trim($('#'+obj['id']).html());
			obj.innerHTML = '<input type="text" rel="'+val+'" value="'+val+'" id="edit__'+obj['id']+'" size="30" /><input type="button" value="修改" onclick="save_table_intro(\'edit__'+obj['id']+'\')" /><input type="button" value="取消" onclick="cancel_table_intro(\'edit__'+obj['id']+'\')" />';
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
					if(msg==1) alert('修改失败');
					else
					{
						var obj = eval('('+msg+')');
						$('#'+obj.id).html($('#edit__'+obj.id).val());
					}
				}
			});
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
                (<span id="<?=$table?>" ondblclick="edit_table(this)"><?=isset($diyComment['table'][strtolower($table)])?$diyComment['table'][strtolower($table)]:"&nbsp;"?></span>)
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
					<td class="c6" id="<?=$table.'__'.$info['column_name']?>" ondblclick="edit(this)">
						<?
						if($line_show!="" && $config_show!=$line_show){
							echo '<a class="tip" href="#" rel="tooltip" title="'.$line_show.'">差别</a>&nbsp;&nbsp;';
						}
                        if($config_show=="" && $content!=""){
                            echo "<input class='useDbComment' type='button' value='使用数据库注释'>";
                        }else{
                            echo $config_show;
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
                        if(msg==1){
                            alert('修改失败');
                        }else{
                            ele.html(v);
                        }
                    }
                });
            });
        </script>
	</body>
</html>