<?php 


function koneksi () {
    $conn = mysqli_connect('localhost', 'root', '', 'pw2024_233040110');

return $conn;
}


function query ($query)
{

    // KONEKSI KE DATABASE
    $conn =  koneksi();

// QUERY KE TABEL MAHASISWA
$result =  mysqli_query($conn, $query);


// MENYIAPKAN DATA MAHASISWA
$rows = [];
while($row = mysqli_fetch_assoc ($result)) {
    $rows [] = $row;
}


return $rows;
}

function tambah ($data)
{
    $conn = koneksi ();



  $nama = htmlspecialchars ($data ['nama']);
  $nim = htmlspecialchars ($data ['nim']);
  $email = htmlspecialchars ($data ['email']);
  $jurusan = htmlspecialchars ($data ['jurusan']);


  $query = "INSERT INTO mahasiswa
  VALUES (null, '$nama', '$nim', '$email', '$jurusan' )";

  mysqli_query($conn, $query) or die (mysqli_error($conn));


  return mysqli_affected_rows($conn);

}


function hapus ($id)
{
    $conn = koneksi ();
    $query= "DELETE FROM mahasiswa WHERE id = '$id'";
    mysqli_query ($conn, $query ); 
    return mysqli_affected_rows($conn);
}


function ubah ($data)
{
    $conn = koneksi ();


    $id = $data['id'];
  $nama = htmlspecialchars ($data ['nama']);
  $nim = htmlspecialchars ($data ['nim']);
  $email = htmlspecialchars ($data ['email']);
  $jurusan = htmlspecialchars ($data ['jurusan']);


  $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nim = '$nim',
            email = '$email',
            jurusan = '$jurusan'
            WHERE id = $id
            ";
  mysqli_query($conn, $query) or die (mysqli_error($conn));


  return mysqli_affected_rows($conn);

}





?>