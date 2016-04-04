<?php
function _alert_black($_info){
    echo "<script type='text/javascript'>alert('".$_info."');history.back();</script>";
    exit();
}


function _check_yzm($_first_yzm,$_end_yzm){
    if($_first_yzm!=$_end_yzm){
        _alert_black('验证码不正确');
    }
}
function _sha1_uniqid(){
    return sha1(uniqid(rand(),true));
    
}

function _location($_info,$_url){
    echo "<script type='text/javascript'>alert('".$_info."');location.href='$_url';</script>";
    exit();
}
?>

