<?php /* Events List Feature */ ?>

<div class = 'home_side_featured_events' align = 'center' valign = 'middle'>
	<table>
	<tr>
		<td style = 'padding-bottom: 13px'>
			<?php include "search_filter_dropdown_menu.php"; ?>
		</td>
		<td>
			<form action = './Home.php' method = 'get' style = 'margin-top: 2px'>
				<input class = 'home_search' type = 'text' name = 'k' size = '50' value = '<?php echo $_GET['k']; ?>' placeholder = 'Search for Events in Your Area'>
				<button class = 'search' type='submit' value='Search' / style = 'height: 30px'>
					<img src = '/LyfSync/_img/Sample_Search_Icon_1.png' valign = 'middle' style = 'height: 20px'>
				</button>
			</form>
		</td>
	</tr>
	</table>
	<div align = 'center' style = "width: 455px; height: 415px; overflow: auto">
	<?php
		$k = $_GET['k'];
		$terms = explode(" ", $k);
		$query = "SELECT * FROM events WHERE ";
		foreach ($terms as $each) 
		{
			$i=0;
			$i++;
			if ($i <= 1) 
				$query .= "event_keywords LIKE '%$each%' ";
			else
				$query .= "OR event_keywords LIKE '%$each%' ";
		}
		
		// Connect
		mysql_connect("localhost","root",null);
		mysql_select_db("lyfsync_database");
	
		$query = mysql_query($query);
		$numrows = mysql_num_rows($query);
		if ($numrows>0) 
		{
			while ($row = mysql_fetch_assoc($query)) 
			{
				$id = $row['id'];
				$title = $row['event_title'];
				$description = $row['event_description'];
				$date = $row['event_date'];
				$venue = $row['event_venue'];
				$keywords = $row['event_keywords'];
				$link = $row['event_link'];
					include "home_side_featured_event_thumbnail.php";
			}
		}
		else
			echo "<br><font face = 'Calibri' size = '2'>No results found for \"<b>$k</b>\".</font>";
		
		// Disconnect
		mysql_close();
	?>
	</div>
</div>

<html>
<head>
<link rel="stylesheet" type="css" href="./_css/style.css" />
<script type = "text/javascript" src = "./_js/homeJS.js"></script>
</head>
</html>