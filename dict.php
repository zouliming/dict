<?php
include_once 'init.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>数据字典</title>
    <style>
        body {
            background-color: #222222;
            color: white;
        }

        table {
            border-collapse: collapse;
            border: 1px solid #CCC;
            background: #efefef;
            width: 100%;
            margin-bottom: 1em;
        }

        table th {
            text-align: left;
            font-weight: 500;
            padding: .5em 2em .5em .75em;
            line-height: 1.6em;
            font-size: 11pt;
            border: 1px solid #CCC;
            color: black;
        }

        table td {
            padding: 8px;
            line-height: 1.6em;
            font-size: 14px;
            border: 1px solid #CCC;
            background-color: #fff;
            color: black;
        }

        .c1 {
            width: 150px;
        }

        .c2 {
            width: 120px;
            word-break: break-word;
        }

        .c3 {
            width: 130px;
        }

        .c4 {
            width: 130px;
        }

        .c5 {
            width: 230px;
        }

        caption {
            font-size: 14px;
            font-weight: bold;
            line-height: 2em;
            text-align: left;
            color: white;
            font-family: Tahoma;
            margin-bottom: 10px;
        }

        table tbody tr:hover td, .table tbody tr:hover th {
            background-color: #F5F5F5;
        }

        .c6 div {
            display: inline;
        }

        .tableComment {
            display: inline-block;
            height: 20px;
            /*max-width: 1000px;*/
            min-width: 30px;
        }

        input[type='button'] {
            border: 0 none;
            color: #FFFFFF;
            font-family: Microsoft Yahei;
            font-weight: 600;
            line-height: 20px;
            margin-right: 10px;
            padding: 2px 8px;
            cursor: pointer;
        }

        .button {
            border: 0 none;
            color: #FFFFFF;
            font-family: "Microsoft Yahei", "微软雅黑", "Verdana", "Simsun", "Segoe UI", "Segoe UI Web Regular", "Segoe UI Symbol", "Helvetica Neue", "BBAlpha Sans", "S60 Sans", "Arial", "sans-serif";
            font-weight: 400;
            line-height: 25px;
            margin-right: 10px;
            padding: 2px 8px;
            cursor: pointer;
            font-size: 10pt;
            position: relative;
            display: inline-block;
            border-radius: 3px;
        }

        .metro_btn_red {
            background-color: #e74c3c;
        }

        .metro_btn_green {
            background-color: #01A31C;
        }

        .metro_btn_yellow {
            background-color: #f39c12;
        }

        .metro_btn_blue {
            background-color: #2D89F0;
        }

        .metro_text {
            background: #D2D2D2;
            border: 2px #D2D2D2 solid;
            color: #646464;
            border-radius: 0;
            font-size: 11pt;
            padding: 5px 8px;
            outline: 0;
            display: inline-block;
            margin-right: 10px;
            margin-left: 10px;
            border-radius: 3px;
        }

        .pinned {
            display: block;
            z-index: 10;
        }

        .panel {
            background-color: #16a085;
            line-height: 40px;
            padding-left: 20px;
        }

        .table_name_c {
            font-weight: bold;
            font-family: Microsoft Yahei;
        }
    </style>
    <script src="js/jquery-1.8.1.min.js" type="text/javascript" language="javascript"></script>
