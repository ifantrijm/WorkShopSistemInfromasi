<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <style>
    .card-header {
      background: linear-gradient(90deg, #FA8112, #ff9f43);
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    </style>
</head>
<body>

    <?php require "koneksi.php"; ?>
    <?php include "pages/header.php"; ?>

    <div class="container-fluid ">
        <div class="row">
            
            <!-- Sidebar -->

            <?php include 'pages/sidebar.php'; ?>

            <!-- Content -->            
             <div class="col-md-9 col-lg-10 p-4">
                 <div class="card shadow">
                     <div class="card-header text-white">
                         <h5 class="mb-0">Data User</h5>
                     </div>
                     <div class="card-body">
                         <table class="table table-bordered table-striped table-hover">
                             <thead class="table-dark">
                                 <tr>
                                     <th>No</th>
                                     <th>Email</th>
                                     <th>Nama</th>
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

        </div>
    </div>

    <?php include "pages/footer.php"; ?>
    
</body>
</html>