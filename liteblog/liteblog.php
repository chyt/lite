<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LiteBlog</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?
require ("function.php");

$border_outmost = $settings_row['border_outmost'];
$border_blogbox = $settings_row['border_blogbox'];
$color_title = $settings_row['color_title'];
$color_title_mouseover = $settings_row['color_title_mouseover'];
$color_text = $settings_row['color_text'];
$color_date = $settings_row['color_date'];
$title_size = $settings_row['title_size'];
$text_size = $settings_row['text_size'];
$date_size = $settings_row['date_size'];
$font = $settings_row['font'];
$width = $settings_row['width'];
?>

<style type="text/css">
body {
	color:#<? echo $color_text; ?>;
}
</style>

<div style="font-family:<? echo $font; ?>;border:1px solid #<? echo $border_outmost; ?>;width:<? echo $width; ?>px;padding-left:15px;padding-right:15px;margin:0 auto;">
<?
if ($_GET["liteblog"] == "") {
$blog_query = "SELECT * FROM liteblog ORDER BY id desc";
$blog_result = mysql_query($blog_query);
$blog_num_rows = mysql_num_rows($blog_result);
for ($i = 0; $i < $blog_num_rows; $i++) {
$blog_row = mysql_fetch_assoc($blog_result);
$body_content = $blog_row['body'];
$body_content_substr = substr($body_content, 0, 300);
$body_content_final = str_replace("<br/>","",$body_content_substr); 
?>
<div style="padding-top:15px;padding-bottom:15px;">
<span style="font-size:<? echo $title_size; ?>px"><a onmouseover="this.style.color='#<? echo $color_title_mouseover; ?>'" onmouseout="this.style.color='#<? echo $color_title; ?>'" style="text-decoration:none;color:#<? echo $color_title; ?>;" href="?liteblog=<? echo $blog_row['id']; ?>"><? echo $blog_row['title']; ?></a></span>
<span style="float:right;font-size:<? echo $date_size; ?>px;color:#<? echo $color_date; ?>">Posted on <? echo $blog_row['date']; ?></span>
<p style="font-size:<? echo $text_size; ?>px;line-height:150%;"><? echo $body_content_final; ?>...<a style="color:#<? echo $color_date; ?>" href="?liteblog=<? echo $blog_row['id']; ?>">Read More</a></p>
</div>
<?
}
}
else {
$id = $_GET["liteblog"];
$blog_query = "SELECT * FROM liteblog WHERE id = $id";
$blog_result = mysql_query($blog_query);
$blog_row = mysql_fetch_assoc($blog_result);
?>
<p style="font-size:<? echo $date_size; ?>px"><span style="float:left"><< <a style="color:#<? echo $color_date; ?>" href="?liteblog=">Back to LiteBlog Home</a> >></span><span style="float:right;color:#<? echo $color_date; ?>">Posted on <? echo $blog_row['date']; ?></span></p><br/><br/>
<?
echo "<title>".$blog_row['title']." | LiteBlog</title>";
echo '<p class="titletext" style="font-size:'.$title_size.'px;color:#'.$color_title.';padding:0;margin:0;">'.$blog_row["title"].'</p>';
?>
<p style="font-size:18px;line-height:150%;"><? echo $blog_row['body']; ?></p>
<?
}
?>
</div>
<div style="font-family:<? echo $font; ?>;width:<? echo $width; ?>px;padding-top:5px;margin:0 auto;text-align:right;">
<small>Proudly Powered by LiteBlog.</small>
</div>
</body>
</html>