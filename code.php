<?php
session_start();
//���������
for($i=0;$i<4;$i++){
    $_nmsg.=dechex(mt_rand(0, 15));

}
//���浽session��
$_SESSION['code']=$_nmsg;
$width=75;
$height=25;
//����һ��ͼ��
$_rnd_code=4;
$_img=imagecreatetruecolor($width, $height);
//��ɫ����
$_white=imagecolorallocate($_img, 255, 255, 255);
//����ɫ
imagefill($_img, 0, 0, $_white);
//����һ���߿�
$_black=imagecolorallocate($_img, 0, 0, 0);
imagerectangle($_img, 0, 0, $width-1, $height-1, $_black);
//���������������
for($i=0;$i<6;$i++){
    $_rnd_color=imagecolorallocate($_img, mt_rand(0,255), mt_rand(0, 255), mt_rand(0, 255));
    imageline($_img, mt_rand(0, 75), mt_rand(0, 25), mt_rand(0, 75), mt_rand(0, 25), mt_rand(0, 255));

}
//���ѩ��
for($i=0;$i<100;$i++){
    $_rnd_color=imagecolorallocate($_img, mt_rand(200, 255), mt_rand(200, 255), mt_rand(200, 255));
    imagestring($_img, 1, mt_rand(1, $width), mt_rand(1, $height), "*", $_rnd_color);
}
//�����֤��
for($i=0;$i<strlen($_SESSION['code']);$i++){
    imagestring($_img, 5, $i*$width/$_rnd_code+mt_rand(0, 10),mt_rand(0, $height/2), $_SESSION['code'][$i], $_black);
    imagecolorallocate($_img, mt_rand(0, 100), mt_rand(0, 150), mt_rand(0, 200));
     
}
//���ͼ��
header('Content-Type:image/png');
imagepng($_img);
//����ͼ��
imagedestroy($_img);
echo $_SESSION['code'];
?>