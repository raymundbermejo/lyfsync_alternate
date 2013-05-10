<?php // Event Thumbnails on Side Featured Events List on Home Page ?>

<?php
	echo "
	<a href = 'event_page.php'>
	<table class = 'event_thumbnail' align = 'left' style = 'width: 445px; height: 150px; box-shadow: inset 0px -11px 4px -11px #CCC'>
	<tr>
		<td>
			<a class = 'event_thumbnail' href='event_page.php'>$title</a>
		</td>
	</tr>
	<tr>
		<td>
			<table style = 'height: 110px'>
				<td align = 'center' valign = 'middle' style = 'width: 80px; border: solid 3px #ffffff; background-color: #f0f0f0'>
					<?php // Event Logo ?>
				</td>
				<td valign = 'top'>
					<table>
					<tr>
						<td valign = 'top' style = 'padding-top: 5px'> <img src = '/LyfSync/_img/Right_Arrow_Small.jpg' style = 'height: 8px'> </td>
						<td class = 'event_thumbnail' valign = 'top'> <p align = 'justify'>$description</p> </td>
					</tr>
					<tr>
						<td valign = 'top' style = 'padding-top: 5px'> <img src = '/LyfSync/_img/Right_Arrow_Small.jpg' style = 'height: 8px'> </td>
						<td class = 'event_thumbnail' valign = 'top'> <p align = 'justify'>$venue</p> </td>
					</tr>
					<tr>
						<td valign = 'top' style = 'padding-top: 5px'> <img src = '/LyfSync/_img/Right_Arrow_Small.jpg' style = 'height: 8px'> </td>
						<td class = 'event_thumbnail' valign = 'top'> <p align = 'justify'>$date</p> </td>
					</tr>
					</table>
				</td>
			</table>
		</td>
	</tr>
	</table>
	</a>";
?>

<html>
<head>
<link rel="stylesheet" type="css" href="./_css/style.css" />
</head>
</html>