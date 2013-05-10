<?php 
$getuser = $_POST['user'];
	$getemail = $_POST['email'];
	$getpass = $_POST['pass'];
	$getretypepass = $_POST['retypepass'];
	
	/* Checks fields if any are null and writes corresponding error messages */
	if ($getuser) 
	{
		if ($getemail) 
		{
			if ($getpass) 
			{
				if ($getretypepass) 
				{
					/* After get all fields are non-null, check if password field matches retype password field */
					if ($getpass === $getretypepass) 
					{
						/* Checks if email address is a valid email address by structure */
						if ( (strlen($getemail)>=7) && (strstr($getemail, "@")) && (strstr($getemail, ".")) ) 
						{
							/* Connects to the database and checks if there are already existing users with the same username and email address*/
							require("./connect.php");
							$query = mysql_query("SELECT * FROM users WHERE username='$getuser'");
							$numrows = mysql_num_rows($query);
							if ($numrows == 0) 
							{
								$query = mysql_query("SELECT * FROM users WHERE email='$getemail'");
								$numrows = mysql_num_rows($query);
								if ($numrows == 0) 
								{
									/* Adds user the the database by inserting input and additional/edited values like an encrypted password, date, and activation code */
									/* Password with 'salting' using md5 */
									$password = md5(md5("katipunan".$getpass."lyfsync"));
									$date = date("F d, Y");
									$code = md5(rand());
									
									mysql_query("INSERT INTO users VALUES (
										'',
										'$getuser',
										'$password',
										'$getemail',
										'',
										'',
										'',
										'Normal',
										'',
										'',
										
										
										'$code','$date'
									)");
									
									/* Checks if user was added to the database */
									$query = mysql_query("SELECT * FROM users WHERE username='$getuser'");
									$numrows = mysql_num_rows($query);
									/* If user addition was successful - send activation email to the user */
									if ($numrows == 1) 
									{
										$site = "http://localhost/Lyfsync";
										$webmaster = "red_lyfsync <admin@lyfsync.com>";
										$headers = "From: $webmaster";
										$subject = "Lyfsync: Activate Your Account";
										$message = "Thanks for registering. Click the link below to activate your account. \n";
										$message .= "$site/activate.php?user=$getuser&code=$code\n";
										$message .= "You must activate your account to log in.";
										
										if ( mail($getemail, $subject, $message, $headers) ) 
										{
											$errormsg = "You have been registered...You must activate your acccount from the activation link sent to 
											<b>$getemail</b>
											";
											$getuser="";
											$getemail="";
										}
										else 
											$errormsg = "Error has occured. Your activation email was not sent.";
									}
									else
										$errormsg = "Error has occured. Your account was not created.";
								}
								else
									$errormsg = "There is already a user with that email address.";
							}
							else
								$errormsg = "There is already a user with that username.";
								
							mysql_close();
						}
						else 
							$errormsg = "You must enter a valid email address to register.";
					}
					else 
						$errormsg = "Your passwords did not match.";
				}
				else 
					$errormsg = "You must retype your password to register.";
			}	
			else 
				$errormsg = "You must enter your password to register.";
		}
		else
			$errormsg = "You must enter your email to register.";
	}
	else
		$errormsg = "You must enter your username to register.";
?>