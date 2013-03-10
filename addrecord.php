<?php
echo"<h4 align=right>admin</h4>
<img src=pics//1.jpg width=250 height=150>
<img src=pics//3.jpg width=600 height=150>
<img src=pics//4.jpg width=400 height=150>
<br><a href=addrecord.php>Add Record</a> | <a href=view.php>Delete Record</a> | <a href=logout.php>Logout</a>
<hr color=red>";
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("Connection failled:");
}
$nn=mysql_select_db("shopdi",$con);
$az1=mysql_query("select * from product",$con);
$count=0;
while($az2=mysql_fetch_array($az1))
{
$count++;
}
$count++;
echo"<form action=added.php method=post enctype=multipart/form-data><table border=1 align=center>";
echo"<tr><td>Product Code</td><td><input type=text name=t1 value=pp$count></td></tr>";
echo"<tr><td>Product Name</td><td><input type=text name=t2></td></tr>";
echo"<tr><td>Product Description</td><td><textarea name=tt rows=4 cols=20></textarea></td></tr>";
echo"<tr><td>Pic</td><td><input type=file name=t3></td></tr>";

echo"<tr><td>Rate</td><td><input type=text name=t4></td></tr>";
echo"<tr><td colspan=2><input type=submit></td></tr>";
echo"</table></form>";
?>