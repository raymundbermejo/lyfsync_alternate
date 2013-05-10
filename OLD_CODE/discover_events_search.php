<?php
if (isset($_POST['query'])) {
	mysql_connect("localhost","root",null);
	mysql_select_db("lyfsync_database");
	$k = mysql_real_escape_string(htmlentities($_POST['query']));
	$terms = explode(" ", $k);
	$query = "SELECT * FROM events WHERE ";
	foreach ($terms as $each) {
		$i=0;
		$i++;
		if ($i <= 1) {
			$query .= "event_keywords LIKE '%$each%' ";
		}
		else
			$query .= "OR event_keywords LIKE '%$each%' ";
	}
	$query = mysql_query($query);
	$numrows = mysql_num_rows($query);
	if ($numrows>0) {
		while ($row = mysql_fetch_assoc($query)) {
			$id = $row['id'];
			$title = $row['event_title'];
			$description = $row['event_description'];
			$date = $row['event_date'];
			$venue = $row['event_venue'];
			$keywords = $row['event_keywords'];
			$link = $row['event_link'];
			echo "	
			<a href = 'event_page.php'>
			<table class = 'event_thumbnail' align = 'center'>
				<tr>
					<td> <a class = 'event_thumbnail' href='event_page.php'>$title</a> </td>
				</tr>
				<tr>
					<td>
						<table style = 'height: 110px'>
							<td align = 'center' valign = 'middle' style = 'width: 80px; border: solid 3px #ffffff; background-color: #f0f0f0'>
								<?pgp // Event Logo ?>
							</td>
							<td valign = 'top'>
								<table>
								<tr>
									<td valign = 'top' style = 'padding-top: 5px'> <img src = '/LyfSync/_img/Right_Arrow_Small.jpg' style = 'height: 8px'> </td>
									<td class = 'event_thumbnail' valign = 'top'> <p align = 'justify'>$description</p> </td>
								</tr>
								<tr>
									<td valign = 'top' style = 'padding-top: 5px'> <img src = '/LyfSync/_img/Right_Arrow_Small.jpg' style = 'height: 8px'> </td>
									<td class = 'event_thumbnail' valign = 'top'> <p align = 'justify'>$venue</p> </td>
								</tr>
								<tr>
									<td valign = 'top' style = 'padding-top: 5px'> <img src = '/LyfSync/_img/Right_Arrow_Small.jpg' style = 'height: 8px'> </td>
									<td class = 'event_thumbnail' valign = 'top'> <p align = 'justify'>$date</p> </td>
								</tr>
								</table>
							</td>
						</table>
					</td>
				</tr>
			</table>
			</a>";
		}
	}
	else
		echo "<br><font face = 'Calibri' size = '2'>No results found for \"<b>$k</b>\".</font>";
	// disconnect
	mysql_close();	
}
?>