</head>
<body>
<?php
$dbfile = 'config/main.php';
if(file_exists($dbfile)){
    include_once 'config/main.php';
}else{
    header('Location:index.php');
}
require_once('model.php');
$table_prefix = "table_";
$column_prefix = "comment_";
$bakFile = './bak/data.php';
$model = new model($config);
$diyComment = $model->getConfigComment();
if (!isset($_GET['fresh']) && is_file($bakFile)) {
    require_once($bakFile);
} else {
    $tableInfo = $model->getTableInfo();
    $dataBak = "<?php\n\$tableInfo=" . var_export($tableInfo, true) . ";\n?>";
    file_put_contents('./bak/data.php', $dataBak);
    header("Location:index.php");
}
foreach ($tableInfo as $table => $columns) {
    ?>
    <div class="container">
        <div class="pinned">
            <div class="panel">
                <A class="table_name_c" NAME="<?= $table ?>"><?= $table ?></A>
                (<span vt="<?= $table ?>" class="tableComment"><?= @$diyComment['table'][strtolower($table)] ?></span>)
            </div>
        </div>
        <div>
            <table>
                <!--		<caption>-->
                <!--			<A NAME="--><?//= $table ?><!--">--><?//= $table ?><!--</A>-->
                <!--			(<span id="--><?//= 'table__' . $table ?><!--" class="tableComment">-->
                <?//= @$diyComment['table'][strtolower($table)] ?><!--</span>)-->
                <!--		</caption>-->
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
                foreach ($columns as $info) {
                    $content = array($info['column_key'], $info['extra'], $info['column_comment']);
                    $content = array_filter($content);
                    $content = implode(' , ', $content);
                    $config_show = @$diyComment[$table][$info['column_name']];
                    $line_show = "";
                    ?>
                    <tr>
                        <td class="c1"><?= $info['column_name'] ?></td>
                        <td class="c2"><?= $info['column_type'] ?></td>
                        <td class="c3"><?= $info['column_default'] ?></td>
                        <td class="c4"><?= $info['collation_name'] ?></td>
                        <td class="c5"><?= $content ?></td>
                        <td class="c6" vt="<?php echo $table;?>" vc="<?php echo $info['column_name'];?>">
                            <?php
                            if ($config_show == "" && $content != "") {
                                echo "<a class='useDbComment button metro_btn_yellow'>使用数据库注释</a><div></div>";
                            } else {
                                echo "<div>" . $config_show . "</div>";
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
}
?>
<script src="js/transition.js"></script>
<script src="js/jquery.pin.min.js"></script>
<script type="text/javascript">
    var controlUrl = "index.php?page=control&action=edit";
    var column_prefix = "<?php echo $column_prefix?>";
    //用来标示正在编辑的元素，免得重复点击
    var editArr = {};

    var mod = {
        changeComment:function(table,column, comment, type) {
            if (editArr.hasOwnProperty(table+column)) {
                delete editArr[table+column];
            }
            var data = {
                table:table,
                column:column,
                intro:comment,
                is_table:false
            };

            if (type == 'table') {
                data.is_table = true;
            }
            $.ajax({
                type: 'POST',
                url: controlUrl,
                data: data,
                dataType: 'json',
                success: function (output) {
                    if (output.error == true) {
                        alert(output.errorMessage);
                    } else {
                        if(output.is_table){
                            mod.find_table_ele(table).html(output.comment);
                        }else{
                            mod.find_column_ele(table,column).html("<div>" + output.comment + "</div>");
                        }
                    }
                }
            });
        },
        find_table_ele:function(table){
            return $(".tableComment[vt='"+table+"']");
        },
        find_column_ele:function(table,column){
            return $("td.c6[vt='"+table+"'][vc='"+column+"']");
        },
        save_intro:function(table,column) {
            mod.changeComment(table,column, $('#' + table+'_'+column).val(), null);
        },
        cancel_intro:function(table,column) {
            this.remove_column_cache(table,column);
            var original_comment = $("#" + table+"_"+column).attr('rel');
            $("td.c6[vt='"+table+"'][vc='"+column+"']").find("div:last").html(original_comment).siblings().show();
        },
        cancel_table_intro:function(table) {
            this.remove_table_cache(table);
            var originnal_comment = $("#table" + table).attr('rel');
            $(".tableComment[vt='"+table+"']").html(originnal_comment);
        },
        save_table_intro:function(table) {
            var new_comment = $('#table'+table).val();
            mod.changeComment(table,'empty', new_comment, 'table');
        },
        check_table_cache:function (table) {
            if (editArr.hasOwnProperty(table+'empty')) {
                return true;
            }
        },
        remove_table_cache:function (table) {
            if (editArr.hasOwnProperty(table+'empty')) {
                delete editArr[table+'empty'];
            }
        },
        set_table_cache:function (table) {
            editArr[table+'empty'] = '1';
        },
        check_column_cache:function (table,column) {
            if (editArr.hasOwnProperty(table+column)) {
                return true;
            }
        },
        set_column_cache:function (table,column) {
            editArr[table+column] = '1';
        },
        remove_column_cache:function (table,column) {
            if (editArr.hasOwnProperty(table+column)) {
                delete editArr[table+column];
            }
        }
    };
    $(".pinned").pin({containerSelector: ".container", minWidth: 940});
    $('.useDbComment').bind('click', function () {
        var ele = $(this).parent();
        var table = ele.attr('vt');
        var column = ele.attr('vc');
        var v = ele.prev().html();
        mod.changeComment(table,column, v);
    });
    //修改字段注释
    $("td.c6").bind('dblclick', function () {
        var td = $(this);
        var ele = td.find("div:last");
        var table = td.attr('vt');
        var column = td.attr('vc');
        if (mod.check_column_cache(table,column)) {
            return false;
        } else {
            mod.set_column_cache(table,column);
            var val = $.trim(ele.html());
            td.children().hide();
            ele.html('<input class="metro_text" type="text" rel="' + val + '" value="' + val + '" size="30" id="'+table+"_"+column+'" />' +
                '<a class="button metro_btn_red" onclick="mod.save_intro(\'' + table+ '\',\''+column + '\')">修改</a>' +
                '<a class="button metro_btn_blue" onclick="mod.cancel_intro(\'' + table+ '\',\''+column + '\')">取消</a>').show();
            $("#" + table+"_"+column).focus();
        }
    });
    //修改表注释
    $("span.tableComment").bind('dblclick', function () {
        var ele = $(this);
        var table = ele.attr('vt');
        var edit_id = 'table'+table;
        if (mod.check_table_cache(table)) {
            return false;
        } else {
            mod.set_table_cache(table);
            var val = $.trim(ele.html());
            ele.html('<input class="metro_text" type="text" rel="' + val + '" value="' + val + '" id="' + edit_id + '" size="30" />' +
                '<a class="button metro_btn_red" onclick="mod.save_table_intro(\''+table + '\')">修改</a>' +
                '<a class="button metro_btn_blue" onclick="mod.cancel_table_intro(\''+table + '\')">取消</a>').show();
            $("#" + edit_id).focus();
        }
    });
</script>
</body>
</html>