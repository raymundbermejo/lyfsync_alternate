<!-- PHP Script for MY FRIENDS PAGE on Dashboard Functionalities - SWAP Content: All Friends, Groups and Subscriptions --> 

<?php 
	$contentMyFriends = $_POST['contentMyFriends'];
	
	if ($contentMyFriends == "allfriends") {
		include 'myfriends_allfriends.php';
	} else if ($contentMyFriends == "groups") {
		include 'myfriends_groups.php';
	} else if ($contentMyFriends == "subscriptions") {
		include 'myfriends_subscriptions.php';
	} 
?>
