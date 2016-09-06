<html>
<head>
    <meta charset="UTF-8">
    <title>葵花宝典</title>
    <style>
        body {
            background-color: #1bc2a1;
            font-family: "Microsoft Yahei";
        }

        table {
            width: 100%;
        }

        a {
            text-decoration: none;
        }

        .container {

        }

        .panel {
            background-color: white;
            width: 400px;
            margin: 200px auto;
            padding: 22px;
        }

        .tb {

        }

        .tb tr th {
            color: #2980b9;
            text-align: left;
            font-size: 18px;
            padding: 5px 0px;
        }

        .tb tr td {

        }

        .tb tr td:first-child {
            width: 100px;
        }

        .tb tr td:second-child {

        }

        .tb tr td input[type="text"] {
            line-height: 20px;
            width: 230px;
        }

        .help {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .help a {
            color: white;
            font-size: 16px;
        }
    </style>
    <script src="js/jquery-1.8.1.min.js" type="text/javascript" language="javascript"></script>
</head>
<body>
<div class="container">
    <div class="help">
        <a href="help.php">帮助手册</a>
    </div>
    <div class="panel">
        <h2 style="text-align:center;">请填写以下信息</h2>
        <form action="control.php?action=initconfig" method="post" onsubmit="return checkForm();">
            <table class="tb" id="db">
                <tr>
                    <th colspan="2">源数据库信息</th>
                </tr>
                <tr>
                    <td>host</td>
                    <td><input type="text" name="dbconfig[dbserver]" value="127.0.0.1"/></td>
                </tr>
                <tr>
                    <td>端口</td>
                    <td><input type="text" name="dbconfig[dbport]" value="3006"/></td>
                </tr>
                <tr>
                    <td>用户名</td>
                    <td><input type="text" name="dbconfig[dbusername]"/></td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="text" name="dbconfig[dbpassword]"/></td>
                </tr>
                <tr>
                    <td>数据库</td>
                    <td><input type="text" name="dbconfig[dbname]"/></td>
                </tr>
            </table>
            <table class="tb" id="comment">
                <tr>
                    <th colspan="2">注释数据库信息</th>
                </tr>
                <tr>
                    <td>host</td>
                    <td><input type="text" name="dbconfig[commentserver]" value="127.0.0.1"/></td>
                </tr>
                <tr>
                    <td>端口</td>
                    <td><input type="text" name="dbconfig[commentport]" value="3006"/></td>
                </tr>
                <tr>
                    <td>用户名</td>
                    <td><input type="text" name="dbconfig[commentusername]"/></td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="text" name="dbconfig[commentpassword]"/></td>
                </tr>
                <tr>
                    <td>数据库</td>
                    <td><input type="text" name="dbconfig[commentname]" value="dict"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="提交"> <input type="reset" value="取消">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<script type="text/javascript">
    //检查表单
    function checkForm() {
        var str = "";
        var inputeles = $(":input[type=text]");
        $.each(inputeles, function (i, n) {
            var content = $(n).val();
            if (content == "") {
                var lable = $(n).parent().prev().html();
                str += lable + "不能为空啊\n";
            }
        });
        if (str == "") {
            return true;
        } else {
            alert(str);
            return false;
        }
        return false;
    }
</script>
</body>
</html>