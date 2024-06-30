<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Rekomendasi Mutasi Siswa</title>
    <style>
        @page {
            size: A4;
            margin: 20mm;
        }
        body {
            font-family: "Arial", Times, serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            width: 210mm;
            min-height: 297mm;
            margin-left: auto;
            margin-right: auto;
            padding: 20mm;
            background: white;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 150%; /* Lebar gambar diatur agar mengisi keseluruhan */
            max-width: 700px;
        }
        .content {
            margin-top: 20px;
        }
        h3 {
            margin: 10px 0; /* Atur margin atas dan bawah */
            text-align: center;
        }
        h4 {
            margin: 10px 0; /* Atur margin atas dan bawah */
            text-align: center;
            font-weight: normal; /* Teks tidak bold */
            margin-bottom: 0.7cm;
        }
        h5 {
            font-family: "Arial", Times, serif; /* Menggunakan font Arial */
            font-size: 16px; /* Ukuran font sesuai dengan gaya yang sudah ditentukan */
            margin: 10px 0; /* Atur margin atas dan bawah */
            font-weight: normal; /* Teks tidak bold */
        }
        .tab {
            text-indent: 50px; /* Atur jarak indentasi sebesar 50px */
        }
        .indent {
            text-indent: 90px; /* Atur jarak indentasi sebesar 70px */
        }
        .signature {
            margin-top: 40px;
            text-align: right;
            font-family: "Times New Roman", Times, serif;
        }
        .signature img {
            width: 250px;
        }
        .bold-underline {
            font-weight: bold;
            text-decoration: underline;
        }

        /* Style untuk tombol simpan */
        .save-button {
            background-color: #27850d; /* Warna hijau */
            color: #fff; /* Warna teks putih */
            border: none; /* Menghilangkan border */
            padding: 10px 20px; /* Padding agar tombol terlihat lebih besar */
            cursor: pointer; /* Mengubah cursor menjadi pointer saat dihover */
            border-radius: 5px; /* Membuat sudut tombol lebih bulat */
            display: inline-block; /* Tampilkan tombol di layar */
            margin-right: 10px; /* Margin kanan antara tombol */
        }

        /* Style untuk tombol kembali ke form */
        .back-button {
            background-color: #007bff; /* Warna biru */
            color: #fff; /* Warna teks putih */
            border: none; /* Menghilangkan border */
            padding: 10px 20px; /* Padding agar tombol terlihat lebih besar */
            cursor: pointer; /* Mengubah cursor menjadi pointer saat dihover */
            border-radius: 5px; /* Membuat sudut tombol lebih bulat */
            display: inline-block; /* Tampilkan tombol di layar */
            margin-right: 10px; /* Margin kanan antara tombol */
        }

    </style>
</head>
<body>
    <div class="header">
        <img src="kop.jpeg" alt="Kop Surat">
    </div>
    <hr>
    <div class="content">
        <h3 class="bold-underline">SURAT REKOMENDASI MUTASI SISWA</h3>
        <h4>Nomor: <span id="kode_surat_output"></span></h4>
        <h5 class="tab">Yang bertanda tangan dibawah ini, Kepala Dinas Pendidikan, Kepemudaan dan Olah Raga Kota Denpasar, menerangkan:</h5>
        <p class="indent">Nama Siswa            : <span id="nama_siswa_output"></span></p>
        <p class="indent">NISN                  : <span id="nisn_output"></span></p>
        <p class="indent">Jenis Kelamin         : <span id="jenis_kelamin_output"></span></p>
        <p class="indent">Asal Sekolah Lama     : <span id="asal_sekolah_lama_output"></span></p>
        <p class="indent">Alamat                : <span id="alamat_output"></span></p>
        <p class="indent">Kabupaten/Kota        : <span id="kabupaten_output"></span></p>
        <p class="indent">Provinsi              : <span id="provinsi_output"></span></p>
        <p>Telah disetujui untuk pindah sekolah :</p>
        <p class="indent">Nama Sekolah Tujuan   : <span id="nama_sekolah_tujuan_output"></span></p>
        <p class="indent">Alasan Pindah Sekolah : <span id="alasan_output"></span></p>
        <p class="tab">dan menyatakan surat keterangan ini adalah dokumen sah sebagai bukti adanya persetujuan mutasi pada Aplikasi Dapodik semester ganjil tahun 2024/2025 di sekolah tujuan.</p>
        <p>Demikian surat keterangan ini dikeluarkan untuk dapat dipergunakan.</p>
    </div>
    <div class="signature">
        <p style="text-align: right; font-family: Arial, Times, serif;">Denpasar, <span id="tgl_output" style="font-family: Arial, Times, serif;"></span></p>
        <p style="text-align: right;">Kepala Dinas Pendidikan Kepemudaan dan Olahraga Kota Denpasar</p>
        <img src="paraf.jpeg" alt="Paraf Kepala Dinas">
        <p class="bold-underline">Drs. A.A. Gede Wiratama, M.Ag</p>
        <p style="text-align: right;">NIP. 196804041994031016</p>
    </div>

    <!-- Tombol kembali ke form -->
    <button class="back-button" onclick="window.location.href = 'form.php';">Kembali ke Form</button>

    <!-- Tombol simpan -->
    <button class="save-button" onclick="simpanSurat()">Simpan</button>

    <script>
        function simpanSurat() {
            // Simpan proses yang diperlukan di sini, misalnya penyimpanan ke database atau ke halaman konfirmasi
            // Redirect ke halaman konfirmasi.php
            window.location.href = 'konfirmasi.php';
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Ambil data dari localStorage
            var formData = JSON.parse(localStorage.getItem('formData'));

            // Menampilkan data di halaman surat.html
            document.getElementById('kode_surat_output').textContent = formData.kode_surat;
            document.getElementById('tgl_output').textContent = formData.tgl;
            document.getElementById('nama_siswa_output').textContent = formData.nama_siswa;
            document.getElementById('nisn_output').textContent = formData.nisn;
            document.getElementById('jenis_kelamin_output').textContent = formData.jenis_kelamin;
            document.getElementById('asal_sekolah_lama_output').textContent = formData.asal_sekolah_lama;
            document.getElementById('alamat_output').textContent = formData.alamat;
            document.getElementById('kabupaten_output').textContent = formData.kabupaten;
            document.getElementById('provinsi_output').textContent = formData.provinsi;
            document.getElementById('nama_sekolah_tujuan_output').textContent = formData.nama_sekolah_tujuan;
            document.getElementById('alasan_output').textContent = formData.alasan;

            // Set tanggal pada bagian tanda tangan
            var today = new Date();
            var date = today.getDate();
            var month = today.toLocaleString('default', { month: 'long' });
            var year = today.getFullYear();
            document.getElementById('tgl').textContent = `Denpasar, ${date} ${month.toUpperCase()} ${year}`;

            // Hapus data dari localStorage setelah digunakan
            localStorage.removeItem('formData');
        });
    </script>
</body>
</html>
