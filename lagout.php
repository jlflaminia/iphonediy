<!-- filepath: c:\xampp\htdocs\diy\hapart\logout.php -->
<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php");
exit();
?>