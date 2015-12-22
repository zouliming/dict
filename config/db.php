<?php
defined('IN_DICT') or exit('Access Denied');

$config = array();

// --------------------------  源表的数据库  --------------------------- //
$config['db']['table']['host'] = '127.0.0.1';
$config['db']['table']['username'] = 'zouliming';
$config['db']['table']['password'] = 'apple';
$config['db']['table']['port'] = '3006';
$config['db']['table']['database'] = '21cake_dev';
$config['db']['table']['charset'] = 'utf8';

// --------------------------  保存注释用的数据库  --------------------------- //
$config['db']['comment']['host'] = '127.0.0.1';
$config['db']['comment']['username'] = 'zouliming';
$config['db']['comment']['password'] = 'apple';
$config['db']['comment']['port'] = '3006';
$config['db']['comment']['database'] = 'dict';
$config['db']['comment']['charset'] = 'utf8';