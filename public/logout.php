<?php
session_start();
session_destroy();
header("Location: ../public/home/index.php");
exit;
?>
