<?php

// database configuration
$db_host = "localhost"; // nama host
$db_user = "root"; // nama user
$db_password = ""; // password user
$db_name = "crud"; // nama database

// inisiasi koneksi ke database
$con = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($con->connect_error) {
    echo $con->connect_error;
}
