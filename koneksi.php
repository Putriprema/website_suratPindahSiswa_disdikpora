<?php
$servername = "localhost"; // Ganti dengan nama server MySQL Anda
$username = "username"; // Ganti dengan username MySQL Anda
$password = " "; // Ganti dengan password MySQL Anda
$dbname = "rekap_surat"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
} else {
    echo "Koneksi ke database berhasil!";
}
?>
