<?php
$conn = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040110");

require 'functions.php';

if (mysqli_connect_error()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Tombol cari ketika ditekan
if (isset($_POST["search"])) {
    $keyword = $_POST["keyword"];
    $products = search($keyword);
} else {
    $products = query("SELECT * FROM produk");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HANS PRODUCT</title>
    <style>
        .cardproduct {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            width: 300px;
            float: left;
            margin-left: 80px;
            background-color: #e4e9f7;
        }
        .cardproduct img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        button {
            background-color: #0000ca;
            color: white;
        }

        button:hover {
            background: blue;
            color: white;

        }
    
        h1 {
            text-align: center;
            padding-bottom  : 40px;
        }
    
        input {
            width: 40vh;
            height: 30px;    
            margin-left: 74vh;
            margin-bottom: 60px;
        }

        button {
            width: 20vh ;
            height: 30px;
        }
    
    </style>
</head>
<body>

<h1>HANS STORE PRODUCT</h1>
<form action="" method="POST">

    <input type="text" name="keyword" size="30" autofocus placeholder="Cari Data Produk" autocomplete="off">
    <button type="submit" name="search">Search Data</button>
    </form>


    <?php foreach ($products as $row) { ?>
    <div class="cardproduct">
        <img src="assets/<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama_barang']; ?>">
        <p><?php echo $row['nama_barang']; ?></p>
        <p><?php echo $row['deskripsi']; ?></p>
        <p><strong>Harga:</strong> <span class="harga"><?php echo $row['harga']; ?></span></p>
        <p><strong>Stok:</strong> <?php echo $row['stok']; ?></p>
        <!-- Tombol Order -->
        <button onclick="order(<?php echo $row['produk_id']; ?>)" <?php if ($row['stok'] == 0) echo 'disabled'; ?>>Order</button>
    </div>
<?php } ?>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var hargaElements = document.querySelectorAll(".harga");
        hargaElements.forEach(function(element) {
            var harga = parseFloat(element.textContent);
            element.textContent = formatNumber(harga);
        });
    });

    function formatNumber(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    function order(produk_id) {
        alert("Terima Kasih Anda Telah Membeli Produk dengan ID " + produk_id);
        // Tambahkan logika untuk pesanan di sini, misalnya, pengiriman data ke server.
    }
</script>

</body>
</html>

<?php mysqli_close($conn); ?>