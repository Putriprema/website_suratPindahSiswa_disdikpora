<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php'); // Ganti sesuai halaman login Anda
    exit;
}

include_once "koneksi.php"; // Sertakan file konfigurasi database

// Pastikan koneksi sudah tersedia
if ($con === null) {
    die("Koneksi database tidak berhasil.");
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Periksa apakah parameter id_surat telah diterima
    if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
        // Persiapkan pernyataan DELETE
        $sql = "DELETE FROM rekapsurat WHERE id_surat = ?";

        if ($stmt = $con->prepare($sql)) {
            // Ikat parameter ke pernyataan persiapan
            $stmt->bind_param("i", $param_id);

            // Tetapkan parameter
            $param_id = trim($_GET['id']);

            // Mencoba menjalankan pernyataan persiapan
            if ($stmt->execute()) {
                // Data berhasil dihapus. Redirect kembali ke rekapsurat.php
                header("location: rekapsurat.php");
                exit();
            } else {
                echo "Oops! Terjadi kesalahan. Silakan coba lagi nanti.";
            }
        } else {
            echo "Prepare statement gagal: " . $conn->error;
        }

        // Tutup pernyataan
        $stmt->close();
    } else {
        echo "ID surat tidak valid.";
    }
}

// Tutup koneksi database
$conn->close();
?>
