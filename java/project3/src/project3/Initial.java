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
		if(dog.equals(dog2)){  //类似于==
			System.out.println("xiangtong");
		}
		else {
			System.out.println("butong");
		}
		dog.age=20;
		dog.name="beibei";
		dog.eat();
		dog.method();//调用这个方法，这个值是父类的值
		System.out.println(dog);
	}
	/*java中优先创建父类对象，其次再创建子类对象*/
	/*根据输出的年龄 可以知道先执行属性的初始化，在执行构造方法*/

}
