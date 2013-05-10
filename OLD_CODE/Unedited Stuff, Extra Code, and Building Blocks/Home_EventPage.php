<?php /* Customized Event Page */
session_start();

/* REMEMBER !!! To finish sessions on this Page + Create The Customization functionality */
?>
<html>
<head>
<title> [Event Name] 
</title>
</head>
<script>
</script>
<body>
<center>
<?php include "Header.php"; ?>

<div 
style = "width: 1055px; 
height: 381px; 
border-radius: 2px;
margin-top: 11px; 
margin-bottom: 13px; 
margin-right: 10px; 
padding-top: 20px; 
padding-left: 20px;
padding-right: 20px; 
box-shadow: 0px 0px 5px 1px #ccc">

<?php /*  MAIN TABLE with 2 COLUMNS (COLUMN1 & COLUMN2). Each COLUMN contains a TABLE. */ ?>
<table style = 'height: 360px'>
	<td valign = 'middle'>	<!-- COLUMN1 -->
	<a href = 'Home.php'>
		<table style = 'width: 60px; height: 60px; background-color: #f2f2f2; border-radius: 3px'> <!-- TABLE inside COLUMN1 -->
		<td align = 'center'><font face = 'Calibri' size = '2' color = 'grey'>Back to Home</font></td>
		</table>
	</a>
	</td>
	td align = 'center' valign = 'top'> <!-- COLUMN2 -->
		<table style = 'width: 980px; margin-left: 10px'> <!-- TABLE inside COLUMN2 -->
		<td valign = 'top'> <!-- Part 1 of TABLE inside COLUMN2 --> 
			<table style = 'width: 595px'>
				<tr>
				<td align = 'left' valign = 'middle' style = 'width: 414px; height: 50px; padding-bottom: 5px;'>
					<table>
						<td style = 'width: 470px'>
						<b><font face = 'Calibri' size = '6' color = '#2E2E2E'>Event Name Here</font></b><br>
						<font face = 'Calibri' size = '3' color = '#2E2E2E'>Tagline Here</font>
						</td>
						<td align = 'right'><img src = '/LyfSync/Sync.jpg' style = 'height: 60px'></td>
					</table>
				</td>
				</tr>
				<tr>
				<td valign = 'top' 
				style = 'height: 230px; 
				padding-left: 10px; 
				padding-left: 10px; 
				padding-top: 10px; 
				padding-bottom: 10px;  
				border-radius: 4px; 
				border: solid 1px #E6E6E6;'>
				<font face = 'Calibri' size = '4' color = '#2E2E2E'>Description:</font>
				</td>
				</tr>
				<tr>
				<td align = 'right' valign = 'bottom' 
				style = 'height: 40px; 
				padding-top: 5px'>
				<img src = '/LyfSync/_img/Sample_Facebook_Share_Icon.png' style = 'height: 32px'>
				<img src = '/LyfSync/_img/Sample_Twitter_Tweet_Icon.jpg' style = 'height: 31px'>
				</td>
				</tr>
			</table>
		</td>
		<td align = 'center' valign = 'middle'>  <!-- Part 2 of TABLE inside COLUMN2 -->
		<img src = '/LyfSync/_img/Sample_Event_Page_Poster.jpg' style = 'height: 350'>";
		</td>
	</table>
	</td>";
</table>
</div>
<?php include "Footer.php"; ?> 

</center>
</body>
</html>