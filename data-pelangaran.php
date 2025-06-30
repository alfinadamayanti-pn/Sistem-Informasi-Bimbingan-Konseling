<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM pelanggaran");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Pelanggaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-4">

  <h2>Data Pelanggaran</h2>
  <a href="tambah-pelanggaran.php" class="btn btn-success mb-3">+ Tambah Pelanggaran</a>

  <table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Jenis</th>
        <th>Poin</th>
        <th>Tanggal</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
          <td>{$no}</td>
          <td>{$row['nama_siswa']}</td>
          <td>{$row['jenis']}</td>
          <td>{$row['poin']}</td>
          <td>{$row['tanggal']}</td>
        </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>

</body>
</html>
