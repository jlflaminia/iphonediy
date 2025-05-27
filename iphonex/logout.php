<?php
session_start();
session_unset();
session_destroy();
header("Location: \iphonediy/index.php");
exit();
?>