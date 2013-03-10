

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
$z1=$_GET["id"];
$ss=mysql_query("select * from product where pid='$z1';",$con);
if($ss){

while($ss2=mysql_fetch_array($ss))
{
$b1=$ss2["pid"];
$b2=$ss2["pnm"];
$b3=$ss2["pdes"];
$b4=$ss2["pic"];
$b5=$ss2["rate"];
echo"<img src=products//$b4 width=200 height=200 align=left>";
echo"<b>Product Name&nbsp&nbsp</b>$b2<br><br>";
echo"<b>Product Description&nbsp&nbsp</b>$b3<br><br>";
echo"<b>Product Rate&nbsp&nbsp</b>$b5<br><br>";

echo"
<br><form action=payment.php method=post>
Quantity <input type=text name=qt>
<input type=hidden value='$z1' name=id1>
<input type=submit value='Add to Cart'> 
</form>"; 


}
}
?>