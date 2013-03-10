

<?php
session_start();
$a1=$_SESSION["unm"];
echo"<h4 align=right>$a1</h4>
<img src=pics//1.jpg width=250 height=150>
<img src=pics//3.jpg width=600 height=150>
<img src=pics//4.jpg width=400 height=150>
<br><a href=index.php>Home</a> | <a href=logout.php>Logout</a>
<hr color=red>";
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("Connection Failled:");
}

mysql_select_db("shopdi",$con);
$r=mysql_query("insert into sold (unm,pid,pnm,pic,rate,qty,amt) select unm,pid,pnm,pic,rate,qty,amt from buy where unm='$a1';",$con);
$p=mysql_query("delete from buy;",$con);
echo"<h3 align=center>Payment Successful.</h3>
<h3 align=center>Thankyou for shopping.</h3>
<h3 align=center>Visit again.</h3><br>";
?>