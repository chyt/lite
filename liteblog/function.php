<?php
// username and password to login to settings
$username = "liteblog"; 
$password = "password"; 

//connect to database
$host = "localhost"; //database location
$user = "root"; //database username
$pass = "root"; //database password
$db_name = "lite"; //database name
//database connection
$link = mysql_connect($host, $user, $pass);
mysql_select_db($db_name);

//connect and grab settings and assign them into variables
$settings_query = "SELECT * from `liteblog_settings` where id = 1";
$settings_result = mysql_query($settings_query);
$settings_row = mysql_fetch_assoc($settings_result);
?>

