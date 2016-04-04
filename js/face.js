//等待网页加载完毕再执行

 window.onload=function(){
 	var faceimg=document.getElementById('faceimg');
 	var code=document.getElementById('code');
 	
 	faceimg.onclick=function(){
 		window.open('face.php','face','width=400,height=400,top=0,left=0,scrollbars=1');
 	}
 	code.onclick=function(){
 		this.src='code.php?tm'+Math.random();
 	};	
 	//var fm=document.getElementsByTagName('form')[0];
 	//alert(fm);
 };