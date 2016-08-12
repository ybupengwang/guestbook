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
	@Override
	public String toString() {
		return "Dog [age=" + age + "]";
	}  //重新toString
	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + age;
		return result;
	}
	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())//可以得到类对象，可以判断类对象的类型。 类的对象关注的是对象的属性
			return false;
		Dog other = (Dog) obj;
		if (age != other.age)
			return false;
		return true;
	}
	
	
	

}
