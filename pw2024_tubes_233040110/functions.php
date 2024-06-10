<?php 

function koneksi () {
    $conn = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040110');
    return $conn;
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function register($data) {
    $conn = koneksi(); 
    
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    if($password !== $password2) {
        echo "<script>
                alert('Password tidak sesuai!');
              </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    
    $query = "INSERT INTO users
  VALUES (null, '$username','$password',)";

    mysqli_query($conn, $query) or die (mysqli_error($conn));



    return mysqli_affected_rows($conn);

}



function tambah ($data)
{
    $conn = koneksi ();



  $namaproduk = htmlspecialchars ($data['namaproduk']);
  $deskripsi = htmlspecialchars ($data['deskripsi']);
  $harga = htmlspecialchars ($data['harga']);
  $stok = htmlspecialchars ($data['stok']);
  $gambar = htmlspecialchars ($data['gambar']);


  $query = "INSERT INTO produk
  VALUES (null, '$namaproduk', '$deskripsi', '$harga', '$stok', '$gambar' )";

  mysqli_query($conn, $query) or die (mysqli_error($conn));


  return mysqli_affected_rows($conn);

}


function hapus ($id)
{
    $conn = koneksi ();
    $query= "DELETE FROM produk WHERE produk_id = '$id'";
    mysqli_query ($conn, $query ); 
    return mysqli_affected_rows($conn);
}


function ubah ($data)
{
    $conn = koneksi();


    $id = $data['id'];
    $namaproduk = htmlspecialchars ($data ['namaproduk']);
    $deskripsi = htmlspecialchars ($data ['deskripsi']);
    $harga = htmlspecialchars ($data ['harga']);
    $stok = htmlspecialchars ($data ['stok']);
    $gambar = htmlspecialchars ($data ['gambar']);


    $query = "UPDATE produk SET
    nama_barang = '$namaproduk',
    deskripsi = '$deskripsi',
    harga = '$harga',
    stok = '$stok',
    gambar = '$gambar' 
    WHERE produk_id = '$id'
    ";

            
            
  mysqli_query($conn, $query) or die (mysqli_error($conn));


  return mysqli_affected_rows($conn);

}


function search($keyword) {
    $query = "SELECT * FROM produk
              WHERE
              nama_barang LIKE '%$keyword%' OR
              deskripsi  LIKE '%$keyword%' OR
              harga LIKE '%$keyword%' 
              ";

    return query($query);
}


function getProducts($conn) {
    $query = "SELECT * FROM produk";
    $result = mysqli_query($conn, $query);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $products;
}


function getUsers($conn) {
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $users;
}







?>
