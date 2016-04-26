/**
 * 
 */
 window.onload=function(){
	var ainput=document.getElementsByTagName("input");
	var username=ainput[0];
	var password=ainput[1];
	var notpassword=ainput[2];
	var question=ainput[3];
	var answer=ainput[4];
	var aP=document.getElementsByTagName('a');	
	var username_msg=aP[0];
	var password_msg=aP[1];
	var notpassword_msg=aP[2];
		
}

	username.onfocus=function(){
		document.getElementById(msg).style.display="block";
		username_msg.style.display="block";
		username_msg.innerHTML='2-25个字符111。'
		}
	username.onkeyup=function(){
		
	}
	username.onblur=function(){
	
	}
 