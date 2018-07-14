<?php
session_start();

session_destroy();
header('location:hotel_home_page.php');

?>