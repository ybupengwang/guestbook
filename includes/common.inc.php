<?php

if (!defined('IN_TG')){
    exit('access defined!');
}
if (PHP_VERSION<'4.1.0'){
    exit('taidi');
}
require dirname(_FILE_).'/includes/global_func.php';
require dirname(_FILE_).'/includes/mysql_func.php';
//连接数据库
define(DB_USER, 'root');
define('DB_PWD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'testguest');
//初始化数据库
_connect();
_select_db();
_select_query();
?>