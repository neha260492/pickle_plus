<html>
<?php
echo"<br><br><img src=pics//1.jpg width=250 height=150>
<img src=pics//3.jpg width=600 height=150>
<img src=pics//4.jpg width=400 height=150><br><br>
<hr color=red>";
if(isset($_GET["msg1"]))
{
echo"<font color=red ><h4 align=center>You Are Sucessfully Registered</h4></font>";
}



?>
<form action=checklog.php method=post>
<table border=1 align=center >
<tr><td>UserName</td><td><input type=text name=t1></td></tr>
<tr><td>Password</td><td><input type=password name=t2></td></tr>
<tr><td colspan=2><input type=submit></td></tr>
</table>
</form >
<h4 align=center>New User ? <a href=reg.php>Click Here</h4></a>

</html>