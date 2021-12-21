<?php

include_once '../utils/checkMail.php';
include_once '../utils/checkPass.php';

$email = $_POST['email'];
$pass = $_POST['password'];

if (checkEmail($email) && checkPass($pass)) {
    session_start();
    $_SESSION["email"] = $email;
    header("Location:../view/index.php?Message=Wellcome to our website !!!");
} else {
    header("Location:../view/dangnhap.php?Message=Sign in failed!!! Please try again");
}
