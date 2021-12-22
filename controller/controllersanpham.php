<?php
include_once '../model/sanpham.php';

function get_listSanPham()
{
    $servername = "localhost";
    $dbname = "web";
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("Select * From sanpham");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $listSP = array();
    while ($row = $stmt->fetch()) {

        array_push($listSP, new Sanpham($row['MaSP'], $row['TenSP'], $row['Size'], $row['SoLuong'], $row['GiaSP'], $row['Mota'], $row['HinhAnh']));
    }
    return  $listSP;
}


function connectDatabase()
{
    $servername = "localhost";
    $database = "web";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage;
        die();
    }
    $conn = null;
}

?>