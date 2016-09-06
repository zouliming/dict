<?php
/**
 * Created by PhpStorm.
 * User: zouliming
 * Date: 2016/1/14
 * Time: 14:52
 */
error_reporting(E_ALL);
ini_set("display_errors", "On");
require_once("config/db.php");
require_once('model.php');
//兼容shopex里面dbschema的方法
function __($a)
{
    return $a;
}

class Boy
{
    function _($a)
    {
        return $a;
    }
}

class app
{
    static $obj;
    static $ooo;

    public static function get($aa)
    {
        $b = new Girl();
        $b->prefix = $aa;
        self::$obj = $b;
        return self::$obj;
    }
}

class Girl
{
    public $prefix = "";

    function _($a)
    {
        if ($this->prefix == "") {
            return "";
        } else {
            return $this->prefix . '__' . $a;
        }
    }
}

/**
 * 加载custom下面的dbschema文件
 * @return array
 */
function include_custom_php()
{
    $dbs = array();
    foreach (glob("../21cake-new/custom/*/dbschema/*.php") as $k => $filename) {
        $db = array();//必须声明，这样才不会被require的文件影响掉
        preg_match('/21cake-new\/custom\/(.+)\/dbschema/', $filename, $matches);
        require_once($filename);
        $key = key($db);
        $unit = current($db);
        $unit['section'] = $matches[1] . '__';
        $dbs[$key] = $unit;
    }
    return $dbs;
}

/**
 * 加载app下面的dbschema文件
 * @return array
 */
function include_app_php(&$dbs)
{
    foreach (glob("../21cake-new/app/*/dbschema/*.php") as $filename) {
        $db = array();//必须声明，这样才不会被require的文件影响掉
        preg_match('/21cake-new\/app\/(.+)\/dbschema/', $filename, $matches);
        require_once($filename);
        $key = key($db);
        $unit = current($db);
        $unit['section'] = $matches[1] . '__';
        //只有custom里面没有的，才需要从app里面拿
        if(!array_key_exists($key,$dbs)){
            $dbs[$key] = $unit;
        }
    }
}
//数据库的表前缀
const TABLE_PREFIX = 'sdb_';
$tableStack = array();
$stack = array();
function q($tableName, $columnName, $comment)
{
    global $stack;
    global $tableStack;
    if ($tableName == 'table') {
        array_push($tableStack, array(
            'table' => $tableName,
            'column' => $columnName,
            'comment' => $comment
        ));
    } else {
        array_push($stack, array(
            'table' => $tableName,
            'column' => $columnName,
            'comment' => $comment
        ));
    }
}
//导入custom的注释文件
$dbschema = include_custom_php();
//导入app的注释文件
include_app_php($dbschema);

foreach ($dbschema as $tablename => $tbconfig) {
    //优先根据表的comment字段来判断是否是表
    //    echo $tablename." ";
    if (!empty($tbconfig['comment'])) {
        /**
         * 很多表注释的comment写的是错误的，明明是salearea的，却写的是app::get('b2c')，比如sdb_salearea_packs这个表就是
         * 所以不要以get方法里面的参数作为第二前缀，还是应该按照文件夹目录来作为第二前缀
         **/
        $commentArr = explode("__", $tbconfig['comment']);
        $sectionArr = explode("__", $tbconfig['section']);
        $newComment = $sectionArr[0] . "__" . $commentArr[1];
        q('table', $tablename, $newComment);
    } else {
        q('table', $tablename, $tbconfig['section']);
    }
    $tableColumns = $tbconfig['columns'];
    foreach ($tableColumns as $column => $columnConfig) {
        $comment = empty($columnConfig['comment']) ? (empty($columnConfig['label']) ? "" : $columnConfig['label']) : $columnConfig['comment'];
        $typeStr = "";
        if (is_array($columnConfig['type'])) {
            foreach ($columnConfig['type'] as $k => $v) {
                $typeStr .= $k . "：" . $v . "，";
            }
            $typeStr = substr($typeStr, 0, -3);
        }
        if (!empty($comment)) {
            if (empty($typeStr)) {
                q($tablename, $column, $comment);
            } else {
                q($tablename, $column, $comment . "：" . "<br>" . $typeStr);
            }
        }
    }
}
//开始建立表的前缀规则
$tablePrefix = array();
foreach ($tableStack as $k => $v) {
    $arr = explode('__', $v['comment']);
    $tablePrefix[$v['column']] = TABLE_PREFIX . $arr[0];
}
//var_dump($tablePrefix);
//重新修改表名
foreach ($tableStack as $k => $v) {
    if (array_key_exists($v['column'], $tablePrefix)) {
        $tableStack[$k]['column'] = $tablePrefix[$v['column']] . "_" . $v['column'];
        $arr = explode('__', $v['comment']);
        $tableStack[$k]['comment'] = $arr[1];
    }
}
foreach ($stack as $k => $v) {
    if (array_key_exists($v['table'], $tablePrefix)) {
        $stack[$k]['table'] = $tablePrefix[$v['table']] . "_" . $v['table'];
        $arr = explode('__', $v['comment']);
        if (!isset($arr[1])) {
            if (($b = strpos($arr[0], 'array')) != false) {
                $stack[$k]['comment'] = substr($arr[0], 0, $b);
            } else {
                $stack[$k]['comment'] = $arr[0];
            }
        } else {
            if (($b = strpos($arr[1], 'array')) != false) {
                $stack[$k]['comment'] = substr($arr[1], 0, $b);
            } else {
                $stack[$k]['comment'] = $arr[1];
            }
        }
    }
}

//开始执行
$model = new model($config);

foreach ($tableStack as $v) {
    $has = $model->hasComment($v['table'], $v['column']);
    if (!$has) {
        $model->insertColumnComment($v['comment'], $v['table'], $v['column']);
    }
}
foreach ($stack as $v) {
    $has = $model->hasComment($v['table'], $v['column']);
    if (!$has) {
        $model->insertColumnComment($v['comment'], $v['table'], $v['column']);
    }
}

echo "导入成功";