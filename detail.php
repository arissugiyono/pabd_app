<<?php 
require 'functions.php';

//ambil Id dari URl 
$id = $_GET['id'];

//query berdasarkan ID
$m = query("SELECT * FROM mahasiswa WHERE id = $id")
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h3>Detail mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>" ></li>
    <li>NIM : <?= $m['nim']; ?></li>
    <li>Nama : <?= $m['nama']; ?></li>
    <li>Email :<?= $m['email']; ?></li>
    <li>Jurusan : <?= $m['jurusan']; ?></li>
    <li><a href='ubah.php?id=<?= $m['id']; ?>'>Ubah</a> <a href='hapus.php?id=<?= $m['id']; ?>' onclick="return confirm('apakah anda yakin?')">Hapus</a></li>
    <li><a href='index.php'>Kembali ke Daftar mahasiswa</a> </li>
    
  </ul>
  
</body>
</html>