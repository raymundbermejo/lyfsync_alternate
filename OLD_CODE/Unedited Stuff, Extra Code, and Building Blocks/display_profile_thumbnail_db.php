<?php
$id = $_SESSION['user_id'];
// do some validation here to ensure id is safe
require("./connect.php");
$queryProfThumb = 'SELECT user_profile_pic FROM users WHERE user_id=$id';
$result = mysql_query('$queryProfThumb');
$row = mysql_fetch_assoc($result);
header("Content-type: image/jpeg");
echo $row['user_profile_pic'];
mysql_close($link);
?>

