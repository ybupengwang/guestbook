<?php
//onclick= "_opener(this.src)"
define('SCRIPT','face');
define('IN_TG',true);
//���빫���ļ�
require dirname(_FILE_).'/includes/common.inc.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>���û�����ϵͳ_ͷ��ѡ��</title>
<?php 
include 'includes/title.inc.php';
?>
<script type="text/javascript" src="js/opener.js"></script>
</head>
<body>
<div id="face">
<h3>ѡ��ͷ��</h3>
    <dl>
    <?php foreach(range(1,9)as $i){?>
        <dd><img src="face/m0<?php echo $i?>.jpg" alt="ͷ��" onclick="_opener(this.src)"/></dd>
        <?php }?>
    </dl>
</div>

</body>
</html>