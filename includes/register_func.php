<?php
if (!defined('IN_TG')){
    exit('access defined!');
}

//先判断函数是否存在
if(!function_exists('_alert_black')){
    exit('_alert_black不存在请检查程序');
}

function _check_username($_string){
    //去掉两边的空格
    $_string=trim($_string);
    if(mb_strlen($_string,'utf-8')<2||mb_strlen($_string,'utf-8')>20){
        _alert_black('用户名长度不得小于2位或者大于20位');            
    }
    //限制敏感字符
    $_char_pattern='/[<>\'\\  ]/';
    if(preg_match($_char_pattern, $_string)){        
        _alert_black('用户名不得包含敏感字符');      
    }
    return mysql_escape_string($_string); //字符串转义   
}
function _check_password($_first_pass,$_end_pass){
    //判断密码
    if(strlen($_first_pass)<6){
        _alert_black('密码不得小于6位');
    }
    if($_first_pass!=$_end_pass){
        _alert_black('密码和确认密码不一致');
    }
    return sha1($_first_pass);
}
function _check_question($_string,$_min_num,$_max_num){
    if(mb_strlen($_string,'utf-8')<$_min_num||mb_strlen($_string,'utf-8')>$_max_num){
        _alert_black('密码提示不得小于'.$_min_num.'位或者大于'.$_max_num.'位');
    }
    //返回密码提示
    return $_string;
}
function _check_answer($_que,$_ans,$_min_num,$_max_num){
    if(mb_strlen($_ans,'utf-8')<$_min_num||mb_strlen($_ans,'utf-8')>$_max_num){
        _alert_black('密码回答不得小于'.$_min_num.'位或者大于'.$_max_num.'位');
    }
    //密码
    if($_que==$_ans){
        _alert_black('密码提示和回答不得相同');
    }
    return sha1($_ans);
}

function _check_email($_string){
    
    if(empty($_string)){
        return null;
    }else{
       if(!preg_match('/^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/', $_string)){
            _alert_black('邮件格式不正确');;
        }
        return $_string;
    }    
}
function _check_qq($_string){

    if(empty($_string)){
        return null;
    }else{
        if(!preg_match('/^[1-9]{1}[0-9]{4,9}$/', $_string)){
            _alert_black('qq不正确');;
        }
        return $_string;
    }
}
function _check_url($_string){

    if(empty($_string)||($_string =='http://')){
        return null;
    }else{
        if(!preg_match('/^https?:\/\/(www.)?[\w\-\.]+(\.\w+)+$/', $_string)){
            _alert_black('网址不正确');;
        }
        return $_string;
    }
}

function _check_uniqid($_first_uniqid,$_end_uniqid){
    //_alert_black($_first_uniqid.'\n'.$_end_uniqid);
   if((strlen($_first_uniqid))!=40||$_first_uniqid!=$_end_uniqid){
       _alert_black('唯一标识符不一致');
   }
   return ($_first_uniqid);
}
?>