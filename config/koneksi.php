<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "belibekas";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
