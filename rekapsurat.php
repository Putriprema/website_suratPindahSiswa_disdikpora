<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: loginadmin.html');
    exit;
}
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

        /* Menambahkan bingkai hitam pada tabel */
        table {
            border: 2px solid #000;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center; /* Posisi teks di tengah kolom */
        }

        th {
            background-color: #06376e; /* Warna latar belakang header kolom */
            border-bottom: 2px solid #000; /* Garis bawah pada header kolom */
            color: #fff; /* Warna teks putih */
        }

        td {
            background-color: #ffffff; /* Warna latar belakang sel-sel */
        }

        /* Menyesuaikan margin kolom Nama Siswa dan Tanggal Surat */
        td.nama-siswa, td.tanggal-surat {
            text-align: left; /* Teks diatur rata kiri */
            padding-left: 20px; /* Padding kiri */
        }

        /* Style untuk ikon pada kolom Keterangan */
        .icon-link {
            display: inline-block;
            margin-right: 5px;
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
                        <a class="nav-link active logout-link" href="index.html">Logout</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu Utama
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.html">Home</a>
                            <a class="dropdown-item" href="surat.html">Form Surat</a>
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
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Tanggal Surat</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class="nama-siswa">Mark Otto</td>
                    <td class="tanggal-surat">1 Juni 2024</td>
                    <td>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                        <a href="form.html" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <a href="surat_mark_otto.html" download="surat_mark_otto.html" class="btn btn-success btn-sm">
                            <i class="fas fa-print"></i> Print
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="nama-siswa">Jacob Thornton</td>
                    <td class="tanggal-surat">2 Juni 2024</td>
                    <td>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                        <a href="form.html" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <a href="surat_jacob_thornton.html" download="surat_jacob_thornton.html" class="btn btn-success btn-sm">
                            <i class="fas fa-print"></i> Print
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="nama-siswa">Larry Bird</td>
                    <td class="tanggal-surat">3 Juni 2024</td>
                    <td>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                        <a href="form.html" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <a href="surat_larry_bird.html" download="surat_larry_bird.html" class="btn btn-success btn-sm">
                            <i class="fas fa-print"></i> Print
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var suratList = JSON.parse(localStorage.getItem('suratList')) || [];
        
            var tbody = document.querySelector('tbody');
            suratList.forEach(function(surat, index) {
                var tr = document.createElement('tr');
                
                var tdNumber = document.createElement('td');
                tdNumber.textContent = index + 1;

                var tdTanggalSurat = document.createElement('td');
                tdTanggalSurat.textContent = surat.kode_surat;
                tdTanggalSurat.classList.add('kode-surat');
                
                var tdNamaSiswa = document.createElement('td');
                tdNamaSiswa.textContent = surat.nama_siswa;
                tdNamaSiswa.classList.add('nama-siswa');
        
                var tdTanggalSurat = document.createElement('td');
                tdTanggalSurat.textContent = surat.tgl;
                tdTanggalSurat.classList.add('tanggal-surat');
        
                var tdActions = document.createElement('td');
                
                var deleteBtn = document.createElement('a');
                deleteBtn.href = '#';
                deleteBtn.classList.add('btn', 'btn-danger', 'btn-sm');
                deleteBtn.innerHTML = '<i class="fas fa-trash-alt"></i> Delete';
                deleteBtn.addEventListener('click', function() {
                    suratList.splice(index, 1);
                    localStorage.setItem('suratList', JSON.stringify(suratList));
                    window.location.reload();
                });
        
                var editBtn = document.createElement('a');
                editBtn.href = 'form.html';
                editBtn.classList.add('btn', 'btn-primary', 'btn-sm');
                editBtn.innerHTML = '<i class="fas fa-edit"></i> Edit';
        
                var printBtn = document.createElement('a');
                printBtn.href = `surat_${surat.nama_siswa.replace(/\s+/g, '_').toLowerCase()}.html`;
                printBtn.download = `surat_${surat.nama_siswa.replace(/\s+/g, '_').toLowerCase()}.html`;
                printBtn.classList.add('btn', 'btn-success', 'btn-sm');
                printBtn.innerHTML = '<i class="fas fa-print"></i> Print';
        
                tdActions.appendChild(deleteBtn);
                tdActions.appendChild(editBtn);
                tdActions.appendChild(printBtn);
        
                tr.appendChild(tdNumber);
                tr.appendChild(tdNamaSiswa);
                tr.appendChild(tdTanggalSurat);
                tr.appendChild(tdActions);
        
                tbody.appendChild(tr);
            });
        });
    </script>
</body>
</html>