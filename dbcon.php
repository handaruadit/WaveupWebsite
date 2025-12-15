<?php
// // local
// $host = "localhost";      
// $user = "root";           
// $pass = "";               
// $dbname = "dbcon";  

// deploy
$host = "localhost";      
$user = "uhahmbdi_coba";           
$pass = "12345678";               
$dbname = "uhahmbdi_coba";          

$conn = new mysqli($host, $user, $pass, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
