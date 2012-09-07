<?php
require_once('model.php');

//接收get参数
if($_POST['intro']==''||$_POST['id']==''){
    echo 1;
}else{
    if(isset($_POST['type']) && $_POST['type']=='table'){//代表是修改表注释信息
        $id = $_POST['id'];
		$str = str_replace('edit__','',$id);
		$databases = $_POST['databases'];
		$selesql = "select * from data_tools where dbName = '".$databases."' and tableName = 'table' and columName =  '".$str."' ";
		$result = mysql_query($selesql);
		$res = mysql_fetch_array($result);
		if ($res['columName'] != '') {
			$sql = " update data_tools set content =  '".$_POST['intro']."' where dbName = '".$databases."' and tableName = 'table' and columName =  '".$_POST['intro']."' ";
		}else {
			$sql = " insert into data_tools (dbName,tableName,columName,content) values ('".$databases."','".table."','".$str."','".$_POST['intro']."')";
		}
		mysql_query($sql);
		$jsonStr = array('id'=>$str);
		echo json_encode($jsonStr);
    }else{//代表是修改字段信息
        $id = $_POST['id'];
		$str = str_replace('config__','',$id);
		$aryStr = explode('__',$str);
        $model = new model();
		$res = $model->getDiyCommentInfo($aryStr[0], $aryStr[1]);
		if ($res['tableName'] != '' && $res['columName'] != '') {
			$model->updateColumnComment($_POST['intro'], $aryStr[0], $aryStr[1]);
		}else {
			$model->insertColumnComment($_POST['intro'], $aryStr[0], $aryStr[1]);
		}
		$jsonStr = array('table'=>$aryStr[0],'field'=>$aryStr[1]);
		echo json_encode($jsonStr);
    }
}
?>