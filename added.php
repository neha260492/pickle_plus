<?php
session_start();
$a1=$_SESSION["unm"];
echo"<h4 align=right>$a1</h4>
<img src=pics//1.jpg width=250 height=150>
<img src=pics//3.jpg width=600 height=150>
<img src=pics//4.jpg width=400 height=150>
<br><a href=index.php>Home</a> | <a href=logout.php>Logout</a>
<hr color=red>";
$a1=$_POST["t1"];
$a2=$_POST["t2"];
$a3=$_POST["tt"];
$a4=$_FILES["t3"]["name"];
$a44=$_FILES["t3"]["tmp_name"];
$a5=$_POST["t4"];
$gg=move_uploaded_file($a44,"products//".$a4);
if($gg)
{
echo"File Uploaded:";
}
else
{
echo"File Not Uploaded:";
}
$con=mysql_connect("localhost","root","");

if(!$con)
{
die("Connection failled:");
}
mysql_select_db("shopdi",$con);
$ss=mysql_query("insert into product (pid,pnm,pdes,pic,rate) values('$a1','$a2','$a3','$a4','$a5')",$con);
if($ss)
{
echo"data inserted:";
header("Location:admin.php");
}
else
{
echo"data Not Inserted";
}

mysql_close($con);
?>