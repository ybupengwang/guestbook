<?php 
define('IN_TG',true);
define(SCRIPT, register);
//���빫���ļ�
require dirname(_FILE_).'/includes/common.inc.php';

?>
<?php 
    require 'includes/title.inc.php';
    //��ʼ�����
    //������ֱ�����뼤����ַ����
    if(!$_GET['active']){
        _alert_black('�Ƿ�����'); 
    }
    if(isset($_GET['active']) && $_GET['action']=='OK'){
        
        $_active=$_GET['active'];
        if(_panduan("SELECT wp_active FROM wp_user WHERE wp_active='$_active' LIMIT 1")){         
            //��wp_active����Ϊ��ֵ
            _query("UPDATE wp_user SET wp_active=NULL WHERE wp_active='$_active' LIMIT 1");
            //$result=mysql_query("UPDATE wp_user SET wp_active=NULL WHERE wp_active='$_active' LIMIT 1");
            //echo '$result';
            if(_affected_rows()==1){
                mysql_close();
                _location('�˺ż���ɹ�', 'login.php');
            }else{
               mysql_close();
                _location('�˺ż���ʧ��', 'register.php');
            }
        }
        
    }
    
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>���û�����ϵͳ_����</title>
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
    <h2>�����ʻ�</h2>
    <p>����������� �����˺ţ�ģ���ʼ�ϵͳ��</p>
    <p><a href="active.php?action=OK&amp;active=<?php echo $_GET['active']?>"><?php echo 'http://'.$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]?> active.php?action=OK&amp;active=<?php echo $_GET['active']?></a></p>
</div>
<?php 

require 'includes/footer.inc.php';
?>
</body>
</html>