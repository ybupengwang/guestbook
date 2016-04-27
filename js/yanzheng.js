
function length(str){
	return str.replace(/[^\x00-xff]/g,"xx").length;
}
window.onload=function(){
	var ainput=document.getElementsByTagName('input');
	var oName=ainput[1];
	var aa=document.getElementsByTagName('P');
	var name_msg=aa[0];
	var name_length=0;
	//用户名
	oName.onfocus=function(){
		name_msg.style.display="block";
		name_msg.innerHTML='(2--25个字符)';
		
	}
	oName.onkeyup=function(){
	name_length=length(this.value);
    
    }
	
	oName.onblur=function(){
		var re=/[^\w\u4e00-\u9fa5]/g;
		if(re.test(this.value)){
			name_msg.style.color="red";
			name_msg.innerHTML='还有非法字符';
		}
		else if(this.value==''){
			name_msg.style.color="red";
			name_msg.innerHTML='不能为空';
		}
		else if(name_length<2){
			name_msg.style.color="red";
			name_msg.innerHTML='不得小于2个字符';
		}
		else if(name_length>25){
			name_msg.style.color="red";
			name_msg.innerHTML='不得大于25个字符';
		}
		else{
			name_msg.style.color="red";
			name_msg.innerHTML='OK';
		}
		
	}
	
}