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
$j1  = $_POST['q1a'];
$j2  = $_POST['q1b'];
$j3  = $_POST['q1c'];
$j4  = $_POST['q2a'];
$j5  = $_POST['q2b'];
$j6  = $_POST['q3a'];
$j7  = $_POST['q3b'];
$j8  = $_POST['q4a'];
$j9  = $_POST['q4b'];
$j10 = $_POST['g1'];
$j11 = $_POST['g2'];
$j12 = $_POST['g3'];


// insert ke feedback
$sql = "INSERT INTO submit_solusi
(siswa_id, firstname, lastname,
 q1a, q1b, q1c,
 q2a, q2b,
 q3a, q3b,
 q4a, q4b,
 g1, g2, g3)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";


$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "issssssssssssss", // 15 parameter
    $siswa_id,
    $firstname,
    $lastname,
    $j1,  // q1a
    $j2,  // q1b
    $j3,  // q1c
    $j4,  // q2a
    $j5,  // q2b
    $j6,  // q3a
    $j7,  // q3b
    $j8,  // q4a
    $j9,  // q4b
    $j10, // g1
    $j11, // g2
    $j12  // g3
);


if ($stmt->execute()) {
    header("Location: solusi.html");
    exit();
} else {
    echo "Gagal menyimpan refleksi";
}
