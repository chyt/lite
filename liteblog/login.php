<?php
session_start();
if (isset($_SESSION['auth'])) {
// Redirect to settings page as we are already logged in
header("location: settings.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Login to LiteBlog</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" />
</head>
<body style="font-family: sans-serif">
<div class="settings_header"><img src="images/login.png" /></div>
<div class="litewrap">
<br/><br/><br/>
<div class="login">
<?php
require("function.php");
$name = $_POST['name'];
$pass = $_POST['pass'];

if( isset($name) || isset($pass) )
{
    if( empty($name) ) {
        die ("You did not enter a username. Please try <a href='login.php'>logging in</a> again.");
    }
    if( empty($pass) ) {
        die ("You did not enter a password. Please try <a href='login.php'>logging in</a> again.");
    }


    if( $name == $username && $pass == $password )
    {
        // Authentication successful - Set session
        $_SESSION['auth'] = 1;
        setcookie("username", $_POST['name'], time()+(84600*30));
        echo '<script type="text/javascript">window.location = "settings.php";</script>';
		//header('Location: settings.php');
		//exit;
    }
    else {
        echo "Your username or password was incorrect. Please try <a href='login.php'>logging in</a> again.";
    }
}


// If no submission, display login form
else {
?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Username: <input type="text" name="name" value="<?php echo $_COOKIE['username']; ?>">
    <p />
    Password: <input type="password" name="pass">
    <p />
    <input type="submit" name="submit" value="Log In">
    </form>
<?php
}
?>
</div></div>
</body>
</html>