<?php /* Sign Up and Log In Buttons */ ?>

<div id="signup_login_options" align = "left" 
style = "width: 380px;
height: 85px; 
background-color: #FFFFFF; 
border: solid 1px #FFFFFF; 
border-radius: 5px; 
box-shadow: 0px 0px 4px 0px #86B404; 
padding-top: 2px; display:block;">

	<button 
	style = 'width: 150px; 
	height: 42px; 
	background-color: white; 
	border: solid 1px #ccc; 
	border-radius: 4px;
	 margin-top: 8px; 
	 margin-left: 35px; 
	 margin-right: 5px;'>
	<font face = 'Calibri' size = '2' color = '#1C1C1C'>New to LyfSync?</font><br>
	<font face = 'Calibri' size = '4' color = '#1C1C1C'>Sign Up</font>
	</button>

	<button onclick=open_log_in() style = 'width: 150px; height: 42px; background-color: white; border: solid 1px #ccc; border-radius: 4px; margin-top: 8px; margin-left: 5px;'>
	<font face = 'Calibri' size = '2' color = '#1C1C1C'>Already a Syncer?</font><br>
	<font face = 'Calibri' size = '4' color = '#1C1C1C'>Log In </font>
	</button>

	<button style = 'width: 150px; height: 21px; background-color: #3B5999; border: solid 1px #3b5999; border-radius: 4px; margin-top: 5px; margin-left: 195px'>
	<font face = 'Calibri' size = '2' color = 'white'>Sign in with Facebook</font>
	</button>
	
</div>

<?php /* Log In Form: Form that appears on right-hand side of Header once Log In option is chosen; button is clicked */ ?>
<div id="username_password_input" align = "left" 
style = "width: 380px; height: 85px; 
background-color: #FFFFFF; 
border: solid 1px #FFFFFF; 
border-radius: 5px; 
box-shadow: 0px 0px 4px 0px #86B404; 
padding-top: 2px; display:none;">

<?php /* These words appear whenever there is a wrong login */ ?>
<div id=loginfail1 style = "display:none">
<center><font face = "Calibri" size ="2" color = "red"><i>Incorrect Username or Password. Try Again.</i></font></center></div>
<div id=loginfail2 style = "display:none">
<center><font face = "Calibri" size ="2" color = "red"><i>Incorrect Username or Password. Try Again.</i></font></center></div>

<form method="post" action="./Lyfsync/Home.php">
	<table align = "center" style="padding-top:15px">
		<tr>
		<td align = "Center">
        <input type="text" name="User" style="font-family: Calibri; font-size: 13px; width:170px; height: 27px; background-color: #ffffff; border-radius: 4px; border:solid 1px #BFBDBD; box-shadow: 0px 0px 0 #E6E6E6 inset; padding-left: 6px" placeholder="Username"></td>
		<td>
        <input type="password" name="Pass" style="font-family: Calibri; font-size: 13px; width:170px; height: 27px; background-color: #ffffff; border-radius: 4px; border:solid 1px #BFBDBD; box-shadow: 0px 0px 0 #E6E6E6 inset; padding-left: 6px" placeholder="Password"></td>
		</tr>
		<tr>
		<td valign = "top"><a href = ".php"><font face = "Calibri" size = "2" color = "#BFBDBD"><u> Can't remember password? </u></font></a></td>
		<td align = "right"><button style = "width: 60px; height: 25px; background-color: white; border: solid 1px #ccc; border-radius: 4px; type="submit" name="Login"><font face = "Calibri" size = "2"> Log In </font></button></td>
		</tr>
	</table>
</form>
<?php 
/* When User clicks the submits the info to log in */
if ($_POST['Login']) {
	$user = $_POST['User'];
	$password = $_POST['Pass'];
	if ($user) {
		if ($password) {
			require("connect.php");
			$query = mysql_query("SELECT * FROM users WHERE username='$user'");
			$numrows = mysql_num_rows($query);
			if ($numrows == 1) {
				$row = mysql_fetch_assoc($query);
				$dbid = $row['user_id'];
				$dbuser = $row['username'];
				$dbpass = $row['password'];
				$dbactive = $row['active'];
				
				if ($password == $dbpass){
					/* if ($dbactive == 1) {
					} */
					$_SESSION['user_id'] = $dbid;
					$_SESSION['username'] = $dbuser;
					
					// "You have been logged in" then go to profile page...
				}
				else {
					// "Incorrect username or password."
				}
			}
			else {
				// Incorrect username or password."
			}
			mysql_close();
		}
		else {
			// "Incorrect username and password";
		}	
	}
	else {
		// "Incorrect username and password."
	}
}
?>
</div>