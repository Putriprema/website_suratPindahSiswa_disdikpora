<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Message</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 100%;
            max-width: 900px;
        }
        .icon {
            font-size: 5rem;
            color: #28a745; /* Green color for success */
        }
        .message {
            margin-top: 20px;
            font-size: 1.5rem;
            color: #333;
        }
        .note {
            margin-top: 20px;
            font-size: 1rem;
            color: #666;
        }
        .red-text {
            color: red;
        }
        .image-container {
            margin-top: 20px;
        }
        .image-container img {
            width: 100%;
            max-width: 70px; /* Adjust the maximum width of the image as needed */
            border-radius: 8px;
        }
   </style>
</head>
<body>
    <div class="container">
    <div class="image-container">
            <img src="sukses.jpeg" alt="Success" width="400">
            <div class="caption">
        <div class="message">
            <?php echo "Surat Sudah Berhasil Di Simpan Silahkan Mengambil Surat Segera!"; ?>
        </div>
        <div class="note">
            <?php echo "<span class='red-text'>Pengambilan Surat Hanya Sebatas 1 Hari Setelah Pembuatan Surat</span>"; ?>
        </div>
            </div>
        </div>
    </div>
</body>
</html>
