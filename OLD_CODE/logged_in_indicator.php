<?php /* Indicator on the Header that you have Logged In:
		 Contains Display Picture Thumnail, Name of the User, Home and Dashboard Link Buttons and Drop Down Menu with Settings and Log Out Buttons */ ?> 

<div class = 'logged_in_indicator' align = 'right'>
	<form action = 'home.php' method = 'post'>
		<table class = 'logged_in_indicator' align = 'right' valign = 'middle'>
		<tr>
			<td class = 'logged_in_indicator' align = 'center' style = 'width: 40px'>
				<a href = 'dashboard.php'><img src = './_img/sample_thumbnail.jpg' style = 'height: 25px'></a>
			</td>
			<td valign = 'middle' style = 'width: 130px'>
				<a class = 'logged_in_indicator' href = 'dashboard.php'>
				<?php 
					$user = $_SESSION['username'];
					echo "<font face = 'Calibri' size = '4'>";
					echo $user;
					echo "</font>";
				?>
				</a>
			</td>
			<td class = 'logged_in_indicator' align = 'center' valign = 'middle' style = 'width: 20px; padding-left: 8px; padding-right: 8px'>
				<a href = './home.php' title = 'Home'><img src =  './_img/Home_Icon.jpg' valign = 'middle' style = 'height: 17px'</a>
			</td>
			<td class = 'logged_in_indicator' align = 'center' valign = 'middle' style = 'width: 20px; padding-left: 8px; padding-right: 8px'>
				<a href = './dashboard.php' title = 'Dashboard'><img src =  './_img/Dashboard_Icon.jpg' valign = 'middle' style = 'height: 17px'</a>
			</td>
			<td align = 'right' valign = 'middle' style = 'padding-left: 8px; padding-right: 12px'>
				<?php include "logged_in_indicator_dropdown_menu.php"; ?>
			</td>
		</tr>
		</table>
	</form>
</div>

<html>
<head>
<link rel = "stylesheet" type = "css" href = "./_css/style.css" />
</head>
</html>