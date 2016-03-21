<?php
include("config.php"); //引入数据库连接文件
$sql = "select * from content"; //搜索数据表content
$resule = mysql_query($sql,$q);
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<table width="678" align="center">
<tr>
<td colspan="2"><h1>留言本</h1></td>
</tr>
<tr>
<td width="586"><a href="index.php">首页</a> | <a href="liuyan.php">留言</a></td>
</tr>
</table>
<p>
<?
while($row=mysql_fetch_array($resule))
{
?>
</p>
<table width="678" border="1" align="center" cellpadding="1" cellspacing="1">
<tr>
<td width="178">Name:<? echo $row[1] ?></td>
<td width="223">Email:<? echo $row[2] ?></td>
</tr>
<tr>
<td colspan="4"><? echo $row[3] ?></td>
</tr>
<tr>
</table>
<?
}
?>
</body>
</html>
