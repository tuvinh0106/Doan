<?php
include_once '../model/admin.php';

function checkEmail($email)
{
    $servername = "localhost";
    $dbname = "test";
    $username = "root";
    $password = "";
    // $conn=null;
    // try{
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // }catch(PDOException $e) {
    //     echo "Error: " . $e->getMessage();
    // }
    // $stmt = $conn->query("SELECT * FROM user WHERE ClientEmail ='$email'");
    // $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $conn=null; 
    // return $data;

    $email = $_POST['email'];

    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT ClientPassword FROM user WHERE ClientEmail = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetchColumn();
    // $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
