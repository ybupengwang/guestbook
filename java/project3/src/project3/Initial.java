package project3;

public class Initial {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Animal animal=new Animal();
		System.out.println("animal age:"+animal.age);
		Dog dog = new Dog();
		dog.age=15;
		Dog dog2 = new Dog();
		dog2.age=15;
		if(dog.equals(dog2)){  //������==
			System.out.println("xiangtong");
		}
		else {
			System.out.println("butong");
		}
		dog.age=20;
		dog.name="beibei";
		dog.eat();
		dog.method();//����������������ֵ�Ǹ����ֵ
		System.out.println(dog);
	}
	/*java�����ȴ��������������ٴ����������*/
	/*������������� ����֪����ִ�����Եĳ�ʼ������ִ�й��췽��*/

}
