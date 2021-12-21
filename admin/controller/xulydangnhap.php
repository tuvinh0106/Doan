<?php

include_once '../utils/checkMail.php';
include_once '../utils/checkPass.php';

$email = $_POST['email'];
$pass = $_POST['password'];

if (checkEmail($email) && checkPass($pass)) {
    session_start();
    $_SESSION["email"] = $email;
    header("Location:index.php");
} else {
    header("Location:login.php?Message=Sign in failed!!! Please try again");
}
