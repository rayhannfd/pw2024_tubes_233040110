<?php 
require 'functions.php';

//JIKA TOMBOL TAMBAH DITEKAN
if (isset ($_POST ['tambah'])) {
  //JIKA DATA BERHASIL DITAMBAHKAN
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container col-5">
    <h1>Tambah Data Mahasiswa </h1>

    <form action="" method="POST">
        <div class="mb-3">
         <label for = "nama" class= "form-label">Nama</label>   
         <input type = "text" class= "form-control" id= "nama" name= "nama" required>
        </div>

        
        <div class="mb-3">
         <label for = "nama" class= "form-label">NIM</label>   
         <input type = "text" class= "form-control" id= "nim" name= "nim">
        </div>

        
        <div class="mb-3">
         <label for = "nama" class= "form-label">Email</label>   
         <input type = "text" class= "form-control" id= "email" name= "email">
        </div>

        
        <div class="mb-3">
         <label for = "nama" class= "form-label">Jurusan</label>   
         <input type = "text" class= "form-control" id= "jurusan" name= "jurusan">
        </div>      

    <button type = "submit" name= "tambah" class= "btn btn-primary">Tambah Data</button>

    </form>

  </body>
</html>