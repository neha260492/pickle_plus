import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import javax.swing.tree.*;

class def extends JFrame
{
Container c;
JTree tt;
def()
{
c=getContentPane();
setLayout(null);
DefaultMutableTreeNode
a=new DefaultMutableTreeNode("A");
DefaultMutableTreeNode
a1=new DefaultMutableTreeNode("A1");
DefaultMutableTreeNode
a2=new DefaultMutableTreeNode("A2");
DefaultMutableTreeNode
a3=new DefaultMutableTreeNode("A3");
a.add(a1);
a.add(a2);
a.add(a3);
tt=new JTree(a);
tt.setBounds(10,10,300,300);
c.add(tt);
setSize(500,500);
setVisible(true);
}
public static void main(String arg[])
{
	new def();
}
}