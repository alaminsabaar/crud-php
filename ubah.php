<?php

include "config.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    if ($nama != null) {
        // query untuk memperbarui data dimana data yang diperbarui adalah data yang memiliki id yang disimpan dalam variable $id
        $perbarui_data = $con->query("UPDATE data SET nama = '$nama' WHERE id = '$id'");
        if ($perbarui_data) {
            header("location:index.php");
        } else {
            echo "Data gagal diperbarui";
        }
    }
}
