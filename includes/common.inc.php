<?php

if (!defined('IN_TG')){
    exit('access defined!');
}
if (PHP_VERSION<'4.1.0'){
    exit('taidi');
}
require dirname(_FILE_).'/includes/global_func.php';

//连接数据库
define(DB_USER, 'root');
define('DB_PWD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'testguest');
//创建数据库连接
$_conn=@mysql_connect(DB_HOST,DB_USER,DB_PWD) or die('数据库连接失败');
//选择一款数据库
mysql_select_db(DB_NAME)or die('指定的数据库不存在');
//选择字符集
mysql_query('SET NAMES gbk')or die('字符集错误');
//测试一下



?>