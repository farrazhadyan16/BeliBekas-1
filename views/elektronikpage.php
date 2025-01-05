<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Jika user belum login, arahkan ke halaman login
    header("Location: ../views/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeliBekas.id - Elektronik</title>
    <link rel="stylesheet" href="../assets/css/styleseletronik.css">
    <link rel="icon" type="image/svg+xml" href="../assets/icons/logo_only.svg">
</head>

<body>
    <nav class="navbar" aria-label="Navigation utama">
        <a href="dashboard.php">
            <div class="logo">
                <img src="../assets/icons/Logowithtext.svg" alt="Logo BeliBekas.id" class="img" width="33" height="36">
            </div>
        </a>



        <div class="menu">
            <a href="dashboard.php" class="menu-item">Home</a>
            <div class="menu-item-2">
                <span class="produk">Produk</span>
                <img src="../assets/icons/chevron-down.svg" alt="" class="img-2" aria-hidden="true">
            </div>
            <a href="/about" class="menu-item-3">Tentang Kami</a>
        </div>

        <div class="user-menu">
            <button class="search-btn" aria-label="Cari">
                <img src="../assets/icons/search.svg" alt="" class="img-3" aria-hidden="true">
            </button>

            <div class="notification-icons">
                <img src="../assets/icons/keranjang.svg" alt="Keranjang" class="img-6">
                <img src="../assets/icons/bell.svg" alt="Notifikasi" class="img-5">
                <img src="../assets/icons/chat.svg" alt="Pesan" class="img-5">
            </div>

            <div class="user-profile">
                <div class="profile-wrapper">
                    <img src="../assets/images/user.png" alt="" class="img-7">
                    <span class="username"><?= $_SESSION['username']; ?></span>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <section class="hero-section">
            <div class="hero-content">


                <div class="hero-text">
                    <h1>
                        <span class="temukan">Temukan</span>
                        <span class="yang-kamu-butuhkan">yang kamu butuhkan</span>
                    </h1>

                    <p class="hero-description">
                        Solusi elektronik bekas terpercaya untuk mahasiswa, memberikan kualitas terbaik tanpa menguras kantong.
                    </p>

                    <div class="search-box">
                        <div class="search-input">
                            <img src="../assets/icons/search.svg" alt="" class="img-10" aria-hidden="true">
                            <input type="text" placeholder="Temukan elektronik preloved terbaikmu" aria-label="Cari produk">
                        </div>
                        <button class="search-button">Cari</button>
                    </div>
                </div>

                <div class="hero-images">
                    <img src="../assets/images/beruang biru.svg" alt="Elektronik Preloved" class="img-11">
                    <img src="../assets/hero-2.png" alt="" class="img-12" aria-hidden="true">
                </div>
            </div>
        </section>

        <section class="products-grid" aria-label="Daftar Produk">
            <article class="product-card">
                <img src="../assets/images/setrika.svg" alt="Setrika Miyako" class="product-img">
                <div class="product-info">
                    <h2>Setrika Miyako</h2>
                    <p class="price">Rp 50.000,-</p>
                </div>
            </article>

            <article class="product-card">
                <img src="../assets/images/kipas baymax.svg" alt="Kipas Angin Baymax" class="product-img">
                <div class="product-info">
                    <h2>Kipas Angin Baymax</h2>
                    <p class="price">Rp 20.000,-</p>
                </div>
            </article>

            <article class="product-card">
                <img src="../assets/images/keyboard.svg" alt="Keyboard" class="product-img">
                <div class="product-info">
                    <h2>Keyboard</h2>
                    <p class="price">Rp 45.000,-</p>
                </div>
            </article>

            <article class="product-card">
                <img src="../assets/images/kipas mini.svg" alt="Kipas Angin Mini" class="product-img">
                <div class="product-info">
                    <h2>Kipas Angin Mini</h2>
                    <p class="price">Rp 20.000,-</p>
                </div>
            </article>

            <article class="product-card">
                <img src="../assets/images/laptop.svg" alt="Laptop" class="product-img">
                <div class="product-info">
                    <h2>Laptop</h2>
                    <p class="price">Rp 5.000.000,-</p>
                </div>
            </article>

            <article class="product-card">
                <img src="../assets/images/panci listrik.svg" alt="Panci Listrik" class="product-img">
                <div class="product-info">
                    <h2>Panci Listrik</h2>
                    <p class="price">Rp 20.000,-</p>
                </div>
            </article>

            <article class="product-card">
                <img src="../assets/images/setrika2.svg" alt="Setrika Maspion" class="product-img">
                <div class="product-info">
                    <h2>Setrika Maspion</h2>
                    <p class="price">Rp 45.000,-</p>
                </div>
            </article>

            <article class="product-card">
                <img src="../assets/images/panci.svg" alt="Panci Listrik" class="product-img">
                <div class="product-info">
                    <h2>Panci Listrik</h2>
                    <p class="price">Rp 80.000,-</p>
                </div>
            </article>

            <article class="product-card">
                <img src="../assets/images/catokan.svg" alt="Catokan" class="product-img">
                <div class="product-info">
                    <h2>Catokan</h2>
                    <p class="price">Rp 80.000,-</p>
                </div>
            </article>

            <article class="product-card">
                <img src="../assets/images/catokan2.svg" alt="Catokan Curly" class="product-img">
                <div class="product-info">
                    <h2>Catokan Curly</h2>
                    <p class="price">Rp 50.000,-</p>
                </div>
            </article>

            <article class="product-card">
                <img src="../assets/images/hairdrayer.svg" alt="Hairdryer" class="product-img">
                <div class="product-info">
                    <h2>Hairdryer</h2>
                    <p class="price">Rp 80.000,-</p>
                </div>
            </article>

            <article class="product-card">
                <img src="../assets/images/setrika3.svg" alt="Setrika Philips" class="product-img">
                <div class="product-info">
                    <h2>Setrika Philips</h2>
                    <p class="price">Rp 50.000,-</p>
                </div>
            </article>

            <article class="product-card">
                <img src="../assets/images/iphone.svg" alt="iPhone 14 Plus" class="product-img">
                <div class="product-info">
                    <h2>iPhone 14 Plus 12GB 256GB 512GB</h2>
                    <p class="price">Rp 15.000.000,-</p>
                </div>
            </article>

            <article class="product-card">
                <img src="../assets/images/headphone.svg" alt="Headphone KIIP" class="product-img">
                <div class="product-info">
                    <h2>Headphone KIIP</h2>
                    <p class="price">Rp 60.000,-</p>
                </div>
            </article>

            <article class="product-card">
                <img src="../assets/images/digicam.svg" alt="Digicam" class="product-img">
                <div class="product-info">
                    <h2>Digicam</h2>
                    <p class="price">Rp 200.000,-</p>
                </div>
            </article>

            <article class="product-card">
                <img src="../assets/images/mause.svg" alt="Mouse Gaming" class="product-img">
                <div class="product-info">
                    <h2>Mouse Gaming</h2>
                    <p class="price">Rp 50.000,-</p>
                </div>
            </article>
        </section>
    </main>
</body>

</html>