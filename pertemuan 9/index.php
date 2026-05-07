<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap + Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fa;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            transition: 0.3s;
        }
    </style>
</head>
<body>

<?php include "pages/header.php"; ?>

<div class="container-fluid">
    <div class="row">
        
        <!-- Sidebar -->
        <?php include 'pages/sidebar.php'; ?>

        <!-- Content -->
        <div class="col-md-9 col-lg-10 p-4">
            
            <!-- Title -->
            <h3 class="mb-4">Dashboard</h3>

            <!-- Cards -->
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card shadow-sm card-hover">
                        <div class="card-body">
                            <h5><i class="bi bi-people"></i> Data User</h5>
                            <h3>120</h3>
                            <p class="text-muted">Total user</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm card-hover">
                        <div class="card-body">
                            <h5><i class="bi bi-file-earmark"></i> Data Laporan</h5>
                            <h3>45</h3>
                            <p class="text-muted">Total laporan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm card-hover">
                        <div class="card-body">
                            <h5><i class="bi bi-cash"></i> Keuangan</h5>
                            <h3>Rp 2jt</h3>
                            <p class="text-muted">Total pemasukan</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<?php include "pages/footer.php"; ?>

</body>
</html>