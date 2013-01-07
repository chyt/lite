<?
	session_start();
    if (!isset($_SESSION['auth'])) {
        // if session not set, go to login page
        header("location: login.php");
    }
    unset($_SESSION['auth']);      
    session_unset();     
    session_destroy();
    header("location: login.php");
?>