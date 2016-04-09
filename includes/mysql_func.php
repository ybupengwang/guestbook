<?php
//防止恶意调用
if (!defined('IN_TG')){
    exit('access defined!');
}

function _connect(){
    //定义一个全局变量 外部也可以访问
    global $_conn;
    if(!$_conn=@mysql_connect(DB_HOST,DB_USER,DB_PWD)){
        exit('数据库连接失败');
    }    
}

function _select_db(){
    if(!mysql_select_db(DB_NAME)){
        exit('找不到指定的数据库');
    }
}
function _select_query(){
    if(!mysql_query('SET NAMES gbk')){
        exit('字符集错误');
    }
}
function _query($_sql){
    if(!$result=mysql_query($_sql)){
     exit('sql执行失败');    
    }
    return $result;
}
function _panduan($_sql){
    return mysql_fetch_array(_query($_sql));
}
//表示影响到的记录数
function _affected_rows(){
    return mysql_affected_rows();
}

?>