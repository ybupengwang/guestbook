<?php
if (!defined('IN_TG')){
    exit('access defined!');
}

//���жϺ����Ƿ����
if(!function_exists('_alert_black')){
    exit('_alert_black�������������');
}

function _check_username($_string){
    //ȥ�����ߵĿո�
    $_string=trim($_string);
    if(mb_strlen($_string,'utf-8')<2||mb_strlen($_string,'utf-8')>20){
        _alert_black('�û������Ȳ���С��2λ���ߴ���20λ');            
    }
    //���������ַ�
    $_char_pattern='/[<>\'\\  ]/';
    if(preg_match($_char_pattern, $_string)){        
        _alert_black('�û������ð��������ַ�');      
    }
    return mysql_escape_string($_string); //�ַ���ת��   
}
function _check_password($_first_pass,$_end_pass){
    //�ж�����
    if(strlen($_first_pass)<6){
        _alert_black('���벻��С��6λ');
    }
    if($_first_pass!=$_end_pass){
        _alert_black('�����ȷ�����벻һ��');
    }
    return sha1($_first_pass);
}
function _check_question($_string,$_min_num,$_max_num){
    if(mb_strlen($_string,'utf-8')<$_min_num||mb_strlen($_string,'utf-8')>$_max_num){
        _alert_black('������ʾ����С��'.$_min_num.'λ���ߴ���'.$_max_num.'λ');
    }
    //����������ʾ
    return $_string;
}
function _check_answer($_que,$_ans,$_min_num,$_max_num){
    if(mb_strlen($_ans,'utf-8')<$_min_num||mb_strlen($_ans,'utf-8')>$_max_num){
        _alert_black('����ش𲻵�С��'.$_min_num.'λ���ߴ���'.$_max_num.'λ');
    }
    //����
    if($_que==$_ans){
        _alert_black('������ʾ�ͻش𲻵���ͬ');
    }
    return sha1($_ans);
}

function _check_email($_string){
    
    if(empty($_string)){
        return null;
    }else{
       if(!preg_match('/^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/', $_string)){
            _alert_black('�ʼ���ʽ����ȷ');;
        }
        return $_string;
    }    
}
function _check_qq($_string){

    if(empty($_string)){
        return null;
    }else{
        if(!preg_match('/^[1-9]{1}[0-9]{4,9}$/', $_string)){
            _alert_black('qq����ȷ');;
        }
        return $_string;
    }
}
function _check_url($_string){

    if(empty($_string)||($_string =='http://')){
        return null;
    }else{
        if(!preg_match('/^https?:\/\/(www.)?[\w\-\.]+(\.\w+)+$/', $_string)){
            _alert_black('��ַ����ȷ');;
        }
        return $_string;
    }
}

function _check_uniqid($_first_uniqid,$_end_uniqid){
    //_alert_black($_first_uniqid.'\n'.$_end_uniqid);
   if((strlen($_first_uniqid))!=40||$_first_uniqid!=$_end_uniqid){
       _alert_black('Ψһ��ʶ����һ��');
   }
   return ($_first_uniqid);
}
?>