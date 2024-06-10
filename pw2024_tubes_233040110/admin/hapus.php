<?php

require '../functions.php';

$conn = koneksi();




$id = $_GET["produk_id"];


if (isset($_GET['produk_id'])) {



if (hapus($id) > 0)  {
    echo "<script>
        alert ('Data Berhasil Dihapus!');
        document.location.href = 'produk.php';
      </script>";
}

}