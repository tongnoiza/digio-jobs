<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=xostatus", $username, $password);
$conn->exec("SET CHARACTER SET utf8");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ERRMODE_EXCEPTION);
$status = $_GET['c'];
//รับข้อมูลจากquerystring c มาบันทึกลง mysql
$sql = "INSERT INTO `xo`( `status_XO`) VALUES ('$status')";

//ถ้าเกิดการบันทึกฐานข้อมูลเรียบร้อย จะไปที่หน้าสร้างกระดาน
if($conn->query($sql)) header('location: makeboard.php');

$conn=null;
?>