<?php

include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hapus_data = $con->query("DELETE FROM data WHERE id = '$id'");
    if ($hapus_data) {
        header("location:index.php");
    } else {
        echo "Gagal hapus data.";
    }
}
