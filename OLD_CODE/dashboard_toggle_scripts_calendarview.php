<!-- PHP Script for Calendar View on Dashboard Functionalities - SWAP Content: Monthly View and Weekly View -->

<?php
	$contentCalendar = $_POST['contentCalendar'];
	
	if ($contentCalendar == "monthlyView") {
		include 'calendar_monthly_view.php';
	} else if ($contentCalendar == "weeklyView") {
		include 'calendar_weekly_view.php';
	}
?>