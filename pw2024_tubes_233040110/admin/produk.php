<?php

require '../functions.php';

$conn = koneksi();

$products= query("SELECT * FROM produk") ;

// Tombol cari ketika ditekan
if ( isset($_POST["search"])) {
  $products = search($_POST["keyword"]);
} 






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PRODUCTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styleadmin.css">
    <script>
        function formatNumber(number) {
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }
    </script>
</head>
<body>
<div class="containerproduct">
    <h1>Produk Dashboard</h1> 

    <form action="" method="POST">

    <input type="text" name="keyword" size="30" autofocus placeholder="Cari Data Produk" autocomplete="off">
    <button type="submit" name="search">Search Data</button>
    
    
    <table class="table">
  
    <thead>
    <tr>
      <th scope="col">Nama Produk</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Gambar</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>

<?php foreach($products as $product) :  ?>
    <tr>
        <td><?= $product['nama_barang']; ?></td>
        <td><?= $product['deskripsi']; ?></td>
        <td><span id="harga"><?= $product['harga']; ?></span></td>
        <td><?= $product['stok']; ?></td>
        <td><img src="../assets/<?php echo $product['gambar']; ?>" alt="<?= $product['nama_barang']; ?>"></td>
        <td>
            <a href="ubah.php?id=<?= $product['produk_id']; ?>" class="badge text-bg-warning text-decoration-none">Ubah</a>
            <a href="hapus.php?produk_id=<?= $product['produk_id']; ?>" onclick="return confirm('yakin niihhhh???');" class="badge text-bg-danger text-decoration-none">Hapus</a>
        </td>
    </tr>
<?php endforeach; ?>

  </tbody>
</table>    
<div class="buttontambah">
<a href="tambah.php" class= "btn btn-primary">Tambah Produk</a>
</div>
    </div>
    </form>

    <script>
        var hargaElements = document.querySelectorAll("#harga");
        hargaElements.forEach(function(element) {
            var harga = parseFloat(element.textContent);
            element.textContent = formatNumber(harga);
        });
    </script>



</body>
</html>

<?php
mysqli_close($conn);
?>
