<?php
include_once '../model/admin.php';
include_once '../utils/checkMail.php';



// $name = $_POST['name'];
// $email = $_POST['email'];
// $pass = md5($_POST['password']);
// $repass = md5($_POST['repassword']);

// $admin = new Admin($name, $email, $pass);

// if (!empty($name) && !empty($email) && !empty($pass) && !empty($repass)) {
//     if ($repass == $pass) {
//         if (checkEmail($admin->get_email()) == 0) {
//             insertAdminOOP($admin);
//             session_start();
//             $_SESSION["email"] = $email;
//             header("Location:index.php?Message=Wellcome to our website !!!");
//         } else {
//             header("Location: register.php?Message=Email already exist!!! Please try again");
//         }
//     } else {
//         header("Location: register.php?Message=Password incorrect! Please try again");
//     }
// } else {
//     header("Location: register.php?Message=Sign up failed!!! Please try again");
function insertAdminOOP($admin)
{
    $name = $admin->get_name();
    $email = $admin->get_email();
    $pass = $admin->get_password();
    //$hash = password_hash($pass, PASSWORD_DEFAULT);



    $servername = "localhost";
    $dbname = "test";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //  $stmt = $conn->prepare("INSERT INTO user (ClientName, ClientEmail, ClientPassword) VALUES (:ClientName,:ClientEmail,:ClientPassword)");
        $stmt = $conn->prepare("INSERT INTO admin (ClientName, ClientEmail, ClientPassword) VALUES (:ClientName,:ClientEmail,:ClientPassword)");
        $stmt->bindParam(':ClientName', $name);
        $stmt->bindParam(':ClientEmail', $email);
        // $stmt->bindParam(':ClientPassword', $hash);
        $stmt->bindParam(':ClientPassword', $pass);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        header("Location: register.php?Message=Sign up failed!!! Please try again");
        die();
    }

    $conn = null;
}

$name = $_POST['name'];
$email = $_POST['email'];
$pass = md5($_POST['password']);
$repass = md5($_POST['repassword']);

$admin = new Admin($name, $email, $pass);

if (!empty($name) && !empty($email) && !empty($pass) && !empty($repass)) {
    if ($repass == $pass) {
        if (checkEmail($admin->get_email()) == 0) {
            insertAdminOOP($admin);
            session_start();
            $_SESSION["email"] = $email;
            header("Location: index.php?Message=Wellcome to our website !!!");
        } else {
            header("Location: register.php?Message=Email already exist!!! Please try again");
        }
    } else {
        header("Location: register.php?Message=Password incorrect! Please try again");
    }
} else {
    header("Location: register.php?Message=Sign up failed!!! Please try again");
}
