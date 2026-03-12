<?php
require ('koneksi.php');
session_start();

if ( isset($_POST['register']) ) {
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_name'];

    $query = "INSERT INTO user_detail values ('','$userMail','$userPass','$userName', 2)";
    $result = mysqli_query($koneksi, $query);
    header('location: login.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <!-- Card untuk form registrasi -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Form Registrasi</h4>
                    </div>
                    <div class="card-body">
                        <!-- Form registrasi, aksi ke register.php -->
                        <form action="register.php" method="POST">
                            <!-- Input Email -->
                            <div class="mb-3">
                                <label for="txt_email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="txt_email" name="txt_email" required>
                            </div>
                            <!-- Input Password -->
                            <div class="mb-3">
                                <label for="txt_pass" class="form-label">Password</label>
                                <input type="password" class="form-control" id="txt_pass" name="txt_pass" required>
                            </div>
                            <!-- Input Nama Lengkap -->
                            <div class="mb-3">
                                <label for="txt_name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="txt_name" name="txt_name" required>
                            </div>
                            <!-- Tombol Register -->
                            <button type="submit" name="register" class="btn btn-primary w-100">Register</button>
                        </form>
                    </div>
                    <!-- Footer dengan link kembali ke login -->
                    <div class="card-footer text-center">
                        <small>Sudah punya akun? <a href="login.php">Login</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>


<!-- <html>
<head>
    <title>Register</title>
</head>
<body>
    <form action="register.php" method="POST">
        <p>Email: <input type="text" name="txt_email"></p>
        <p>Password: <input type="password" name="txt_pass"></p>
        <p>Nama Lengkap: <input type="text" name="txt_name"></p>
        <button type="submit" name="register">Register</button>
    </form>
    <p><a href="login.php">Kembali ke Login</a></p>
</body>
</html> -->
