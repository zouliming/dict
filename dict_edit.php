<?php
defined('IN_DICT') or exit('Access Denied');
require_once('model.php');

$output = array(
    'table' => 'table',
    'field' => '',
    'error' => 'false',
    'errorMessage' => '',
    'comment' => '',
);
//接收get参数
if (!isset($_POST['id']) || $_POST['id'] == '') {
    $output['error'] = true;
    $output['errorMessage'] = '参数错误,请检查参数';
} else {
    $id = $_POST['id'];
    $model = new model();
    $table = "table";
    $field = "";
    if (isset($_POST['type']) && $_POST['type'] == 'table') {//代表是修改表注释信息
        $str = str_replace('edit__table__', '', $id);
        $field = $str;
        $output['field'] = $str;
    } else {//代表是修改字段信息
        $str = str_replace('config__', '', $id);
        $aryStr = explode('__', $str);
        $table = $output['table'] = $aryStr[0];
        $field = $output['field'] = $aryStr[1];
    }
    $res = $model->getDiyCommentInfo($table, $field);
    if ($res['tableName'] != '' && $res['columName'] != '') {
        $model->updateColumnComment($_POST['intro'], $table, $field);
    } else {
        $model->insertColumnComment($_POST['intro'], $table, $field);
    }
    $output['comment'] = $_POST['intro'];
}
echo json_encode($output);
?>