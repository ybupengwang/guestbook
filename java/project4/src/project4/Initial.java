package project4;

public class Initial {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Animal obj1 = new Animal();//��������ÿ���ָ����Ķ���
		Animal obj2= new Dog(); //���������ָ������Ķ���
		Animal obj3= new Cat();
		//Dog obj3 = new Animal() ���������ָ����Ķ��� �Ǵ����
		obj1.eat();  //��������
		obj2.eat(); //��������
		obj3.eat(); //����̳и���ķ���
		//obj2.yaoren(); ����ͨ����������õ���������еķ���
		Dog dog = new Dog();
		Animal animal=dog;//����ת��
		if(animal instanceof Dog){
			Dog dog2 = (Dog)animal;//��������ת��
		}else{
			System.out.println("wufa zhaunhuan cheng dog");
		}
		if(animal instanceof Cat){
			Cat cat=(Cat)animal;//�ڱ����ʱ������Cat���ͱ���
		}else{
			System.out.println("wufa zhaunhuan");
		}
		
		
	}

}
