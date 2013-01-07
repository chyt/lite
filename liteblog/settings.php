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
<style type="text/css">
td {
	padding:5px;
	width:400px;
}
</style>
		<!-- SimpleTabs -->
		<script type="text/javascript" src="js/simpletabs_1.3.js"></script>
		<style type="text/css" media="screen">
			@import "css/simpletabs.css";
		</style>
<script type="text/javascript">
function confirmReset() {
	var r=confirm('Are you sure you wish to restore your default settings? Existing customization will be lost.');
if (r==true)
  {
  window.location = "reset.php";
  }
}
</script>
</head>

<body style="font-family: sans-serif">
<?
require ("function.php");
$query = "SELECT * from liteblog ORDER BY id desc";
$result = mysql_query($query);
$num_rows = mysql_num_rows($result);
?>
<div class="settings_header">
<? /*
if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) { 
?>
<img src="images/login.png" />
<?
}
else {
*/?>
<img src="images/admin.png" />
<?
//}
?>
</div>
<br/>

<? /*
if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) { 
?>

<div class="login">
<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
    <p style="text-align:center"><label for="txtUsername">Username:</label> 
    <br /><input style="text-align:center" type="text" title="Enter your Username" name="txtUsername" /></p> 

    <p style="text-align:center"><label for="txtpassword">Password:</label> 
    <br /><input style="text-align:center" type="password" title="Enter your password" name="txtPassword" /></p> 

    <p style="text-align:center"><input style="text-align:center" type="submit" name="Submit" value="Login" /></p> 

</form> 
</div>

<?
} 
else
{
*/ ?>

<div class="litewrap">
<p style="text-align:right;"><a href="logout.php">Log Out</a></p>
	    <div class="simpleTabs">
		        <ul class="simpleTabsNavigation">
		            <li><a href="#">Blog Settings</a></li>
		            <li><a href="#">Add New Post</a></li>
		            <li><a href="#">Edit/Delete Posts</a></li>
		        </ul>
		        <div class="simpleTabsContent">
<!-- Settings Tab -->
<div style="text-align:center;padding:15px;"><img src="images/settings.png" /></div><hr/>
<div class="litebody">
<form name="settings" action="update.php" method="post">
<table>
<tr>
<td class="settings_left">
Outer Border Color: 
</td>
<td class="settings_right">
#<input type="text" name="border_outmost" size="22" maxlength="6" value="<? echo $settings_row['border_outmost']; ?>">
</td>
</tr>
<!--
<tr>
<td class="settings_left">
Post Border Color: 
</td>
<td class="settings_right">
#<input type="text" name="border_blogbox" size="22" maxlength="6" value="<? echo $settings_row['border_blogbox']; ?>">
</td>
</tr>
-->
<tr>
<td class="settings_left">
Title Color: 
</td>
<td class="settings_right">
#<input type="text" name="color_title" size="22" maxlength="6" value="<? echo $settings_row['color_title']; ?>">
</td>
</tr>
<tr>
<td class="settings_left">
Title Hover Color: 
</td>
<td class="settings_right">
#<input type="text" name="color_title_mouseover" size="22" maxlength="6" value="<? echo $settings_row['color_title_mouseover']; ?>">
</td>
</tr>
<tr>
<td class="settings_left">
Post Text Color:
</td>
<td class="settings_right">
#<input type="text" name="color_text" size="22" maxlength="6" value="<? echo $settings_row['color_text']; ?>">
</td>
</tr>
<tr>
<tr>
<td class="settings_left">
Post Date Color:
</td>
<td class="settings_right">
#<input type="text" name="color_date" size="22" maxlength="6" value="<? echo $settings_row['color_date']; ?>">
</td>
</tr>
<tr>
<td class="settings_left">
Title Size:
</td>
<td class="settings_right">
<input type="text" name="title_size" size="22" maxlength="6" value="<? echo $settings_row['title_size']; ?>"> px
</td>
</tr>
<tr>
<td class="settings_left">
Post Text Font Size: 
</td>
<td class="settings_right">
<input type="text" name="text_size" size="22" maxlength="6" value="<? echo $settings_row['text_size']; ?>"> px
</td>
</tr>
<tr>
<td class="settings_left">
Post Date Font Size: 
</td>
<td class="settings_right">
<input type="text" name="date_size" size="22" maxlength="6" value="<? echo $settings_row['date_size']; ?>"> px
</td>
</tr>
<tr>
<td class="settings_left">
Global Font Family: 
</td>
<td class="settings_right">
<input type="text" name="font" size="22" value="<? echo $settings_row['font']; ?>">
</td>
</tr>
<tr>
<td class="settings_left">
LiteBlog Width: 
</td>
<td class="settings_right">
<input type="text" name="width" size="22" maxlength="6" value="<? echo $settings_row['width']; ?>"> px
</td>
</tr>
<tr>
<td style="text-align:center" colspan="2">
<input type="submit" value="Update!">
</td>
</tr>
</table>
</form>
<p style="text-align:center"><a href="#" onclick="javascript:confirmReset();">Restore to Default Settings</a></p>
</div>

                </div>
		        <div class="simpleTabsContent">
<!-- Add New Post -->
<div style="text-align:center;padding:15px;"><img src="images/post.png" /></div><hr/>
<div class="litebody">
<form name="post_to" action="post.php" method="post">
<table style="width:100%;margin:0 auto;">
<tr>
<td style="text-align:center;padding-bottom:10px;">
Post Title: <input type="text" name="title" size="50" style="font-size:16px;">
</td>
</tr>
<tr>
<td style="text-align:center;padding-bottom:10px;">
Post Date: <input type="text" name="date" size="50" style="font-size:16px;" value="<? echo date('n/j/Y'); ?>">
</td>
</tr>
<tr>
<td style="text-align:center;padding-bottom:10px;padding-top:20px;">
Post Body: 
</td>
</tr>
<tr>
<td style="text-align:center">
<textarea name="body" style="font-size:16px;width:700px;height:300px;"></textarea>
</td>
</tr>
<tr>
<td colspan="2" style="text-align:center">
<input type="submit" value="Post!">
</td>
</tr>
</table>
</form>
</div>

                </div>
		        <div class="simpleTabsContent">
<!-- Edit Existing Posts -->
<div style="text-align:center;padding:15px;"><img src="images/edit.png" /></div><br/>
<div class="litebody">
<?
if($num_rows == 0) {
	echo "<hr/><br/>There are currently no posts.";
}
else {
?>
<table width="100%" border="1" style="border:1px solid #000;" cellpadding="5">
<tr>
<td style="width:50%"><strong>Post Name</strong></td><td style="width:20%"><strong>Post Date</strong></td><td style="width:16%"><strong>Edit</strong></td><td style="width:15%"><strong>Delete</strong></td>
</tr>
<?
for ($i=1; $i<=$num_rows; $i++) {
	$row = mysql_fetch_assoc($result);
	echo "<tr>";
	echo "<td>".$row['title']."</td><td>".$row['date']."</td><td><a href='edit.php?id=".$row['id']."'>Edit</a></td><td><span style='color:#FF0000'><a style='color:#FF0000' href='delete.php?id=".$row['id']."'>Delete</a></span></td>";
	echo "</tr>";
}
?>
</table>
<?
//}
?>
</div>
                </div>
		    </div>


<br/>
</div>

<?
}
?>

</body>
</html>