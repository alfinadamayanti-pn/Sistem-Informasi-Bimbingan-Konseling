<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'koneksi.php';

$query_siswa = mysqli_query($conn, "SELECT COUNT(*) AS total_siswa FROM siswa");
$data_siswa = mysqli_fetch_assoc($query_siswa);
$total_siswa = $data_siswa['total_siswa'];

$query_guru = mysqli_query($conn, "SELECT COUNT(*) AS total_guru FROM guru");
$data_guru = mysqli_fetch_assoc($query_guru);
$total_guru = $data_guru['total_guru'];

$q3 = mysqli_query($conn, "SELECT COUNT(*) AS total_pelanggaran FROM pelanggaran");
$d3 = mysqli_fetch_assoc($q3);
$total_pelanggaran = $d3['total_pelanggaran'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIBK - Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #1e1e2f;
      color: white;
    }
    .sidebar {
      width: 250px;
      height: 100vh;
      background-color: #151528;
      position: fixed;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 10px 15px;
    }
    .sidebar a:hover {
      background-color: #343a40;
    }
    .content {
      margin-left: 250px;
      padding: 20px;
    }
    .card {
      background-color: #2b2d42;
    }
    footer {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 250px;
      font-size: 0.8rem;
      text-align: center;
      padding: 10px;
      color: #ccc;
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <h4 class="text-center mt-3">SIBK</h4>
    <p class="text-center small">SISTEM INFORMASI BIMBINGAN KONSELING</p>
    <a href="#" class="btn btn-success w-80 mb-4">➕ Kasus Baru</a>
    <a href="#" class="nav-link"><i class="bi bi-house-door"></i> Dashboard</a>

    <a class="nav-link" data-bs-toggle="collapse" href="#dataMaster"><i class="bi bi-box"></i> Data Master</a>
    <div class="collapse" id="dataMaster">
      <a href="data-guru.php" class="nav-link ms-4"><i class="bi bi-person-badge"></i> Guru</a>
      <a href="#" class="nav-link ms-4" href="data-siswa.php" class="nav-link ms-4">
  <i class="bi bi-people-fill"></i> Siswa <a href="data-siswa.php" >
  <i class="bi bi-person-lines-fill"></i> Lihat Semua Siswa
</a>
<a href="tambah-siswa.php" class="btn btn-success mb-3">+ Tambah Siswa</a>
</a>
    </div>

    <a class="nav-link" data-bs-toggle="collapse" href="#kelas"><i class="bi bi-person"></i> Kelas</a>
    <div class="collapse" id="kelas">
<a class="nav-link ms-4" href="kelas.php?kls=Kelas 1">Kelas 1</a>
<a class="nav-link ms-4" href="kelas.php?kls=Kelas 2">Kelas 2</a>
<a class="nav-link ms-4" href="kelas.php?kls=Kelas 3">Kelas 3</a>

    </div>

    <a class="nav-link" data-bs-toggle="collapse" href="#pelanggaran"><i class="bi bi-x-circle"></i> Pelanggaran</a>
    <div class="collapse" id="pelanggaran"> <a href="data-pelangaran.php" class="nav-link ms-4"><i class="bi bi-person-badge"></i> Pelanggaran</a>
    </div>

  

    <footer>
      Copyright © 2025. SIBK by ALFINA DAMAYANTI
    </footer>
  </div>

  <div class="content">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded mb-4">
      <div class="container-fluid">
        <input class="form-control me-2 w-50" type="search" placeholder="Search anything...">
        <div class="d-flex align-items-center">
          <i class="bi bi-bell me-3"></i>
          <i class="bi bi-gear me-3"></i>
          <img src="pinot.JPG" class="rounded-circle" alt="Foto Alfina" width="40" height="40">
        </div>
      </div>
    </nav>

    <h3>Dashboard</h3>
    <p>SELAMAT DATANG DI SISTEM INFORMASI BIMBINGAN KONSELING</p>

    <div class="row">
      <div class="col-md-4">
        <div class="card text-white mb-3">
          <div class="card-body">
            <h5>Total Siswa</h5>
            <h2><?php echo $total_siswa; ?></h2>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white mb-3">
          <div class="card-body">
            <h5>Total Guru</h5>
<h2><?php echo $total_guru; ?></h2>

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white mb-3">
          <div class="card-body">
            <h5>Pelanggaran</h5>
<h2><?php echo $total_pelanggaran; ?></h2>

          </div>
        </div>
      </div>
    </div>
  </div>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
