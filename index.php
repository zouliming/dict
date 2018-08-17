<?php
include_once 'init.php';

//初始化简单，判断是否有数据库配置文件，如果没有，跳转到配置页面
$dbConfigFile = DICT_ROOT . "/config/main.php";
if (file_exists($dbConfigFile)) {
    require $dbConfigFile;
    $page = isset($_GET['page']) ? $_GET['page'] : "";
    if ($page != "") {
        if (file_exists(DICT_ROOT . "/" . $page . ".php")) {
            require($page . ".php");
        }
    } else {
        require("dict.php");
    }
} else {
    header("Location:install.php");
}