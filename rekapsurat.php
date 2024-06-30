<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php'); // Ganti sesuai halaman login Anda
    exit;
}

include_once "koneksi.php"; // Sertakan file konfigurasi database

// Membuat koneksi ke database
$conn = new mysqli($localhost, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

$data_surat = []; // Inisialisasi array untuk menyimpan data surat

// Proses pencarian jika ada input dari pengguna
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    $keyword = $_GET['search'];

    // Query SQL untuk mencari data berdasarkan keyword
    $sql = "SELECT * FROM rekapsurat WHERE 
            id_surat LIKE '%$keyword%' OR 
            tgl LIKE '%$keyword%' OR 
            nama_siswa LIKE '%$keyword%' OR 
            nisn LIKE '%$keyword%' OR 
            alamat LIKE '%$keyword%' OR 
            asal_sekolah_lama LIKE '%$keyword%' OR 
            nama_sekolah_tujuan LIKE '%$keyword%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Memasukkan setiap baris hasil query ke dalam array data_surat
        while($row = $result->fetch_assoc()) {
            $data_surat[] = $row;
        }
    } else {
        echo "0 results";
    }
} else {
    // Jika tidak ada pencarian, ambil semua data dari tabel surat
    $sql = "SELECT * FROM rekapsurat";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Memasukkan setiap baris hasil query ke dalam array data_surat
        while($row = $result->fetch_assoc()) {
            $data_surat[] = $row;
        }
    } else {
        echo "0 results";
    }
}

// Tutup koneksi database
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Surat</title>
    <link rel="stylesheet" href="rekap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
            margin-top: 1cm;
        }

        h2 {
            margin-bottom: 1cm; /* Jarak 1 cm dari bawah judul */
        }

        .btn {
            margin-right: 5px; /* Margin antara tombol */
        }

        .navbar-brand {
            font-weight: bold; /* Memberi tebal pada brand */
            color: #333; /* Warna teks brand */
            margin-left: 4cm; /* Jarak 4 cm dari kiri */
            margin-top: 0.3cm; /* Jarak 3 px dari atas */
        }

        .navbar-nav {
            margin-left: auto; /* Menggeser navbar-nav ke kanan */
        }

        .nav-item {
            margin-right: 10px; /* Margin antara item navbar */
        }

        .nav-link {
            margin-top: 3px; /* Jarak 3 px dari atas */
            color: #000 !important; /* Warna teks hitam */
        }

        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center; /* Posisi teks di tengah kolom */
            width: 10%;
        }

        th {
            background-color: #06376e; /* Warna latar belakang header kolom */
            border-bottom: 2px solid #000; /* Garis bawah pada header kolom */
            color: #fff; /* Warna teks putih */
            width: 10%;
        }

        td {
            background-color: #ffffff; /* Warna latar belakang sel-sel */
            width: 10%;
        }

        /* Menyesuaikan margin kolom Nama Siswa dan Tanggal Surat */
        td.nama-siswa, td.tanggal-surat {
            text-align: left; /* Teks diatur rata kiri */
            padding-left: 20px; /* Padding kiri */
            width: 100%;
        }

        /* Style untuk ikon pada kolom Keterangan */
        .icon-link {
            display: inline-block;
            margin-right: 5px;
        }
        table {
        border: 2px solid #000;
        width:100%;
        max-width: 50cm; /* Sesuaikan dengan kebutuhan lebar maksimum yang diinginkan */
    }

        /* Menyesuaikan warna teks pada link Logout */
        .nav-link.logout-link {
            color: red !important; /* Warna merah */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active logout-link" href="index.php">Logout</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu Utama
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php">Home</a>
                            <a class="dropdown-item" href="form.php">Form Surat</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 ml-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Rekap Surat</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Kode Surat</th>
                    <th scope="col">Tanggal Surat</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Asal Sekolah Lama</th>
                    <th scope="col">Nama Sekolah Tujuan</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_surat as $surat): ?>
                    <tr>
                        <td><?php echo $surat['id_surat']; ?></td>
                        <td><?php echo $surat['tgl']; ?></td>
                        <td><?php echo $surat['nama_siswa']; ?></td>
                        <td><?php echo $surat['nisn']; ?></td>
                        <td><?php echo $surat['alamat']; ?></td>
                        <td><?php echo $surat['asal_sekolah_lama']; ?></td>
                        <td><?php echo $surat['nama_sekolah_tujuan']; ?></td>
                        <td>
                        <div class="btn-group" role="group" aria-label="Actions">
                            <a href="print.php?id=<?php echo $surat['id_surat']; ?>" class="btn btn-success btn-sm"><i class="fas fa-print"></i> Print</a>
                            <a href="edit.php?id=<?php echo $surat['id_surat']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                            <a href="delete.php?id=<?php echo $surat['id_surat']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</a>
                        </div>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
