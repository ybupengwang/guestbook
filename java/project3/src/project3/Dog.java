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
	@Override
	public String toString() {
		return "Dog [age=" + age + "]";
	}  //����toString
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
		if (getClass() != obj.getClass())//���Եõ�����󣬿����ж����������͡� ��Ķ����ע���Ƕ��������
			return false;
		Dog other = (Dog) obj;
		if (age != other.age)
			return false;
		return true;
	}
	
	
	

}
