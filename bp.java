import java.lang.reflect.*;
class bp
{
public static void main(String arg[])
{
try
{
Class c=Class.forName("java.lang.System");

Constructor cc[]=c.getConstructors();
for(int i=0;i<cc.length;i++)
{
System.out.println(cc[i]+"  ");
}

System.out.println("No Of Methods:");
Method cc1[]=c.getMethods();
for(int i=0;i<cc1.length;i++)
{
System.out.println(cc1[i]+"  ");
}
System.out.println("No Of Fields In System class:");
Field dd[]=c.getFields();
for(int i=0;i<dd.length;i++)
{
System.out.println(dd[i]);
}}
catch(Exception e)
{
	e.printStackTrace();
}
}}