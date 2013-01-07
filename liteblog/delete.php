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
$pass = $_POST["password"];
?>
<div class="settings_header">
<img src="images/admin.png" />
</div>
<br/>
<div class="litewrap">
<table border="0" style="width:100%"><tr>
<td><a href="settings.php">Back to Main Settings</a></td><td style="text-align:right;" align="right"><a href="logout.php">Log Out</a></td>
</tr></table>
<?
$delete_id=$_GET["id"];
$query = "SELECT * from liteblog WHERE id = $delete_id";
$result = mysql_query($query);
$delete_row = mysql_fetch_assoc($result);
//if empty delete id or zero rows found, redirect back to settings.php
if($delete_id == "" || mysql_num_rows($result) == 0) {
	echo '<script type="text/javascript">window.location = "settings.php";</script>';
}
else {
	//password not set, ask for passowrd
	if(!isset($pass)) {
	?>
	<h2 align="center">Confirm deletion of "<? echo $delete_row["title"]; ?>"</h2>
	<p align="center">To delete "<? echo $delete_row["title"]; ?>" please enter your password below:</p>
	<div style="width:300px;margin:0 auto;text-align:center;">
	<form name="form1" method="post" action="delete.php?id=<? echo $delete_id; ?>">
	<input type="password" name="password" id="password" size="30" />
	<input type="submit" value="Delete Post" />
	</form>
	</div>
	<?
	}
	//password set, check if it is correct, and if so, delete the post
	else {
		if($pass == $password) {
			echo '<h2 align="center">Success</h2>';
			echo '<p align="center">Your post was successfully deleted. <a href="settings.php">Go back</a></p>';
			mysql_query("DELETE FROM `lite`.`liteblog` WHERE `liteblog`.`id` = $delete_id");
		}
		else {
			echo '<h2 align="center">Error</h2>';
			echo '
				<p align="center">The password you entered was incorrect. <a href="delete.php?id='.$delete_id.'">Try again</a></p>
			';
		}
	}

}
?>
</div>
</body>
</html>