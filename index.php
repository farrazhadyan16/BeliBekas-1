<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BeliBekas.id - Marketplace barang bekas berkualitas dengan harga terjangkau">
    <title>BeliBekas.id - Marketplace Barang Bekas</title>
    <link rel="stylesheet" href="assets/css/stylesindex.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="../assets/icons/logo_only.svg">
</head>

<body>
    <div class="dashboard">
        <nav class="navbar" aria-label="Main navigation">
            <div class="logo">
                <img src="assets/images/Logoonly.svg" alt="Logo BeliBekas.id" class="img" width="33" height="36">
                <div>
                    <span class="logo-text logo-text-blue">Beli</span>
                    <span class="logo-text logo-text-orange">Bekas.id</span>
                </div>
            </div>

            <div class="menu" role="navigation">
                <a href="#" class="menu-item" aria-current="page">Home</a>
                <button class="menu-item-2" aria-haspopup="true" aria-expanded="false">
                    <span class="label">Produk</span>
                    <img src="assets/icons/chevron-down.svg" alt="" class="img-2" aria-hidden="true" width="24" height="24">
                </button>
                <a href="#" class="menu-item-3">Tentang Kami</a>
            </div>

            <div class="user-actions">
                <button class="search-button" aria-label="Cari">
                    <img src="assets/icons/search.svg" alt="" class="img-3" aria-hidden="true" width="24" height="24">
                </button>

                <div class="notification-icons">
                    <button aria-label="Notifikasi" class="notification-btn">
                        <img src="assets/icons/bell.svg" alt="" class="img-4" aria-hidden="true" width="24" height="24">
                    </button>
                    <button aria-label="Pesan" class="message-btn">
                        <img src="assets/icons/chat.svg" alt="" class="img-5" aria-hidden="true" width="24" height="24">
                    </button>
                    <button onclick="window.location.href='views/keranjangkosong.php'" aria-label="Keranjang" class="cart-btn">
                        <img src="assets/icons/keranjang.svg" alt="" class="img-6" aria-hidden="true" width="24" height="24">
                    </button>
                </div>

                <div class="user-profile">
                    <button onclick="window.location.href='views/login.php'" class="profile-button" aria-label="Masuk">
                        Masuk
                    </button>
                    <button onclick="window.location.href='views/register.php'" class="profile-button" aria-label="Daftar">
                        Daftar
                    </button>
                </div>
            </div>
        </nav>


        <main class="main-content">
            <section class="hero-section">
                <div class="hero-content">
                    <img src="assets/images/Orang.svg" alt="Ilustrasi belanja hemat" class="hero-image" width="342" height="406">
                    <div class="hero-text">
                        <h1>Lebih dari Sekadar Hemat</h1>
                        <p>Barang Bekas, Harga Pas, Kualitas Kelas</p>
                    </div>
                </div>

                <div class="search-section">
                    <div class="search-bar">
                        <div class="search-input">
                            <img src="assets/icons/search.svg" alt="" class="search-icon" aria-hidden="true" width="24" height="24">
                            <input type="search" placeholder="Temukan Apa yang Kamu Butuhkan" aria-label="Cari produk">
                        </div>
                        <button class="search-button">Cari</button>
                    </div>

                    <div class="category-list" role="list">
                        <div class="category-item" role="listitem">
                            <div class="category-bg"></div>
                            <img src="assets/images/pakaian.svg" alt="" aria-hidden="true" width="131" height="84">
                            <span>Pakaian</span>
                        </div>
                        <div class="category-item" role="listitem">
                            <div class="category-bg"></div>
                            <img src="assets/images/elektronik.svg" alt="" aria-hidden="true" width="118" height="84">
                            <span>Alat Elektronik</span>
                        </div>
                        <div class="category-item" role="listitem">
                            <div class="category-bg"></div>
                            <img src="assets/images/kecantikan.svg" alt="" aria-hidden="true" width="180" height="84">
                            <span>Kecantikan</span>
                        </div>
                        <div class="category-item" role="listitem">
                            <div class="category-bg"></div>
                            <img src="assets/images/tas1.svg" alt="" aria-hidden="true" width="148" height="84">
                            <span>Tas</span>
                        </div>
                        <div class="category-item" role="listitem">
                            <div class="category-bg"></div>
                            <img src="assets/images/buku.svg" alt="" aria-hidden="true" width="139" height="84">
                            <span>Buku</span>
                        </div>
                        <div class="category-item" role="listitem">
                            <div class="category-bg"></div>
                            <img src="assets/images/otomotif.svg" alt="" aria-hidden="true" width="160" height="84">
                            <span>Otomotif</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="products-section" aria-labelledby="best-deals">
                <div class="section-header">
                    <h2 id="best-deals">Best Deal</h2>
                    <button class="view-more">
                        <span>Selengkapnya</span>
                        <img src="assets/icons/Chevron Right.svg" alt="" aria-hidden="true" width="24" height="24">
                    </button>
                </div>

                <div class="product-grid">
                    <article class="product-card">
                        <img src="assets/images/mause.svg" alt="Mouse Gaming" class="product-image" width="260" height="300">
                        <div class="product-info">
                            <h3>Mouse Gaming</h3>
                            <p class="price">Rp 50.000,-</p>
                        </div>
                    </article>

                    <article class="product-card">
                        <img src="assets/images/sepatu.svg" alt="Sepatu Sevatu" class="product-image" width="260" height="300">
                        <div class="product-info">
                            <h3>Sepatu Sevatu</h3>
                            <p class="price">Rp 30.000,-</p>
                        </div>
                    </article>

                    <article class="product-card">
                        <img src="assets/images/keyboard.svg" alt="Keyboard" class="product-image" width="260" height="300">
                        <div class="product-info">
                            <h3>Keyboard</h3>
                            <p class="price">Rp 45.000,-</p>
                        </div>
                    </article>

                    <article class="product-card">
                        <img src="assets/images/helm.svg" alt="Helm Bogo" class="product-image" width="260" height="300">
                        <div class="product-info">
                            <h3>Helm Bogo</h3>
                            <p class="price">Rp 50.000,-</p>
                        </div>
                    </article>

                    <div class="product-row">
                        <article class="product-card">
                            <img src="assets/images/kipas.svg" alt="Kipas Angin Mini" class="product-image" width="260" height="300">
                            <div class="product-info">
                                <h3>Kipas Angin Mini</h3>
                                <p class="price">Rp 20.000,-</p>
                            </div>
                        </article>

                        <article class="product-card">
                            <img src="assets/images/hairdryer.svg" alt="Hairdryer" class="product-image" width="260" height="300">
                            <div class="product-info">
                                <h3>Hairdryer</h3>
                                <p class="price">Rp 80.000,-</p>
                            </div>
                        </article>

                        <article class="product-card">
                            <img src="assets/images/kipas baymax.svg" alt="Kipas Angin Baymax" class="product-image" width="260" height="300">
                            <div class="product-info">
                                <h3>Kipas Angin Baymax</h3>
                                <p class="price">Rp 20.000,-</p>
                            </div>
                        </article>

                        <article class="product-card">
                            <img src="assets/images/setrika.svg" alt="Setrika Philips" class="product-image" width="260" height="300">
                            <div class="product-info">
                                <h3>Setrika Philips</h3>
                                <p class="price">Rp 50.000,-</p>
                            </div>
                        </article>

                        <div class="product-row">
                            <article class="product-card">
                                <img src="assets/images/heels.svg" alt="Kipas Angin Mini" class="product-image" width="260" height="300">
                                <div class="product-info">
                                    <h3>Sepatu Heels</h3>
                                    <p class="price">Rp 80.000,-</p>
                                </div>
                            </article>

                            <article class="product-card">
                                <img src="assets/images/pashmina.svg" alt="Hairdryer" class="product-image" width="260" height="300">
                                <div class="product-info">
                                    <h3>Pashmina Katun</h3>
                                    <p class="price">Rp 20.000,-</p>
                                </div>
                            </article>

                            <article class="product-card">
                                <img src="assets/images/hijab parish.svg" alt="Kipas Angin Baymax" class="product-image" width="260" height="300">
                                <div class="product-info">
                                    <h3>Hijab Paris Jadul</h3>
                                    <p class="price">Rp 10.000,-</p>
                                </div>
                            </article>

                            <article class="product-card">
                                <img src="assets/images/kemeja.svg" alt="Setrika Philips" class="product-image" width="260" height="300">
                                <div class="product-info">
                                    <h3>Kemeja Uniqlo</h3>
                                    <p class="price">Rp 50.000,-</p>
                                </div>
                            </article>

                        </div>
            </section>
        </main>
    </div>
</body>

</html>