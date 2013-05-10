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
<title>Settings</title>
<link rel = "stylesheet" type = "css" href = "./_css/style.css" />
</head>
<body>
<center>
<?php include 'header.php'; ?>

<div class = 'settings_main' align = 'center' valign = 'middle'>
	<div class = 'settings_main_header' align = 'left' valign = 'middle'>
		<font face = 'Calibri' size = '5' color = '#63BA33'><b>Settings</b></font>
	</div>
</div>

<?php include "footer.php";?>

 </center>
 </body>
 </html>