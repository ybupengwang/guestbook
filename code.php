<?php
session_start();
//创建随机码
for($i=0;$i<4;$i++){
    $_nmsg.=dechex(mt_rand(0, 15));

}
//保存到session里
$_SESSION['code']=$_nmsg;
$width=75;
$height=25;
//创建一张图象
$_rnd_code=4;
$_img=imagecreatetruecolor($width, $height);
//白色背景
$_white=imagecolorallocate($_img, 255, 255, 255);
//填充白色
imagefill($_img, 0, 0, $_white);
//创建一个边框
$_black=imagecolorallocate($_img, 0, 0, 0);
imagerectangle($_img, 0, 0, $width-1, $height-1, $_black);
//随机化出六个线条
for($i=0;$i<6;$i++){
    $_rnd_color=imagecolorallocate($_img, mt_rand(0,255), mt_rand(0, 255), mt_rand(0, 255));
    imageline($_img, mt_rand(0, 75), mt_rand(0, 25), mt_rand(0, 75), mt_rand(0, 25), mt_rand(0, 255));

}
//随机雪花
for($i=0;$i<100;$i++){
    $_rnd_color=imagecolorallocate($_img, mt_rand(200, 255), mt_rand(200, 255), mt_rand(200, 255));
    imagestring($_img, 1, mt_rand(1, $width), mt_rand(1, $height), "*", $_rnd_color);
}
//输出验证码
for($i=0;$i<strlen($_SESSION['code']);$i++){
    imagestring($_img, 5, $i*$width/$_rnd_code+mt_rand(0, 10),mt_rand(0, $height/2), $_SESSION['code'][$i], $_black);
    imagecolorallocate($_img, mt_rand(0, 100), mt_rand(0, 150), mt_rand(0, 200));
     
}
//输出图象
header('Content-Type:image/png');
imagepng($_img);
//销毁图象
imagedestroy($_img);
echo $_SESSION['code'];
?>