<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Diri Siswa</title>
    <!-- Link ke Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link ke CSS kustom Anda -->
    <link rel="stylesheet" href="form.css">
    <style>
        /* CSS Kustom */
        .navbar {
            background-color: rgba(0, 0, 0, 0.0); /* Warna latar belakang navbar dengan opacity */
            border-bottom: none; /* Menghilangkan garis bawah navbar */
        }

        .navbar-brand {
            font-weight: bold; /* Memberi tebal pada brand */
            color: #333; /* Warna teks brand */
            margin-top: 3px; /* Jarak 1 cm dari atas */
            margin-left: 4cm;
        }

        .navbar-nav {
            margin-left: auto; /* Menggeser navbar-nav ke kanan */
            margin-right: 4cm; /* Jarak 4 cm dari tepi kanan halaman */
        }

        .navbar-nav-left {
            margin-right: auto; /* Menggeser navbar-nav ke kiri */
            margin-left: 4cm; /* Jarak 4 cm dari tepi kiri halaman */
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

        header {
            text-align: center;
            padding: 1em 0;
        }

        header h1 {
            margin-top: 6cm; /* Jarak dari atas */
        }

        .header-content {
            text-align: center;
            margin-top: 3rem;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        /* Custom styling for form elements */
        .form-label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 10px;
        }

        .btn-primary {
            margin-top: 10px;
        }

        /* Penyesuaian untuk placeholder menggunakan kelas text-secondary */
        ::placeholder {
            color: #6c757d; /* Warna abu-abu dari kelas text-secondary */
            opacity: 1; /* Pastikan opasitas 1 agar warna benar-benar terlihat */
        }

        /* Gaya dasar untuk seluruh halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: white; /* Warna latar belakang putih */
            margin: 0;
            padding: 0;
            min-height: 100vh; /* Memastikan footer berada di bawah halaman */
            position: relative; /* Memastikan posisi relatif untuk footer positioning */
        }

        /* Gaya responsif */
        @media (max-width: 992px) {
            .navbar-nav, .navbar-nav-left {
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

        @media (max-width: 800px) {
            header h1 {
                font-size: 1.2em;
            }

            .button {
                padding: 8px 16px;
            }

            .main-header {
                padding: 0 10px; /* Sesuaikan padding di layar kecil */
            }

            .header-content {
                flex-direction: column;
                align-items: flex-start;
            }

            .text {
                margin-top: 1cm; /* Jarak 0.5 cm dari atas pada layar kecil */
            }
        }

        @media (max-width: 500px) {
            header h1 {
                font-size: 1.2em;
            }

            .button {
                width: 100%;
                box-sizing: border-box;
                text-align: center;
            }

            .nav-menu {
                flex-direction: column;
                align-items: center;
            }

            .nav-item {
                padding: 5px;
            }

            .nav-logo,
            .nav-item {
                margin-left: 0.5cm; /* Jarak lebih kecil di layar kecil */
                margin-right: 0.5cm; /* Jarak lebih kecil di layar kecil */
            }

            .text {
                margin-top: 1cm; /* Jarak 0.5 cm dari atas pada layar sangat kecil */
            }
        }
        .form-label {
            font-weight: bold; /* Membuat teks label menjadi tebal */
        }
        .navbar {
    background-color: #f8f9fa; /* Ganti warna latar belakang navbar */
    border-bottom: none; /* Hapus garis bawah navbar */
}

.navbar-toggler {
    margin-right: 0; /* Hapus margin pada toggle button di layar kecil */
}

.nav-link {
    color: #333; /* Warna teks link */
    transition: color 0.3s ease; /* Transisi warna saat hover */
}

.nav-link:hover {
    color: #007bff; /* Warna teks saat dihover (biru) */
}

@media (max-width: 992px) {
    .navbar-nav, .navbar-nav-left {
        margin-left: 0; /* Reset margin untuk navbar-nav */
        text-align: center; /* Pusatkan link di navbar */
    }

    .navbar-collapse {
        justify-content: center; /* Pusatkan toggle button di navbar */
    }

    .nav-item {
        margin-right: 0;
        margin-bottom: 10px; /* Tambahkan ruang di bawah setiap item pada layar kecil */
    }
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav navbar-nav-left"> <!-- Navbar kiri -->
                    <li class="nav-item">
                        <a class="nav-link active logout-link" href="index.php">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto"> <!-- Navbar kanan -->
                    <!-- Tambahkan item navbar kanan di sini jika diperlukan -->
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="header-content">
            <h1>Form Data Diri Siswa</h1>
            <div class="text">
                <p>Silahkan mengisi data diri siswa pada form ini sesuai dengan data yang benar dan sesuai!</p>
                <!-- Formulir Bootstrap -->
                <form id="form-surat">
                    <div class="mb-3">
                        <label for="kode_surat" class="form-label">Kode Surat</label>
                        <input type="text" class="form-control" id="kode_surat" placeholder="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="tgl" class="form-label">Tanggal surat</label>
                        <input type="text" class="form-control" id="tgl" placeholder="tanggal/bulan/tahun" autocomplete="off">
                        <span id="peringatan" style="color: red;"></span>
                    </div>
                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama_siswa" placeholder="Masukkan Nama Siswa" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" class="form-control" id="nisn" placeholder="Masukkan NISN" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select id="jenis_kelamin" class="form-select">
                            <option value="Laki-laki">Laki - laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="asal_sekolah_lama" class="form-label">Asal Sekolah</label>
                        <input type="text" class="form-control" id="asal_sekolah_lama" placeholder="Masukkan Asal Sekolah" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan Alamat" autocomplete="off"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="kabupaten" class="form-label">Kabupaten/kota</label>
                        <input type="text" class="form-control" id="kabupaten" placeholder="Masukkan Kabupaten/kota" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" placeholder="Masukkan Provinsi" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="nama_sekolah_tujuan" class="form-label">Nama Sekolah tujuan</label>
                        <input type="text" class="form-control" id="nama_sekolah_tujuan" placeholder="Masukka Nama Sekolah tujuan" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="alasan" class="form-label">Alasan pindah sekolah</label>
                        <input type="text" class="form-control" id="alasan" placeholder="Alasan pindah sekolah" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var formSurat = document.getElementById('form-surat');
            var peringatan = document.getElementById('peringatan');

            // Muat kode surat terakhir dari localStorage
            var lastSuratNumber = parseInt(localStorage.getItem('lastSuratNumber')) || 8457; // Kode surat awal 8457

            // Fungsi untuk menghasilkan format kode surat
            function generateKodeSurat() {
                var kodeAwal = '400.3.5/';
                return `${kodeAwal}${lastSuratNumber}/Disdikpora`;
            }

            // Tampilkan kode surat awal pada input kode surat
            document.getElementById('kode_surat').value = generateKodeSurat();

            formSurat.addEventListener('submit', function(event) {
                event.preventDefault();

                // Validasi format tanggal
                var tanggalInput = document.getElementById('tgl').value.trim();
                var tanggalValid = isValidDate(tanggalInput);

                if (!tanggalValid) {
                    peringatan.textContent = 'Tulis tanggal sesuai format penulisan contoh: 14 Juni 2024. Surat hanya berlaku satu hari sejak pembuatan surat!';
                    window.scrollTo(0, 0); // Scroll ke atas halaman jika ada kesalahan
                    return;
                } else {
                    peringatan.textContent = ''; // Hapus pesan peringatan jika valid
                }

                // Simpan data ke localStorage
                var data = {
                    kode_surat: generateKodeSurat(), // Menggunakan kode surat terakhir
                    tgl: tanggalInput,
                    nama_siswa: document.getElementById('nama_siswa').value,
                    nisn: document.getElementById('nisn').value,
                    jenis_kelamin: document.getElementById('jenis_kelamin').value,
                    asal_sekolah_lama: document.getElementById('asal_sekolah_lama').value,
                    alamat: document.getElementById('alamat').value,
                    kabupaten: document.getElementById('kabupaten').value,
                    provinsi: document.getElementById('provinsi').value,
                    nama_sekolah_tujuan: document.getElementById('nama_sekolah_tujuan').value,
                    alasan: document.getElementById('alasan').value
                };

                // Simpan kode surat terbaru ke localStorage
                localStorage.setItem('lastSuratNumber', lastSuratNumber + 1);

                localStorage.setItem('formData', JSON.stringify(data));

                // Redirect ke halaman 
                window.location.href = 'surat.php';
            });

            function isValidDate(dateString) {
                // Format yang diharapkan adalah "tanggal bulan tahun" seperti "14 Juni 2024"
                var pattern = /^(\d{1,2})\s+(\w+)\s+(\d{4})$/;
                if (!pattern.test(dateString)) return false;

                var match = dateString.match(pattern);
                var day = parseInt(match[1], 10);
                var month = match[2].toLowerCase(); // Bulan dalam huruf kecil
                var year = parseInt(match[3], 10);

                var months = ['januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember'];
                var monthIndex = months.indexOf(month);

                if (monthIndex === -1) return false; // Bulan tidak valid

                var maxDaysInMonth = new Date(year, monthIndex + 1, 0).getDate();
                if (day < 1 || day > maxDaysInMonth) return false; // Tanggal tidak valid

                return true;
            }
        });
    </script>
</body>
</html>