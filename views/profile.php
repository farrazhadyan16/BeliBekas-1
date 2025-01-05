<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Jika user belum login, arahkan ke halaman login
    header("Location: ../views/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Profile section for BeliBekas.id marketplace">
    <title>Profile Section - BeliBekas.id</title>
    <link rel="icon" type="image/svg+xml" href="../assets/icons/logo_only.svg">
</head>

<body>
    <header class="navbar" role="banner">
        <a href="dashboard.php" class="logo" aria-label="BeliBekas.id Home">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6fa8a83d82b2287a666b0e23898e0b7615a78620de1d01dbb3d6967fb67c36d3?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="BeliBekas.id Logo" width="33" height="36">
            <span><span class="text-primary-blue">Beli</span><span class="text-primary-orange">Bekas.id</span></span>
        </a>

        <nav class="nav-menu" role="navigation" aria-label="Main navigation">
            <a href="dashboard.php" class="nav-link current" aria-current="page">Home</a>
            <button class="nav-link with-dropdown" aria-expanded="false">
                Produk
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/59444321f21ff7cd10a24fa713af199a97f35b915bbd8fb0b10ce639504059f5?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="" aria-hidden="true" width="24" height="24">
            </button>
            <a href="#" class="nav-link">Tentang Kami</a>
        </nav>

        <div class="user-controls">
            <button class="search-btn" aria-label="Search">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8078b41ec0fe3376c595ddb828f65d73a14699d5cbf96954433302b524a7c6fc?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="" aria-hidden="true" width="24" height="24">
            </button>

            <div class="notifications">
                <button aria-label="keranjang" onclick="window.location.href='keranjang.php'">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/b5cbc64b84f6ebc9dbc044fe87a298be1905bb4eb30311b338f2dc684f8e14ca?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="" aria-hidden="true" width="24" height="24">
                </button>
                <button aria-label="Notifications">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2d5ec37fc7bfa66b3c6d070b1a4f4a696d2bda3c77ba92801781761ec2b0958b?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="" aria-hidden="true" width="24" height="24">
                </button>
                <button aria-label="Shopping Cart">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9bc63a87d64a8e9e3da098227e4da8069e172e6415af3ef1a0d01a5ff89d3644?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="" aria-hidden="true" width="24" height="24">
                </button>
            </div>


            <div class="user-profile">
                <button onclick="window.location.href='profile.php'" class="profile-btn" aria-label="Menu profil">
                    <img src="../assets/images/user.png" alt="" class="img-7" aria-hidden="true" width="10" height="10">
                    <span class="username"><?= $_SESSION['username']; ?></span>
                </button>
            </div>
        </div>
    </header>

    <main class="profile-content" role="main">
        <div class="profile-header">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8de9c2f8f1efcbdb1ecf7eacb44dc1a5ccd94b5eda156cc12304a7abe2d3e928?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="Profile cover image" class="cover-image">
            <div class="profile-info">
                <div class="profile-avatar">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/105396e3-7400-4ccb-b915-de966e7e5040?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="bymeeee shop logo" width="165" height="165">
                </div>
                <div class="profile-details">
                    <h1>bymeeee</h1>
                    <div class="profile-meta">
                        <span>Teknik</span>
                        <span aria-hidden="true">|</span>
                        <span>Universitas Negeri Padang</span>
                    </div>
                </div>
            </div>
        </div>
        <form class="profile-form" action="profile.php" method="POST">
            <div class="form-section">
                <label for="about">Tentang Kami</label>
                <textarea id="about" name="about" rows="4"></textarea>
            </div>

            <div class="form-section">
                <label for="major">Jurusan</label>
                <input type="text" id="major" name="major" value="Teknik">
            </div>

            <fieldset class="address-section">
                <legend>Alamat UMKM</legend>

                <div class="form-row">
                    <div class="form-group">
                        <label for="province">Provinsi</label>
                        <select id="province" name="province">
                            <option value="sumbar">Sumatera Barat</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="city">Kota/Kabupaten</label>
                        <select id="city" name="city">
                            <option value="padang-pariaman">Padang Pariaman</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="full-address">Alamat Lengkap</label>
                    <input type="text" id="full-address" name="fullAddress" value="Jalan Prof. Dr. Hamka, Air Tawar Padang, Sumatera Barat">
                </div>
            </fieldset>

            <button type="submit" class="btn-primary">Simpan</button>
        </form>
    </main>
</body>

</html>