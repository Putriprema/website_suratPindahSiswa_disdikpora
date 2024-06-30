<?php
session_start();


// Proses form jika method POST digunakan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Misalnya, cek apakah username dan password sesuai
    if ($username === 'admin' && $password === 'admin123') {
        // Set session jika login sukses
        $_SESSION['loggedin'] = true;
        // Redirect ke halaman rekapsurat.php
        header('Location: rekapsurat.php');
        exit;
    } else {
        // Tampilkan pesan error jika login gagal
        $error = "Maaf, username atau password salah. Silakan coba lagi.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Login Admin</h2>
        <form id="loginForm" autocomplete="off" method="post" action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                <input type="checkbox" id="togglePassword"> Show Password
            </div>
            <button type="submit" class="btn btn-primary" id="loginButton" disabled>Login</button>
            <span id="error" style="color: red; display: none;">Maaf Username atau password salah! silahkan periksa kembali</span>
        </form>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var errorElement = document.getElementById('error');
            
            if (username === 'admin' && password === 'admin123') {
                // Redirect to rekapsurat.php if login is successful
                window.location.href = 'rekapsurat.php';
            } else {
                // Show error message and prevent form submission
                errorElement.style.display = 'block';
                event.preventDefault();
            }
        });

        document.getElementById('togglePassword').addEventListener('change', function() {
            var passwordInput = document.getElementById('password');
            if (this.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });

        // Enable/disable login button based on password input
        document.getElementById('password').addEventListener('input', function() {
            var password = this.value;
            var loginButton = document.getElementById('loginButton');
            
            if (password === 'admin123') {
                loginButton.disabled = false;
            } else {
                loginButton.disabled = true;
            }
        });
    </script>
</body>
</html>
