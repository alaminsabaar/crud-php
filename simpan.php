<?php

include "config.php";

// jika ada event POST dengan nama simpan
if (isset($_POST['simpan'])) {
    // menyimpan data nama ke variable nama
    $nama = $_POST['nama'];
    // jika nama bukan null dan banyak data tidak sama dengan 0
    if ($nama != null && count($nama) != 0) {
        // menyimpan data ke database
        $simpan_data = $con->query("INSERT INTO data VALUES(NULL, '$nama')");
        // jika @ $simpan_data berhasil
        if ($simpan_data) {
            header("location:index.php");
        } else {
            echo "Tidak bisa menyimpan.";
        }
    }
}
