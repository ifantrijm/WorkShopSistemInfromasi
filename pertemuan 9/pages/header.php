<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .navbar-custom {
      background: linear-gradient(90deg, #FA8112, #ff9f43);
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
  </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">

    <!-- Logo -->
    <a class="navbar-brand text-white fw-bold" href="#">
       MyDashboard
    </a>

    <!-- Toggle (mobile) -->
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">

      <!-- Kiri -->
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link text-white active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="data.php">Data</a>
        </li>
      </ul>


    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>