<?php
session_start();

$username = trim($_POST['username']);
$password = trim($_POST['password']);

$u = 'A12.2022.06799';
$p = 'password123';

if($username === $u && $password === $p) {
    $_SESSION['nama'] = $username;
    $_SESSION['is_logged_in'] = TRUE;

    header("Location: ../Beranda.php");
    exit();
} else {
    echo "username / password salah";
}
?>
