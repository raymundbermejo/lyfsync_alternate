<?php /* Calendar */ 
error_reporting (E_ALL ^ E_NOTICE);
session_start();
?>

<div align = 'center' valign = 'middle' style = 'padding-top: 20px'>
	<div class = 'content_header' align = 'left' valign = 'middle'> Calendar
		<button class = 'calendar_sync' style = 'margin-left: 585px' title = 'Sync with Your Google Calendar'>Google Calendar</button>
		<button class = 'calendar_sync' title = 'Sync with Your Facebook Calendar'>Facebook Calendar</button>
	</div>
	<table>
		<td>
			<table>
			<tr>
				<td> 
					<a onClick = 'return false' onmousedown = "javascript:swapContentCalendar('monthlyView');">
						<button class = 'tab'> Monthly View </button> 
					</a>
					<a onClick = 'return false' onmousedown = "javascript:swapContentCalendar('weeklyView');">
						<button class = 'tab'> Weekly View </button>	
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<div class = 'calendar' id = 'calendarDiv' align = 'center' valign = 'middle'>
						<?php include "calendar_monthly_view.php"; ?>
					</div>
				</td>
				<td class = 'friendslist_main' align = 'left'> Select A Followee to Sync With:
					<div class = 'friendslist_content' align = 'left'>
						<?php include "friends_thumbnail.php"; ?><?php include "friends_thumbnail.php"; ?><?php include "friends_thumbnail.php"; ?>
						<?php include "friends_thumbnail.php"; ?><?php include "friends_thumbnail.php"; ?><?php include "friends_thumbnail.php"; ?>
						<?php include "friends_thumbnail.php"; ?><?php include "friends_thumbnail.php"; ?><?php include "friends_thumbnail.php"; ?>
						<?php include "friends_thumbnail.php"; ?><?php include "friends_thumbnail.php"; ?><?php include "friends_thumbnail.php"; ?>
						<?php include "friends_thumbnail.php"; ?><?php include "friends_thumbnail.php"; ?><?php include "friends_thumbnail.php"; ?>
					</div>
				</td>
			</tr>
			</table>
		</td>
	</table>
</div>

<html>
<head>
<link rel = "stylesheet" type = "css" href = "./_css/style.css" />
</head>
</html>