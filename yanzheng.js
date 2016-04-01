// JavaScript Document
//表单验证
window.onload=function(){
var fm=document.getElementsByTagName('form')[0];
fm.onsubmit=function(){
		if(fm.name.value.length<2||fm.name.value.length>14){
			alert('用户名不得小于2位或者大于14位');
			fm.name.value='';//清空
			fm.name.focus();//将光标指向该字段
			return false;
			}
				
		if(!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.				            test(fm.email.value)){
			alert('邮件格式不正确');
			fm.email.value='';
			fm.email.focus();
			return false;
			}
		if(fm.content.value.length<20){
			alert('留言字数必须大于20字');
			//fm.content.value='';//清空
			fm.content.focus();//将光标指向该字段
			return false;
			}			
		return ture;
	};
	
};