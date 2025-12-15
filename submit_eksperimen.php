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
$j1  = (int) $_POST['f1'];
$j2  = (int) $_POST['t1'];
$j3  = (int) $_POST['l1'];
$j4  = (int) $_POST['v1'];
$j5  = (int) $_POST['f2'];
$j6  = (int) $_POST['t2'];
$j7  = (int) $_POST['l2'];
$j8  = (int) $_POST['v2'];
$j9  = (int) $_POST['f3'];
$j10 = (int) $_POST['t3'];
$j11 = (int) $_POST['l3'];
$j12 = (int) $_POST['v3'];


// insert ke feedback
$sql = "INSERT INTO submit_eksperimen
(siswa_id, firstname, lastname, f1, t1, l1, v1,
f2,t2,l2,v2,f3,t3,l3,v3)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "issiiiiiiiiiiii",
    $siswa_id,
    $firstname,
    $lastname,
    $j1, $j2, $j3, $j4,
    $j5, $j6, $j7, $j8,
    $j9, $j10, $j11, $j12
);

if ($stmt->execute()) {
    header("Location: ekspphet.html");
    exit();
} else {
    echo "Gagal menyimpan refleksi";
}
