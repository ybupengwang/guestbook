
<?php 
/*定义个常量，用来判断调用include里面的文件*/
define('SCRIPT','index');
define('IN_TG',true);
//引入公共文件
require dirname(_FILE_).'/includes/common.inc.php';
?>
<?php 
require 'includes/title.inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>多用户留言系统</title>

</head>
<body>
<?php 
include 'includes/header.inc.php';
?>
<div id="list">
<h2>帖子列表</h2>
</div>
<div id="user">
<h2>用户</h2>
</div>
<div id="pic">
<h2>图片</h2>
</div>
<?php 
require 'includes/footer.inc.php';
?>
</body>
</html>