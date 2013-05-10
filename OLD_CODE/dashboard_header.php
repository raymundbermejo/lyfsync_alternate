<?php /* Dashboard_Header */ ?>

<div class = 'dashboard_header' align = 'left'>
	<table>
	<tr>
		<td align = 'left'>
			<div align = "left" style = 'height: 80px'>
				<a href = 'home.php'><img src = /LyfSync/_img/Lyfsync_BigText_Logo.jpg style = 'width: 150; padding-top: 5px; padding-left: 19px'></a>
			</div>
		</td>
		<td>
			<?php include 'dashboard_navigation_bar.php'; ?>
		</td>
		<td>
			<?php
			if (isset($_SESSION['user_id'])) 
				include 'logged_in_indicator.php';
			else
				// Script to redirect to a page that says to say "you havent logged in yet" redirects to the home page...
			?>
		</td>
	</tr>
	</table>
</div>

<html>
<head>
<link rel = "stylesheet" type = "css" href = "./_css/style.css" />
</head>
</html>