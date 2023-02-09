<?php require '../Controller/connection.php' ?>
<?php
session_start();
$_SESSION = array();

session_destroy();
header("Location: login.php");
exit;
?>