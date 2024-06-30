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
            <button type="submit" class="btn btn-primary">Login</button>
            <span id="error" style="color: red; display: none;">Maaf Username atau password salah! silahkan periksa kembali</span>
        </form>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var errorElement = document.getElementById('error');
            
            if (username === 'admin' && password === 'admin123') {
                window.location.href = 'datasurat.php';
            } else {
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
    </script>
</body>
</html>
