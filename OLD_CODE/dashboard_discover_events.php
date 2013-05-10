<?php /* Events Discovery */ 
error_reporting (E_ALL ^ E_NOTICE);
session_start();
?>

<script type='text/javascript'>
$(document).ready(function() 
{  
function search() 
{
		var query_value = $('input#discover').val();
		$('b#search-string').html(query_value);
		if(query_value !== '')
		{
			$.ajax
			({
				type: "POST",
				url: "discover_events_search.php",
				data: { query: query_value },
				cache: false,
				success: function(html)
				{
					$("ul#results").html(html);
				}
			});
		}
		return false;    
	}

	$("input#discover").on("keyup", function(e) 
	{
		// Set Timeout
		clearTimeout($.data(this, 'timer'));

		// Set Search String
		var search_string = $(this).val();

		// Do Search
		if (search_string == '') 
		{
			$("ul#results").fadeOut();
			$('h4#results-text').fadeOut();
		}
		else
		{
			$("ul#results").fadeIn();
			$('h4#results-text').fadeIn();
			$(this).data('timer', setTimeout(search, 100));
		};
	});

});
</script>

<div align = 'center' valign = 'middle' style = 'padding-top: 20px'>
	<div class = 'content_header' align = 'left' valign = 'middle'> Search for Events </div>
	<table>
		<td valign = 'top'	>
			<table>
			<tr>
				<td>
					<input class = 'dashboard_search' type = 'text' id = 'discover' name = 'discover' size = '50' placeholder = 'Search for Events in Your Area' />
					&nbsp;
					<button class = 'search' type = 'submit' name = 'dashboard_search_button' id = 'dashboard_search_button' style = 'height: 30px'>
						<img src = '/LyfSync/_img/Sample_Search_Icon_1.png' valign = 'middle' style = 'height: 20px'>
					</button>
				</td>
				<td valign ='top' style = 'padding-top: 1px; padding-left: 10px'>
					<?php
						// connect
						// mysql_connect("localhost","root",null);
						// mysql_select_db("lyfsync_database");	
						// $selection = mysql_query("SELECT * FROM events");
						echo "<font face = 'Calibri' size = '2'>Select Event Type:</font> \n";
						echo "<select events=\"event_type\" style = 'width: 200px; height: 30px; font-family: Calibri; 
							border-radius: 3px; border:solid 1px #BFBDBD; padding-left: 3px'> \n";
						//	while ($row = mysql_fetch_assoc($selection))
						//	{
						//		$event_type = $row['event_type'];
						//		echo "<option value=$event_type>$event_type\n";
						//	}
						//		echo "</select>\n";
											
							// disconnect
						//	mysql_close();
					?>
				</td>
			</tr>
			</table>
			<div class = 'showing_results' align = 'center'> 
				<h4 class = 'showing_results' id="results-text">Showing results for: <b id="search-string"></b></h4> 
			</div>
			<div class = 'results' id='k' align = 'left'> 
				<ul id="results" align = 'center'></ul> 
			</div>
		</td>
		<td valign = 'top' style = 'width: 180px; padding-left: 5px'>
			<div class = 'recommended_events' align = 'center'> Recommended Events </div>
		</td>
	</table>
</div>

<html>
<head>
<script type = 'text/javascript' src = '_js/homeJS.js'></script>
<link rel = "stylesheet" type = "css" href = "./_css/style.css" />
</head>
</html>