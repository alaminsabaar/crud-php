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
    <h4>Edit Data</h4>
    <p>
        <a href="index.php">Kembali ke beranda</a>
    </p>
    <form method="POST" action="ubah.php">
        <?php

        // jika ada parameter 'id' di dalam URL
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // mengambil semua data yang memiliki 'id' yang disimpan dalam variable $id
            $ambil_data = $con->query("SELECT * FROM data WHERE id = '$id'");
            if ($ambil_data) {
                // menyimpan data dari table data di dalam variable $data
                while ($data = $ambil_data->fetch_array()) {
        ?>
                    <label>Masukkan nama </label><br>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="text" name="nama" value="<?php echo $data['nama']; ?>"> <br>
                    <button type="submit" name="update">Perbaharui data </button>
        <?php
                }
            }
        }

        ?>
    </form>
</body>

</html>