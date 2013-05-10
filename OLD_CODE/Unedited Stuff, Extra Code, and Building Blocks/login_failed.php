<?php // Log In Failed, Try Again Form ?>
<?php
session_unset();

?>
<html>
<head>
<title> Log In </title>
</head>
<body>
<div align = "left" style = "width: 380px; height: 85px; background-color: #FFFFFF; border: solid 1px #FFFFFF; border-radius: 5px; box-shadow: 0px 0px 4px 0px #86B404; padding-top: 2px">
<center><font face = "Calibri" size ="2" color = "red"><i>Incorrect Username or Password. Try Again.</i></font></center>
<form method="post" action="Home_Online.php">
	<table align = "center">
		<tr>
		<td align = "Center"><input type="text" name="User" style="font-family: Calibri; font-size: 13px; width:170px; height: 27px; background-color: #ffffff; border-radius: 4px; border:solid 1px #BFBDBD; box-shadow: 0px 0px 0 #E6E6E6 inset; padding-left: 6px" placeholder="Username"></td>
		<td><input type="password" name="Pass" style="font-family: Calibri; font-size: 13px; width:170px; height: 27px; background-color: #ffffff; border-radius: 4px; border:solid 1px #BFBDBD; box-shadow: 0px 0px 0 #E6E6E6 inset; padding-left: 6px" placeholder="Password"</td>
		</tr>
		<tr>
		<td valign = "top"><a href = ".php"><font face = "Calibri" size = "2" color = "#BFBDBD"><u> Can't remember password? </u></font></a></td>
		<td align = "right"><button style = "width: 60px; height: 25px; background-color: white; border: solid 1px #ccc; border-radius: 4px; type="submit" value="LogIn"><font face = "Calibri" size = "2"> Log In </font></button></td>
		</tr>
	</table>
</form>
</div>
</body>
</html>