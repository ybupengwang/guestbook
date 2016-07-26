package project2;

public class telphone {
	private float screen;
	private float cpu;
	private float mem;
	public void message(){
		System.out.println("调用当前对象的某个方法");
	}
	
	public float getCpu() {
		return cpu;
	}
	public void setCpu(float cpu) {
		this.cpu = cpu;
		}
	public float getMem() {
		return mem;
	}
	public void setMem(float mem) {
		this.mem = mem;
	}
	public float getScreen(){
		return screen;
	}
	public void setScreen(float newScreen){
		screen=newScreen;
		this.message();//调用当前对象的某个方法
		
	}
	public telphone(){
	System.out.print("wu can de gou zao fang fa");
	}
	public telphone(float newscreen,float newcpu,float newmem){
		if(newscreen<3.5){
			screen=3.5f;
			System.out.print("shuru zhi you wenti");
		}else{
			screen=newscreen;
		}
		screen=newscreen;
		cpu=newcpu;
		mem=newmem;	
		System.out.print("you can de gou zao fang fa");	
		
	}
}
