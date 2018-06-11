/* This is the java version of the problem solution jdk version used 1.8 */

import java.util.Scanner;
public class numToword{
	
public static void main(String args[])
{
	Scanner sc = new Scanner(System.in);
	System.out.println("Enter a Number:");
	int num=sc.nextInt();
	sc.close();
	numToword obj = new numToword();
	obj.format( num );
}
	
public void format(int input){
	int var;
	String[] list ={"Zero","One","Two","Three","Four","Five","Six","Seven","Eight","Nine","Ten","Eleven","Twelve","Thirteen","Fourteen","Fifteen","Sixteen","Seventeen","Eighteen","Nineteen","Twenty","Thirty","Forty","Fifty","Sixty","Seventy","Eighty","Ninety"};

	if(input>0 && input<=1000)
	{
		if(input<=20)
		{
			System.out.print(list[input]);
		}else 
		{	
			if(input>=1000)
			{
				var=input/1000;
				System.out.print(list[var]+" thousand ");
			}
			if(input>=100 && input<1000){
				var=input/100;
				if(input%100!=0)
				  System.out.print(list[var]+" hundred and ");
				else
				  System.out.print(list[var]+" hundred ");
				var=input-100*(int)(input/100);
				if(var!=0)
				format(var);
			}
			if(input <100){
				var=18+(int)(input/10);
				System.out.print(list[var]+ " ");
				var=input%10;
				if(var!=0)
				format(var);
			}
			
		}
	}
	else
		System.out.print("Out of Range!");
};
}