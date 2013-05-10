<?php /* Profile after Log in */ 
error_reporting (E_ALL ^ E_NOTICE);
session_start();
?>

<html>
<head>
<title>Welcome to Lyfsync!</title>
<script type = 'text/javascript' src = '_js/jquery-1.9.1.min.js'></script>
<script type = 'text/javascript' src = '_js/homeJS.js'></script>
<link rel = "stylesheet" type = "css" href = "./_css/style.css" /> 
</head>
<body>
<center>
<?php include 'dashboard_header.php'; ?>

<div class = 'dashboard' align = 'center' valign = 'middle'>
	<table>
	<tr>
		<td valign = 'top' style = 'padding-right: 1px'>
			<?php /* Profile Banner + Short Descriptions */	?>
			<table class = 'profile_banner_main' align = 'center'>
				<td align = 'left' style = 'width: 60px; padding-left:5px'>	<img src = '/LyfSync/_img/sample_thumbnail.jpg' style = 'height: 55px'>	</td>
				<td align = 'left' valign = 'top' style = 'padding-top: 5px'>
					<div align = 'left' style = 'height: 60px'>
						<font face = 'Calibri' size = '4' color = '#1C1C1C'><b><?php echo $_SESSION['username']; ?></b></font>
						<br>
						<font face = 'Calibri' size = '2' color = '#333333'><?php echo 'Short Description 1'; ?><br><?php echo 'Short Description 2'; ?></font>
					</div>
				</td>
				<td valign = 'top'>
					<div class = 'profile_banner_content' align = 'right' valign = 'top'> Edit Profile </div>
				</td>
			</table>
					
			<?php /* News Feed of User - contains updates and notifications on followed events, organizers, and major interests within your area */	?>
			<table class = 'newsfeed'>
				<td align = 'center' valign = 'middle'>
					<font face = 'Calibri' size = '5' color = '#e6e6e6'><?php echo 'Newsfeed' ?></font>
				</td>
			</table>
		</td>
		<td valign = 'middle'>
		<!-- Dashboard features here: calendar, creation, discovery, management -->
			<div id = 'myDiv' align = 'center' valign = 'middle'> 
				<?php include 'dashboard_calendar.php'; ?>
			</div>
		</td>
	</tr>
</table>
</div>

<?php include 'Footer.php'; ?>
</center>
</body>
</html>