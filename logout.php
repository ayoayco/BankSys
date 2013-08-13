<?php 
session_start();
session_destroy();
// Jump to login page
header('Location: index.php');
?>
