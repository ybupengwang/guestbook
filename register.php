<?php 
session_start();
/*定义个常量，用来判断调用include里面的文件*/
define('SCRIPT','register');
define('IN_TG',true);
define(SCRIPT, register);
//引入公共文件
require dirname(_FILE_).'/includes/common.inc.php';

//测试新增，能否成功
//在双引号里放变量是可以的 例如：$_username  如果放数组就必须加上{} 例如：{$_clean['username']}
//mysql_query("INSERT INTO wp_user(wp_username)VALUES('ceshiw王朋')");
//判断是否提交了数据
 if($_GET['action']=='register'){
//     //防止恶意注册 跨站攻击
    
    //引入验证文件
    include 'includes/register_func.php';
    //创建一个数组 用来存放提交过来的合法数据
    $_clean=array();
    //通过 唯一标识符可以防止恶意注册  唯一标识符另外一个用处就是登陆cookies验证
    $_clean['uniqid']=_check_uniqid($_POST['uniqid'], $_SESSION['uniqid']);
    //active 也是一个唯一标识符，注册用户只有激活处理才可以使用
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
    //在新增之前必须判断用户名是否重复
//     $query=_query("SELECT wp_username FROM wp_user WHERE wp_username='{$_clean['username']}'");
     
//      if(mysql_fetch_array($query)){
//         _alert_black('对不起，此用户名已经被注册');
//     }
/*包装成如下*/
    if(_panduan("SELECT wp_username FROM wp_user WHERE wp_username='{$_clean['username']}' LIMIT 1")){
        _alert_black('对不起，此用户已经注册');
    }
    //新增用户
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
    ) or die('SQL执行失败');
    if(_affected_rows()==1){
        mysql_close();
        //跳转到激活界面
        _location('恭喜您注册成功', 'active.php?active='.$_clean['active']);       
    }else{
        mysql_close();
        _location('注册失败请重新注册', 'register.php');
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
<title>多用户留言系统_注册</title>
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
<h2>会员注册</h2>
<form method="post"name="register"action="register.php?action=register">
<input type="hidden" name="uniqid" value="<?php echo $_uniqid ?>"/>
    <dl>
    <dt>请认真填写以下信息</dt>
    <dd>用 户  名：<input type="text" name="username" class="text"/>(*必填 至少两位)</dd>
    <dd>密码密码：<input type="password" name="password" class="text"/>(*必填 至少六位)</dd>
    <dd>确认密码：<input type="password" name="notpassword" class="text"/>(8必填 至少六位)</dd>
    <dd>密码提示：<input type="text" name="question" class="text"/>(*必填 至少两位)</dd>
    <dd>密码回答：<input type="text" name="answer" class="text"/>(*必填 至少两位)</dd>
    <dd>性别性别：<input type="radio" name="sex" value="男" checked="checked"/>男<input type="radio" name="sex" value="女" />女</dd>
    <dd class="face"><img src="face/m01.jpg" alt="头像选择" id="faceimg"></dd>
    <dd>电子邮件:<input type="text" name="email" class="text"/></dd>
    <dd>口扣扣扣:<input type="text" name="qq" class="text"/></dd>
    <dd>主页地址:<input type="text" name="url" class="text" value="http://"/></dd>
    <dd>验验证码:<input type="text" name="yzm" class="textyzm"/><img src="code.php" id="code"/></dd>
    <dd><input type="submit" class="submit" value="注册"/></dd>    
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

