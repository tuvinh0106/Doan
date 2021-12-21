<?php
$email = $_SESSION["email"];


// get_infor($email);

$name = get_infor($email)[0];
$email = get_infor($email)[1];
$pass = get_infor($email)[2];
// $address = get_infor($email)[3];
// $phonenumber = get_infor($email)[4];
// $gender = get_infor($email)[5];

function get_infor($email)
{
    // include 'model/user.php';

    $servername = "localhost";
    $dbname = "test";
    $username = "root";
    $password = "";



    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM USER WHERE ClientEmail='$email';");
        $stmt->execute();
        $user = $stmt->fetchAll();
        foreach ($user as $row) {
            // $user_name = $row[0];
            // $email = $row[1];
            // $pass = $row[2];
            // $address = $row[3];
            // $phonenumber = $row[4];
            // $gender = $row[5];
            $row[0];
            $row[1];
            $row[2];
            // $row[3];
            // $row[4];
            // $row[5];
            // $user = new User($user_name, $email, $pass, $address, $phonenumber, $gender);
        }
        // return $user;
        // return $arr = array($user_name, $email, $pass, $address, $phonenumber, $gender);
        return $arr = array("$row[0]", "$row[1]", "$row[2]");
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
    $conn = null;
}
