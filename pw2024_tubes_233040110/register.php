<?php 

require 'functions.php';

// Mendapatkan koneksi ke database
$conn = koneksi();

if (isset($_POST["register"])) {
    // Memanggil fungsi register() dengan menyediakan data dan koneksi database
    if (register($_POST, $conn) > 0) {
        echo "<script>alert('user baru berhasil registrasi!');</script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>

    <style>

    label {
        display:block;
    }

    </style>
</head>
<body>
    <h1>regist</h1>

    <form action="" method="POST">

    <ul>
        <li>
            <label for="username">username :</table>
            <input type="text" name="username" id="username">
        </li>

        <li>
            <label for="password">password :</table>
            <input type="password" name="password" id="password">
        </li>
        
        <li>
            <label for="password2">confirm password :</table>
            <input type="password" name="password2" id="password2">
        </li>
        
        <li>
            <button type="submit" name="register">Register</button>
        </li>
        
        


    </ul>
    </form>

</body>
</html>

</body>
</html>