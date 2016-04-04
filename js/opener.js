
window.onload=function(){	
	//父窗口的文档的
	var img=document.getElementsByTagName('img');	
	for(i=0;i<img.length;i++){
		img[i].onclick=function(){
			_opener(this.src);
		};
	}
};

function _opener(src){
	var faceimg=opener.document.getElementById('faceimg');
	//alert(faceimg);
	faceimg.src=src;
	alert('ok');
	
}