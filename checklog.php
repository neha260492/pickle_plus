<?php
echo"<br><br><img src=pics//1.jpg width=250 height=150>
<img src=pics//3.jpg width=600 height=150>
<img src=pics//4.jpg width=400 height=150>
<br><a href=log.php>Login</a> 
<hr color=red>";
session_start();
$a1=$_POST["t1"];
$a2=$_POST["t2"];
if($a1=="admin" && $a2=="admin")
{
$_SESSION["admin"]=$a1;
header("Location:admin.php");
}
else
{
$con=mysql_connect("localhost","root","");
mysql_select_db("shopdi",$con);
if(!$con)
{
die("Connection Failled:");
}

$query="select * from reg where t1='$a1' and t2='$a2';";
$as=mysql_query($query);
if($as){
if($ad=mysql_fetch_array($as))
{
$_SESSION["unm"]=$a1;
echo"Successfully logged in";
header("Location:index.php");
}
else
{
echo"<br><br><h3 align=center>Incorrect Username or Password.</h3>
<h3 align=center>Try Again.</h3>";
}}
}//else end

?>