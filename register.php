<?php
require_once "dbcon.php"; 


$firstname = $_POST['firstname'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$repeat_password = $_POST['repeat-password'] ?? '';


if ($password !== $repeat_password) {
    die("Password tidak cocok!");
}


$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $firstname, $lastname, $email, $hashed_password);


if ($stmt->execute()) {
    echo "<script>alert('Registrasi berhasil!'); window.location.href='index.html';</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
