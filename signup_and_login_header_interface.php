<?php /* Sign Up and Log In Buttons */ ?>
	
<div class = 'signup_login' id = 'signup_login_options' align = 'left' valign = 'top'>
	<table align = 'left' valign = 'top'>
		<tr align = 'center' valign = 'top'>
			<td class = 'signup_login' align = 'center'> New to LyfSync? </td>
			<td class = 'signup_login' align = 'center'> Already a Syncer? </td>
		</tr>
		<tr align = 'center'>
			<td align = 'center'> <button class = 'signup_login' onclick = open_sign_up()> Sign Up </button> </td>
			<td align = 'center'> <button class = 'signup_login' onclick = open_log_in()> Log In </button> </td>
		</tr>
	</table>
</div>

<?php 
/* When User clicks the submits the info to log in */
if ((isset($_POST['loginbtn']))) 
{include 'login_logic.php';}
?>
	
<div class = 'signup_login' id = 'username_password_input' align = 'center' style = 'display: none'>
	<font id = 'login_text' face = "Calibri" size = '2' color = 'red'>
	<i>
	<?php 
		$loginText = "";
		echo $loginText;
	?>
	</i>
	</font>
	<form action = 'index.php' method = 'post'>
		<table align = 'center'>
		<tr>
			<td> <input class = 'login' type = 'text' name = 'user' placeholder = 'Username'> </td>
			<td> <input class = 'login' type = 'password' name = 'pass' placeholder = 'Password'> </td>
		</tr>
		<tr>
			<td valign = 'top'> <a href = '#'><font face = 'Calibri' size = '2' color = '#BFBDBD'><u>Can't remember password?</u></font></a> </td>
			<td align = 'right'> <button class = 'login' type = 'submit' name = 'loginbtn'> Log In </button> </td>
		</tr>
		</table>
	</form>
</div>

