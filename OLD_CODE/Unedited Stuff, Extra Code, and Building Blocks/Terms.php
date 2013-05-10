<?php //Terms. ?>
<div style = "width: 1055px; height: 381px; border-radius: 2px; margin-top: 11px; margin-bottom: 13px; margin-right: 10px; padding-top: 20px; padding-left: 20px; padding-right: 20px; box-shadow: 0px 0px 5px 1px #ccc">
<?php
	echo "<table style = 'height: 300px'>"; // MAIN TABLE with 2 COLUMNS (COLUMN1 & COLUMN2). Each COLUMN contains a TABLE.
		echo "<td valign = 'middle'>"; // COLUMN1
			echo "<a href = 'ProfilePage.php'>";
			echo "<table style = 'width: 60px; height: 60px; background-color: #f2f2f2; border-radius: 3px'>"; // TABLE inside COLUMN1
				echo "<td align = 'center'><font face = 'Calibri' size = '2' color = 'grey'>Back to Profile</font></td>";
			echo "</table>";
			echo "</a>";
		echo "</td>";
		echo "<td align = 'center' valign = 'top'>"; // COLUMN2
			echo "<table style = 'width: 970px; margin-left: 10px'>"; // TABLE inside COLUMN2
				echo "<tr>"; // ROW 1 of TABLE inside COLUMN2
					echo "<td align = 'left' valign = 'middle' style = 'height: 50px; border-top: solid 1px #E6E6E6; border-bottom: solid 1px #E6E6E6'>";
					echo "<b><font face = 'Calibri' size = '5' color = '#63BA33'>LyfSync </b></font><font face = 'Calibri' size = '5' color = '#2E2E2E'>Terms </font></b></td>";
				echo "</tr>";
				echo "<tr>"; // ROW 2 of TABLE inside COLUMN2
					echo "<td></td>";
				echo "</tr>";
			echo "</table>";
		echo "</td>";
	echo "</table>";
?>
</div>