<?php
session_start();
$_SESSION["name"]="abhishek";
$_SESSION["phnno"]="9876543210";
echo"session is set          ".$_SESSION['name']."=".$_SESSION['phnno'];
?>