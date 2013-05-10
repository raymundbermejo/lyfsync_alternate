<?php /* My Friends */ 
error_reporting (E_ALL ^ E_NOTICE);
session_start();
?>

<div align = 'center' valign = 'middle' style = 'padding-top: 19px'>
	<div class = 'content_header' align = 'left' valign = 'middle'> Friends </div>
	<table>
		<td>
			<table>
			<tr>
				<td>
					<a onClick = 'return false' onmousedown = "javascript:swapContentMyFriends('allfriends');">
						<button class = 'tab'> All Friends </button>
					</a>
					<a onClick = 'return false' onmousedown = "javascript:swapContentMyFriends('groups');">
						<button class = 'tab'> Groups </button>
					</a>
					<a onClick = 'return false' onmousedown = "javascript:swapContentMyFriends('subscriptions');">
						<button class = 'tab'> Subscriptions </button>
					</a>
				</td>
			</tr>
			<tr>
				<td> 
					<div class = 'friends' id = 'friendsDiv' align = 'center' valign = 'middle'> 
						<?php include "myfriends_allfriends.php"; ?>
					</div> 
				</td>
			</tr>
			</table>
		</td>
		<td valign = 'top' style = 'padding-top: 5px'> <div class = 'people_you_may_know' align = 'center'> People You May Know </div> </td>
	</table>
</div>

<html>
<head>
<link rel = "stylesheet" type = "css" href = "./_css/style.css" />
</head>
</html>
