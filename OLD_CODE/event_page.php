<?php /* Settings */
error_reporting (E_ALL ^ E_NOTICE);
session_start();
if (isset($_POST['logoutbtn'])) {
	session_destroy();
	header('Location:home.php');
}
?>

<html>
<head>
<title></title>
<script type = 'text/javascript' src = '_js/homeJS.js'></script>
<link rel = "stylesheet" type = "css" href = "./_css/style.css" />
</head>
<body>
<center>
<?php include 'header.php'; ?>

	<div class = 'events_page' align = 'center' valign = 'middle'>
		<table class = 'events_page_header' align = 'center' valign = 'middle'>
			<tr>
				<td style = 'width: 1090px'> <font face = 'Calibri' size = '6' color = '#63BA33'><b>Event Title</b></font> </td>
				<td> <button class = 'sync_event'>SYNC</button>	</td>
			</tr>
		</table>
	
		<table style = 'margin-top: 15px'>
		<tr>
			<td align = 'right' valign = 'top'> <!-- COLUMN1 -->
				<div class = 'events_page_content' align = 'left' valign = 'top'>					
					<font face = 'Calibri' size = '4' color = '#2E2E2E'>Description:</font>
				</div>
				<img src = '/LyfSync/_img/Sample_Facebook_Share_Icon.png' style = 'height: 31px; margin-top: 10px'>
				<img src = '/LyfSync/_img/Sample_Twitter_Tweet_Icon.jpg' style = 'height: 30px; margin-top: 10px; margin-right: 10px'>
			</td>
			<td align = 'center' style = 'width: 355px; height: 360; border: 3px dashed #f2f2f2'>	
				<font face = 'Calibri' size = '5' color = '#ccc'>Event Logo</font>
			</td>
		</tr>
		</table>
	</div>
			
<?php include "footer.php"; ?>

 </center>
 </body>
 </html>