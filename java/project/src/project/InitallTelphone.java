package project;

public class InitallTelphone {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Telphone phone=new Telphone();
		phone.sendmessage();
		//��ʵ��������ֵ
		phone.screen=5.0f;
		phone.cpu=1.4f;
		phone.mem=2.0f;
		//���ö���ķ���
		phone.sendmessage();
		phone.call();
	}

}
