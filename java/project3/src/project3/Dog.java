package project3;

public class Dog extends Animal {
	public int age =20;
	public void eat(){
		System.out.println("年龄"+age+".狗有吃 dongxi nengli");
	}
	public Dog(){
	super();//如果写 必须放到子类构造方法的第一行  如果子类构造方法中没有显示调用父类的构造方法，而父类又没有无参的构造方法，则编译报错	
	System.out.println("Dog类执行了");
	}
	public void method(){
		System.out.println(super.age);
		System.out.println(age);//输出子类的
		super.eat();
		eat();//输出子类方法
	}
	

}
