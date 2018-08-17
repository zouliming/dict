<?php
//defined('IN_DICT') or exit('Access Denied');

Class model
{
    //源数据库配置
    private $dbConfig;
    //注释数据库配置
    private $commentDbConfig;

    private static $dblink; //数据库连接对象
    private static $commentLink; //注释数据库连接对象

    function __construct($dbconfig)
    {
        $this->dbConfig = $dbconfig['db']['table'];
        $this->commentDbConfig = $dbconfig['db']['comment'];
        if (!$this->dbConfig) {
            die("找不到对应的数据库配置");
        }
        if (!$this->commentDbConfig) {
            die("找不到对应的注释数据库配置");
        }
        self::$dblink = @mysqli_connect($this->dbConfig['host'], $this->dbConfig['username'], $this->dbConfig['password']) or die("MySql连接错误了，你是不是配置配错了啊？");
        self::$commentLink = @mysqli_connect($this->commentDbConfig['host'], $this->commentDbConfig['username'], $this->commentDbConfig['password']) or die("注释的数据库MySql连接错误了，你是不是配置配错了啊？");
        $database = $this->dbConfig['database'];
        if (isset($_GET['db'])) {
            $database = $_GET['db'];
        }
        mysqli_select_db(self::$dblink, $database);
        mysqli_query(self::$dblink, 'SET NAMES utf8');
        mysqli_query(self::$commentLink, 'SET NAMES utf8');
        mysqli_select_db(self::$commentLink, $this->commentDbConfig['database']);
    }

    function selectAll($sql, $link)
    {
        if (!isset($link)) {
            $link = self::$dblink;
        }
        $result = mysqli_query($link, $sql);
        if ($result == false) {
            die("查询时发生了错误：" . mysqli_error($link) . "\nSQL:" . $sql);
        }
        $r = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            array_push($r, $row);
        }
        mysqli_free_result($result);
        return $r;
    }

    function selectOne($sql, $link)
    {
        if (!isset($link)) {
            $link = self::$dblink;
        }
        $result = mysqli_query($link,$sql);
        if ($result == false) {
            die("查询时发生了错误:" . mysqli_error($link) . "\nSQL:" . $sql);
        }
        $r = array();
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        mysqli_free_result($result);
        if ($row === false) {
            return false;
        } else {
            return $row[0];
        }
    }

    function selectRow($sql, $link)
    {
        if (!isset($link)) {
            $link = self::$dblink;
        }
        $result = mysqli_query($link,$sql);
        if ($result == false) {
            die('查询时发生了错误: ' . mysqli_error($link) . "\nSQL: " . $sql);
        }
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        return $row;
    }

    function execute($sql, $link)
    {
        if (!isset($link)) {
            $link = self::$dblink;
        }
        if (!mysqli_query($link,$sql)) {
            die('执行Sql发生了错误: ' . mysqli_error($link) . "\nSQL: " . $sql);
        }
        return mysqli_affected_rows($link);
    }

    /**
     * 获取配置的表注释信息
     * @return array
     */
    function getConfigComment()
    {
        $result = array();
        $sql = "select * from {$this->commentDbConfig['database']}.dict_data where dbName = '{$this->dbConfig['database']}' order by id asc";
        $info = $this->selectAll($sql, self::$commentLink);
        if (is_array($info)) {
            foreach ($info as $key => $value) {
                $result[$value['tableName']][$value['columnName']] = $value['content'];
            }
        }
        return $result;
    }

    /**
     * 获取线上的表注释信息
     * @return array
     */
    function getOnLineComment()
    {
        $result = array();
        $sql = "select * from data_tools where dbName = '{$this->dbConfig['database']}' order by id asc";
        $info = $this->selectAll($sql, self::$dblink);
        if (is_array($info)) {
            foreach ($info as $key => $value) {
                $result[$value['tableName']][$value['columnName']] = $value['content'];
            }
        }
        return $result;
    }

    /**
     * 获取表结构信息
     * @return type
     */
    function getTableInfo()
    {
        $result = array();
        $list_tables_sql = "SHOW TABLES FROM {$this->dbConfig['database']};";
        $systemTables = mysqli_query(self::$dblink,$list_tables_sql,MYSQLI_USE_RESULT);
        $tables = array();
        while ($tableList = @mysqli_fetch_array($systemTables)) {
            $table = $tableList[0];
            if (strpos($table, 'iew') > 0)
                continue;
            array_push($tables,$table);
        }
        foreach ($tables as $table){
            $field_result = $this->selectAll("SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = '{$table}' AND table_schema = '{$this->dbConfig['database']}'", self::$dblink);
            foreach ($field_result as $columnInfo) {
                $result[$table][] = array(
                    'column_key' => $columnInfo['COLUMN_KEY'],
                    'extra' => $columnInfo['EXTRA'],
                    'column_name' => $columnInfo['COLUMN_NAME'],
                    'column_type' => $columnInfo['COLUMN_TYPE'],
                    'column_default' => $columnInfo['COLUMN_DEFAULT'],
                    'collation_name' => $columnInfo['COLLATION_NAME'],
                    'column_comment' => $columnInfo['COLUMN_COMMENT']
                );
            }
        }
        return $result;
    }

    /*
     * 根据数据表名和字段名获取注释信息
     */

    function getDiyCommentInfo($table, $column)
    {
        $sql = "select * from dict_data where dbName = '{$this->dbConfig['database']}' and tableName = '{$table}' and columnName =  '{$column}'";
        return $this->selectRow($sql, self::$commentLink);
    }

    /*
     * 修改注释信息
     */

    function updateColumnComment($comment, $table, $column)
    {
        $sql = " update dict_data set content =  '{$comment}' where dbName = '{$this->dbConfig['database']}' and tableName = '{$table}' and columnName =  '{$column}'";
        return $this->execute($sql, self::$commentLink);
    }

    /*
     * 新增注释信息
     */

    function insertColumnComment($comment, $table, $column)
    {
        $sql = "insert into dict_data (dbName,tableName,columnName,content) values ('{$this->dbConfig['database']}','{$table}','{$column}','{$comment}')";
        return $this->execute($sql, self::$commentLink);
    }

}

?>