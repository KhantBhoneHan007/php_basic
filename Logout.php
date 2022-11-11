<?php
session_start();
//session_destroy();
unset($_SESSION['username']);
unset($_SESSION['password']);
header("Location:index.php");

include "links.php";

?>
<h1>LOGOUT</h1>