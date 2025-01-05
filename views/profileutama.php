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
    <title>Profile Section</title>
    <link rel="stylesheet" href="../assets/css/styles1.css">
    <link rel="icon" type="image/svg+xml" href="../assets/icons/logo_only.svg">
</head>

<body>
    <div class="profile">
        <nav class="navbar" role="navigation">
            <div class="logo">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e925cc7ac5e88e3de33e833735a513370d25fc4ad9ce0da7e2a2c58c2b25beb1?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="Company Logo" class="img">
                <div>
                    <span class="logo-text logo-text-blue">Beli</span>
                    <span class="logo-text logo-text-orange">Bekas.id</span>
                </div>
            </div>
            <div class="menu">
                <div class="menu-item">Home</div>
                <div class="menu-item-2">
                    <div class="label">Produk</div>
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b33a502c2a9f505157d1daff452820b7fa4fc3f0d3d74427ddf85de7f011d67e?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="Product Menu Icon" class="img-2">
                </div>
                <div class="menu-item-3">Tentang Kami</div>
            </div>
            <div class="user-actions">
                <div class="search-container">
                    <div class="search-icon">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8078b41ec0fe3376c595ddb828f65d73a14699d5cbf96954433302b524a7c6fc?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="Search Icon" class="icon">
                    </div>
                </div>
                <div class="notification-icons">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b5cbc64b84f6ebc9dbc044fe87a298be1905bb4eb30311b338f2dc684f8e14ca?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="Notification" class="icon">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/bf38074b94243a83ea34e205a44f9ad311feec8ce97f1a5a7c216f3a36c278eb?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="Messages" class="icon">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9bc63a87d64a8e9e3da098227e4da8069e172e6415af3ef1a0d01a5ff89d3644?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="Settings" class="icon">
                </div>
                <div class="user-profile">
                    <div class="user-info">
                        <img loading="lazy" src="../assets/images/user.png" alt="User Avatar" class="avatar">
                        <span class="username"><?= $_SESSION['username']; ?></span>
                        <span class="username" onclick="window.location.href='../controllers/logout.php'" style="cursor: pointer;">Keluar</span>
                    </div>
                </div>
            </div>
        </nav>
        <main class="main-content">
            <section class="profile-header">
                <div class="profile-title">
                    <h1>Profile</h1>
                    <p>Manage Profil</p>
                </div>
                <button class="edit-button">Edit Profile</button>
            </section>
            <section class="profile-details">
                <div class="profile-banner">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d0bc742612483542a428d59559602ca46b6f531d05a87b4b081a54d1be33e798?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="Profile Banner" class="banner-image">
                    <div class="profile-info">
                        <div class="profile-photo">
                            <img loading="lazy" src="../assets/images/user.png" alt="Profile Photo" class="photo">
                        </div>
                        <div class="profile-text">
                            <h2 class="username"><?= $_SESSION['username']; ?></class=>
                            </h2>
                            <div class="education">
                                <span>Teknik</span>
                                <span class="separator">|</span>
                                <span>Universitas Negeri Padang</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-content">
                    <aside class="location-card">
                        <h3>Alamat</h3>
                        <div class="address">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e7e0ebcb3cfd8473c157a8a779070fbb1b625e5efd5342f0b9ac9928fc327e24?placeholderIfAbsent=true&apiKey=a00ee8f8e521438eacc418366074cc10" alt="Location Icon" class="location-icon">
                            <p>Jalan Prof. Dr. Hamka, Air Tawar Padang, Sumatera Barat</p>
                        </div>
                    </aside>
                    <article class="about-section">
                        <h3>Tentang Kami</h3>
                        <p>Lorem ipsum dolor sit amet consectetur. Morbi lobortis enim phasellus id ut. Ac at felis nullam commodo auctor. Bibendum amet etiam sem sed elementum cursus. Risus pharetra vel facilisis dictum interdum duis urna. Ullamcorper condimentum amet viverra sed sed vel volutpat cursus vitae.</p>
                        <p>Ipsum quam natoque amet pulvinar eget iaculis in. Rhoncus tortor feugiat hac gravida arcu blandit. Cursus lobortis est vitae risus. Convallis a iaculis rhoncus ullamcorper tempus dictum massa. Quis nibh vitae molestie pellentesque enim dignissim morbi proin. Tortor maecenas sed elementum magna. Consectetur consectetur aliquam at cras vehicula nulla hac nisi. Ac augue pellentesque viverra porttitor praesent ullamcorper volutpat. Placerat nibh integer sed arcu morbi amet ultrices sit sit. Faucibus lorem viverra viverra diam quisque pharetra. Felis viverra gravida diam facilisis diam sit. Vitae vestibulum eu lectus platea nisl sagittis vel.</p>
                    </article>
                </div>
            </section>
        </main>
    </div>
</body>

</html>