<?php
$user = $_POST['user'];
	$password = $_POST['pass'];
	if ($user != "") 
	{
		if ($password != "") 
		{
			require("./connect.php");
			$passwordEnc = md5(md5("katipunan".$password."lyfsync"));
			$query = mysql_query("SELECT * FROM users WHERE username='$user'");
			$numrows = mysql_num_rows($query);
			if ($numrows == 1) 
			{
				$row = mysql_fetch_assoc($query);
				$dbid = $row['user_id'];
				$dbuser = $row['username'];
				$dbpass = $row['password'];
				$dbactive = $row['active'];
				
				if ($passwordEnc == $dbpass) 
				{
					if ($dbactive == 1) 
					{
						/* Logs in by setting session info. */
						$_SESSION['user_id'] = $dbid;
						$_SESSION['username'] = $dbuser;
						header('Location:home.php');
					}
					else
						$loginText = "You must activate your account to log in";
				}
				else 
					$loginText = "Password is incorrect";
			}
			else
				$loginText = "There is no account under that name";
					
			mysql_close();
		}
		else 
			$loginText = "Please enter your password";
	}
	else 
		$loginText = "Please enter your username";
?>