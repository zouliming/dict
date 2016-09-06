<?php
/**
 * 这是帮助页面
 * User: zouliming
 * Date: 2015/12/3
 * Time: 19:06
 */
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>数据字典--帮助页面</title>
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

        .content {
            width: 600px;
            margin: 100px auto 20px;
            background-color: white;
            padding: 20px;
        }

        red {
            color: red;
        }

        .happybutton {
            background-color: #2ecc71;
            line-height: 20px;
            border: 1px solid transparent;
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 400;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <h1>帮助页面</h1>
        <h3>这是个什么东西:</h3>
        <p>这是一个数据字典，用来帮助程序员记录数据库里面的字段备注。通常情况下，一个有良好习惯的程序员在建表的时候， 字段名都会添加备注，这样方便以后其他团队成员容易理解每个表每个字段的意思。但难免会遇到一些不遵守规则的程序员，
            这个时候，使用数据字典，会帮你解决这个难题。</p>
        <h3>使用方法:</h3>
        <p>你可以双击表名后面的括号，给表添加注释。你也可以双击“本地备注”字段，给数据库字段添加备注。 如果你觉得数据库注释比较好，可以直接点击“使用数据库注释”，一键将数据库的注释复制到本地备注数据库里。 </p>
        <h3>其他使用技巧</h3>
        <p>如果你想重新加载数据库结构，可以跳转到
            <red>"域名/dict.php?fresh=1"</red>
            即可。
        </p>
        <p style="color: #34495e">这个帮助页面，到此也就差不多要结束了，如果你以后想看这个页面，请手工输入URL跳转到
            <red>"域名/help.php"</red>
            即可。
        </p>
        <h3>关于我</h3>
        <p>一个普普通通的程序员，我将这段代码放在Github上，欢迎大家Fork，一起帮助完善用户体验，谢谢大家。</p>
        <p>GitHub地址：<i>https://github.com/zouliming/dict</i></p>
        <div>
            <a class="happybutton" href="index.php">愉快的开始享受数据字典带来的乐趣吧!</a>
        </div>
    </div>
</div>
</body>
</html>

