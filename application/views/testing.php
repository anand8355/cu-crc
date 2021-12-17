class Demo
{
	public static void main(String args[])
	
	{
		
		int[] ar = new int[1,2,3,4];
		int[] outputar= new int[ar.length];
		for (int i=0; i<ar.length; i++)
		{    int num=1;
			for(int j=0; j<ar.length;j++)
			{    
		         if(j==i){continue;}
				num= num*ar[j]; 
			}
			outputar[i]=num;
		}
		
		for(int i=0; i<outputar.length;i++)
			System.out.println(outputar[i]);
	}
	
	
	
}