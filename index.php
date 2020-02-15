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
    <h4>Daftar Nama</h4>
    <p>
        <a href="tambah.php">Tambah Data (+)</a>
    </p>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Tools</th>
        </tr>
        <!-- 
        Kode dibawah digunakan untuk menampilkan data yang tersimpan dalam database
        -->
        <?php

        /*
                maksud query dibawah ini adalah "pilih semua dari table data di urutkan oleh 'id' dari data tertinggi ke data terendah"
                @ SELECT = pilih
                @ * = semua data
                @ FROM = dari
                @ data = nama table di database crud (cek di file config)
                @ ORDER BY id = urutkan oleh id (id adalah nama field di table data)
                @ DESC = Descending
            */
        $ambil_data = $con->query("SELECT * FROM data ORDER BY id DESC");
        $hitung_data = $ambil_data->num_rows; // menghitung jumlah baris data di dalam database

        // jika data kurang dari atau sama dengan 0 
        if ($hitung_data <= 0) {
        ?>
            <tr>
                <td colspan="3">Data Kosong</td>
            </tr>
            <?php
            // jika data ada atau lebih dari 0
        } else {
            $no = 1; // untuk numbering
            // variable @ $data menyimpan data yang diambil dari table data dan dikonversi ke Array
            while ($data = $ambil_data->fetch_array()) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a> | <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
                </tr>
        <?php
            }
        }

        ?>
    </table>
</body>

</html>