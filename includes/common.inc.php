<?php

if (!defined('IN_TG')){
    exit('access defined!');
}
if (PHP_VERSION<'4.1.0'){
    exit('taidi');
}
require dirname(_FILE_).'/includes/global_func.php';

//�������ݿ�
define(DB_USER, 'root');
define('DB_PWD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'testguest');
//�������ݿ�����
$_conn=@mysql_connect(DB_HOST,DB_USER,DB_PWD) or die('���ݿ�����ʧ��');
//ѡ��һ�����ݿ�
mysql_select_db(DB_NAME)or die('ָ�������ݿⲻ����');
//ѡ���ַ���
mysql_query('SET NAMES gbk')or die('�ַ�������');
//����һ��



?>