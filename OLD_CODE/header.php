<?php /* Home_Header */ ?>

<div class = 'home_header' align = 'left'>
	<table>
	<tr>
		<td align = 'left'>
			<div align = 'left' style = 'height: 80px; width: 450px'>
				<a href = 'home.php'><img src = /LyfSync/_img/Lyfsync_BigText_Logo.jpg style = 'width: 150px; padding-top: 5px; padding-left: 80px'></a>
			</div>
		</td>
		<td>
			<?php include 'home_navigation_bar.php'; ?>
		</td>
		<td>
			<?php
				if (isset($_SESSION['user_id'])) 
					include 'logged_in_indicator.php';
				else
					include 'signup_and_login_header_interface.php';
			?>
		</td>
	</tr>
	</table>
</div>

