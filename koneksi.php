<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "biodata_zenist";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db){
    die ("gagal terhubung ke database :". mysqli_connect_error());
}
?>