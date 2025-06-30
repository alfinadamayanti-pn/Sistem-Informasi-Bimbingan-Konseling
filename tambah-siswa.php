<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-5">

  <h2>Tambah Data Siswa</h2>

  <form action="proses-tambah.php" method="post" class="mt-4">
    <input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>
    <input type="text" name="nis" class="form-control mb-2" placeholder="NIS" required>
    <input type="text" name="kamar" class="form-control mb-2" placeholder="Kamar" required>
    <select name="jk" class="form-control mb-2" required>
      <option value="">-- Jenis Kelamin --</option>
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
    <input type="text" name="kls_pagi" class="form-control mb-2" placeholder="Kelas Pagi" required>
    <input type="text" name="kls_sore" class="form-control mb-2" placeholder="Kelas Sore" required>
    <input type="text" name="alamat" class="form-control mb-2" placeholder="Alamat" required>
    <input type="text" name="sk_negatif" class="form-control mb-2" placeholder="Skor Negatif" required>
    <input type="text" name="sk_positif" class="form-control mb-2" placeholder="Skor Positif" required>
    <input type="text" name="jumlah_sk" class="form-control mb-2" placeholder="Jumlah Skor" required>
    <input type="text" name="sanksi" class="form-control mb-2" placeholder="Sanksi" required>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>

</body>
</html>
