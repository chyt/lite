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
<title>Post to LiteBlog</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" />
</head>
<body style="font-family: sans-serif">
<br/><br/><br/><br/>
<div class="login">
<?
require ("function.php");

//grab previous variables from settings.php
$title = $_POST['title'];
$date = $_POST['date'];
$body = $_POST['body'];

//check for empty fields
if ($title == "" || $date == "" || $body == "") {
	echo 'Please don\'t leave any fields blank. <a href="settings.php">Go back</a>.';
}
else {

//write into database
$query = "INSERT INTO liteblog (title, date, body) VALUES ('$title', '$date', '$body')";
$result = mysql_query($query);

//notify of success or failure
if ($result) {
	echo 'Your post was published. <a href="settings.php">Go back</a>.';
}
else {
	echo 'There was an error posting. <a href="settings.php">Go back</a>.';
}

}
?>
</div>
</body>
</html>