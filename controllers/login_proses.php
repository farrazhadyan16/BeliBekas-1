<?php
session_start();
require '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password'];
    $ktm = mysqli_real_escape_string($koneksi, $_POST['ktm']); // Ambil nilai KTM

    // Contoh validasi tambahan jika diperlukan
    if (empty($ktm)) {
        echo "<script>alert('KTM wajib diisi!');</script>";
        header("Location: ../views/login/login.php");
        exit();
    }

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['ktm'] = $ktm; // Simpan KTM di sesi jika diperlukan

            if ($user['role'] == 'admin') {
                header("Location: ../views/dashboard.php");
            } elseif ($user['role'] == 'mahasiswa') {
                header("Location: ../views/dashboard.php");
            } elseif ($user['role'] == 'penjual') {
                header("Location: ../views/profileutama.php");
            }
            exit();
        } else {
            echo "<script>alert('Username atau password salah!');</script>";
            header("Location: ../views/login.php");
            exit();
        }
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
        header("Location: ../views/login.php");
        exit();
    }
}
