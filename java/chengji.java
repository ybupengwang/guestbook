/*用户自己输入成绩的步骤
 * 1.使用scanner工具类来获取用户的输入
 * scanner类位于java。util包中，使用哪个时需要导入次包
 * 步骤：
 * 1.导入java.util.scanner
 * 2.创建scanner对象
 * 3.接收并保存用户输入的值
 * */

package com.test;
import java.util.Scanner;
public class chengji {
	public static void main(String[] args){
		Scanner input=new Scanner(System.in);
		System.out.print("请输入考试成绩:");
		int score=input.nextInt();
		int count=0;
		System.out.println("加分前的成绩："+score);
		while(score<60){
			score++;
			count++;
		}	
		System.out.println("加分后的成绩："+score);
		System.out.println("共加了："+count+"次");
	}
	
}

public class chengji {  
    public static void main(String[] args) {      
		// 定义一个整型数组，并赋初值
		int[] nums = new int[] { 61, 23, 4, 74, 13, 148, 20 };     
		int max = nums[0]; // 假定最大值为数组中的第一个元素
		int min = nums[0]; // 假定最小值为数组中的第一个元素
		double sum = 0;// 累加值
		double avg = 0;// 平均值
        
		for (int i = 0; i < nums.length; i++) { // 循环遍历数组中的元素
        // 如果当前值大于max，则替换max的值
		if(nums[i]>max){
    	 max=nums[i];   
		}        
        // 如果当前值小于min，则替换min的值
        if(nums[i]<min){
            min=nums[i];
        }             
        // 累加求和
        sum+=nums[i];     
		}      
        // 求平均值
       avg=sum/7;      
		System.out.println("数组中的最大值：" + max);
		System.out.println("数组中的最小值：" + min);
		System.out.println("数组中的平均值：" + avg);
	}
}
