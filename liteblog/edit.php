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
$edit_id=$_GET["id"];
$query = "SELECT * from liteblog WHERE id = $edit_id";
$result = mysql_query($query);
$edit_row = mysql_fetch_assoc($result);
//if empty edit id or zero rows found, redirect back to settings.php
if($edit_id == "" || mysql_num_rows($result) == 0) {
	echo '<script type="text/javascript">window.location = "settings.php";</script>';
}
else {
	?>
	<h2 align="center">Currently editing "<? echo $edit_row["title"]; ?>"</h2>
	<div style="width:800px;margin:0 auto;text-align:center;">
	<form name="edit" method="post" action="edit_confirm.php?id=<? echo $edit_id; ?>">
	Post Title: <input type="text" name="title" size="60" style="font-size:16px;" value="<? echo $edit_row["title"]; ?>" /><br/><br/>
    Post Date: <input type="text" name="date" size="60" style="font-size:16px;" value="<? echo $edit_row["date"]; ?>" /><br/><br/>
    Post Body:<br/><br/><textarea name="body" style="font-size:16px;width:700px;height:300px;"><? echo $edit_row["body"]; ?></textarea><br/><br/>
	<input type="submit" value="Update Post" />
	</form>
	</div>
	<?
}
?>
</div>
</body>
</html>