<?php 
define('IN_TG',true);
define(SCRIPT, register);
//引入公共文件
require dirname(_FILE_).'/includes/common.inc.php';

?>
<?php 
    require 'includes/title.inc.php';
    //开始激活处理
    //不允许直接输入激活网址激活
    if(!$_GET['active']){
        _alert_black('非法操作'); 
    }
    if(isset($_GET['active']) && $_GET['action']=='OK'){
        
        $_active=$_GET['active'];
        if(_panduan("SELECT wp_active FROM wp_user WHERE wp_active='$_active' LIMIT 1")){         
            //将wp_active设置为空值
            _query("UPDATE wp_user SET wp_active=NULL WHERE wp_active='$_active' LIMIT 1");
            //$result=mysql_query("UPDATE wp_user SET wp_active=NULL WHERE wp_active='$_active' LIMIT 1");
            //echo '$result';
            if(_affected_rows()==1){
                mysql_close();
                _location('账号激活成功', 'login.php');
            }else{
               mysql_close();
                _location('账号激活失败', 'register.php');
            }
        }
        
    }
    
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>多用户留言系统_激活</title>
<?php 
    include 'includes/title.inc.php';
?>
<script type="text/javascript"src="js/face.js"></script>
</head>
<body>
<?php 
    include 'includes/header.inc.php';
?>
<div id="active">
    <h2>激活帐户</h2>
    <p>点击以下连接 激活账号（模拟邮件系统）</p>
    <p><a href="active.php?action=OK&amp;active=<?php echo $_GET['active']?>"><?php echo 'http://'.$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]?> active.php?action=OK&amp;active=<?php echo $_GET['active']?></a></p>
</div>
<?php 

require 'includes/footer.inc.php';
?>
</body>
</html>