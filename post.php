<?php
header("content-Type: text/html; charset=utf-8");
include("config.php");
$name= $_POST['name'];
$email= $_POST['email'];
$patch = $_POST['content'];
$content = str_replace("
","<br />",$patch);
$sql = "insert into content (name,email,content) values ('$name','$email','$content')";
mysql_query($sql);
echo "<script>alert('提交成功！返回首页。');location.href='index.php';</script>";
?>
