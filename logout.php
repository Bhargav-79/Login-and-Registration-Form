<?php

session_start();
//We need a session array to retain the data in different pages. Session arrays are like session variables which maintain a unique link between user's web page and the server.
$_SESSION = array();
session_destroy();
header("location: login.php");

?>
