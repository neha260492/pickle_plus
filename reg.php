<html>
<br><br>
<img src=pics//1.jpg width=250 height=150>
<img src=pics//3.jpg width=600 height=150>
<img src=pics//4.jpg width=400 height=150><br><br>
<hr color=red>
<form action=regsubmit.php method=post>
<table border=1 width=66% align=center>
<tr><td>UserName</td><td><input type=text name=t1></td></tr>
<tr><td>Password</td><td><input type=password name=t2></td></tr>

<tr><td>EmailId</td><td><input type=text name=t3></td></tr>
<tr><td>Contact</td><td><input type=text name=t4></td></tr>

<tr><td>Address</td><td><textarea name=tt rows=5 cols=20></textarea></td></tr>
<tr><td>captcha Word</td><td>
<?php
$a=rand(1,9999);
echo "<font face=jokerman>$a</font>";
?>
</td></tr>
<tr><td>Enter Above Captcha Word</td><td><input type=text name=cc></td></tr>
<tr><td colspan=2><input type=submit></td></tr>
</table>
</form>
</html>