<?php
$tableInfo=array (
  'Sheet2$' => 
  array (
    0 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => '销售区域编号',
      'column_type' => 'double',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => '订购人手机号',
      'column_type' => 'double',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => '数量',
      'column_type' => 'double',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => '配送日期',
      'column_type' => 'timestamp',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => '配送时间段',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => '收货人姓名',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => '收货人手机',
      'column_type' => 'double',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => '收货区域',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => '收货地区',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => '订单备注',
      'column_type' => 'double',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'aaa' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'id',
      'column_type' => 'int(11)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'bill_id',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'activity' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'activity_id',
      'column_type' => 'int(4) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'activity_cake',
      'column_type' => 'int(5)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'UNI',
      'extra' => '',
      'column_name' => 'activity_code',
      'column_type' => 'char(16)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'activity_time',
      'column_type' => 'char(32)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'activity_name',
      'column_type' => 'char(64)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'activity_add',
      'column_type' => 'char(64)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'activity_status',
      'column_type' => 'char(8)',
      'column_default' => '未进行',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'activity_type',
      'column_type' => 'int(2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'activity_department',
      'column_type' => 'char(2)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'add_time',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'parent_id',
      'column_type' => 'int(2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'activity_cake' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'activity_id',
      'column_type' => 'int(2) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'activity_cake',
      'column_type' => 'int(5)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'activity_code',
      'column_type' => 'varchar(500)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'activity_begin',
      'column_type' => 'date',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'activity_end',
      'column_type' => 'date',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'activity_department' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'department_id',
      'column_type' => 'int(4) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'department_name',
      'column_type' => 'char(16)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'default',
      'column_type' => 'char(16)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'activity_shichi' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'sc_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'user_id',
      'column_type' => 'mediumint(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'linkman',
      'column_type' => 'varchar(16)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sc_city',
      'column_type' => 'char(8)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sc_mobile',
      'column_type' => 'char(16)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sc_address',
      'column_type' => 'varchar(128)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sc_img',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sc_time',
      'column_type' => 'int(10)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sc_addtime',
      'column_type' => 'int(10)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_time_scope',
      'column_type' => 'varchar(16)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'activity_time' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'tid',
      'column_type' => 'int(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'act_date',
      'column_type' => 'char(16)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'begin_time',
      'column_type' => 'char(8)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_time',
      'column_type' => 'char(8)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'activity_type' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'act_id',
      'column_type' => 'int(4) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'act_name',
      'column_type' => 'char(16)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'default',
      'column_type' => 'char(16)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'activity_users' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'uid',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'email',
      'column_type' => 'varchar(60)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'user_name',
      'column_type' => 'varchar(60)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'province',
      'column_type' => 'varchar(10)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'password',
      'column_type' => 'varchar(32)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'birthday',
      'column_type' => 'date',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'regip',
      'column_type' => 'char(15)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'regdate',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'salt',
      'column_type' => 'varchar(10)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'mobile_phone',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'eatnum',
      'column_type' => 'smallint(1)',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'eattotal',
      'column_type' => 'int(2)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'user_shop_id',
      'column_type' => 'int(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'openid',
      'column_type' => 'varchar(64)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'bind',
      'column_type' => 'tinyint(1)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '账号是否绑定',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'openid_temp',
      'column_type' => 'varchar(64)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'send_points',
      'column_type' => 'tinyint(1)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lucky',
      'column_type' => 'tinyint(1)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'bbb' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(11)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'delivery_id',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'card_temp' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(11)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cards',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'coupon_tmp' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'bigint(20)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'code',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'eat_list' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'eat_id',
      'column_type' => 'mediumint(5) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'eat_time',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'uid',
      'column_type' => 'mediumint(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'eat_total',
      'column_type' => 'mediumint(2)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'activity_id',
      'column_type' => 'int(2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'code',
      'column_type' => 'char(16)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'source',
      'column_type' => 'char(16)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'members' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(11)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'bh',
      'column_type' => 'varchar(10)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sex',
      'column_type' => 'smallint(6)',
      'column_default' => '2',
      'collation_name' => NULL,
      'column_comment' => '1男2女',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'birthday',
      'column_type' => 'date',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'UNI',
      'extra' => '',
      'column_name' => 'mobile',
      'column_type' => 'varchar(15)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'error',
      'column_type' => 'smallint(6)',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_activities_activity' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'description',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'op_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_activities_bank_pre_code' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'code',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'conf_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_activities_bank_signup_conf' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'rec_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'description',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'code_len',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'code_text',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rules_type',
      'column_type' => 'enum(\'bank\',\'aviation\',\'other\')',
      'column_default' => 'bank',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'membership_lv_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'enabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_activities_marketing_click' => 
  array (
    0 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'openid',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'share_id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_valid',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_activities_marketing_scan' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'scan_id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'rec_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'scan_title',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'begin_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'use_flag',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupons_list',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'scan_intro',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'scan_url',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'scan_circs',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'scan_temp',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_activities_marketing_share' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'share_id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'slogan',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'made_name',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mobile',
      'column_type' => 'varchar(16)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'token',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'click',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_activities_member_lv_zunke' => 
  array (
    0 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_lv_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mobile',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_activities_mid_autumn' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(11)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'start_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'success_msg',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'fail_msg',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_activities_mid_autumn_print' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(11)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'time',
      'column_type' => 'int(11)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_real_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'batch_num',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\',\'9\',\'10\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'total',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'print_total',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'product_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_activities_report' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'rp_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'act_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'mobile',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'source',
      'column_type' => 'enum(\'pc\',\'wap\',\'mobilealipay\',\'wx\',\'tb\',\'ic\',\'oth\',\'kf\')',
      'column_default' => 'pc',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'remark',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'used\',\'dead\')',
      'column_default' => 'used',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_status',
      'column_type' => 'enum(\'register\',\'member\',\'notmember\')',
      'column_default' => 'register',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_activities_tryeat_members' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'tryeat_id',
      'column_type' => 'bigint(20)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'user_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'company_name',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'company_address',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'eat_type',
      'column_type' => 'enum(\'cake\',\'ice\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'salearea',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'company_nums',
      'column_type' => 'int(11)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tryeat_username',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'tryeat_mobile',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_aftersales_return_product' => 
  array (
    0 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'return_id',
      'column_type' => 'bigint(20)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'return_bn',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\',\'9\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'image_file',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'product_data',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'comment',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'add_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_aftersales_return_product_new' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'varchar(50)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_name',
      'column_type' => 'varchar(20)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'process_member',
      'column_type' => 'varchar(20)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'phone',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'finsh_content',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'1\',\'2\',\'3\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'type',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'submit_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'submit_user',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'add_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'finsh_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'process_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'account_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'account_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_bank_signup_conf' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'description',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'membership_lv_ids',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rules_type',
      'column_type' => 'enum(\'bank\',\'aviation\')',
      'column_default' => 'bank',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_bill_item' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'item_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'bill_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_item_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_bills' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'bill_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'type',
      'column_type' => 'enum(\'1\',\'2\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ls_number',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_time_scope',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'money',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'bill_up',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'bill_content',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'ps_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'print_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cancel_type',
      'column_type' => 'enum(\'change\',\'cancel\')',
      'column_default' => 'change',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'is_valid',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_reopen',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'print_status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'number',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'batch_num',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\',\'9\',\'10\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_real_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'bill_number',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_birthday_coupon_info' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'birthday_card_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_type',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_ries',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_sum',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'old_product_id',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'new_product_id',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'old_price',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_indent',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_birthday_coupon_log' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'birthday_card_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_type',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_ries',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_sum',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'old_product_id',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'new_product_id',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'old_price',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_brand' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'brand_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'brand_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'brand_url',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'brand_desc',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'brand_logo',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'brand_keywords',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'brand_setting',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'ordernum',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_modify',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_cake_coupons' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'memc_code',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memc_gen_time',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'varchar(64)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'use_flag',
      'column_type' => 'enum(\'T\',\'F\')',
      'column_default' => 'F',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'del_flag',
      'column_type' => 'enum(\'T\',\'F\')',
      'column_default' => 'F',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_cake_customlang' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'clang_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ls_number',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'item_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'product_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'custom_language',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_time_scope',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'print_num',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'print_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_real_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'batch_num',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\',\'9\',\'10\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'op_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_cake_wishcard' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'wcard_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_time_scope',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'print_num',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'print_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_real_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'batch_num',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\',\'9\',\'10\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'op_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_card_log' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'log_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_money',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_number',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_use_status',
      'column_type' => 'enum(\'1\',\'2\',\'3\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_card_log_backup' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'log_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_money',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_number',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_use_status',
      'column_type' => 'enum(\'1\',\'2\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_card_make' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'make_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_money',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'number',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'producer',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_nums',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_makes',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'use_type',
      'column_type' => 'enum(\'cake\',\'ship\',\'annex\',\'order\')',
      'column_default' => 'order',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_card_rule' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'rule_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rule_class',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rule_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rule_no',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_card_type' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'type_name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_type',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_type_extend',
      'column_type' => 'enum(\'card\',\'wf_card\')',
      'column_default' => 'card',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_cards' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'card_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'make_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_money',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'card_number',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_password',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_nums',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'begin_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sale_status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'false\',\'true\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'remark',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'user_id',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'use_start_date',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'use_end_date',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'use_type',
      'column_type' => 'enum(\'cake\',\'ship\',\'annex\',\'order\')',
      'column_default' => 'order',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_cart' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'cart_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'member_ident',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'params',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_cart_objects' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'obj_ident',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'member_ident',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'int(8)',
      'column_default' => '-1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'obj_type',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'params',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'quantity',
      'column_type' => 'float unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_channel' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'logo',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'code_num',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_comment_goods_point' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'point_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'goods_point',
      'column_type' => 'decimal(2,1)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'comment_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'display',
      'column_type' => 'enum(\'false\',\'true\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addon',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'false\',\'true\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_comment_goods_type' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addon',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_counter' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'counter_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'counter_type',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'counter_name',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_counter_attach' => 
  array (
    0 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'counter_value',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'attach_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'counter_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_coupon_codes' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'code_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'batch_number',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_no',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'UNI',
      'extra' => '',
      'column_name' => 'coupon_code',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'99\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'customer_name',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'deposit_rate',
      'column_type' => 'decimal(5,2)',
      'column_default' => '0.00',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sold_price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => 'on update CURRENT_TIMESTAMP',
      'column_name' => 'update_time',
      'column_type' => 'timestamp',
      'column_default' => 'CURRENT_TIMESTAMP',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'timestamp',
      'column_default' => '0000-00-00 00:00:00',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_coupon_codes_log' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'log_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_codes',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'msg',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => 'on update CURRENT_TIMESTAMP',
      'column_name' => 'create_time',
      'column_type' => 'timestamp',
      'column_default' => 'CURRENT_TIMESTAMP',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'op_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'op_name',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_coupon_codes_save' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'code_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'batch_number',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_no',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'UNI',
      'extra' => '',
      'column_name' => 'coupon_code',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'99\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'customer_name',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'deposit_rate',
      'column_type' => 'decimal(5,2)',
      'column_default' => '0.00',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sold_price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => 'on update CURRENT_TIMESTAMP',
      'column_name' => 'update_time',
      'column_type' => 'timestamp',
      'column_default' => 'CURRENT_TIMESTAMP',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'timestamp',
      'column_default' => '0000-00-00 00:00:00',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_coupons' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'cpns_name',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pmt_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'cpns_prefix',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_gen_quantity',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_key',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'cpns_status',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'cpns_type',
      'column_type' => 'enum(\'0\',\'1\',\'2\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_channel',
      'column_type' => 'enum(\'online\',\'offline\')',
      'column_default' => 'online',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_code_batch_number',
      'column_type' => 'tinyint(4)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_code_type',
      'column_type' => 'enum(\'hash\',\'db\')',
      'column_default' => 'db',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_point',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'rule_id',
      'column_type' => 'int(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'used_department',
      'column_type' => 'enum(\'电商\',\'B2B\',\'市场\')',
      'column_default' => '电商',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'remarks',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_saved',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_couponsinsert' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_code',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_delivery' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'delivery_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'delivery_bn',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'money',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'agent_amount',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'agent_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_protect',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'delivery',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'logi_id',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'logi_name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'logi_no',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_area',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_addr',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_zip',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_tel',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_mobile',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_email',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 't_begin',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 't_send',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 't_confirm',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'op_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'pause\',\'packaging\',\'out\',\'in\',\'progress\',\'succ\',\'cancel\',\'unpurchase\',\'ready\',\'failed\',\'lost\',\'timeout\')',
      'column_default' => 'ready',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    25 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    26 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'batch_num',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\',\'9\',\'10\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    27 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    28 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_real_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    29 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'ps_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    30 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'production_status',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    31 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'number',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    32 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'print_status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    33 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'is_print',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    34 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'delivery_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    35 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sign_for_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    36 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ls_number',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    37 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_time_scope',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    38 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'type',
      'column_type' => 'enum(\'1\',\'2\')',
      'column_default' => '2',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_delivery_items' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'item_id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'delivery_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_item_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'item_type',
      'column_type' => 'enum(\'goods\',\'gift\',\'pkg\',\'adjunct\')',
      'column_default' => 'goods',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'product_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'product_bn',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'product_name',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'number',
      'column_type' => 'float',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_delivery_production' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'production_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'UNI',
      'extra' => '',
      'column_name' => 'product_number',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_item_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'delivery_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'delivery_item_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'print_status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'check_status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'birthday_cards_status',
      'column_type' => 'enum(\'true\',\'no_print\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'production_notes_status',
      'column_type' => 'enum(\'true\',\'no_print\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'number',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'batch_num',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\',\'9\',\'10\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_real_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pro_total',
      'column_type' => 'int(3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pro_num',
      'column_type' => 'int(3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ls_number',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pro_number',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ls_number_all',
      'column_type' => 'varchar(40)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'product_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'product_bn',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'product_name',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'spec_info',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    25 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'add_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    26 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'print_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    27 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'delivery_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    28 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_time_scope',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    29 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    30 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_new_audit',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    31 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_cake',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    32 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    33 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'finish_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    34 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'o_status',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_delivery_saleman' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'sale_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'user_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'code',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'webmaster',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pos_code',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_job',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'telephone',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_dly_h_area' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'dha_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'dt_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'area_id',
      'column_type' => 'mediumint(6) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'price',
      'column_type' => 'varchar(100)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'has_cod',
      'column_type' => 'tinyint(1) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'areaname_group',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'areaid_group',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'config',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'expressions',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ordernum',
      'column_type' => 'smallint(4) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_dlycorp' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'corp_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'type',
      'column_type' => 'varchar(6)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'corp_code',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'ordernum',
      'column_type' => 'smallint(4) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'website',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'request_url',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_dlytype' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'dt_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'dt_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'has_cod',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'firstunit',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'continueunit',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_threshold',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'threshold',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'protect',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'protect_rate',
      'column_type' => 'float(6,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'minprice',
      'column_type' => 'float(10,2)',
      'column_default' => '0.00',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'setting',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'def_area_fee',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'firstprice',
      'column_type' => 'float(10,2)',
      'column_default' => '0.00',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'continueprice',
      'column_type' => 'float(10,2)',
      'column_default' => '0.00',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'dt_discount',
      'column_type' => 'float(10,2)',
      'column_default' => '0.00',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'dt_expressions',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'dt_useexp',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'corp_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'dt_status',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'detail',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'area_fee_conf',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ordernum',
      'column_type' => 'smallint(4)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_drama' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'drama_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'drama_time',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'drama_date',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'all_count',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'used_count',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_drama_user' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'user_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'drama_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mobile',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sex',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'num',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_ecs_order_info' => 
  array (
    0 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_sn',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'user_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_status',
      'column_type' => 'tinyint(1) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'shipping_status',
      'column_type' => 'tinyint(1) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'pay_status',
      'column_type' => 'tinyint(1) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'orderman',
      'column_type' => 'varchar(60)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mobile',
      'column_type' => 'varchar(60)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_employee' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sn',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'sale_area_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_event' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'event_id',
      'column_type' => 'tinyint(3) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(60)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '标题',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'start_time',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '开始时间',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_time',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '结束时间',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'for_dept',
      'column_type' => 'enum(\'market\',\'sale\',\'ec\')',
      'column_default' => 'market',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '发起部门
market:市场部
sale:销售部
ec:电商部',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'source',
      'column_type' => 'enum(\'malipay\',\'wx\',\'pc\',\'offline\')',
      'column_default' => 'wx',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '来源
malipay:支付宝钱包
wx:微信
pc:pc
offline:线下',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'operator',
      'column_type' => 'varchar(45)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '操作人员',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'active\',\'init\',\'cancel\')',
      'column_default' => 'init',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '状态
active:激活
init:初始
cancel:取消',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'insert_time',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '插入时间',
    ),
  ),
  'sdb_b2c_event_items' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'item_id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'event_id',
      'column_type' => 'tinyint(4)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '活动类型',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_name',
      'column_type' => 'varchar(64)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '收货人姓名',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_mobile',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '收货人手机',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_addr',
      'column_type' => 'varchar(128)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '收货地址',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '地市id',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_time',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '配送时间',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_time_scope',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '配送时间段',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_tel',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '座机',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rel_member_id',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '关联21客会员id',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'join_user_cnt',
      'column_type' => 'int(11)',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '参与人数',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'company',
      'column_type' => 'varchar(64)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '公司',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'personal_sites',
      'column_type' => 'varchar(64)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '个人主页',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'varchar(128)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '备注',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'insert_time',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '插入时间',
    ),
  ),
  'sdb_b2c_event_part' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_mobile',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '手机',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'part',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'items_id',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '详情id',
    ),
  ),
  'sdb_b2c_goods' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'UNI',
      'extra' => '',
      'column_name' => 'bn',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'en_name',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'simple_name',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'cat_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'brand_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'marketable',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'store',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'notify_num',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'uptime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'downtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_modify',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'p_order',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '30',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'd_order',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '30',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'ad_order',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '300',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'score',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cost',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mktprice',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'weight',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'unit',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'brief',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'en_brief',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    25 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_type',
      'column_type' => 'enum(\'normal\',\'bind\',\'gift\')',
      'column_default' => 'normal',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    26 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'image_default_id',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    27 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'udfimg',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    28 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_production',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    29 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_cake',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    30 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'thumbnail_pic',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    31 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'small_pic',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    32 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'big_pic',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    33 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'intro',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    34 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'goods_rule',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    35 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'en_intro',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    36 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'store_place',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    37 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'min_buy',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    38 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'package_scale',
      'column_type' => 'decimal(20,2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    39 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'package_unit',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    40 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'package_use',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    41 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'score_setting',
      'column_type' => 'enum(\'percent\',\'number\')',
      'column_default' => 'number',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    42 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'store_prompt',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    43 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'nostore_sell',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    44 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'birthday_card',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    45 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'goods_setting',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    46 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'spec_desc',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    47 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'params',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    48 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    49 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rank_count',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    50 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'comments_count',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    51 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'view_w_count',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    52 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'view_count',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    53 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'count_stat',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    54 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'buy_count',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    55 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'buy_w_count',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    56 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'burden',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    57 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'additive',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    58 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'shelf_life',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    59 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'shelf_climate',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    60 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'energy',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    61 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'protein',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    62 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'fat',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    63 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'fatty_acid',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    64 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'carbohydrates',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    65 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'na',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    66 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_1',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    67 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_2',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    68 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_3',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    69 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_4',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    70 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_5',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    71 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_6',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    72 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_7',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    73 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_8',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    74 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_9',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    75 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_10',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    76 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_11',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    77 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_12',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    78 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_13',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    79 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_14',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    80 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_15',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    81 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_16',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    82 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_17',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    83 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_18',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    84 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_19',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    85 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_20',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    86 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_21',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    87 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_22',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    88 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_23',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    89 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_24',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    90 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_25',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    91 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_26',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    92 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_27',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    93 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_28',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    94 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_29',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    95 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_30',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    96 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_31',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    97 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_32',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    98 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_33',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    99 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_34',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    100 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_35',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    101 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_36',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    102 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_37',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    103 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_38',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    104 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_39',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    105 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_40',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    106 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_41',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    107 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_42',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    108 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_43',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    109 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_44',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    110 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_45',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    111 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_46',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    112 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_47',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    113 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_48',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    114 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_49',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    115 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_50',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_goods_cat' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'cat_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'parent_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'cat_path',
      'column_type' => 'varchar(100)',
      'column_default' => ',',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_leaf',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(9)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cat_name',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'gallery_setting',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'p_order',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'goods_count',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tabs',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'finder',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addon',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'child_count',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'last_modify',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_goods_copy' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'UNI',
      'extra' => '',
      'column_name' => 'bn',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'en_name',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'cat_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'brand_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'marketable',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'store',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'notify_num',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'uptime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'downtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_modify',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'p_order',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '30',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'd_order',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '30',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'score',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cost',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mktprice',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'weight',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'unit',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'brief',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'en_brief',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_type',
      'column_type' => 'enum(\'normal\',\'bind\',\'gift\')',
      'column_default' => 'normal',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'image_default_id',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    25 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'udfimg',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    26 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_production',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    27 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_cake',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    28 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'thumbnail_pic',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    29 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'small_pic',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    30 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'big_pic',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    31 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'intro',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    32 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'en_intro',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    33 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'store_place',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    34 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'min_buy',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    35 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'package_scale',
      'column_type' => 'decimal(20,2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    36 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'package_unit',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    37 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'package_use',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    38 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'score_setting',
      'column_type' => 'enum(\'percent\',\'number\')',
      'column_default' => 'number',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    39 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'store_prompt',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    40 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'nostore_sell',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    41 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'birthday_card',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    42 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'goods_setting',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    43 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'spec_desc',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    44 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'params',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    45 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    46 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rank_count',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    47 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'comments_count',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    48 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'view_w_count',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    49 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'view_count',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    50 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'count_stat',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    51 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'buy_count',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    52 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'buy_w_count',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    53 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'burden',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    54 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'additive',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    55 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'shelf_life',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    56 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'energy',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    57 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'protein',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    58 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'fat',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    59 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'fatty_acid',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    60 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'carbohydrates',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    61 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'na',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    62 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_1',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    63 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_2',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    64 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_3',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    65 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_4',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    66 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_5',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    67 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_6',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    68 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_7',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    69 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_8',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    70 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_9',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    71 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_10',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    72 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_11',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    73 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_12',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    74 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_13',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    75 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_14',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    76 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_15',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    77 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_16',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    78 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_17',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    79 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_18',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    80 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_19',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    81 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_20',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    82 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_21',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    83 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_22',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    84 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_23',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    85 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_24',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    86 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_25',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    87 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_26',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    88 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_27',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    89 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_28',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    90 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_29',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    91 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_30',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    92 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_31',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    93 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_32',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    94 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_33',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    95 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_34',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    96 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_35',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    97 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_36',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    98 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_37',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    99 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_38',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    100 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_39',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    101 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_40',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    102 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_41',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    103 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_42',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    104 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_43',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    105 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_44',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    106 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_45',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    107 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_46',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    108 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_47',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    109 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_48',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    110 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_49',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    111 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_50',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_goods_keywords' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'keyword',
      'column_type' => 'varchar(40)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'refer',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'res_type',
      'column_type' => 'enum(\'goods\',\'article\')',
      'column_default' => 'goods',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_modify',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_goods_lv_price' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'product_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'level_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_goods_promotion_ref' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'ref_id',
      'column_type' => 'int(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'rule_id',
      'column_type' => 'int(8)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'tag_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'description',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_lv_ids',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'from_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'to_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'stop_rules_processing',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sort_order',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'action_solution',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'free_shipping',
      'column_type' => 'tinyint(1) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_goods_rate' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'goods_1',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'goods_2',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'manual',
      'column_type' => 'enum(\'left\',\'both\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rate',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_goods_relation' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'relation_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_goods_spec_index' => 
  array (
    0 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'spec_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'spec_value_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'product_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_modify',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_goods_store_prompt' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'prompt_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_by',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(100)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'default',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'values',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_goods_type' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'floatstore',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'alias',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_physical',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'schema_id',
      'column_type' => 'varchar(30)',
      'column_default' => 'custom',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'setting',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'price',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'minfo',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'params',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tab',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'dly_func',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ret_func',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'reship',
      'column_type' => 'enum(\'disabled\',\'func\',\'normal\',\'mixed\')',
      'column_default' => 'normal',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_def',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lastmodify',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_goods_type_props' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'props_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'type',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'search',
      'column_type' => 'varchar(20)',
      'column_default' => 'select',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'show',
      'column_type' => 'varchar(10)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'alias',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'goods_p',
      'column_type' => 'smallint(6)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ordernum',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lastmodify',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_goods_type_props_value' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'props_value_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'props_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_by',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'alias',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lastmodify',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_goods_type_spec' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'spec_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'spec_style',
      'column_type' => 'enum(\'select\',\'flat\',\'disabled\')',
      'column_default' => 'flat',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ordernum',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_goods_virtual_cat' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'virtual_cat_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'virtual_cat_name',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'filter',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addon',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'type_id',
      'column_type' => 'int(10)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'parent_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cat_id',
      'column_type' => 'int(10)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_order',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'cat_path',
      'column_type' => 'varchar(100)',
      'column_default' => ',',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'child_count',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'url',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_invite' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'invite_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'invite_uid',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'has_invited_uid',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_invite_code_coupon' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'item_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_num',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_type',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_start_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_end_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'balance',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'balance_max',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'balance_start_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'balance_end_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_invite_code_log' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'balance',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_invite_code_member' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'invite_uid',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'has_invite_uid',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'invite_code',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_invite_coupon' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'item_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_type',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_condition',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_invoice' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'invoice_content',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content_type',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'createtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'invoice_type',
      'column_type' => 'enum(\'personal\',\'company\')',
      'column_default' => 'company',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_luckybag' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'luckybag_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'luckybag_text',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'creator_coupon',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'all_count',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'used_count',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_luckybag_coupon' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'item_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'max_open_times',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'splus_open_times',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_luckybag_linked' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_nickname',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'luckybag_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'greetings_text',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'linked_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_member_addrs' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'addr_id',
      'column_type' => 'int(10)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(60)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lastname',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'firstname',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'area',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addr',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'zip',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tel',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mobile',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_type',
      'column_type' => 'enum(\'distribution\',\'arayacak\',\'other\')',
      'column_default' => 'distribution',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'day',
      'column_type' => 'varchar(255)',
      'column_default' => '任意日期',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'time',
      'column_type' => 'varchar(255)',
      'column_default' => '任意时间段',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'def_addr',
      'column_type' => 'tinyint(1)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_member_advance' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'log_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'money',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'message',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'mtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'payment_id',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'paymethod',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'import_money',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'explode_money',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_advance',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'shop_advance',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'type',
      'column_type' => 'enum(\'21cake\',\'join10\')',
      'column_default' => '21cake',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_member_comments' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'comment_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'for_comment_id',
      'column_type' => 'mediumint(8)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'type_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'product_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'object_type',
      'column_type' => 'enum(\'ask\',\'discuss\',\'buy\',\'message\',\'msg\',\'order\')',
      'column_default' => 'ask',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'author_id',
      'column_type' => 'mediumint(8)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'author',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'contact',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mem_read_status',
      'column_type' => 'enum(\'false\',\'true\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'adm_read_status',
      'column_type' => 'enum(\'false\',\'true\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lastreply',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'reply_name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'inbox',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'track',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'has_sent',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'to_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'to_uname',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'comment',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ip',
      'column_type' => 'varchar(15)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'display',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'gask_type',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addon',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    25 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'p_index',
      'column_type' => 'tinyint(2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    26 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'false\',\'true\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_member_complaint' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'com_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'com_type',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'com_title',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_member_comreply' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 're_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'com_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_member_coupon' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'memc_code',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'memc_gen_orderid',
      'column_type' => 'varchar(15)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memc_source',
      'column_type' => 'enum(\'a\',\'b\',\'c\',\'membership\')',
      'column_default' => 'a',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memc_enabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memc_used_times',
      'column_type' => 'mediumint(9)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memc_gen_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memc_isvalid',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'start_date',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_date',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tmp_cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tmp_cpns_sn',
      'column_type' => 'varchar(60)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_member_deposit' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'deposit_pass',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_member_goods' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'gnotify_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'product_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'goods_name',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'goods_price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'image_default_id',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'email',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cellphone',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'ready\',\'send\',\'progress\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'send_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'remark',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'type',
      'column_type' => 'enum(\'fav\',\'sto\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'object_type',
      'column_type' => 'varchar(100)',
      'column_default' => 'goods',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_member_invite_code' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'invite_code',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_member_lv' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'member_lv_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'UNI',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lv_logo',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'dis_count',
      'column_type' => 'decimal(5,2)',
      'column_default' => '1.00',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pre_id',
      'column_type' => 'mediumint(9)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'default_lv',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'deposit_freeze_time',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'deposit',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'more_point',
      'column_type' => 'int(11)',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lv_type',
      'column_type' => 'enum(\'retail\',\'wholesale\',\'dealer\')',
      'column_default' => 'retail',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'point',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'show_other_price',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_limit',
      'column_type' => 'tinyint(1)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_limit_price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lv_remark',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'experience',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'expiretime',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_member_msg' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'msg_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'for_id',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'from_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'from_uname',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'from_type',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'to_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'to_uname',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'subject',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'to_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'has_read',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'keep_unread',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'has_star',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'has_sent',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_member_point' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'point',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'change_point',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'consume_point',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'expiretime',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'reason',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'remark',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'related_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'type',
      'column_type' => 'tinyint(1)',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'operator',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_member_pwdlog' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'pwdlog_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'secret',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'expiretime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'has_used',
      'column_type' => 'enum(\'Y\',\'N\')',
      'column_default' => 'N',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_member_send_coupon_logs' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'edit_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'msg',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_member_systmpl' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'tmpl_name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'edittime',
      'column_type' => 'int(10)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'active',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_members' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_lv_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'avator_portrait',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'point',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lastname',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'firstname',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'area',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addr',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'mobile',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tel',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'email',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'zip',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_num',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'refer_id',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'refer_url',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'b_year',
      'column_type' => 'smallint(5) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'b_month',
      'column_type' => 'tinyint(3) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'b_day',
      'column_type' => 'tinyint(3) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'family_type',
      'column_type' => 'enum(\'0\',\'1\',\'2\',\'3\',\'4\',\'5\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'family_b_year',
      'column_type' => 'smallint(5) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'family_b_month',
      'column_type' => 'tinyint(3) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'family_b_day',
      'column_type' => 'tinyint(3) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sex',
      'column_type' => 'enum(\'0\',\'1\',\'2\')',
      'column_default' => '2',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_type',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    25 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addon',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    26 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'wedlock',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    27 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'education',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    28 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'vocation',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    29 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'interest',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    30 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'advance',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    31 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'advance_freeze',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    32 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'point_freeze',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    33 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'point_history',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    34 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'score_rate',
      'column_type' => 'decimal(5,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    35 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'reg_ip',
      'column_type' => 'varchar(16)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    36 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'promoter',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    37 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'head_pic',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    38 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'regtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    39 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'state',
      'column_type' => 'tinyint(1)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    40 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pay_time',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    41 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'biz_money',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    42 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'fav_tags',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    43 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'custom',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    44 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cur',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    45 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lang',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    46 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'unreadmsg',
      'column_type' => 'smallint(5) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    47 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    48 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'remark',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    49 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'remark_type',
      'column_type' => 'varchar(2)',
      'column_default' => 'b1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    50 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'login_count',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    51 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'experience',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    52 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'foreign_id',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    53 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'resetpwd',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    54 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'resetpwdtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    55 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_refer',
      'column_type' => 'varchar(50)',
      'column_default' => 'local',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    56 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'source',
      'column_type' => 'enum(\'pc\',\'wap\',\'mobilealipay\',\'wx\',\'tb\',\'ic\',\'oth\',\'kf\',\'join10_wechat\',\'join10_mobile\',\'join10_kf\')',
      'column_default' => 'pc',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    57 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'user_rank',
      'column_type' => 'tinyint(3)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    58 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rank_points',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    59 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'address_id',
      'column_type' => 'int(8)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    60 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    61 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'membership_lv_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    62 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'overdue_date',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    63 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'active_status',
      'column_type' => 'enum(\'notbuy\',\'inactive\',\'notinto\',\'activate\',\'into\',\'valid\')',
      'column_default' => 'notbuy',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    64 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'active_source',
      'column_type' => 'enum(\'pc\',\'wx\',\'m\',\'alipay\',\'kf\',\'unknow\')',
      'column_default' => 'unknow',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    65 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'active_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    66 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'star_sum',
      'column_type' => 'float',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    67 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'consumption',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    68 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'surplus_consumption',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_membership_card' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'mcard_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'mcard_number',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mcard_password',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'kind_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_property',
      'column_type' => 'enum(\'entity\',\'dummy\')',
      'column_default' => 'entity',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'card_remark',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mcard_status',
      'column_type' => 'enum(\'1\',\'2\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mcard_type',
      'column_type' => 'enum(\'online\',\'offline\',\'shipper\')',
      'column_default' => 'online',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'activate_type',
      'column_type' => 'enum(\'all\',\'number\',\'password\')',
      'column_default' => 'all',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_membership_club' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'club_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'mcard_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mobile',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_real_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'batch_num',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\',\'9\',\'10\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'print_num',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'print_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mcard_type',
      'column_type' => 'enum(\'\',\'online\',\'offline\',\'shipper\')',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'1\',\'2\',\'4\',\'5\',\'6\',\'7\',\'8\',\'9\',\'10\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'print_status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_redispatch',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_sorting',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_valid',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_membership_kinds' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'kind_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'kind_name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_membership_logs' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'membership_lv_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'get_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'overdue_status',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_membership_lv' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'membership_lv_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'UNI',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'consumption',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'convert_point',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'image_id',
      'column_type' => 'char(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lv_remark',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_membership_shipper' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'shipper_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'sale_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'code',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'mcard_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'valid\',\'nullity\')',
      'column_default' => 'valid',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_modify_consumption_logs' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'consumption',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'change_consumption',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'after_consumption',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'reason',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'remark',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'operator',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_offline_invite' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'offline_invite_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_id_signup',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_id_buy',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'invite_type',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_offline_invite_signup_member' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'offline_invite_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_order_coupon_user' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_name',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'usetime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memc_code',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_type',
      'column_type' => 'enum(\'0\',\'1\',\'2\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_order_delivery' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'dlytype',
      'column_type' => 'enum(\'delivery\',\'reship\')',
      'column_default' => 'delivery',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'dly_id',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'items',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_order_giftic' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'gic_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'mobile',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_real_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'batch_num',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\',\'9\',\'10\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'nums',
      'column_type' => 'float',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'remark',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'gic_type',
      'column_type' => 'enum(\'product\',\'pkg\',\'gift\',\'adjunct\',\'giftic\')',
      'column_default' => 'gift',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'new\',\'dead\')',
      'column_default' => 'new',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_order_items' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'item_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'obj_id',
      'column_type' => 'bigint(20)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'product_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'bn',
      'column_type' => 'varchar(40)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cost',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'g_price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'amount',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'score',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'weight',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'nums',
      'column_type' => 'float',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sendnum',
      'column_type' => 'float',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addon',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'birthday_cards',
      'column_type' => 'varchar(40)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'custom_language',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'production_notes',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'item_type',
      'column_type' => 'enum(\'product\',\'pkg\',\'gift\',\'adjunct\')',
      'column_default' => 'product',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_order_log' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'log_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'rel_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'op_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'op_name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'alttime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'bill_type',
      'column_type' => 'enum(\'order\',\'recharge\',\'joinfee\',\'prepaid_recharge\')',
      'column_default' => 'order',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'behavior',
      'column_type' => 'enum(\'creates\',\'updates\',\'payments\',\'refunds\',\'delivery\',\'reship\',\'finish\',\'cancel\',\'unpurchase\')',
      'column_default' => 'payments',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'show_front',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'result',
      'column_type' => 'enum(\'SUCCESS\',\'FAILURE\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'log_text',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addon',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_order_mark' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'item_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addon',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'item_type',
      'column_type' => 'enum(\'b0\',\'b1\',\'b2\',\'b3\',\'b4\',\'b5\')',
      'column_default' => 'b0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_order_objects' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'obj_id',
      'column_type' => 'bigint(20)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'obj_type',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'obj_alias',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'bn',
      'column_type' => 'varchar(40)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'amount',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'quantity',
      'column_type' => 'float',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'weight',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'score',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_order_objects_old' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'obj_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'obj_type',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'obj_alias',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'bn',
      'column_type' => 'varchar(40)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'amount',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'quantity',
      'column_type' => 'float',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'weight',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'score',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'goods_attr',
      'column_type' => 'varchar(16)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'oldgoods_id',
      'column_type' => 'int(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '原始商品id',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'country',
      'column_type' => 'smallint(5)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '原始蛋糕销售地区id',
    ),
  ),
  'sdb_b2c_order_pmt' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'pmt_id',
      'column_type' => 'int(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'product_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'pmt_type',
      'column_type' => 'enum(\'order\',\'goods\',\'coupon\')',
      'column_default' => 'goods',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pmt_amount',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pmt_tag',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pmt_memo',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pmt_describe',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_order_psmark' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'log_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addon',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tj_memo',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'op_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'op_name',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'alttime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_order_stashdb' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'st_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'st_type',
      'column_type' => 'enum(\'freight\',\'discount\')',
      'column_default' => 'freight',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'st_amount',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'st_memo',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'op_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'active\',\'dead\')',
      'column_default' => 'active',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_order_tjmark' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'log_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addon',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tj_memo',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'op_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'op_name',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'alttime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_orders' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_sn',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'total_amount',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'final_amount',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'pay_status',
      'column_type' => 'enum(\'0\',\'1\',\'2\',\'3\',\'4\',\'5\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'ship_status',
      'column_type' => 'enum(\'0\',\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\',\'9\',\'10\',\'11\',\'12\',\'13\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_delivery',
      'column_type' => 'enum(\'Y\',\'N\')',
      'column_default' => 'Y',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'createtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'dd_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'last_modified',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'payment',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cod_pay_type',
      'column_type' => 'enum(\'0\',\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'shipping_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'shipping',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_real_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'active\',\'unpurchase\',\'dead\',\'finish\')',
      'column_default' => 'active',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'stash_status',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'confirm',
      'column_type' => 'enum(\'Y\',\'N\')',
      'column_default' => 'N',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_area',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'ship_name',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'weight',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tostr',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'itemnum',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    25 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ip',
      'column_type' => 'varchar(15)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    26 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_addr',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    27 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_zip',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    28 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'ship_tel',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    29 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_email',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    30 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'ship_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    31 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_time_scope',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    32 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'ship_mobile',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    33 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cost_item',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    34 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_tax',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    35 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tax_type',
      'column_type' => 'enum(\'false\',\'personal\',\'company\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    36 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tax_content',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    37 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cost_tax',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    38 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tax_company',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    39 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_protect',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    40 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cost_protect',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    41 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cost_payment',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    42 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'currency',
      'column_type' => 'varchar(8)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    43 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cur_rate',
      'column_type' => 'decimal(10,4)',
      'column_default' => '1.0000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    44 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'score_u',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    45 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'score_g',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    46 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'discount',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    47 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pmt_goods',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    48 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pmt_order',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    49 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'payed',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    50 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    51 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    52 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mark_type',
      'column_type' => 'varchar(2)',
      'column_default' => 'b1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    53 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mark_text',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    54 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cost_freight',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    55 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'extend',
      'column_type' => 'varchar(255)',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    56 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ls_number',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    57 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_refer',
      'column_type' => 'varchar(20)',
      'column_default' => 'local',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    58 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_type',
      'column_type' => 'enum(\'big_free\',\'common\',\'virtual\',\'forward\')',
      'column_default' => 'common',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    59 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'process_member',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    60 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'process_status',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    61 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_exec',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    62 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'executor',
      'column_type' => 'varchar(12)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    63 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'do_audit_account',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    64 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_big',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    65 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addon',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    66 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'source',
      'column_type' => 'enum(\'pc\',\'wap\',\'wx\',\'tb\',\'jd\',\'kf\',\'mobilealipay\',\'cofco\',\'amazon\',\'yhd\',\'dianping\',\'dpwm\',\'mtt\',\'mtw\',\'ccbsr\',\'oth\')',
      'column_default' => 'pc',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    67 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'check_status',
      'column_type' => 'enum(\'0\',\'1\',\'2\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    68 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'kf_check_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    69 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    70 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'batch_num',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\',\'9\',\'10\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    71 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'production_status',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    72 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_xysrp',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    73 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'birthday_card',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    74 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_wyqk',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    75 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_sms',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    76 => 
    array (
      'column_key' => 'UNI',
      'extra' => '',
      'column_name' => 'ls_number_all',
      'column_type' => 'varchar(40)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    77 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'account_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    78 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'account_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    79 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'greeting_card',
      'column_type' => 'varchar(400)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    80 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'dd_memo',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    81 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'greeting_card_type',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_pos_orders' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'pos_no',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pos_amount',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_pound' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'pound_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pound_name',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'pound_prefix',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pound_gen_quantity',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'before',
      'column_type' => 'varchar(50)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end',
      'column_type' => 'varchar(50)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pound_key',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pound_status',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'description',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'from_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'to_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_lv_ids',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_poundlog' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'log_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pound_num',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'pound_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'b_use_p_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'e_use_p_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pmt_price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'use_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_products' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'product_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'custom_sort',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'barcode',
      'column_type' => 'varchar(128)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'bn',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cost',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mktprice',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'weight',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'unit',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'store',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'store_place',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cutlery_number',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'freez',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_type',
      'column_type' => 'enum(\'normal\',\'bind\',\'gift\')',
      'column_default' => 'normal',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'spec_info',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'spec_desc',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_default',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'uptime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_modify',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'marketable',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    25 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'admin_marketable',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    26 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sale_type',
      'column_type' => 'enum(\'0\',\'1\',\'2\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    27 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'purchase_number',
      'column_type' => 'int(8)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    28 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'str_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    29 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    30 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_big',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    31 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_customlang',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    32 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'later_time',
      'column_type' => 'varchar(2)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    33 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'size',
      'column_type' => 'varchar(10)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    34 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'suite_amount',
      'column_type' => 'varchar(10)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    35 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'booking_hour_limited',
      'column_type' => 'int(11)',
      'column_default' => '5',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_products_copy' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'product_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'barcode',
      'column_type' => 'varchar(128)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'bn',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cost',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mktprice',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'weight',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'unit',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'store',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'store_place',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cutlery_number',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'freez',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_type',
      'column_type' => 'enum(\'normal\',\'bind\',\'gift\')',
      'column_default' => 'normal',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'spec_info',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'spec_desc',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_default',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'uptime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_modify',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'marketable',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sale_type',
      'column_type' => 'enum(\'0\',\'1\',\'2\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    25 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'purchase_number',
      'column_type' => 'int(8)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    26 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'str_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    27 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    28 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_big',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    29 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'later_time',
      'column_type' => 'varchar(2)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_reship' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'reship_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_sn',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'reship_bn',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'orderer_mobile',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'money',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_protect',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'delivery',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'logi_id',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'logi_name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'logi_no',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_real_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_area',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_addr',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_zip',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_tel',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_mobile',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_email',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 't_begin',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 't_send',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 't_confirm',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    25 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    26 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'op_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    27 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'op_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    28 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'op_apply_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    29 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'op_affirm_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    30 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'succ\',\'failed\',\'cancel\',\'lost\',\'progress\',\'timeout\',\'ready\',\'1\',\'2\',\'3\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    31 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'reship_reason',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    32 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    33 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'check_memo',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    34 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_reship_items' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'item_id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'reship_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_item_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'item_type',
      'column_type' => 'enum(\'goods\',\'gift\',\'pkg\',\'adjunct\')',
      'column_default' => 'goods',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'product_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'product_bn',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'product_name',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'number',
      'column_type' => 'float',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_sales_rule_astrict' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'ast_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'rule_id',
      'column_type' => 'int(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'product_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'quantity',
      'column_type' => 'float',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ast_type',
      'column_type' => 'enum(\'order\',\'goods\',\'other\')',
      'column_default' => 'order',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'active\',\'cancel\')',
      'column_default' => 'active',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'op_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_sales_rule_goods' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'rule_id',
      'column_type' => 'int(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'description',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'verification_tips',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'from_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'to_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_from_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_to_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_lv_ids',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'salearea_ids',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'conditions',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'stop_rules_processing',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sort_order',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'action_solution',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'free_shipping',
      'column_type' => 'tinyint(1) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'c_template',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 's_template',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'apply_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_sales_rule_order' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'rule_id',
      'column_type' => 'int(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'description',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'verification_tips',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'from_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'to_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_from_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_to_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_lv_ids',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'membership_lv_ids',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'once',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'limit',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupon_type',
      'column_type' => 'enum(\'coupon\',\'member_ship\',\'convert\',\'vip_coupon\')',
      'column_default' => 'coupon',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'image_id',
      'column_type' => 'char(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'time_type',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'overdue_day',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'salearea_ids',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'conditions',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'action_conditions',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'stop_rules_processing',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sort_order',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'action_solution',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'free_shipping',
      'column_type' => 'enum(\'0\',\'1\',\'2\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rule_type',
      'column_type' => 'enum(\'N\',\'C\')',
      'column_default' => 'N',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    25 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'c_template',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    26 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 's_template',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    27 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ast_status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    28 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'astrict_type',
      'column_type' => 'enum(\'createtime\',\'shiptime\')',
      'column_default' => 'shiptime',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_sell_logs' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'log_id',
      'column_type' => 'mediumint(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'product_id',
      'column_type' => 'mediumint(8)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'product_name',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'spec_info',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'number',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'createtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_shop' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'shop_id',
      'column_type' => 'int(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'node_id',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'node_type',
      'column_type' => 'varchar(128)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'bind\',\'unbind\')',
      'column_default' => 'unbind',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'node_apiv',
      'column_type' => 'varchar(8)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_sku_stock' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'products_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'current_quantity',
      'column_type' => 'int(11)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'limit_quantity',
      'column_type' => 'int(11)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'limit_date',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'createtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'updatetime',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'sale_area_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_spec_values' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'spec_value_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'spec_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'spec_value',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'alias',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'spec_image',
      'column_type' => 'char(32)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'p_order',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '50',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_specification' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'spec_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'spec_name',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'spec_show_type',
      'column_type' => 'enum(\'select\',\'flat\')',
      'column_default' => 'flat',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'spec_type',
      'column_type' => 'enum(\'text\',\'image\')',
      'column_default' => 'text',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'spec_memo',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'p_order',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'alias',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_track_log' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sid',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'account_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'event',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => 'on update CURRENT_TIMESTAMP',
      'column_name' => 'createtime',
      'column_type' => 'timestamp',
      'column_default' => 'CURRENT_TIMESTAMP',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'param',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_type_brand' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'type_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'brand_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'brand_order',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_b2c_weixin_account' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'UNI',
      'extra' => '',
      'column_name' => 'openid',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'subscribe',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sex',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'language',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'city',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'province',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'country',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'headimgurl',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'subscribe_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'remark',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'groupid',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'error_times',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'params',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'token',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => 'MUL',
      'extra' => 'on update CURRENT_TIMESTAMP',
      'column_name' => 'update_time',
      'column_type' => 'timestamp',
      'column_default' => 'CURRENT_TIMESTAMP',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_base_app_content' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'content_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content_type',
      'column_type' => 'varchar(80)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'app_id',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content_name',
      'column_type' => 'varchar(80)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content_title',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content_path',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ordernum',
      'column_type' => 'smallint(4)',
      'column_default' => '50',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'input_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_base_apps' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'app_id',
      'column_type' => 'varchar(32)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'debug_mode',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app_config',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'installed\',\'resolved\',\'starting\',\'active\',\'stopping\',\'uninstalled\',\'broken\',\'paused\')',
      'column_default' => 'uninstalled',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'webpath',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'description',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'local_ver',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'remote_ver',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'author_name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'author_url',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'author_email',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'dbver',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'remote_config',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_base_cache_expires' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'type',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'expire',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_base_crontab' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'id',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'description',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'enabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'schedule',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app_id',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'class',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'type',
      'column_type' => 'enum(\'custom\',\'system\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_base_files' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'file_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'file_path',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'file_type',
      'column_type' => 'enum(\'private\',\'public\')',
      'column_default' => 'public',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_change_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_base_kvstore' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'prefix',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'key',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'value',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'dateline',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'ttl',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_base_network' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'node_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'node_name',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'node_url',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'node_api',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'link_status',
      'column_type' => 'enum(\'active\',\'group\',\'wait\')',
      'column_default' => 'wait',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'node_detail',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'token',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_base_queue' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'queue_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'queue_title',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'running\',\'hibernate\',\'paused\',\'failure\')',
      'column_default' => 'hibernate',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'worker',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'start_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'worker_active',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'total',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'remaining',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cursor_id',
      'column_type' => 'varchar(255)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'runkey',
      'column_type' => 'char(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'task_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'params',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'errmsg',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_base_rpcnotify' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'callback',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rsp',
      'column_type' => 'enum(\'succ\',\'fail\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'msg',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'notifytime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_base_rpcpoll' => 
  array (
    0 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'id',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'process_id',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'type',
      'column_type' => 'enum(\'request\',\'response\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'calltime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'network',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'method',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'params',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'callback',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'callback_params',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'result',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'fail_times',
      'column_type' => 'int(10)',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'succ\',\'failed\')',
      'column_default' => 'failed',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_channel_item_markettrade' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'itmk_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'mk_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'itmk_name',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'itmk_bn',
      'column_type' => 'varchar(40)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'product_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'birthday_cards',
      'column_type' => 'varchar(40)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'custom_language',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'production_notes',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'quantity',
      'column_type' => 'float',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_channel_item_tmallorder' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'trade_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'oid',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'num_iid',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'outer_iid',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'price',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'num',
      'column_type' => 'int(11)',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'total_fee',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'payment',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'outer_sku_id',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'TRADE_NO_CREATE_PAY\',\'WAIT_BUYER_PAY\',\'PAY_PENDING\',\'WAIT_SELLER_SEND_GOODS\',\'WAIT_CAKE_COMBINE\',\'WAIT_BUYER_CONFIRM_GOODS\',\'SELLER_CONSIGNED_PART\',\'TRADE_BUYER_SIGNED\',\'TRADE_FINISHED\',\'TRADE_CLOSED\',\'TRADE_CLOSED_BY_TAOBAO\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'refund_status',
      'column_type' => 'enum(\'WAIT_SELLER_AGREE\',\'WAIT_BUYER_RETURN_GOODS\',\'WAIT_SELLER_CONFIRM_GOODS\',\'SELLER_REFUSE_BUYER\',\'CLOSED\',\'SUCCESS\',\'NO_REFUND\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'snapshot_url',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'consign_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_channel_ittrade' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'it_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_mobile',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_ship_area',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_ship_addr',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'it_ship_name',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_ship_tel',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'it_ship_mobile',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_payment',
      'column_type' => 'varchar(100)',
      'column_default' => '-1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_cod_pay_type',
      'column_type' => 'enum(\'0\',\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_pay_status',
      'column_type' => 'enum(\'0\',\'1\',\'2\',\'3\',\'4\',\'5\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'it_shipping_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_cost_freight',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_ship_time',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_ship_time_scope',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_mark_text',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_memo',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_product_num',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'createtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_source',
      'column_type' => 'enum(\'pc\',\'wap\',\'wx\',\'tb\',\'jd\',\'kf\',\'mobilealipay\',\'cofco\',\'mtt\',\'mtw\',\'ccbsr\',\'oth\')',
      'column_default' => 'kf',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_cost_item',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_cur_rate',
      'column_type' => 'decimal(10,4)',
      'column_default' => '1.0000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_discount',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'it_is_wyqk',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    25 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'waitimp\',\'finish\',\'cancel\')',
      'column_default' => 'waitimp',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    26 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'b2c_order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    27 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_channel_markettrade' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'mk_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_mobile',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mk_ship_area_backup',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mk_ship_area',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mk_ship_addr',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'mk_ship_name',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mk_ship_tel',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'mk_ship_mobile',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mk_payment',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mk_cod_pay_type',
      'column_type' => 'enum(\'0\',\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mk_pay_status',
      'column_type' => 'enum(\'0\',\'1\',\'2\',\'3\',\'4\',\'5\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'mk_shipping_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mk_cost_freight',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mk_ship_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mk_ship_time_scope',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mk_source',
      'column_type' => 'enum(\'pc\',\'wap\',\'wx\',\'tb\',\'jd\',\'kf\',\'mobilealipay\',\'cofco\',\'mtt\',\'mtw\',\'ccbsr\',\'oth\')',
      'column_default' => 'pc',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mk_is_wyqk',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mk_mark_text',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mk_memo',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'createtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mk_discount',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tableware_num',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'create\',\'waitimp\',\'finish\',\'cancel\')',
      'column_default' => 'create',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    25 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'b2c_order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    26 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'b2c_order_sn',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    27 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'import_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    28 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'gener_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    29 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_channel_tmalltrade' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'trade_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'alipay_id',
      'column_type' => 'bigint(20)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'alipay_no',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'buyer_area',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'buyer_nick',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'buyer_alipay_no',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'created',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'discount_fee',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'has_buyer_message',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'modified',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pay_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'payment',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'received_payment',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'receiver_address',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'receiver_city',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'receiver_name',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'receiver_district',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'receiver_mobile',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'receiver_phone',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'receiver_state',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'TRADE_NO_CREATE_PAY\',\'WAIT_BUYER_PAY\',\'PAY_PENDING\',\'WAIT_SELLER_SEND_GOODS\',\'WAIT_CAKE_COMBINE\',\'WAIT_BUYER_CONFIRM_GOODS\',\'SELLER_CONSIGNED_PART\',\'TRADE_BUYER_SIGNED\',\'TRADE_FINISHED\',\'TRADE_CLOSED\',\'TRADE_CLOSED_BY_TAOBAO\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sell_type',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tid',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'total_fee',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mark_desc',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    25 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'modified_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    26 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'buyer_message',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    27 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'seller_memo',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    28 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    29 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'b2c_order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    30 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'b2c_order_sn',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    31 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_content_article_bodys' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'UNI',
      'extra' => '',
      'column_name' => 'article_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tmpl_path',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'seo_title',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'seo_description',
      'column_type' => 'mediumtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'seo_keywords',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'goods_info',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'hot_link',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'length',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'image_id',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_content_article_indexs' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'article_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'type',
      'column_type' => 'enum(\'1\',\'2\',\'3\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'node_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'author',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'pubtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'uptime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'level',
      'column_type' => 'enum(\'1\',\'2\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'ifpub',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'pv',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_content_article_nodes' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'node_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'parent_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'node_depth',
      'column_type' => 'tinyint(1)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'node_name',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'node_pagename',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'node_path',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'seo_title',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'seo_description',
      'column_type' => 'mediumtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'seo_keywords',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'has_children',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ifpub',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'hasimage',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'ordernum',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'homepage',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'uptime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tmpl_path',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'list_tmpl_path',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_couponlog_order_coupon_ref' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'memc_code',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_couponlog_order_coupon_user' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'cpns_name',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'usetime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'total_amount',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'memc_code',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_type',
      'column_type' => 'enum(\'0\',\'1\',\'2\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'1\',\'2\',\'3\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_dbeav_meta_register' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'mr_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'tbl_name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pk_name',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'col_name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'col_type',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'col_desc',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_dbeav_meta_value_datetime' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'mr_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'pk',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'value',
      'column_type' => 'datetime',
      'column_default' => '0000-00-00 00:00:00',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_dbeav_meta_value_decimal' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'mr_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'pk',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'value',
      'column_type' => 'decimal(12,4)',
      'column_default' => '0.0000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_dbeav_meta_value_int' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'mr_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'pk',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'value',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_dbeav_meta_value_longtext' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'mr_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'pk',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'value',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_dbeav_meta_value_text' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'mr_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'pk',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'value',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_dbeav_meta_value_varchar' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'mr_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'pk',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'value',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_dbeav_recycle' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'item_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'item_title',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'item_type',
      'column_type' => 'varchar(80)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'drop_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'item_sdf',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_desktop_filter' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'filter_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'filter_name',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'user_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'model',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'filter_query',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ctl',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'act',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_desktop_flow' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'flow_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'flow_from',
      'column_type' => 'enum(\'user\',\'system\',\'internet\')',
      'column_default' => 'system',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'from_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'subject',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'flow_desc',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'body',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'flow_ip',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'send_mode',
      'column_type' => 'enum(\'direct\',\'broadcast\',\'fetch\')',
      'column_default' => 'direct',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'flow_type',
      'column_type' => 'varchar(32)',
      'column_default' => 'default',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'send_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_desktop_hasrole' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'user_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'role_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_desktop_menus' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'menu_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'menu_type',
      'column_type' => 'varchar(80)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'app_id',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'workground',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'menu_group',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'menu_title',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'menu_path',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'display',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'permission',
      'column_type' => 'varchar(80)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addon',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'target',
      'column_type' => 'varchar(10)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'menu_order',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'parent',
      'column_type' => 'varchar(255)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_desktop_recycle' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'item_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'item_title',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'item_type',
      'column_type' => 'varchar(80)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app_key',
      'column_type' => 'varchar(80)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'drop_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'item_sdf',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'permission',
      'column_type' => 'varchar(80)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_desktop_role_flow' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'role_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'flow_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_desktop_roles' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'role_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'role_name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'workground',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_desktop_tag' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'tag_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'tag_name',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tag_mode',
      'column_type' => 'enum(\'normal\',\'filter\')',
      'column_default' => 'normal',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app_id',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'tag_type',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tag_abbr',
      'column_type' => 'varchar(150)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tag_bgcolor',
      'column_type' => 'varchar(7)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tag_fgcolor',
      'column_type' => 'varchar(7)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tag_filter',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rel_count',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_desktop_tag_rel' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'tag_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'rel_id',
      'column_type' => 'varchar(32)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app_id',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tag_type',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_modify',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_desktop_user_flow' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'user_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'flow_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'unread',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'note',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'has_star',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'keep_unread',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_desktop_users' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'user_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lastlogin',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'config',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'favorite',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'super',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lastip',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'logincount',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => 'UNI',
      'extra' => '',
      'column_name' => 'op_no',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_ectools_analysis' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'service',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'interval',
      'column_type' => 'enum(\'hour\',\'day\',\'comment\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'modify',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_ectools_analysis_logs' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'analysis_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'type',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'target',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'flag',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'value',
      'column_type' => 'float',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_ectools_currency' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'cur_id',
      'column_type' => 'int(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cur_name',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cur_sign',
      'column_type' => 'varchar(5)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'UNI',
      'extra' => '',
      'column_name' => 'cur_code',
      'column_type' => 'varchar(8)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cur_rate',
      'column_type' => 'decimal(10,4)',
      'column_default' => '1.0000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cur_default',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_ectools_order_bills' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'rel_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'bill_type',
      'column_type' => 'enum(\'payments\',\'refunds\')',
      'column_default' => 'payments',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pay_object',
      'column_type' => 'enum(\'order\',\'recharge\',\'joinfee\',\'prepaid_recharge\')',
      'column_default' => 'order',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'bill_id',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'money',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_ectools_payments' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'payment_id',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'money',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cur_money',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'succ\',\'failed\',\'cancel\',\'error\',\'invalid\',\'progress\',\'timeout\',\'ready\')',
      'column_default' => 'ready',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pay_name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pay_type',
      'column_type' => 'enum(\'online\',\'offline\',\'deposit\',\'oppay\')',
      'column_default' => 'online',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 't_payed',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'op_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'payment_bn',
      'column_type' => 'varchar(32)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'account',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'bank',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pay_account',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'currency',
      'column_type' => 'varchar(10)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'paycost',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pay_app_id',
      'column_type' => 'varchar(100)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pay_ver',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ip',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 't_begin',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 't_confirm',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'return_url',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'trade_no',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_ectools_refunds' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'refund_id',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'money',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cur_money',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'account',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'bank',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pay_account',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'currency',
      'column_type' => 'varchar(10)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'paycost',
      'column_type' => 'decimal(20,3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pay_type',
      'column_type' => 'enum(\'online\',\'deposit\',\'offline\')',
      'column_default' => 'online',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'succ\',\'failed\',\'cancel\',\'error\',\'invalid\',\'progress\',\'timeout\',\'ready\')',
      'column_default' => 'ready',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pay_name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pay_ver',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'op_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'op_name',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'finance_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'finance_name',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'refund_bn',
      'column_type' => 'varchar(32)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pay_app_id',
      'column_type' => 'varchar(100)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 't_begin',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 't_payed',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 't_confirm',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'checkmemo',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    23 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    24 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    25 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'trade_no',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_ectools_regions' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'region_id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'local_name',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'package',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_region_id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'region_path',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'region_grade',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_delivery_region',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'p_1',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'p_2',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ordernum',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cost_freight',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_ectools_regions_copy0729' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'region_id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'local_name',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'package',
      'column_type' => 'varchar(20)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'p_region_id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'region_path',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'region_grade',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_delivery_region',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'p_1',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'p_2',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ordernum',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cost_freight',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_express_dly_center' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'dly_center_id',
      'column_type' => 'int(10)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(50)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'address',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'region',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'zip',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'phone',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'uname',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cellphone',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sex',
      'column_type' => 'enum(\'female\',\'male\')',
      'column_default' => 'male',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_express_print_tmpl' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'prt_tmpl_id',
      'column_type' => 'int(10)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'prt_tmpl_title',
      'column_type' => 'varchar(100)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'shortcut',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'prt_tmpl_width',
      'column_type' => 'tinyint(3) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'prt_tmpl_height',
      'column_type' => 'tinyint(3) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'prt_tmpl_offsetx',
      'column_type' => 'tinyint(4)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'prt_tmpl_offsety',
      'column_type' => 'tinyint(4)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'prt_tmpl_data',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_gcps_userorderprofit' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'profit_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'u_name',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'addtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'refer_url',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_cost',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'money',
      'column_type' => 'decimal(20,3)',
      'column_default' => '0.000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'state',
      'column_type' => 'enum(\'0\',\'1\',\'2\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'yam',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'false\',\'true\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'wi',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cid',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'channel',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_name',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'url_params',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ct',
      'column_type' => 'enum(\'1\',\'2\',\'3\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_gift_cat' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'cat_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cat_name',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'p_order',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ifpub',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_gift_ref' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'product_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'bn',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'goods_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cat_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_lv_ids',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'marketable',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'consume_score',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'from_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'to_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '30',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'max_buy_store',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'max_limit',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'real_limit',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'brief',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_image_image' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'image_id',
      'column_type' => 'char(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'storage',
      'column_type' => 'varchar(50)',
      'column_default' => 'filesystem',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'image_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ident',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'url',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'l_ident',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'l_url',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'm_ident',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'm_url',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 's_ident',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 's_url',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'width',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'height',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'watermark',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_modified',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_image_image_attach' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'attach_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'target_id',
      'column_type' => 'bigint(20)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'target_type',
      'column_type' => 'varchar(20)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'image_id',
      'column_type' => 'char(32)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_modified',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_image_image_attach_copy' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'attach_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'target_id',
      'column_type' => 'bigint(20)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'target_type',
      'column_type' => 'varchar(20)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'image_id',
      'column_type' => 'char(32)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_modified',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_image_image_copy' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'image_id',
      'column_type' => 'char(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'storage',
      'column_type' => 'varchar(50)',
      'column_default' => 'filesystem',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'image_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ident',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'url',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'l_ident',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'l_url',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'm_ident',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'm_url',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 's_ident',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 's_url',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'width',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'height',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'watermark',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_modified',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_limited_words' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(11) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'words',
      'column_type' => 'varchar(64)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'level',
      'column_type' => 'enum(\'高危\',\'普通\')',
      'column_default' => '普通',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'int(11)',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '状态,0:无效,1:有效',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => 'on update CURRENT_TIMESTAMP',
      'column_name' => 'update_time',
      'column_type' => 'timestamp',
      'column_default' => 'CURRENT_TIMESTAMP',
      'collation_name' => NULL,
      'column_comment' => '最后修改时间',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'timestamp',
      'column_default' => '0000-00-00 00:00:00',
      'collation_name' => NULL,
      'column_comment' => '添加时间',
    ),
  ),
  'sdb_openid_openid' => 
  array (
    0 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'openid',
      'column_type' => 'int(14)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'provider_openid',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'provider_code',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'nickname',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'realname',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'email',
      'column_type' => 'varchar(200)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'gender',
      'column_type' => 'enum(\'0\',\'1\',\'2\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'address',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'avatar',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_operatorlog_logs' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'username',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'realname',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'dateline',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'operate_type',
      'column_type' => 'enum(\'normal\',\'members\',\'goods\',\'orders\')',
      'column_default' => 'normal',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'operate_key',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_operatorlog_normallogs' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'username',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'module',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'operate_type',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'dateline',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_operatorlog_register' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ctl',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'act',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'method',
      'column_type' => 'enum(\'post\',\'get\')',
      'column_default' => 'post',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'module',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'operate_type',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'template',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'param',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'prk',
      'column_type' => 'varchar(255)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_pam_account' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'account_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'account_type',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'login_name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'login_password',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'createtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'salt',
      'column_type' => 'varchar(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_pam_auth' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'auth_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'account_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'module_uid',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'module',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'data',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_pam_log' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'event_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'event_time',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'event_data',
      'column_type' => 'varchar(500)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'event_type',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_pointprofessional_member_point_task' => 
  array (
    0 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'task_name',
      'column_type' => 'varchar(50)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'point',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'enddate',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'related_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'task_type',
      'column_type' => 'enum(\'1\',\'2\',\'3\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'remark',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'operator',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_proregister_activity' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'rec_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rec_name',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rec_description',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'company_code',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'company_batch',
      'column_type' => 'tinyint(3) unsigned',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'company_name',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'company_image_id',
      'column_type' => 'char(32)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'welcome_text',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'op_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'update_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_proregister_iiuv' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'uv_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'rec_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'company_batch',
      'column_type' => 'tinyint(3) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'uv_number',
      'column_type' => 'varchar(49)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'start_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'uv_cpns_ids',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'membership_lv_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'uv_status',
      'column_type' => 'enum(\'unused\',\'used\',\'dead\')',
      'column_default' => 'unused',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'mobile',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'uv_used_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'op_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_salearea_address' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'address_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'address_name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 's_number',
      'column_type' => 'int(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'b_number',
      'column_type' => 'int(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'os_number',
      'column_type' => 'int(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ob_number',
      'column_type' => 'int(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'address_region_id',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'distribution_id',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_salearea_address_number' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'number',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '1000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'date',
      'column_type' => 'varchar(15)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_salearea_address_relation' => 
  array (
    0 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'address_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_salearea_astrict' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'b_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'e_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'goods_ids',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'products_ids',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'false\',\'true\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'limit_type',
      'column_type' => 'enum(\'goods\',\'products\')',
      'column_default' => 'goods',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'time_type',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lasttime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_salearea_delivery_time' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ck_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'start_xd_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_xd_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'start_ps_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_ps_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'start_delivery_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_delivery_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'batch_num',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_salearea_delivery_time_copy' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ck_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'start_xd_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_xd_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'start_ps_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_ps_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'start_delivery_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_delivery_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'batch_num',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_salearea_distribution' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'distribution_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'number',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'state',
      'column_type' => 'enum(\'1\',\'0\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'distribution_region_id',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'address',
      'column_type' => 'varchar(50)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'real_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'p_name',
      'column_type' => 'varchar(50)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'p_tel',
      'column_type' => 'varchar(50)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'p_phone',
      'column_type' => 'varchar(50)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cost',
      'column_type' => 'varchar(50)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_salearea_distribution_real' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'number',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'region_id',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'address',
      'column_type' => 'varchar(50)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mentioning',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_enable',
      'column_type' => 'enum(\'0\',\'1\')',
      'column_default' => '1',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sort',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_salearea_keywords' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'keyid',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'kvalue',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_salearea_package' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'package_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'UNI',
      'extra' => '',
      'column_name' => 'package_number',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'salearea_number',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'real_number',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'print',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'status',
      'column_type' => 'enum(\'1\',\'0\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'use_status',
      'column_type' => 'enum(\'1\',\'0\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_salearea_package_relation' => 
  array (
    0 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'package_id',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'delivery_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_salearea_packs' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'package_number',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'salearea_number',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'package_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ck_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'jz_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'deli_number',
      'column_type' => 'int(2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'ps_number',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'batch_num',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\',\'6\',\'7\',\'8\',\'9\',\'10\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'sc_number',
      'column_type' => 'int(2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'lq_number',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_salearea_salearea' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'number',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '1000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_number',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '1000',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_data',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'state',
      'column_type' => 'enum(\'1\',\'0\')',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'region_id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pro_certificate',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pro_certificate_sim',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pro_company',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pro_address',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pro_area',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'code',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'disabled',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    15 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_ship_time_hour',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    16 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_ship_time_second',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    17 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'next_star_ship_time_hour',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    18 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'next_star_time_second',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    19 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'next_end_time_hour',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    20 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'next_end_time_second',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    21 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'audit_end_time_hour',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    22 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'audit_end_time_second',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_salearea_ship_time' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'sale_area_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_begin_time_hour',
      'column_type' => 'int(2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_begin_time_second',
      'column_type' => 'int(2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_end_time_hour',
      'column_type' => 'int(2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ship_end_time_second',
      'column_type' => 'int(2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_begin_time_hour',
      'column_type' => 'int(2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_begin_time_second',
      'column_type' => 'int(2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_end_time_hour',
      'column_type' => 'int(2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_end_time_second',
      'column_type' => 'int(2)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_salearea_smslog' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'phone',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'res',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'state',
      'column_type' => 'enum(\'send\',\'succ\',\'fail\')',
      'column_default' => 'send',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'ip',
      'column_type' => 'char(15)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_serveradm_xhprof' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'run_id',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'source',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ctl',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'act',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'request_uri',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'params',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'addtime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'wt',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'mu',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'pmu',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_site_explorers' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'path',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_site_link' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'link_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'link_name',
      'column_type' => 'varchar(128)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'href',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'image_url',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'orderlist',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'hidden',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_site_menus' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ctl',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'act',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'custom_url',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'display_order',
      'column_type' => 'tinyint(4) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'target_blank',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'hidden',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'params',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'config',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'update_modified',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_site_modules' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ctl',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'path',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'extension',
      'column_type' => 'varchar(10)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'allow_menus',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_native',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'enable',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'use_ssl',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'update_modified',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_site_route_statics' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'static',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'url',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'enable',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'true',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_site_seo' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ctl',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'act',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'config',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'param',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'update_modified',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_site_themes' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'theme',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'stime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'author',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'site',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'version',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'info',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'config',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'update_url',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_used',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_site_themes_file' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'filename',
      'column_type' => 'varchar(300)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'filetype',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'fileuri',
      'column_type' => 'varchar(300)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'version',
      'column_type' => 'int(11)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'theme',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_site_themes_tmpl' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tmpl_type',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tmpl_name',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tmpl_path',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'theme',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rel_file_id',
      'column_type' => 'int(11)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_site_widgets' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'theme',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_site_widgets_instance' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'widgets_id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'core_file',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'core_slot',
      'column_type' => 'tinyint(3) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'core_id',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'widgets_type',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'theme',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'widgets_order',
      'column_type' => 'tinyint(3) unsigned',
      'column_default' => '5',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'domid',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'border',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'classname',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tpl',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'params',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'modified',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_site_widgets_proinstance' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'widgets_id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'level',
      'column_type' => 'enum(\'system\',\'theme\')',
      'column_default' => 'system',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'flag',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'varchar(254)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'widgets_type',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'theme',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'domid',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'border',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'classname',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tpl',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'params',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'modified',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_system_queue_mysql' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'queue_name',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'worker',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'params',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'create_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'last_cosume_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'owner_thread_id',
      'column_type' => 'int(11)',
      'column_default' => '-1',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_wap_explorers' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'path',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_wap_menus' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(100)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ctl',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'act',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'custom_url',
      'column_type' => 'varchar(200)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'display_order',
      'column_type' => 'tinyint(4) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'target_blank',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'hidden',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'params',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'config',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'update_modified',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_wap_modules' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ctl',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'path',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'extension',
      'column_type' => 'varchar(10)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'allow_menus',
      'column_type' => 'varchar(255)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_native',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'enable',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'use_ssl',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'update_modified',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_wap_seo' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ctl',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'act',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'config',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'param',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'update_modified',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_wap_themes' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'theme',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'stime',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'author',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'site',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'version',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'info',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'config',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'update_url',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'is_used',
      'column_type' => 'enum(\'true\',\'false\')',
      'column_default' => 'false',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_wap_themes_file' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'filename',
      'column_type' => 'varchar(300)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'filetype',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'fileuri',
      'column_type' => 'varchar(300)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'version',
      'column_type' => 'int(11)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'theme',
      'column_type' => 'varchar(50)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'content',
      'column_type' => 'text',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_wap_themes_tmpl' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tmpl_type',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tmpl_name',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tmpl_path',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'theme',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'rel_file_id',
      'column_type' => 'int(11)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sdb_wap_widgets' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'theme',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'name',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'sdb_wap_widgets_instance' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'widgets_id',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'core_file',
      'column_type' => 'varchar(50)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'core_slot',
      'column_type' => 'tinyint(3) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'core_id',
      'column_type' => 'varchar(20)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'widgets_type',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'app',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'theme',
      'column_type' => 'varchar(30)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'widgets_order',
      'column_type' => 'tinyint(3) unsigned',
      'column_default' => '5',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'title',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'domid',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'border',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    11 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'classname',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    12 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tpl',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    13 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'params',
      'column_type' => 'longtext',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    14 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'modified',
      'column_type' => 'int(10) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'sheet1$' => 
  array (
    0 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'BSM50C36B0001UP',
      'column_type' => 'varchar(255)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => '9',
      'column_type' => 'double',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'tmp_54d0a46a17200' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'salearea_id',
      'column_type' => 'bigint(20) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'ck_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'start_xd_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_xd_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'start_ps_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_ps_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'start_delivery_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'end_delivery_time',
      'column_type' => 'varchar(4)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'batch_num',
      'column_type' => 'enum(\'1\',\'2\',\'3\',\'4\',\'5\')',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'tmp_coupons' => 
  array (
    0 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupons_type_id',
      'column_type' => 'int(10)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'coupons_sn',
      'column_type' => 'varchar(100)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'tmp_cpns_id',
      'column_type' => 'int(10)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'tmp_user_lever' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'bigint(20)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'points',
      'column_type' => 'int(10)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'lever_id',
      'column_type' => 'tinyint(3)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'web_user_coupons' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'memc_code',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memc_gen_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memo',
      'column_type' => 'varchar(64)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'use_flag',
      'column_type' => 'enum(\'T\',\'F\')',
      'column_default' => 'F',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'del_flag',
      'column_type' => 'enum(\'T\',\'F\')',
      'column_default' => 'F',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'wx_order' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'wx_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'wx_sn',
      'column_type' => 'varchar(16)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'wx_status',
      'column_type' => 'tinyint(1)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'wx_mobile',
      'column_type' => 'varchar(16)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => 'MUL',
      'extra' => '',
      'column_name' => 'wx_user',
      'column_type' => 'varchar(16)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'wx_addtime',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'wx_confirmtime',
      'column_type' => 'int(11)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'wx_cake',
      'column_type' => 'varchar(64)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'wx_price',
      'column_type' => 'decimal(10,2)',
      'column_default' => '0.00',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'wx_city',
      'column_type' => 'varchar(8)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    10 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'wx_gid',
      'column_type' => 'mediumint(8)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
  ),
  'wx_source_log' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => 'auto_increment',
      'column_name' => 'log_id',
      'column_type' => 'mediumint(8)',
      'column_default' => NULL,
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_id',
      'column_type' => 'bigint(20)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'reg_time',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'source',
      'column_type' => 'varchar(32)',
      'column_default' => '',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'first_pur',
      'column_type' => 'tinyint(1)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    6 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'new_member',
      'column_type' => 'tinyint(1)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    7 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'order_time',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    8 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'record_time',
      'column_type' => 'int(10)',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    9 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'psy_id',
      'column_type' => 'char(16)',
      'column_default' => '0',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
  'wx_user_coupons' => 
  array (
    0 => 
    array (
      'column_key' => 'PRI',
      'extra' => '',
      'column_name' => 'memc_code',
      'column_type' => 'varchar(30)',
      'column_default' => NULL,
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    1 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'cpns_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    2 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'member_id',
      'column_type' => 'mediumint(8) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    3 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'memc_gen_time',
      'column_type' => 'int(10) unsigned',
      'column_default' => '0',
      'collation_name' => NULL,
      'column_comment' => '',
    ),
    4 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'use_flag',
      'column_type' => 'enum(\'T\',\'F\')',
      'column_default' => 'F',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
    5 => 
    array (
      'column_key' => '',
      'extra' => '',
      'column_name' => 'del_flag',
      'column_type' => 'enum(\'T\',\'F\')',
      'column_default' => 'F',
      'collation_name' => 'utf8_general_ci',
      'column_comment' => '',
    ),
  ),
);
?>