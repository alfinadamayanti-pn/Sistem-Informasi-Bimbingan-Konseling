<?php
include 'koneksi.php';

$kls = $_GET['kls'];

$query = mysqli_query($conn, "SELECT * FROM siswa WHERE kls_pagi = '$kls' OR kls_sore = '$kls'");

if (!$query) {
  die("Query error: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data <?php echo $kls; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-4">
  <h2>Data <?php echo $kls; ?></h2>
  <a href="index.php" class="btn btn-secondary mb-3">⬅ Kembali</a>

  <table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIS</th>
        <th>Kamar</th>
        <th>JK</th>
        <th>Kelas Pagi</th>
        <th>Kelas Sore</th>
        <th>Skor</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>
          <td>$no</td>
          <td>{$row['nama']}</td>
          <td>{$row['nis']}</td>
          <td>{$row['kamar']}</td>
          <td>{$row['jk']}</td>
          <td>{$row['kls_pagi']}</td>
          <td>{$row['kls_sore']}</td>
          <td>{$row['jumlah_sk']}</td>
        </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>
</body>
</html>
