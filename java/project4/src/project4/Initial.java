package project4;

public class Initial {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Animal obj1 = new Animal();//父类的引用可以指向本类的对象
		Animal obj2= new Dog(); //父类的引用指向子类的对象
		Animal obj3= new Cat();
		//Dog obj3 = new Animal() 子类的引用指向父类的对象 是错误的
		obj1.eat();  //方法引用
		obj2.eat(); //方法引用
		obj3.eat(); //子类继承父类的方法
		//obj2.yaoren(); 不能通过父类的引用调用子类独有的方法
		Dog dog = new Dog();
		Animal animal=dog;//向上转换
		if(animal instanceof Dog){
			Dog dog2 = (Dog)animal;//向下类型转换
		}else{
			System.out.println("wufa zhaunhuan cheng dog");
		}
		if(animal instanceof Cat){
			Cat cat=(Cat)animal;//在编译的时候是以Cat类型编译
		}else{
			System.out.println("wufa zhaunhuan");
		}
		
		
	}

}
