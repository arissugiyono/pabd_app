<?php 
require 'functions.php';


//mengambil id dari url 
$id =$_GET['id'];


//cek apakah tombol hapus sudah di klik
  if(hapus($id))
    {
      echo"<script>
            alert ('data berhasil di hapus');
            document.location.href='index.php'
            </script>";
    };
?>