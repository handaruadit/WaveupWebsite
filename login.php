<?php
session_start();
include 'dbcon.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn -> query($sql);

if($result->num_rows > 0){
    $user = $result->fetch_assoc();
    if(password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user'] = $user['email'];
        header("Location: home.html");
        exit();

    } else {
        echo "<script>alert('Password salah!'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Email tidak ditemukan!'); window.history.back();</script>";
}


$conn->close();

?>