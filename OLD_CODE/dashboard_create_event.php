<?php /* Create-an-event feature - contains the user interface where one can input information about a new event ideally hosted bt the user */ 
error_reporting (E_ALL ^ E_NOTICE);
session_start();
?>

<table align = 'center' style = 'margin-top: 15px'>
<tr>
	<td align = 'center' valign = 'middle' style = 'padding-top: 2px'>
		<form action='' method='post'>
			<div class = 'content_header' align = 'left' valign = 'middle'> Create An Event </div>
			<table align = 'center'>
			<tr>
				<td valign = 'top' align = 'center'>
					<table style = 'width: 440px'>
					<tr style = 'height: 40px'>
						<td class = 'create_event'> Event Title: </td>
						<td align = 'right'>
							<textarea class = 'create_event' type = 'text' name='event_title' value='' /></textarea>
						</td>
					</tr>
					<tr style = 'height: 40px'>
						<td  class = 'create_event'> Description: </td>
						<td align = 'right'> <textarea class = 'create_event' type = 'text' name='event_description' value='' / style = 'height: 65px'></textarea> </td>
					</tr>
					<tr style = 'height: 40px'>
						<td class = 'create_event'> Date: </td>
						<td align = 'right'> <input class = 'create_event' type = 'date' name = 'event_date' value = '' /> </td>
					</tr>
					<tr style = 'height: 40px'>
						<td class = 'create_event'> Time: </td>
						<td align = 'right'> <input class = 'create_event' type = 'time' name = 'event_time' value = '' /> </td>
					</tr>
					<tr style = 'height: 40px'>
						<td class = 'create_event'> Location: </td>
						<td align = 'right'> <textarea class = 'create_event' type = 'text' name='event_location' value='' /></textarea> </td>
					</tr>
					</table>
				</td>
				<td style = 'width: 25px'></td>
				<td valign = 'top' align = 'center'>
					<table style = 'width: 440px'>
					<tr style = 'height: 40px'>
						<td class = 'create_event' valign = 'middle' align = 'left'> Event Logo: </td>
						<td align = 'right' valign = 'middle'>
							<div align = 'left' valign = 'middle' style = 'width: 290px; height: 33px; border: solid 1px #ccc; border-radius: 3px'>
								<?php // Upload Image Function ?>
							</div>
						</td>
					</tr>
					<tr>
						<td class = 'create_event' align = 'left' valign = 'top'> Ticket<br><font size = '2'>*Optional</font> </td>
						<td align = 'right' valign = 'middle'>
							<div valign = 'middle' style = 'width: 290px; height: 100px; border: solid 1px #ccc; border-radius: 3px'></div>
						</td>
					</tr>
					<tr valign = 'bottom'>
						<td style = 'padding-top: 45px'></td>
						<td align = 'right'>
							<button class = 'button' type = 'submit' name = 'createeventbtn' value = 'Create'> Create </button>
						</td>
					</tr>
					</table>
				</td>
			</tr>
			</table>
		</form>
	</td>
</tr>
</table>

<html>
<head>
<link rel = "stylesheet" type = "css" href = "./_css/style.css" />
</head>
</html>