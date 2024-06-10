<?php 
require 'functions.php';

$id = $_GET['id'];


$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];



if (isset ($_POST ['ubah'])) {
  
  if (ubah($_POST) > 0 ) {
    echo "<script>
    alert ('Data Berhasil Diubah!');
    document.location.href = 'index.php';
  </script>";
  }
  
} 

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container col-5">
    <h1>Ubah Data Mahasiswa </h1>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
        <div class="mb-3">
         <label for = "nama" class= "form-label">Nama</label>   
         <input type = "text" class= "form-control" id= "nama" name= "nama" value="<?= $mhs['nama'] ?>">
        </div>

        
        <div class="mb-3">
         <label for = "nama" class= "form-label">NIM</label>   
         <input type = "text" class= "form-control" id= "nim" name= "nim" value="<?= $mhs['nim'] ?>">
        </div>

        
        <div class="mb-3">
         <label for = "nama" class= "form-label">Email</label>   
         <input type = "text" class= "form-control" id= "email" name= "email" value="<?= $mhs['email'] ?>">
        </div>

        
        <div class="mb-3">
         <label for = "nama" class= "form-label">Jurusan</label>   
         <input type = "text" class= "form-control" id= "jurusan" name= "jurusan" value="<?= $mhs['jurusan'] ?>">
        </div>      

    <button type = "submit" name= "ubah" class= "btn btn-primary">Simpan Perubahan Data</button>

    </form>

  </body>
</html>