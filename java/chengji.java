/*�û��Լ�����ɼ��Ĳ���
 * 1.ʹ��scanner����������ȡ�û�������
 * scanner��λ��java��util���У�ʹ���ĸ�ʱ��Ҫ����ΰ�
 * ���裺
 * 1.����java.util.scanner
 * 2.����scanner����
 * 3.���ղ������û������ֵ
 * */

package com.test;
import java.util.Scanner;
public class chengji {
	public static void main(String[] args){
		Scanner input=new Scanner(System.in);
		System.out.print("�����뿼�Գɼ�:");
		int score=input.nextInt();
		int count=0;
		System.out.println("�ӷ�ǰ�ĳɼ���"+score);
		while(score<60){
			score++;
			count++;
		}	
		System.out.println("�ӷֺ�ĳɼ���"+score);
		System.out.println("�����ˣ�"+count+"��");
	}
	
}

public class chengji {  
    public static void main(String[] args) {      
		// ����һ���������飬������ֵ
		int[] nums = new int[] { 61, 23, 4, 74, 13, 148, 20 };     
		int max = nums[0]; // �ٶ����ֵΪ�����еĵ�һ��Ԫ��
		int min = nums[0]; // �ٶ���СֵΪ�����еĵ�һ��Ԫ��
		double sum = 0;// �ۼ�ֵ
		double avg = 0;// ƽ��ֵ
        
		for (int i = 0; i < nums.length; i++) { // ѭ�����������е�Ԫ��
        // �����ǰֵ����max�����滻max��ֵ
		if(nums[i]>max){
    	 max=nums[i];   
		}        
        // �����ǰֵС��min�����滻min��ֵ
        if(nums[i]<min){
            min=nums[i];
        }             
        // �ۼ����
        sum+=nums[i];     
		}      
        // ��ƽ��ֵ
       avg=sum/7;      
		System.out.println("�����е����ֵ��" + max);
		System.out.println("�����е���Сֵ��" + min);
		System.out.println("�����е�ƽ��ֵ��" + avg);
	}
}
