<?php 
require '../functions.php';

$conn = koneksi();

if (isset ($_POST ['tambah'])) {
  
  if (tambah($_POST) > 0 ) {
    echo "<script>
    alert ('Berhasil Menambah Data!!');
    document.location.href = 'produk.php';
  </script>";
  }

}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container col-5">
    <h1>Tambah Data Produk</h1>

    <form action="" method="POST">
        <div class="mb-3">
         <label for = "namaproduk" class= "form-label">Nama Produk</label>   
         <input type = "text" class= "form-control" id= "namaproduk" name= "namaproduk" required>
        </div>

        
        <div class="mb-3">
         <label for = "deskripsi" class= "form-label">Deskripsi</label>   
         <input type = "text" class= "form-control" id= "deskripsi" name= "deskripsi">
        </div>

        
        <div class="mb-3">
         <label for = "harga" class= "form-label">Harga</label>   
         <input type = "text" class= "form-control" id= "harga" name= "harga">
        </div>

        
        <div class="mb-3">
         <label for = "stok" class= "form-label">Stok</label>   
         <input type = "text" class= "form-control" id= "stok" name= "stok">
        </div>

        <div class="mb-3">
         <label for = "nama" class= "form-label"></label>   
         <input type = "file" class= "form-control" id= "gambar" name= "gambar">
        </div>      

    <button type = "submit" name= "tambah" class= "btn btn-primary">Tambah Data</button>

    </form>

  </body>
</html>