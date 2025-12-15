<?php
session_start();
include "dbcon.php";

// proteksi login
if (!isset($_SESSION['user_id'])) {
    die("Silakan login ulang");
}

$siswa_id = $_SESSION['user_id'];

// ambil nama siswa
$getUser = $conn->prepare("SELECT firstname, lastname FROM users WHERE id = ?");
$getUser->bind_param("i", $siswa_id);
$getUser->execute();
$userData = $getUser->get_result()->fetch_assoc();

$firstname = $userData['firstname'];
$lastname  = $userData['lastname'];

// ambil jawaban
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

// insert ke feedback
$sql = "INSERT INTO feedback
(siswa_id, firstname, lastname,
 jawaban1, jawaban2, jawaban3, jawaban4, jawaban5,
 jawaban6, jawaban7, jawaban8, jawaban9, jawaban10)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "issssssssssss",
    $siswa_id,
    $firstname,
    $lastname,
    $j1, $j2, $j3, $j4, $j5,
    $j6, $j7, $j8, $j9, $j10
);

if ($stmt->execute()) {
    header("Location: misi_selesai.html");
    exit();
} else {
    echo "Gagal menyimpan refleksi";
}
