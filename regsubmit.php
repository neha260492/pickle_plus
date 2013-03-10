<?php
$a1=$_POST["t1"];
$a2=$_POST["t2"];
$a3=$_POST["t3"];
$a4=$_POST["t4"];
$a5=$_POST["tt"];
$a6=$_POST["cc"];

$con=mysql_connect("localhost","root","");
mysql_select_db("shopdi",$con);
if(!$con)
{
die("Connection Failled:");
}
$as=mysql_query("insert into reg values('$a1','$a2','$a3','$a4','$a5','$a6')",$con);
if($as>0)
{
echo"data Inserted:";
header("Location:log.php?msg1=q1");
}
else
{
echo"data Not Inserted:";
}



?>