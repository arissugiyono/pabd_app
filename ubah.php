<?php 
require 'functions.php';

//ambil id dari url
$id = $_GET['id'];

//jika tidak ada id di URL
if(isset($_GET['ID'])){
  header  ('loaction: index.php');
  exit;
}

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

//cek apakah tombol ubah sudah di tekan
if(isset($_POST['ubah'])) {
  if(ubah($_POST))
    {
      echo"<script>
            alert ('data berhasil di ubah');
            document.location.href='index.php'
            </script>";
    };
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah data mahasiswa</title>
</head>
<body>
  <H1>Ubah data mahasiswa</H1>
  <form action="" method="post">
    <input type="hidden" name="id" value=<?= $m['id']; ?>>
    <UL>
      <li><label>
        Nama :
        <input type="text" name="nama" autofocus required value="<?= $m['nama']; ?>">
      </label></li>
      <li><label>
        NIM :
        <input type="text" name="nim" required value="<?= $m['nim']; ?>">
      </label></li>
      <li><label>
        Email :
        <input type="text" name="email" required value="<?= $m['email']; ?>">
      </label></li>
      <li><label>
        Jurusan :
        <input type="text" name="jurusan" required value="<?= $m['jurusan']; ?>">
      </label></li>
      <li><label>
        Gambar : 
        <input type="text" name="gambar" required value="<?= $m['gambar']; ?>">
      </label></li>
      <li><button type="submit" name="ubah">Ubah Data</button></li>
    </UL>

  </form>
</body>
</html>