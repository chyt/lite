<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Update LiteBlog Settings</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" />
</head>
<body style="font-family: sans-serif">

<?
require ("function.php");

//grab previous variables from settings.php
$border_outmost = $_POST['border_outmost'];
$border_blogbox = $_POST['border_blogbox'];
$color_title = $_POST['color_title'];
$color_title_mouseover = $_POST['color_title_mouseover'];
$color_text = $_POST['color_text'];
$color_date = $_POST['color_date'];
$title_size = $_POST['title_size'];
$text_size = $_POST['text_size'];
$date_size = $_POST['date_size'];
$font = $_POST['font'];
$width = $_POST['width'];

//check for empty fields
if ($border_outmost == "" || /*$border_blogbox == "" || */ $color_title == "" || $color_title_mouseover == "" || $color_text == "" || $color_date == "" || $title_size == "" || $text_size == "" || $date_size == "" || $font == "" || $width == "") {
	echo 'Please don\'t leave any fields blank. <a href="settings.php">Go back</a>.';
}
else {

//write into database
$query = "UPDATE liteblog_settings SET border_outmost='$border_outmost', border_blogbox='$border_blogbox', color_title='$color_title', color_title_mouseover='$color_title_mouseover', color_text='$color_text', color_date='$color_date', title_size='$title_size', text_size='$text_size', date_size='$date_size', font='$font', width='$width' WHERE id=1";
$result = mysql_query($query);

//notify of success or failure
if ($result) {
	echo 'Your settings were successfully updated. <a href="settings.php">Go back</a>.';
}
else {
	echo 'There was an error updating your settings. <a href="settings.php">Go back</a>.';
}

}
?>

</body>
</html>