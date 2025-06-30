<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $nip = $_POST['nip'];
  $mapel = $_POST['mapel'];

  $query = "INSERT INTO guru (nama, nip, mapel) VALUES ('$nama', '$nip', '$mapel')";
  mysqli_query($conn, $query);

  header("Location: data-guru.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tambah Guru</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-4">
  <h2>Tambah Guru</h2>
  <form method="post" class="mt-3">
    <div class="mb-3">
      <label>Nama Guru</label>
      <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>NIP</label>
      <input type="text" name="nip" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Mata Pelajaran</label>
      <input type="text" name="mapel" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</body>
</html>
