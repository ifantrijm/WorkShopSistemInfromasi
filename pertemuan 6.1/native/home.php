<?php
require ("koneksi.php");
session_start();
$email = $_SESSION['user_fullname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Dashboard User</span>
            <span class="text-white">
                Login sebagai : <?php echo $email; ?>
            </span>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Data User</h5>
            </div>
            <div class="card-body">
                <h4 class="mb-3">
                    Selamat Datang <?php echo $email; ?> 👋
                </h4>
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query  = "SELECT * FROM user_detail";
                        $result = mysqli_query($koneksi, $query);
                        $no     = 1;
                        while ($row = mysqli_fetch_array($result)) {
                            $userMail = $row['user_email'];
                            $userName = $row['user_fullname'];
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $userMail; ?></td>
                                <td><?php echo $userName; ?></td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>