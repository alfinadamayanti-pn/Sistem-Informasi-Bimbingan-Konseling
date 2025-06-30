<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama_siswa'];
  $jenis = $_POST['jenis'];
  $poin = $_POST['poin'];
  $tanggal = $_POST['tanggal'];

  $query = "INSERT INTO pelanggaran (nama_siswa, jenis, poin, tanggal) 
            VALUES ('$nama', '$jenis', '$poin', '$tanggal')";
  mysqli_query($conn, $query);
  $result = mysqli_query($conn, $query);

if (!$result) {
  echo "Gagal menambahkan pelanggaran: " . mysqli_error($conn);
  exit;
}


  header("Location: data-pelanggaran.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tambah Pelanggaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-4">
  <h2>Tambah Pelanggaran</h2>
  <form method="post">
    <div class="mb-3">
      <label>Nama Siswa</label>
      <input type="text" name="nama_siswa" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Jenis Pelanggaran</label>
      <input type="text" name="jenis" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Poin</label>
      <input type="number" name="poin" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Tanggal</label>
      <input type="date" name="tanggal" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</body>
</html>
