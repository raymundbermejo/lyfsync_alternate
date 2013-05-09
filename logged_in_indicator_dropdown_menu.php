<?php /* Dropdown Menu (Settings and Log Out Buttons) on Logged In Indicator */ ?>
<table>
<tr>
	<td onmouseover = "showmenu('options')" onmouseout = "hidemenu('options')"> 
		<img src = './_img/Settings_Icon.png' valign = 'middle' style = 'height: 19px'>
			<table class = 'options_dropdown_menu' id = 'options'>
			<tr style = 'height: 22px'>
				<td class = "options_dropdown_menu" align = 'center'>
					<a href = './Settings.php'><button class = "options_dropdown_menu" type = "button"><font face = "Calibri" size = "2">Settings</font></button></a>
				</td>
			</tr>
			<tr style = 'height: 22px'>
				<td class = "options_dropdown_menu" align = 'center'>
					<button class = "options_dropdown_menu" name = "logoutbtn" type = "submit"><font face = 'Calibri' size = '2'>Log Out</font></button>
				</td>
			</tr>
			</table>
	</td>
</tr>
</table>
