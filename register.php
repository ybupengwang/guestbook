<?php 
session_start();
/*����������������жϵ���include������ļ�*/
define('SCRIPT','register');
define('IN_TG',true);
define(SCRIPT, register);
//���빫���ļ�
require dirname(_FILE_).'/includes/common.inc.php';

//�����������ܷ�ɹ�
//��˫������ű����ǿ��Ե� ���磺$_username  ���������ͱ������{} ���磺{$_clean['username']}
//mysql_query("INSERT INTO wp_user(wp_username)VALUES('ceshiw����')");
//�ж��Ƿ��ύ������
 if($_GET['action']=='register'){
//     //��ֹ����ע�� ��վ����
    
    //������֤�ļ�
    include 'includes/register_func.php';
    //����һ������ ��������ύ�����ĺϷ�����
    $_clean=array();
    //ͨ�� Ψһ��ʶ�����Է�ֹ����ע��  Ψһ��ʶ������һ���ô����ǵ�½cookies��֤
    $_clean['uniqid']=_check_uniqid($_POST['uniqid'], $_SESSION['uniqid']);
    //active Ҳ��һ��Ψһ��ʶ����ע���û�ֻ�м����ſ���ʹ��
    $_clean['active']=_sha1_uniqid();
    $_clean['username']=_check_username($_POST['username']);
    $_clean['password']=_check_password($_POST['password'], $_POST['notpassword']);
    $_clean['question']=_check_question($_POST['question'], 4, 20);
    $_clean['answer']=_check_answer($_POST['question'],$_POST['answer'], 4, 20);
    $_clean['sex']=$_POST['sex'];
    $_clean['face']=$_POST['face'];
    $_clean['email']=_check_email($_POST['email']);
    $_clean['qq']=_check_qq($_POST['qq']);
    $_clean['url']=_check_url($_POST['url']);
    _check_yzm($_POST['yzm'],$_SESSION['code']);
    //������֮ǰ�����ж��û����Ƿ��ظ�
//     $query=_query("SELECT wp_username FROM wp_user WHERE wp_username='{$_clean['username']}'");
     
//      if(mysql_fetch_array($query)){
//         _alert_black('�Բ��𣬴��û����Ѿ���ע��');
//     }
/*��װ������*/
    if(_panduan("SELECT wp_username FROM wp_user WHERE wp_username='{$_clean['username']}' LIMIT 1")){
        _alert_black('�Բ��𣬴��û��Ѿ�ע��');
    }
    //�����û�
    mysql_query(
        "INSERT INTO wp_user( 
                             wp_uniqid,
                             wp_active,
                             wp_username,
                             wp_password,
                             wp_question,
                             wp_answer,
                             wp_sex,
                             wp_face,
                             wp_email,
                             wp_qq,
                             wp_url,
                             wp_reg_time,
                             wp_last_time,
                             wp_last_ip   
                            )
                        VALUES( 
                            '{$_clean['uniqid']}',
                            '{$_clean['active']}',
                            '{$_clean['username']}',
                            '{$_clean['password']}',
                            '{$_clean['question']}',
                            '{$_clean['answer']}',
                            '{$_clean['sex']}',
                            '{$_clean['face']}',
                            '{$_clean['email']}',
                            '{$_clean['qq']}',
                            '{$_clean['url']}',
                            NOW(),
                            NOW(),
                            '{$_SERVER["REMOTE_ADDR"]}'
                            )"
    ) or die('SQLִ��ʧ��');
    if(_affected_rows()==1){
        mysql_close();
        //��ת���������
        _location('��ϲ��ע��ɹ�', 'active.php?active='.$_clean['active']);       
    }else{
        mysql_close();
        _location('ע��ʧ��������ע��', 'register.php');
    }
    
    //print_r($_clean);
}
$_SESSION['uniqid']=$_uniqid=_sha1_uniqid();
?>

<?php 
    require 'includes/title.inc.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>���û�����ϵͳ_ע��</title>
<?php 
    include 'includes/title.inc.php';
?>
<script type="text/javascript"src="js/face.js"></script>
</head>
<body>
<?php 
    include 'includes/header.inc.php';
?>
<div id="register">
<h2>��Աע��</h2>
<form method="post"name="register"action="register.php?action=register">
<input type="hidden" name="uniqid" value="<?php echo $_uniqid ?>"/>
    <dl>
    <dt>��������д������Ϣ</dt>
    <dd>�� ��  ����<input type="text" name="username" class="text"/>(*���� ������λ)</dd>
    <dd>�������룺<input type="password" name="password" class="text"/>(*���� ������λ)</dd>
    <dd>ȷ�����룺<input type="password" name="notpassword" class="text"/>(8���� ������λ)</dd>
    <dd>������ʾ��<input type="text" name="question" class="text"/>(*���� ������λ)</dd>
    <dd>����ش�<input type="text" name="answer" class="text"/>(*���� ������λ)</dd>
    <dd>�Ա��Ա�<input type="radio" name="sex" value="��" checked="checked"/>��<input type="radio" name="sex" value="Ů" />Ů</dd>
    <dd class="face"><img src="face/m01.jpg" alt="ͷ��ѡ��" id="faceimg"></dd>
    <dd>�����ʼ�:<input type="text" name="email" class="text"/></dd>
    <dd>�ڿۿۿ�:<input type="text" name="qq" class="text"/></dd>
    <dd>��ҳ��ַ:<input type="text" name="url" class="text" value="http://"/></dd>
    <dd>����֤��:<input type="text" name="yzm" class="textyzm"/><img src="code.php" id="code"/></dd>
    <dd><input type="submit" class="submit" value="ע��"/></dd>    
    </dl>
</form>
</div>
<?php 
require 'includes/footer.inc.php';
/*wp_uniqid,
 wp_active,
 wp_username,
 wp_password,
 wp_question,
 wp_answer,
 wp_sex,
 wp_face,
 wp_email,
 wp_qq,
 wp_url,
 wp_reg_time,
 wp_last_time,
 wp_last_ip,
 
 '{$_clean['uniqid']}',
        '{$_clean['active']}',
        '{$_clean['username']}',
        '{$_clean['password']}',
        '{$_clean['question']}',
        '{$_clean['answer']}',
        '{$_clean['sex']}',
        '{$_clean['face']}',
        '{$_clean['email']}',
        '{$_clean['qq']}',
        '{$_clean['url']}',
        NOW(),
        NOW(),
        '{$_SERVER["REMOTE_ADDR"]}'*/
?>

</body>
</html>

