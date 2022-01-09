<?php
// Logout page
session_start();
// Ends the session by destroying it and redirecting to Login page .
session_unset();
session_destroy();

header('location:login.php');
?>