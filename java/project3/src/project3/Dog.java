package project3;

public class Dog extends Animal {
	public int age =20;
	public void eat(){
		System.out.println("����"+age+".���г� dongxi nengli");
	}
	public Dog(){
	super();//���д ����ŵ����๹�췽���ĵ�һ��  ������๹�췽����û����ʾ���ø���Ĺ��췽������������û���޲εĹ��췽��������뱨��	
	System.out.println("Dog��ִ����");
	}
	public void method(){
		System.out.println(super.age);
		System.out.println(age);//��������
		super.eat();
		eat();//������෽��
	}
	

}
