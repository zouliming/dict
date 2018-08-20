<?php
/**
 * 用来处理业务逻辑
 * User: zouliming
 * Date: 2015/12/3
 * Time: 16:11
 */
include_once 'init.php';

$action = isset($_GET['action']) ? $_GET['action'] : "";
if (empty($action)) {
    throw new Exception("缺少必要的action参数");
} else {
    switch ($action) {
        case "initconfig":
            if (isset($_POST['dbconfig'])) {
                $localConfig = localConfig();
                $db = $_POST['dbconfig'];
                $localConfig = str_replace(array(
                    '{db-server}',
                    '{db-username}',
                    '{db-password}',
                    '{db-port}',
                    '{db-name}',
                    '{comment-server}',
                    '{comment-username}',
                    '{comment-password}',
                    '{comment-port}',
                    '{comment-name}'
                ), array(
                    $db['dbserver'],
                    $db['dbusername'],
                    $db['dbpassword'],
                    $db['dbport'],
                    $db['dbname'],
                    $db['commentserver'],
                    $db['commentusername'],
                    $db['commentpassword'],
                    $db['commentport'],
                    $db['commentname']
                ), $localConfig);
                $result = file_put_contents(DICT_ROOT . '/config/main.php', $localConfig);
                if(!$result){
                    die('写入配置文件失败,请检查config目录权限');
                }
                echo "初始化完成...正在加载数据库表结构...";
                header("Location:dict.php?fresh=1");
            } else {
                header("Location:install.php");
            }
            break;
        case "edit":
            require_once('model.php');
            $column_prefix = "comment_";
            $output = array(
                'table' => 'table',
                'field' => '',
                'error' => 'false',
                'errorMessage' => '',
                'comment' => '',
            );
            //接收get参数
            if (!isset($_POST['table']) || $_POST['table'] == '' || !isset($_POST['column']) || $_POST['column'] == '') {
                $output['error'] = true;
                $output['errorMessage'] = '参数错误,请检查参数';
            } else {
                $table = $_POST['table'];
                $column = $_POST['column'];
                $model = new model($config);
                $field = "";
                if (isset($_POST['is_table']) && $_POST['is_table'] == 'true') {//代表是修改表注释信息
                    $field = $table;
                    $table = 'table';
                    $output['table'] = $_POST['table'];
                    $output['field'] = '';
                    $output['is_table'] = true;
                } else {//代表是修改字段信息
                    $table = $output['table'] = $table;
                    $field = $output['field'] = $column;
                }
                $res = $model->getDiyCommentInfo($table, $field);
                if ($res['tableName'] != '' && $res['columnName'] != '') {
                    $rows = $model->updateColumnComment($_POST['intro'], $table, $field);
                } else {
                    $rows = $model->insertColumnComment($_POST['intro'], $table, $field);
                }
                $output['comment'] = $_POST['intro'];
            }
            if($rows==0){
                $output['error'] = true;
                $output['errorMessage'] = '添加注释失败';
            }
            echo json_encode($output);
            break;
        default:
            break;
    }
}

/* 以下是定义的函数 */
function localConfig()
{
    $cfg = <<<EOF
<?php
defined('IN_DICT') or exit('Access Denied');

\$config = array();

// --------------------------  源表的数据库  --------------------------- //
\$config['db']['table']['host'] = '{db-server}';
\$config['db']['table']['username'] = '{db-username}';
\$config['db']['table']['password'] = '{db-password}';
\$config['db']['table']['port'] = '{db-port}';
\$config['db']['table']['database'] = '{db-name}';
\$config['db']['table']['charset'] = 'utf8';

// --------------------------  保存注释用的数据库  --------------------------- //
\$config['db']['comment']['host'] = '{comment-server}';
\$config['db']['comment']['username'] = '{comment-username}';
\$config['db']['comment']['password'] = '{comment-password}';
\$config['db']['comment']['port'] = '{comment-port}';
\$config['db']['comment']['database'] = '{comment-name}';
\$config['db']['comment']['charset'] = 'utf8';
EOF;
    return trim($cfg);
}