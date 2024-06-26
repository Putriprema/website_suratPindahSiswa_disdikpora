<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    /* Gaya dasar untuk seluruh halaman */
    body {
        font-family: Arial, sans-serif;
        background-color: white; /* Warna latar belakang putih */
        margin: 0;
        padding: 0;
        min-height: 100vh; /* Memastikan footer berada di bawah halaman */
        position: relative; /* Memastikan posisi relatif untuk footer positioning */
    }

    /* Gaya untuk header */
    header {
        background-color: #f8f9fa; /* Warna latar belakang header */
        padding: 20px 0; /* Padding atas dan bawah 20px, samping 0 */
        text-align: center;
    }

    .header-content {
        height: 100vh; /* Tinggi 100% dari viewport */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .header-content h1 {
        font-size: 2.5rem; /* Ukuran font besar di header */
        margin-bottom: 20px; /* Jarak bawah antara judul dan teks */
    }

    .header-content .text {
        max-width: 80%; /* Lebar maksimal teks */
        margin: 20px auto; /* Margin di atas dan bawah, otomatis di tengah */
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff; /* Warna tombol */
        color: white; /* Warna teks di dalam tombol */
        text-decoration: none; /* Menghilangkan garis bawah dari tautan */
        border-radius: 5px; /* Tepi melengkung pada tombol */
        transition: background-color 0.3s ease; /* Transisi saat hover */
    }

    .button:hover {
        background-color: #0056b3; /* Warna tombol saat dihover */
    }

    /* Gaya untuk footer */
    footer {
        background-color: #343a40; /* Warna latar belakang footer */
        color: white; /* Warna teks putih */
        text-align: center;
        padding: 10px 0; /* Padding atas dan bawah 10px, samping 0 */
        position: absolute; /* Menempatkan di bawah halaman */
        width: 100%; /* Lebar 100% dari viewport */
        bottom: 0; /* Meletakkan di bagian bawah halaman */
    }

    /* Navbar */
    .navbar {
        background-color: #f8f9fa; /* Warna latar belakang navbar */
        border-bottom: 1px solid #ddd; /* Garis bawah navbar */
    }

    .navbar-brand {
        font-weight: bold; /* Memberi tebal pada brand */
        color: #333; /* Warna teks brand */
        margin-left: 1rem; /* Jarak kiri dari logo */
    }

    .navbar-nav {
        margin-left: 1rem; /* Jarak kiri untuk menu */
    }

    .nav-item {
        margin-right: 10px; /* Margin antara item navbar */
    }

    .nav-link {
        color: #333; /* Warna teks link */
        transition: color 0.3s ease; /* Transisi warna saat hover */
    }

    .nav-link:hover {
        color: #007bff; /* Warna teks saat dihover (biru) */
    }

    .dropdown-menu {
        background-color: #f8f9fa; /* Warna latar belakang dropdown menu */
    }

    .dropdown-item {
        color: #333; /* Warna teks item dropdown */
    }

    .dropdown-item:hover {
        background-color: #007bff; /* Warna latar belakang saat hover pada item dropdown */
        color: #fff; /* Warna teks saat hover pada item dropdown */
    }

    @media (max-width: 992px) {
        .navbar-nav {
            margin-left: 0; /* Reset margin untuk navbar-nav */
            text-align: center; /* Pusatkan link di navbar */
        }

        .navbar-collapse {
            justify-content: center; /* Pusatkan toggle button di navbar */
        }

        .navbar-toggler {
            margin-right: 0; /* Hapus margin pada toggle button di layar kecil */
        }

        .nav-item {
            margin-right: 0;
            margin-bottom: 10px; /* Tambahkan ruang di bawah setiap item pada layar kecil */
        }
    }
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Navigasi
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php">Home</a>
                                <a class="dropdown-item" href="loginadmin.php">Login sebagai Admin</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="header-content">
            <h1>Selamat Datang di Halaman Web Kami</h1>
            <div class="text">
                <p>website pembuatan surat mutasi perpindahan siswa. Anda bisa melakukan pembuatan surat mutasi pada website ini.</p>
                <p>Silahkan memulai pembuatan surat dengan mengklik tombol dibawah ini!</p>
                <a href="form.php" class="button">Buat surat disini</a>
            </div>
        </div>
    </header>
    <footer>
        <p>&copy; 2024 Hak Cipta Dilindungi.</p>
    </footer>
    <!-- Script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
