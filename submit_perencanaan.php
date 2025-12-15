<?php
session_start();
include "dbcon.php";

// proteksi login
if (!isset($_SESSION['user_id'])) {
    die("Mohon untuk Logout dan Login Ulang");
}

$siswa_id = $_SESSION['user_id'];

// ambil firstname & lastname dari users
$getUser = $conn->prepare("SELECT firstname, lastname FROM users WHERE id = ?");
$getUser->bind_param("i", $siswa_id);
$getUser->execute();
$userResult = $getUser->get_result();
$userData = $userResult->fetch_assoc();
$firstname = $userData['firstname'];
$lastname  = $userData['lastname'];

// data dari form
$j1  = $_POST['jawaban1'];
$j2  = $_POST['jawaban2'];
$j3  = $_POST['jawaban3'];
$j4  = $_POST['jawaban4'];
$j5  = $_POST['jawaban5'];
$j6  = $_POST['jawaban6'];
$j7  = $_POST['jawaban7'];
$j8  = $_POST['jawaban8'];
$j9  = $_POST['jawaban9'];
$j10 = $_POST['jawaban10'];
$j11 = $_POST['jawaban11'];
$j12 = $_POST['jawaban12'];
$j13 = $_POST['jawaban13'];
$j14 = $_POST['jawaban14'];
$j15 = $_POST['jawaban15'];
$j16 = $_POST['jawaban16'];
$j17 = $_POST['jawaban17'];
$j18 = $_POST['jawaban18'];


// insert ke submissions (DENGAN NAMA)
$sql = "INSERT INTO submit_perencanaan
(siswa_id, jawaban1, jawaban2, jawaban3, jawaban4, jawaban5, 
jawaban6, jawaban7, jawaban8, jawaban9, jawaban10, jawaban11, jawaban12, jawaban13, jawaban14, jawaban15, jawaban16, jawaban17, jawaban18, firstname, lastname)
VALUES (?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "issssssssssssssssssss",
    $siswa_id,
    $j1, $j2, $j3, $j4, $j5,
    $j6, $j7, $j8, $j9, $j10,
    $j11, $j12, $j13, $j14, $j15,
    $j16, $j17, $j18, $firstname,
    $lastname
);



if ($stmt->execute()) {
    header("Location: feedback.html");
    exit();
} else {
    echo "Gagal menyimpan jawaban";
}
