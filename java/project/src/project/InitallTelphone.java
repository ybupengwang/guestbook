package project;

public class InitallTelphone {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Telphone phone=new Telphone();
		phone.sendmessage();
		//给实例变量赋值
		phone.screen=5.0f;
		phone.cpu=1.4f;
		phone.mem=2.0f;
		//调用对象的方法
		phone.sendmessage();
		phone.call();
	}

}
