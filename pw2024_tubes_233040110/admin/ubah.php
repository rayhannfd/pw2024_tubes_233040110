<?php 
require '../functions.php';

$conn = koneksi();

$id = $_GET['id'];

$produk = query("SELECT * FROM produk WHERE produk_id = $id")[0];

if (isset ($_POST['ubah'])) {

  if (ubah($_POST) > 0) {
    echo "<script>
    alert ('Data Berhasil Diubah!');
    document.location.href = 'ubah.php';  
    </script>";
  }
  
} 

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container col-5">
    <h1>Ubah Produk </h1>

    <form action="" method="POST">
    <input type="hidden" name="id" value="<?=$produk['produk_id']; ?>">


        <div class="mb-3">
         <label for="namaproduk" class="form-label">Nama Produk</label>   
         <input type="text" class="form-control" id="namaproduk" name="namaproduk" value="<?= $produk['nama_barang'] ?>">
        </div>

        
        <div class="mb-3">
         <label for="deskripsi" class="form-label">Deskripsi</label>   
         <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $produk['deskripsi'] ?>">
        </div>

        
        <div class="mb-3">
         <label for="harga" class="form-label">Harga</label>   
         <input type="text" class="form-control" id="harga" name="harga" value="<?= $produk['harga'] ?>">
        </div>

        
        <div class="mb-3">
         <label for="stok" class="form-label">Stok</label>   
         <input type="text" class="form-control" id="stok" name="stok" value="<?= $produk['stok'] ?>">
        </div>

        <div class="mb-3">
         <label for="gambar" class="form-label">Gambar</label>   
         <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $produk['gambar'] ?>">
        </div>      

    <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>

    </form>

  </body>
</html>
