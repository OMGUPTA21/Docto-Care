<?php   
session_start(); //to ensure you are using same session
$_SESSION=array();
session_destroy();
header("location:../Front_Page/page.php"); //to redirect back to "index.php" after logging out
 //destroy the session
exit();
?>