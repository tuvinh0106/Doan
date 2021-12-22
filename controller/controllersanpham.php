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
function inforSanPham($masp)
{
    include_once '../model/sanpham.php';
    $stmt = connectDatabase()->prepare("SELECT * FROM sanpham WHERE MaSP='$masp';");
    $stmt->execute();
    $sanpham = $stmt->fetchAll();
    foreach ($sanpham as $row) {
        $row[0];
        $row[1];
        $row[2];
        $row[3];
        $row[4];
        $row[5];
        $row[6];
        $sanpham = new Sanpham($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
    }
    return $sanpham
}
?>