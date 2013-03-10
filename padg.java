import java.io.*;
class padg
{
public static void main(String arg[])
{
try
{
	File f=new File("d://");
	String hp[]=f.list();
	for(int i=0;i<hp.length;i++)
	{
System.out.println(hp[i]+" ");
	}
}
catch(Exception e)
{
	e.printStackTrace();
}
}
}