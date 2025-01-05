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
    <meta name="description" content="Belanja produk kecantikan preloved berkualitas untuk mahasiswa">
    <title>Beauty Preloved Section - BeliBekas.id</title>
    <link rel="stylesheet" href="../assets/css/stylescantik.css">
    <link rel="icon" type="image/svg+xml" href="../assets/icons/logo_only.svg">
</head>

<body>
    <header>
        <nav class="navbar" aria-label="Main navigation">
            <div class="logo">
                <img src="../assets/images/logo.png" alt="BeliBekas.id Logo" class="logo-img" width="33" height="36">
                <div class="brand-text">
                    <span class="brand-blue">Beli</span>
                    <span class="brand-orange">Bekas.id</span>
                </div>
            </div>

            <div class="menu" role="menubar">
                <a href="dashboard.php" class="menu-item" role="menuitem">Home</a>
                <div class="menu-item active" role="menuitem" aria-haspopup="true">
                    <span>Produk</span>
                    <img src="../assets/images/dropdown.svg" alt="" class="dropdown-icon" aria-hidden="true" width="24" height="24">
                </div>
                <a href="/about" class="menu-item" role="menuitem">Tentang Kami</a>
            </div>

            <div class="user-section">
                <button class="search-btn" aria-label="Cari produk">
                    <img src="../assets/images/search.svg" alt="" aria-hidden="true" width="24" height="24">
                </button>

                <div class="action-icons">
                    <button aria-label="Notifikasi">
                        <img src="../assets/images/notification.svg" alt="" aria-hidden="true" width="24" height="24">
                    </button>
                    <button aria-label="Pesan">
                        <img src="../assets/images/message.svg" alt="" aria-hidden="true" width="24" height="24">
                    </button>
                    <button aria-label="Keranjang belanja">
                        <img src="../assets/images/cart.svg" alt="" aria-hidden="true" width="24" height="24">
                    </button>
                </div>

                <div class="user-profile">
                    <div class="profile-info">
                        <img src="../assets/images/avatar.jpg" alt="Foto profil Ranny Erzitha" class="avatar" width="36" height="36">
                        <span class="username"><?= $_SESSION['username']; ?></span>
                    </div>
                    <button class="menu-toggle" aria-label="Menu pengguna" aria-expanded="false">
                        <img src="../assets/images/menu.svg" alt="" aria-hidden="true" width="24" height="24">
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <main id="main-content">
        <section class="hero-section" aria-labelledby="hero-title">
            <div class="hero-content">
                <h1 id="hero-title">Beauty Preloved Mahasiswa</h1>
                <p>Dapatkan produk kecantikan preloved berkualitas tanpa menguras kantong.
                    Pilihan makeup yang cocok untuk tampilan sehari-hari di kampus dan ruang kosmu</p>
            </div>
            <img src="../assets/images/hero-banner.jpg"
                alt="Koleksi produk kecantikan preloved yang tersedia"
                class="hero-image"
                width="1000"
                height="500">
        </section>

        <section class="product-grid" aria-label="Daftar produk">
            <div class="product-container">
                <article class="product-card">
                    <img src="../assets/images/product1.jpg"
                        alt="Eyeshadow Pinkflash dalam kemasan"
                        class="product-image"
                        width="260"
                        height="265">
                    <div class="product-info">
                        <h2>Eyeshadow Pinkflash</h2>
                        <p class="price">Rp 40.000,-</p>
                        <button class="add-to-cart" aria-label="Tambah Eyeshadow Pinkflash ke keranjang">
                            Tambah ke Keranjang
                        </button>
                    </div>
                </article>

                <article class="product-card">
                    <img src="../assets/images/product2.jpg"
                        alt="Azarine Hydramax-C Sunscreen dalam botol"
                        class="product-image"
                        width="260"
                        height="265">
                    <div class="product-info">
                        <h2>Azarine Hydramax-C Sunscreen Serum SPF50 PA++++ 40ml</h2>
                        <p class="price">Rp 20.000,-</p>
                        <button class="add-to-cart" aria-label="Tambah Azarine Sunscreen ke keranjang">
                            Tambah ke Keranjang
                        </button>
                    </div>
                </article>

                <article class="product-card">
                    <img src="../assets/images/product3.jpg"
                        alt="Facetology Triple Care Sunscreen dalam kemasan"
                        class="product-image"
                        width="260"
                        height="265">
                    <div class="product-info">
                        <h2>Facetology Triple Care Sunscreen</h2>
                        <p class="price">Rp 45.000,-</p>
                        <button class="add-to-cart" aria-label="Tambah Facetology Sunscreen ke keranjang">
                            Tambah ke Keranjang
                        </button>
                    </div>
                </article>

                <article class="product-card">
                    <img src="../assets/images/product4.jpg"
                        alt="YSL Luminous Matte Cushion Foundation dalam kemasan"
                        class="product-image"
                        width="260"
                        height="265">
                    <div class="product-info">
                        <h2>YSL Luminous Matte Cushion Foundation</h2>
                        <p class="price">Rp 200.000,-</p>
                        <button class="add-to-cart" aria-label="Tambah YSL Cushion Foundation ke keranjang">
                            Tambah ke Keranjang
                        </button>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <footer class="site-footer" role="contentinfo">
        <p>&copy; 2024 BeliBekas.id. Hak cipta dilindungi.</p>
    </footer>
    <script src="../assets/js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>