<?php
session_start();

$_SESSION['name']='Guest';
$_SESSION['mode']='guest';
header("Location: home.php");
?>