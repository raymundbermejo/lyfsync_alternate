/* Lyfsync javascript functions */

// Log In Function
	function open_log_in() 
	{
		var slo = document.getElementById('signup_login_options');
		var upi = document.getElementById('username_password_input');
		slo.style.display = 'none';
		upi.style.display = 'block';
	}
	
// Sign Up Function
	function open_sign_up() 
	{
		window.location = '/Lyfsync/signup.php';
	}
	
// Drop Down Menu Functions
	function showmenu(elmnt)
	{
		document.getElementById(elmnt).style.visibility="visible";
	}
	function hidemenu(elmnt)
	{
		document.getElementById(elmnt).style.visibility="hidden";
	}

// Instant Search Without Click
$('#go').keyup(function() {
	var search_query = $(this).val();
	var url = 'dashboard_discover_events.php';
	$.post(url, 
		{search_query : search_query}, 
			function(search_query) {
			$('#k').html(search_query);
	});
});
	
/* Dashboard Swap Content Function (Events Calendar, Events Creation, Events Discovery, Events Management & My Friends)
	function swapContent(cv) 
	{
		$("#myDiv").html("<img src='./_img/ajax-loader.gif' style = 'margin-top: 220px'>").show();
		var url = 'dashboard_toggle_scripts.php';
		$.post(url, {contentVar: cv} ,function(data) {
		   $("#myDiv").html(data).show();
		});
	}
	
	function swapContentCalendar(cv) 
	{
		$("#calendarDiv").html("<img src='./_img/ajax-loader.gif' style = 'margin-top: 220px'>").show();
		var url = 'dashboard_toggle_scripts_calendarview.php';
		$.post(url, {contentCalendar: cv} ,function(data) {
		   $("#calendarDiv").html(data).show();
		});
	}
	
	function swapContentMyFriends(cv) 
	{
		$("#friendsDiv").html("<img src='./_img/ajax-loader.gif' style = 'margin-top: 220px'>").show();
		var url = 'dashboard_toggle_scripts_myfriends.php';
		$.post(url, {contentMyFriends: cv} ,function(data) {
		   $("#friendsDiv").html(data).show();
		});
	}	
*/
	
