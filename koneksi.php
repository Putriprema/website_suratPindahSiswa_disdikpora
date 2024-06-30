<?php
$localhost = 'localhost';       // Host database (biasanya localhost)
$username = 'root';        // Username untuk mengakses database
$password = '';            // Password untuk mengakses database (kosongkan jika tidak ada)
$dbname = 'surat';  // Nama database yang digunakan

// Buat koneksi ke database
$con = new mysqli($localhost, $username, $password, $dbname);

// Periksa koneksi
if ($con->connect_error) {
    die("Koneksi gagal: " . $con->connect_error);
}
?>
