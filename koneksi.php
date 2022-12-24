<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "keamanan";

$koneksi =  mysqli_connect($host, $user, $pass, $db);

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
