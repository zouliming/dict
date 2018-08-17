<?php
/**
 * Author: zouliming
 * Createtime: 2018/8/16 18:51
 * Description:
 */
define('DICT_ROOT', str_replace("\\", '/', dirname(__FILE__)));
define('IN_DICT', 1);

ini_set('error_reporting',E_ALL);
ini_set('display_errors','On');

/**
 * 浏览器友好的变量输出
 * @param mixed $var 变量
 * @param boolean $echo 是否输出 默认为True 如果为false 则返回输出字符串
 * @param string $label 标签 默认为空
 * @param boolean $strict 是否严谨 默认为true
 * @return void|string
 */
function dump($var, $echo=true, $label=null, $strict=true) {
    $label = ($label === null) ? '' : rtrim($label) . ' ';
    if (!$strict) {
        if (ini_get('html_errors')) {
            $output = print_r($var, true);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        } else {
            $output = $label . print_r($var, true);
        }
    } else {
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
        if (!extension_loaded('xdebug')) {
            $output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        }
    }
    if ($echo) {
        echo($output);
        return null;
    }else
        return $output;
}

function p($array, $header = true) {
    header('Content-type:text/html;charset=utf-8');

    foreach (func_get_args() as $key => $value) {
        echo '<pre>' . print_r($value, true) . '</pre>';
    }

    if ($header)
        die;
}