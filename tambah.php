<?php 
require 'functions.php';

//cek apakah tombol tambah sudah di tekan
if(isset($_POST['tambah'])) {
  if(tambah($_POST))
    {
      echo"<script>
            alert ('data berhasil di tambahkan');
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
  <title>Tambah data mahasiswa</title>
</head>
<body>
  <H1>Form tambah data mahasiswa</H1>
  <form action="" method="post">
    <UL>
      <li><label>
        Nama :
        <input type="text" name="nama" autofocus required>
      </label></li>
      <li><label>
        NIM :
        <input type="text" name="nim" required>
      </label></li>
      <li><label>
        Email :
        <input type="text" name="email" required>
      </label></li>
      <li><label>
        Jurusan :
        <input type="text" name="jurusan" required>
      </label></li>
      <li><label>
        Gambar : 
        <input type="text" name="gambar" required>
      </label></li>
      <li><button type="submit" name="tambah">Tambah Data</button></li>
    </UL>

  </form>
</body>
</html>