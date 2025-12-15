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
$score = $_POST['score'];
$j1 = $_POST['jawaban1'];
$j2 = $_POST['jawaban2'];
$j3 = $_POST['jawaban3'];
$j4 = $_POST['jawaban4'];
$j5 = $_POST['jawaban5'];

// insert ke submissions (DENGAN NAMA)
$sql = "INSERT INTO submissions
(siswa_id, firstname, lastname, score, jawaban1, jawaban2, jawaban3, jawaban4, jawaban5)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "ississsss",
    $siswa_id,
    $firstname,
    $lastname,
    $score,
    $j1,
    $j2,
    $j3,
    $j4,
    $j5
);

if ($stmt->execute()) {
    header("Location: feedback.html");
    exit();
} else {
    echo "Gagal menyimpan jawaban";
}
