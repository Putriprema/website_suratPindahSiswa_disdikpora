<!-- auth.php -->
<?php
session_start();

// Simulasi data login (biasanya data ini diambil dari database)
$valid_username = 'admin';
$valid_password = 'admin123';

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Validasi login
if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['loggedin'] = true;
    header('Location: rekapsurat.html');
    exit;
} else {
    $_SESSION['loggedin'] = false;
    header('Location: loginadmin.html');
    exit;
}
?>
