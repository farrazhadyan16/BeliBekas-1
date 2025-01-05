<?php
require '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $ktm = mysqli_real_escape_string($koneksi, $_POST['ktm']);
    $notelp = mysqli_real_escape_string($koneksi, $_POST['notelp']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password
    $role = mysqli_real_escape_string($koneksi, $_POST['role']);

    // Query untuk memasukkan data ke tabel users
    $query = "INSERT INTO users (username, email, KTM, notelp, password, role) VALUES ('$username', '$email', '$ktm', '$notelp', '$password', '$role')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: ../views/login.php?message=Registrasi berhasil");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
<?php
require '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $ktm = mysqli_real_escape_string($koneksi, $_POST['ktm']);
    $notelp = mysqli_real_escape_string($koneksi, $_POST['notelp']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password
    $role = mysqli_real_escape_string($koneksi, $_POST['role']);

    // Query untuk memasukkan data ke tabel users
    $query = "INSERT INTO users (username, email, KTM, notelp, password, role) VALUES ('$username', '$email', '$ktm', '$notelp', '$password', '$role')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: ../views/login.php?message=Registrasi berhasil");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
