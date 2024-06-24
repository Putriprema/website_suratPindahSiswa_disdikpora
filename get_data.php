<?php
// Panggil file koneksi.php untuk membuat koneksi ke database
require_once 'koneksi.php';

// Query untuk mengambil data dari tabel rekap_surat
$sql = "SELECT nomer_surat, nama_siswa, tgl_surat FROM rekap_surat";
$result = $conn->query($sql);

// Buat array untuk menyimpan hasil query
$data = array();

if ($result->num_rows > 0) {
    // Memasukkan data ke dalam array
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Mengirimkan data dalam format JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
