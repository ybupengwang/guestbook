<?php 
define('IN_TG',true);
define(SCRIPT, login);
//���빫���ļ�
require dirname(_FILE_).'/includes/common.inc.php';

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>���û�����ϵͳ_��½</title>
<?php 
    include 'includes/title.inc.php';
?>
<script type="text/javascript"src="js/code.js"></script>
<script type="text/javascript"src="js/login.js"></script>
</head>
<body>
<?php 
    include 'includes/header.inc.php';
?>
<div id="login">
    <h2>��½</h2>
    <form method="post"name="login"action="login.php?action=login">

    <dl>
    <dt> </dt>
    <dd>�� ��  ����<input type="text" name="username" class="text"/></dd>
    <dd>�������룺<input type="password" name="password" class="text"/></dd>    
    <dd>��֤��<input type="text" name="yzm" class="textyzm"/><img src="code.php" id="code"/></dd>
    <dd><input type="button" class="button" value="��½"/><input type="button" id="location" class="button location" value="ע��"/></dd>
    </dl>
    </form>
    
</div>
<?php 

require 'includes/footer.inc.php';
?>
</body>
</html>