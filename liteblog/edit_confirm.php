<?php
session_start();
if (!isset($_SESSION['auth'])) {
// if session not set, go to login page
header("location: login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>LiteBlog Settings</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" />
</head>

<body style="font-family: sans-serif">
<?
require ("function.php");
echo "<br/><br/><br/><br/>";
$title = $_POST['title'];
$date = $_POST['date'];
$body = $_POST['body'];
$edit_id = $_GET["id"];
$query = "UPDATE liteblog SET title=\"$title\", date=\"$date\", body=\"$body\" WHERE id = $edit_id";
$result = mysql_query($query);
$edit_row = mysql_fetch_assoc($result);
//if empty edit id or zero rows found, redirect back to settings.php
if($edit_id == "" /*|| mysql_num_rows($result) == 0*/) {
	echo '<script type="text/javascript">window.location = "settings.php";</script>';
}
else {
	echo '<div class="login">';
	if ($result) {
		echo 'Post updated successfully. <a href="settings.php">Go back</a>.';
	}
	else {
		echo 'There was an error updating your post. <a href="settings.php">Go back</a>.';
	}
	echo '</div>';
}
?>
</body>
</html>