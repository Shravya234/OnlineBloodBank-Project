<?php
session_start();
session_unset();
session_destroy();
header("Location: admin.php"); // go back to login page
exit();
?>
