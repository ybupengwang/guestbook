
<?php 
/*����������������жϵ���include������ļ�*/
define('SCRIPT','index');
define('IN_TG',true);
//���빫���ļ�
require dirname(_FILE_).'/includes/common.inc.php';
?>
<?php 
require 'includes/title.inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>���û�����ϵͳ</title>

</head>
<body>
<?php 
include 'includes/header.inc.php';
?>
<div id="list">
<h2>�����б�</h2>
</div>
<div id="user">
<h2>�û�</h2>
</div>
<div id="pic">
<h2>ͼƬ</h2>
</div>
<?php 
require 'includes/footer.inc.php';
?>
</body>
</html>