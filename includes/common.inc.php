<?php

if (!defined('IN_TG')){
    exit('access defined!');
}
if (PHP_VERSION<'4.1.0'){
    exit('taidi');
}
require dirname(_FILE_).'/includes/global_func.php';
require dirname(_FILE_).'/includes/mysql_func.php';
//�������ݿ�
define(DB_USER, 'root');
define('DB_PWD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'testguest');
//��ʼ�����ݿ�
_connect();
_select_db();
_select_query();
?>