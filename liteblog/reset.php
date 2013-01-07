<?
	session_start();
    if (!isset($_SESSION['auth'])) {
        // if session not set, go to login page
        header("location: login.php");
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Reset LiteBlog Settings</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" />
</head>
<body style="font-family: sans-serif">
<br/><br/><br/><br/>
<div class="login">
<?
require ("function.php");

//write into database
$query = "UPDATE liteblog_settings SET border_outmost='000000', border_blogbox='CCCCCC', color_title='222222', color_title_mouseover='CCCCCC', color_text='000000', color_date='222222', title_size='36', text_size='18', date_size='14', font='sans-serif', width='1000' WHERE id=1";
$result = mysql_query($query);

//notify of success or failure
if ($result) {
	echo 'Your settings were successfully reset. <a href="settings.php">Go back</a>.';
}
else {
	echo 'There was an error resetting your settings. <a href="settings.php">Go back</a>.';
}
?>
</div>
</body>
</html>