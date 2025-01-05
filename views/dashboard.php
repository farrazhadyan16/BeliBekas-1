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
    <meta name="description" content="BeliBekas.id - Marketplace barang bekas berkualitas dengan harga terjangkau">
    <title>Dashboard - BeliBekas.id</title>
    <link rel="stylesheet" href="../assets/css/stylesindex.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="../assets/icons/logo_only.svg">
</head>

<body>
    <div class="dashboard">
        <nav class="navbar" aria-label="Main navigation">
            <div class="logo">
                <img src="../assets/images/Logoonly.svg" alt="Logo BeliBekas.id" class="img" width="33" height="36">
                <div>
                    <span class="logo-text logo-text-blue">Beli</span>
                    <span class="logo-text logo-text-orange">Bekas.id</span>
                </div>
            </div>

            <div class="menu" role="navigation">
                <a href="dashboard.php" class="menu-item" aria-current="page">Home</a>
                <button class="menu-item-2" aria-haspopup="true" aria-expanded="false">
                    <span class="label">Produk</span>
                    <img src="../assets/icons/chevron-down.svg" alt="" class="img-2" aria-hidden="true" width="24" height="24">
                </button>
                <a href="about.php" class="menu-item-3">Tentang Kami</a>
            </div>

            <div class="user-actions">
                <button class="search-button" aria-label="Cari">
                    <img src="../assets/icons/search.svg" alt="" class="img-3" aria-hidden="true" width="24" height="24">
                </button>

                <div class="notification-icons">
                    <button onclick="window.location.href='#'" aria-label="Notifikasi" class="notification-btn">
                        <img src="../assets/icons/bell.svg" alt="" class="img-4" aria-hidden="true" width="24" height="24">
                    </button>
                    <button onclick="window.location.href='#'" aria-label="Pesan" class="message-btn">
                        <img src="../assets/icons/chat.svg" alt="" class="img-5" aria-hidden="true" width="24" height="24">
                    </button>
                    <button onclick="window.location.href='keranjangkosong.php'" aria-label="Keranjang" class="cart-btn">
                        <img src="../assets/icons/keranjang.svg" alt="" class="img-6" aria-hidden="true" width="24" height="24">
                    </button>
                </div>


                <div class="user-profile">
                    <button onclick="window.location.href='profile.php'" class="profile-button" aria-label="Menu profil">
                        <img src="../assets/images/user.png" alt="" class="img-7" aria-hidden="true" width="10" height="10">
                        <span class="username"><?= $_SESSION['username']; ?></span>
                    </button>
                    <button onclick="window.location.href='../controllers/logout.php'" class="profile-button" aria-label="Daftar">
                        Keluar
                    </button>
                </div>

            </div>
        </nav>

        <main class="main-content">
            <section class="hero-section">
                <div class="hero-content">
                    <img src="../assets/images/Orang.svg" alt="Ilustrasi belanja hemat" class="hero-image" width="342" height="406">
                    <div class="hero-text">
                        <h1>Lebih dari Sekadar Hemat</h1>
                        <p>Barang Bekas, Harga Pas, Kualitas Kelas</p>
                    </div>
                </div>

                <div class="search-section">
                    <div class="search-bar">
                        <div class="search-input">
                            <img src="../assets/icons/search.svg" alt="" class="search-icon" aria-hidden="true" width="24" height="24">
                            <input type="search" placeholder="Temukan Apa yang Kamu Butuhkan" aria-label="Cari produk">
                        </div>
                        <button class="search-button" onclick="window.location.href='404.php'" style="cursor: pointer;">Cari</button>
                    </div>

                    <div class="category-list" role="list">
                        <div class="category-item" role="listitem" onclick="window.location.href='pagefashion.php'" style="cursor: pointer;">
                            <div class="category-bg"></div>
                            <img src="../assets/images/pakaian.svg" alt="" aria-hidden="true" width="131" height="84">
                            <span>Pakaian</span>
                        </div>

                        <div class="category-item" role="listitem" onclick="window.location.href='elektronikpage.php'" style="cursor: pointer;">
                            <div class="category-bg"></div>
                            <img src="../assets/images/elektronik.svg" alt="" aria-hidden="true" width="118" height="84">
                            <span>Alat Elektronik</span>
                        </div>
                        <div class="category-item" role="listitem" onclick="window.location.href='pagekecantikan.php'" style="cursor: pointer;">
                            <div class="category-bg"></div>
                            <img src="../assets/images/kecantikan.svg" alt="" aria-hidden="true" width="180" height="84">
                            <span>Kecantikan</span>
                        </div>
                        <div class="category-item" role="listitem" onclick="window.location.href='404.php'" style="cursor: pointer;">
                            <div class="category-bg"></div>
                            <img src="../assets/images/tas1.svg" alt="" aria-hidden="true" width="148" height="84">
                            <span>Tas</span>
                        </div>
                        <div class="category-item" role="listitem" onclick="window.location.href='404.php'" style="cursor: pointer;">
                            <div class="category-bg"></div>
                            <img src="../assets/images/buku.svg" alt="" aria-hidden="true" width="139" height="84">
                            <span>Buku</span>
                        </div>
                        <div class="category-item" role="listitem" onclick="window.location.href='404.php'" style="cursor: pointer;">
                            <div class="category-bg"></div>
                            <img src="../assets/images/otomotif.svg" alt="" aria-hidden="true" width="160" height="84">
                            <span>Otomotif</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="products-section" aria-labelledby="best-deals">
                <div class="section-header">
                    <h2 id="best-deals">Best Deal</h2>
                    <button class="view-more" onclick="window.location.href='404.php'" style="cursor: pointer;">
                        <span>Selengkapnya</span>
                        <img src="../assets/icons/Chevron Right.svg" alt="" aria-hidden="true" width="24" height="24">
                    </button>
                </div>

                <div class="product-grid">
                    <article class="product-card" onclick="window.location.href='produk.php'" style="cursor: pointer;">
                        <img src="../assets/images/mause.svg" alt="Mouse Gaming" class="product-image" width="260" height="300">
                        <div class="product-info">
                            <h3>Mouse Gaming</h3>
                            <p class="price">Rp 50.000,-</p>
                        </div>
                    </article>

                    <article class="product-card" onclick="window.location.href='produk.php'" style="cursor: pointer;">
                        <img src="../assets/images/sepatu.svg" alt="Sepatu Sevatu" class="product-image" width="260" height="300">
                        <div class="product-info">
                            <h3>Sepatu Sevatu</h3>
                            <p class="price">Rp 30.000,-</p>
                        </div>
                    </article>


                    <article class="product-card" onclick="window.location.href='produk.php'" style="cursor: pointer;">
                        <img src="../assets/images/keyboard.svg" alt="Keyboard" class="product-image" width="260" height="300">
                        <div class="product-info">
                            <h3>Keyboard</h3>
                            <p class="price">Rp 45.000,-</p>
                        </div>
                    </article>

                    <article class="product-card" onclick="window.location.href='produk.php'" style="cursor: pointer;">
                        <img src="../assets/images/helm.svg" alt="Helm Bogo" class="product-image" width="260" height="300">
                        <div class="product-info">
                            <h3>Helm Bogo</h3>
                            <p class="price">Rp 50.000,-</p>
                        </div>
                    </article>

                    <div class="product-row">
                        <article class="product-card" onclick="window.location.href='produk.php'" style="cursor: pointer;">
                            <img src="../assets/images/kipas.svg" alt="Kipas Angin Mini" class="product-image" width="260" height="300">
                            <div class="product-info">
                                <h3>Kipas Angin Mini</h3>
                                <p class="price">Rp 20.000,-</p>
                            </div>
                        </article>

                        <article class="product-card" onclick="window.location.href='produk.php'" style="cursor: pointer;">
                            <img src="../assets/images/hairdryer.svg" alt="Hairdryer" class="product-image" width="260" height="300">
                            <div class="product-info">
                                <h3>Hairdryer</h3>
                                <p class="price">Rp 80.000,-</p>
                            </div>
                        </article>

                        <article class="product-card" onclick="window.location.href='produk.php'" style="cursor: pointer;">
                            <img src="../assets/images/kipas baymax.svg" alt="Kipas Angin Baymax" class="product-image" width="260" height="300">
                            <div class="product-info">
                                <h3>Kipas Angin Baymax</h3>
                                <p class="price">Rp 20.000,-</p>
                            </div>
                        </article>

                        <article class="product-card" onclick="window.location.href='produk.php'" style="cursor: pointer;">
                            <img src="../assets/images/setrika.svg" alt="Setrika Philips" class="product-image" width="260" height="300">
                            <div class="product-info">
                                <h3>Setrika Philips</h3>
                                <p class="price">Rp 50.000,-</p>
                            </div>
                        </article>

                        <div class="product-row">
                            <article class="product-card" onclick="window.location.href='produk.php'" style="cursor: pointer;">
                                <img src="../assets/images/heels.svg" alt="Kipas Angin Mini" class="product-image" width="260" height="300">
                                <div class="product-info">
                                    <h3>Sepatu Heels</h3>
                                    <p class="price">Rp 80.000,-</p>
                                </div>
                            </article>

                            <article class="product-card" onclick="window.location.href='produk.php'" style="cursor: pointer;">
                                <img src="../assets/images/pashmina.svg" alt="Hairdryer" class="product-image" width="260" height="300">
                                <div class="product-info">
                                    <h3>Pashmina Katun</h3>
                                    <p class="price">Rp 20.000,-</p>
                                </div>
                            </article>

                            <article class="product-card" onclick="window.location.href='produk.php'" style="cursor: pointer;">
                                <img src="../assets/images/hijab parish.svg" alt="Kipas Angin Baymax" class="product-image" width="260" height="300">
                                <div class="product-info">
                                    <h3>Hijab Paris Jadul</h3>
                                    <p class="price">Rp 10.000,-</p>
                                </div>
                            </article>

                            <article class="product-card" onclick="window.location.href='produk.php'" style="cursor: pointer;">
                                <img src="../assets/images/kemeja.svg" alt="Setrika Philips" class="product-image" width="260" height="300">
                                <div class="product-info">
                                    <h3>Kemeja Uniqlo</h3>
                                    <p class="price">Rp 50.000,-</p>
                                </div>
                            </article>

                        </div>
            </section>
        </main>
    </div>
    <script src="../assets/js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/script.js"></script>
    <script>
        document.querySelectorAll('.menu-item-2').forEach(dropdown => {
            dropdown.addEventListener('click', function() {
                const menu = this.querySelector('.dropdown-menu');
                const expanded = this.getAttribute('aria-expanded') === 'true' || false;
                this.setAttribute('aria-expanded', !expanded);
                menu.style.display = !expanded ? 'block' : 'none';
            });

            document.addEventListener('click', function(event) {
                if (!dropdown.contains(event.target)) {
                    dropdown.setAttribute('aria-expanded', 'false');
                    dropdown.querySelector('.dropdown-menu').style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>