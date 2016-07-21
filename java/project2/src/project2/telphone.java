package project2;

public class telphone {
	float screen;
	float cpu;
	float mem;
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
