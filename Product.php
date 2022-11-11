<?php 
session_start();
if (!isset($_SESSION['username'])){
    header("Location:index.php");
}
include "links.php";


?>
<h2>Product Page</h2>