
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
$a2=$_POST["id1"];
$a3=$_POST["qt"];
$ss=mysql_query("select pnm,pic,rate from product where pid='$a2' ;",$con);
if($ss){
while($ss2=mysql_fetch_array($ss))
{
$a4=$ss2["pnm"];
$a5=$ss2["pic"];
$a6=$ss2["rate"];
$a7=$a3*$a6;
}
$ss1=mysql_query("insert into buy (unm,pid,pnm,pic,rate,qty,amt) values('$a1','$a2','$a4','$a5','$a6','$a3','$a7')",$con);
$x1=mysql_query("Select * from buy  where pid='$a2';",$con);
if($x1){
while($x2=mysql_fetch_array($x1))
{
$t1=$x2["unm"];
$b1=$x2["pid"];
$b2=$x2["pnm"];
$b3=$x2["pic"];
$b4=$x2["rate"];
$b5=$x2["qty"];
$b6=$x2["amt"];
echo"<br><img src=products//$b3 width=100 height=100 align=left>";
echo"<b>Product Code&nbsp&nbsp</b>$b1<br>";
echo"<b>Product Name&nbsp&nbsp</b>$b2<br>";
echo"<b>Product Rate&nbsp&nbsp</b>$b4<br>";
echo"<b>Quantity&nbsp&nbsp</b>$b5<br>";
echo"<br><b>Amount:&nbsp&nbsp</b><b>$b6</b><br>";
echo"<hr color=red>";
}
}}
$s2=mysql_query("select amt from buy where unm='$a1' ;", $con);
$f=0;
if($s2){
while($s3=mysql_fetch_array($s2))
{$f+=$s3["amt"];
}}
echo"<br><b>Total Amount:&nbsp&nbsp</b><b>$f</b>";
echo"<br><br><a href=index.php>BUY MORE</a> | <a href=sold.php>MAKE PAYMENT</a>";

?>
