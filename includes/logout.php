<?php
include "db.php";
session_start();

$_SESSION['userid']=null;
$_SESSION['username']=null;
$_SESSION['firstname']=null;
$_SESSION['lastname']=null;
$_SESSION['role']=null;

header("Location: ../index.php");

?>

