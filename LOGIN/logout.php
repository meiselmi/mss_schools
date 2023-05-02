<?php
session_start();
session_destroy();
header("Location: /mssschools/homepage.php");
?>