<?php
//��ֹ�������
if (!defined('IN_TG')){
    exit('access defined!');
}

function _connect(){
    //����һ��ȫ�ֱ��� �ⲿҲ���Է���
    global $_conn;
    if(!$_conn=@mysql_connect(DB_HOST,DB_USER,DB_PWD)){
        exit('���ݿ�����ʧ��');
    }    
}

function _select_db(){
    if(!mysql_select_db(DB_NAME)){
        exit('�Ҳ���ָ�������ݿ�');
    }
}
function _select_query(){
    if(!mysql_query('SET NAMES gbk')){
        exit('�ַ�������');
    }
}
function _query($_sql){
    if(!$result=mysql_query($_sql)){
     exit('sqlִ��ʧ��');    
    }
    return $result;
}
function _panduan($_sql){
    return mysql_fetch_array(_query($_sql));
}
//��ʾӰ�쵽�ļ�¼��
function _affected_rows(){
    return mysql_affected_rows();
}

?>