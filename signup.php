<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<html>
<head>
<title> LyfSync - Sign Up Page </title>
<script src = "_js/homeJS.js"></script>
<link rel = "stylesheet" type = "css" href = "./_css/style.css" />
</head>
<body>
<center>
<?php 
include 'Header.php';
/* When 'Register Button is pressed */
if ( $_POST['registerbtn']) 
{ include 'signup_logic.php' }
?>

<div class = 'signup' align = 'center' valign = 'middle'>
	<form action = './Sign_Up_Page.php' method = 'post'>
		<table style = 'width: 380'>
			<tr>
				<td align = 'left' valign = 'middle' style = 'height: 55px; border-bottom: solid 1px #E6E6E6'>
					<font face = 'Calibri' size = '6' color = '#63BA33'><b>Sign Up</b></font>
				</td>
			</tr>
			<tr>
				<td align = 'center' valign = 'bottom' style = 'height: 30px'>
					<font face = 'Calibri' size = '2' color = 'red'><i><?php echo $errormsg; ?></i></font>
				</td>
			</tr>
		</table>

		<table align = 'center' style = 'width: 380px'>
			<tr>
				<td class = 'signup' style = 'height: 40px'> Username: </td>
				<td align = 'right'> <input class = 'signup' type = 'text' name = 'user' value='' /> </td>
			</tr>
			<tr>
				<td class = 'signup' style = 'height: 40px'> Email: </td>
				<td align = 'right'> <input class = 'signup' type = 'text' name = 'email' value='' /> </td>
			</tr>
			<tr>
				<td class = 'signup' style = 'height: 40px'> Password: </td>
				<td align = 'right'> <input class = 'signup' type = 'password' name = 'pass' value = '' /> </td>
			</tr>
			<tr>
				<td class = 'signup' style = 'height: 40px'> Re-type Password: </td>
				<td align = 'right'> <input class = 'signup' type = 'password' name = 'retypepass' value='' /> </td>
			</tr>
			<tr>
				<td style = 'height: 50px'></td>
				<td align = 'right'> <button class = 'button' type = 'submit' name = 'registerbtn' value = 'Register'> Register </button>
				</td>
			</tr>
		</table>
	</form>
</div>
<?php include "Footer.php";?>
</center>
</body>
</html>
