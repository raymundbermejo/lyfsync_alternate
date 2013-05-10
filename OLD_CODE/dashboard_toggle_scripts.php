<!-- PHP Script for Main Dashboard Functionalities - Swap Content: Event Calendar, Events Creation, Events Discovery, Events Management and My Friends --> 

<?php 
	$contentVar = $_POST['contentVar'];
	
	if ($contentVar == "con1") {
		include 'dashboard_calendar.php';
	} else if ($contentVar == "con2") {
		include 'dashboard_create_event.php';
	} else if ($contentVar == "con3") {
		include 'dashboard_discover_events.php';
	} else if ($contentVar == "con4") {
		include 'dashboard_events_management.php';
	} else if ($contentVar == "con5") {
		include 'dashboard_my_friends.php';
	}
?>
