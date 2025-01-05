<?php
require '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil dan membersihkan data input
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $ktm = mysqli_real_escape_string($koneksi, $_POST['ktm']);
    $notelp = mysqli_real_escape_string($koneksi, $_POST['notelp']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password
    $role = mysqli_real_escape_string($koneksi, $_POST['role']); // Akan selalu 'penjual'

    // Query untuk memasukkan data ke tabel users
    $query = "INSERT INTO users (username, email, KTM, notelp, password, role) 
            VALUES ('$username', '$email', '$ktm', '$notelp', '$password', '$role')";

    if (mysqli_query($koneksi, $query)) {
        // Redirect ke halaman login dengan pesan sukses
        header("Location: ../views/register_penjual_2.php?message=Registrasi berhasil");
        exit();
    } else {
        // Jika terjadi error, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    // Jika bukan method POST, redirect ke halaman registrasi
    header("Location: ../views/register_penjual.php");
    exit();
}
