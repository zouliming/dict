<?php
defined('IN_DICT') or exit('Access Denied');
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
require_once('model.php');
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
                (<span id="<?= 'table__' . $table ?>" class="tableComment"><?= @$diyComment['table'][strtolower($table)] ?></span>)
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
                        <td class="c6" id="<?= $table . '__' . $info['column_name'] ?>">
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
    //用来标示正在编辑的元素，免得重复点击
    var editArr = {};
    function changeComment(id, comment, type) {
        if (editArr.hasOwnProperty(id)) {
            delete editArr[id];
        }
        var data = 'id=' + id + '&intro=' + comment;
        if (type == 'table') {
            data += '&type=table';
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
                    $('#' + output.table + '__' + output.field).html("<div>" + output.comment + "</div>");
                }
            }
        });
    }
    $(".pinned").pin({containerSelector: ".container", minWidth: 940});
    $('.useDbComment').bind('click', function () {
        var ele = $(this).parent();
        var v = ele.prev().html();
        var obj = 'config__' + ele.attr('id');
        changeComment(obj, v, null);
    });
    function cancel_intro(id) {
        if (editArr.hasOwnProperty(id)) {
            delete editArr[id];
        }
        var tagTdId = id.replace("config__", "");
        $("#" + tagTdId).find("div:last").html($("#" + id).attr('rel')).siblings().show();
    }
    function save_intro(id) {
        changeComment(id, $('#' + id).val(), null);
    }
    function cancel_table_intro(id) {
        if (editArr.hasOwnProperty(id)) {
            delete editArr[id];
        }
        var tagSpanId = id.replace("edit__", "");
        $("#" + tagSpanId).html($("#" + id).attr('rel'));
    }
    function save_table_intro(obj) {
        changeComment(obj, $('#' + obj).val(), 'table');
    }
    $("td.c6").bind('dblclick', function () {
        var td = $(this);
        var ele = td.find("div:last");
        var id = 'config__' + td.attr('id');
        if (editArr.hasOwnProperty(id)) {
            return false;
        } else {
            editArr[id] = id;
            var val = $.trim(ele.html());
            td.children().hide();
            ele.html('<input class="metro_text" type="text" rel="' + val + '" value="' + val + '" id="' + id + '" size="30" /><a class="button metro_btn_red" onclick="save_intro(\'' + id + '\')">修改</a><a class="button metro_btn_blue" onclick="cancel_intro(\'' + id + '\')">取消</a>').show();
            $("#" + id).focus();
        }
    });
    $("span.tableComment").bind('dblclick', function () {
        var ele = $(this);
        var editId = 'edit__' + ele.attr('id');
        if (editArr.hasOwnProperty(editId)) {
            return false;
        } else {
            editArr[editId] = editId;
            var val = $.trim(ele.html());
            ele.html('<input class="metro_text" type="text" rel="' + val + '" value="' + val + '" id="' + editId + '" size="30" /><a class="button metro_btn_red" onclick="save_table_intro(\'' + editId + '\')">修改</a><a class="button metro_btn_blue" onclick="cancel_table_intro(\'' + editId + '\')">取消</a>').show();
            $("#" + editId).focus();
        }
    });
</script>
</body>
</html>