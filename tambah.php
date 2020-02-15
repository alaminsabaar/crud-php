<?php

// memasukkan file config ke dalam file index.php
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <h1>CRUD</h1>
    <hr>
    <h4>Tambah Data</h4>
    <p>
        <a href="index.php">Kembali ke beranda</a>
    </p>
    <form method="POST" action="simpan.php">
        <div>
            <label>Masukkan nama <br></label>
            <input type="text" name="nama"> <br>
            <button type="submit" name="simpan">Simpan nama</button>
        </div>
    </form>
</body>

</html>