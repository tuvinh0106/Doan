<?php
include_once '../model/user.php';
include_once '../utils/checkMail.php';

function insertUserOOP($user)
{
    $name = $user->get_name();
    $email = $user->get_email();
    $pass = $user->get_password();

    $servername = "localhost";
    $dbname = "test";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $stmt = $conn->prepare("INSERT INTO user (ClientName, ClientEmail, ClientPassword) VALUES (:ClientName,:ClientEmail,:ClientPassword)");
        $stmt = $conn->prepare("INSERT INTO user (ClientName, ClientEmail, ClientPassword) VALUES (:ClientName,:ClientEmail,:ClientPassword)");
        $stmt->bindParam(':ClientName', $name);
        $stmt->bindParam(':ClientEmail', $email);
        $stmt->bindParam(':ClientPassword', $pass);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        header("Location:../view/dangky.php?Message=Sign up failed!!! Please try again");
        die();
    }
    $conn = null;
}

$name = $_POST['name'];
$email = $_POST['email'];
$pass = md5($_POST['password']);
$repass = md5($_POST['repassword']);

$user = new User($name, $email, $pass);

if (!empty($name) && !empty($email) && !empty($pass) && !empty($repass)) {
    if ($repass == $pass) {
        if (checkEmail($user->get_email()) == 0) {
            insertUserOOP($user);
            session_start();
            $_SESSION["email"] = $email;
            header("Location:../view/index.php?Message=Wellcome to our website !!!");
        } else {
            header("Location:../view/dangky.php?Message=Email already exist!!! Please try again");
        }
    } else {
        header("Location:../view/dangky.php?Message=Password incorrect! Please try again");
    }
} else {
    header("Location:../view/dangky.php?Message=Sign up failed!!! Please try again");
}
