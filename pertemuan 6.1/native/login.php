<?php
require ('koneksi.php');
session_start();
if ( isset ($_POST['submit'])) {
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];

    if (!empty(trim($email)) && !empty(trim($pass))) {

        // select data berdasrakan username dari databse
        $query = "SELECT * FROM user_detail WHERE user_email = '$email'";
        $result = mysqli_query($koneksi, $query);
        $num = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $userVal = $row['user_email'];
        $passVal = $row['user_password'];
        $userName = $row['user_fullname'];
        $level = $row['level'];
        }
        if ($num != 0) {
            if($userVal==$email && $passVal==$pass){
                $_SESSION['user_fullname'] = $userName;
                $_SESSION['user_email'] = $userVal;
                $_SESSION['level'] = $level;                
                header('Location: home.php');
            }else {
                $error = 'user atau password salah!!';
                header('Location: login.php');                
            }
        }else {
            $error = 'user tidak ditemukan!!';
            header('Location: login.php');
        }
    }else {
        $error = 'Data tidak boleh kosong !!';
        echo $error;
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="POST">
                            <div class="mb-3">
                                <label for="txt_email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="txt_email" name="txt_email" required>
                            </div>
                            <div class="mb-3">
                                <label for="txt_pass" class="form-label">Password</label>
                                <input type="password" class="form-control" id="txt_pass" name="txt_pass" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary w-100">Sign In</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <small>Belum punya akun? <a href="register.php">Daftar</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>