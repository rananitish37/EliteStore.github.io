<?php
session_start();
unset($_SESSION['logedin']);
unset($_SESSION['username']);;
unset($_SESSION['password']);
header('location:index.php');
?>