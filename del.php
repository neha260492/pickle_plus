<?php
echo"<h4 align=right>admin</h4>
<img src=pics//1.jpg width=250 height=150>
<img src=pics//3.jpg width=600 height=150>
<img src=pics//4.jpg width=400 height=150>
<br><a href=addrecord.php>Add Record</a> | <a href=view.php>Delete Record</a> | <a href=logout.php>Logout</a>
<hr color=red>";
$p1=$_GET["id"];
$con=mysql_connect("localhost","root","");

if(!$con)
{
die("Connection failled:");
}
mysql_select_db("shopdi",$con);
$query="delete from product where pid='$p1';";

$ss=mysql_query($query);
if($ss)
{
echo"data deleted:";
header("Location:admin.php");
}
else
{
echo"data Not deleted:";
}


?>