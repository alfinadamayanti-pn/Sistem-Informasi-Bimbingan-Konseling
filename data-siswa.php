<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-4">

  <h2>Data Siswa</h2>

  <table class="table table-bordered table-dark mt-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIS</th>
        <th>Kamar</th>
        <th>JK</th>
        <th>Kelas Pagi</th>
        <th>Kelas Sore</th>
        <th>Alamat</th>
        <th>Skor Negatif</th>
        <th>Skor Positif</th>
        <th>Jumlah Skor</th>
        <th>Sanksi</th>
      </tr>

    </thead>
    <tbody>
      <?php
      $no = 1;
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
          <td>$no</td>
          <td>{$row['nama']}</td>
          <td>{$row['nis']}</td>
          <td>{$row['kamar']}</td>
          <td>{$row['jk']}</td>
          <td>{$row['kls_pagi']}</td>
          <td>{$row['kls_sore']}</td>
          <td>{$row['alamat']}</td>
          <td>{$row['sk_negatif']}</td>
          <td>{$row['sk_positif']}</td>
          <td>{$row['jumlah_sk']}</td>
          <td>{$row['sanksi']}</td>
        </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>

</body>
</html>
