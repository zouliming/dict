<?php
define('MODE','company');

/*
 * 数据库
 */
$tableconfig = array(
	'company'=>array(
		'host'=>"192.168.1.37:11811",
		'username'=>"root",
		'password'=>"ihush4037",
		'database' => "mtim_test",
	),
	'home'=>array(
		'host'=>"127.0.0.1",
		'username'=>"zouliming",
		'password'=>"caozuo",
		'database' => "ihush_dict",
	)
);
/**
 * 自定义注释将要被插入的数据库
 */
$commentDbConfig = array(
    'host'=>"127.0.0.1",
    'username'=>"zouliming",
    'password'=>"caozuo",
    'database' => "ihush_dict",
);
?>

