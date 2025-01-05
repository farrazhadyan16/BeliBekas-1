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
  <title>BeliBekas.id - Marketplace Barang Bekas</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="icon" type="image/svg+xml" href="../assets/icons/logo_only.svg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <defs>
      <symbol xmlns="http://www.w3.org/2000/svg" id="link" viewBox="0 0 24 24">
        <path fill="currentColor" d="M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
        <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="category" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
        <path fill="currentColor" d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
        <path fill="currentColor" d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="check" viewBox="0 0 24 24">
        <path fill="currentColor" d="M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="trash" viewBox="0 0 24 24">
        <path fill="currentColor" d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-outline" viewBox="0 0 15 15">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-solid" viewBox="0 0 15 15">
        <path fill="currentColor" d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
        <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
        <path fill="currentColor" d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
        <path fill="currentColor" d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>
    </defs>
  </svg>

  <div class="preloader-wrapper">
    <div class="preloader">
    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Growers cider</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$12</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Fresh grapes</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Heinz tomato ketchup</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$20</strong>
          </li>
        </ul>

        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
      </div>
    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch" aria-labelledby="Search">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Search</span>
        </h4>
        <form role="search" action="index.html" method="get" class="d-flex mt-3 gap-0">
          <input class="form-control rounded-start rounded-0 bg-light" type="email" placeholder="What are you looking for?" aria-label="What are you looking for?">
          <button class="btn btn-dark rounded-end rounded-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>

  <header>
    <div class="container-fluid">
      <div class="row py-3 border-bottom">

        <div class="col-sm-4 col-lg-3 text-center text-sm-start">
          <div class="main-logo">
            <a href="index.html">
              <img src="../assets/images/logo.svg" alt="logo" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-sm-6 offset-sm-1 offset-md-0 col-lg-4 d-none d-lg-block">
          <div class="d-flex  justify-content-center justify-content-sm-between align-items-center">
            <nav class="main-menu d-flex navbar navbar-expand-lg">

              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                <div class="offcanvas-header justify-content-center">
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">

                  <ul class="navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0">

                    <li class="nav-item">
                      <a href="dashboard.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" role="button" id="produk" data-bs-toggle="dropdown" aria-expanded="false">Produk</a>
                      <ul class="dropdown-menu" aria-labelledby="produk">
                        <li><a href="index.html" class="dropdown-item">Fashion </a></li>
                        <li><a href="index.html" class="dropdown-item">Elektronik </a></li>
                        <li><a href="index.html" class="dropdown-item">Perlengkapan </a></li>
                        <li><a href="index.html" class="dropdown-item">Buku </a></li>
                        <li><a href="index.html" class="dropdown-item">Kecantikan </a></li>
                        <li><a href="index.html" class="dropdown-item">Otomotif </a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="about.html" class="nav-link">Tentang Kami</a>
                    </li>

                  </ul>

                </div>

              </div>
          </div>
        </div>
        <div class="col-sm-6 offset-sm-1 offset-md-0 col-lg-1 d-none d-lg-block">

          <div class="search-bar row bg-light p-2 my-2 rounded-4">

            <div class="col-5 col-md-2">
              <form id="search-form" class="text-center" action="index.html" method="post">
                <input type="text" class="form-control border-0 bg-transparent" placeholder="Search for more than 20,000 products" />
              </form>
            </div>
            <div class="col-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
              </svg>
            </div>
          </div>
        </div>

        <div class="col-sm-8 col-lg-4 justify-content-end gap-5 align-items-center mt-4 mt-sm-3 justify-content-center justify-content-sm-end">
          <ul class="d-flex justify-content-end list-unstyled m-0">
            <li>
              <a href="#" class="rounded-circle bg-light p-2 mx-1">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#cart"></use>
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="rounded-circle bg-light p-2 mx-1">
                <img src="../assets/images/bell.png" alt="bell" class="img-fluid" width="24" height="24"> </a>
            </li>
            <li>
              <a href="#" class="rounded-circle bg-light p-2 mx-1">
                <img src="../assets/images/chat.png" alt="chat" class="img-fluid" width="24" height="24">
              </a>
            </li>
            <li>
              <a href="#" class="rounded-circle bg-light p-2 mx-1 text-decoration-none">
                <img src="../assets/images/user.png" alt="User Avatar" class="rounded-circle" width="24" height="24">
                <span class="username"><?= $_SESSION['username']; ?></span>
              </a>
              <div class="dropdown-menu position-absolute mt-2 bg-white border shadow-sm" style="display: none;">
                <a href="#" class="dropdown-item">Akun Saya</a>
                <a href="#" class="dropdown-item">Pesanan Saya</a>
                <a href="#" class="dropdown-item text-danger">Log Out</a>
              </div>
            </li>

          </ul>

        </div>

      </div>
    </div>

  </header>

  <section class="py-3" style="background-color: #f9fafb;">
    <div class="container">
      <!-- Header Section -->
      <div class="row mb-4">
        <div class="card p-4"
          style="border-radius: 12px; border: 1px solid #e0e0e0; background-color: #ffffff;">
          <div class="d-flex justify-content-between align-items-center">
            <!-- Bagian Keranjang Belanja -->
            <h5 style="margin: 0;">Keranjang Belanja</h5>

            <!-- Bagian Search Bar -->
            <div class="search-bar"
              style="display: flex; align-items: center; gap: 10px;">
              <div style="position: relative; width: 400px;">
                <img src="../assets/images/search.png" alt="Search Icon" style="position: absolute; top: 50%; left: 10px; transform: translateY(-50%); width: 20px; height: 20px; pointer-events: none;">
                <input type="text" class="form-control" placeholder="Temukan Apa yang Kamu Butuhkan" style="width: 100%; padding-left: 40px; border-radius: 8px;" />
              </div>
              <button
                class="btn text-white"
                style="background-color: #fb923c; border-radius: 8px; border: none;">
                Cari
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Left Section -->
        <div class="col-md-8">
          <!-- Select All -->
          <div class="card p-3 mb-3" style="border-radius: 12px; border: 1px solid #e0e0e0; background-color: #ffffff;">
            <div class="d-flex align-items-center">
              <input type="checkbox" id="select-all" class="form-check-input" />
              <label for="select-all" class="ms-2">Pilih Semua (2)</label>
            </div>
          </div>

          <!-- Cart Items -->
          <div class="card p-3 mb-3" style="border-radius: 12px; border: 1px solid #e0e0e0; background-color: #ffffff;">
            <div class="d-flex align-items-center">
              <!-- Checkbox dan User Icon -->
              <div class="d-flex align-items-center me-3">
                <input type="checkbox" class="form-check-input me-2" />
                <img
                  src="../assets/images/user.png"
                  alt="User Icon"
                  style="width: 32px; height: 32px; border-radius: 50%;" />
                <span class="ms-2">bymeee</span>
              </div>
            </div>
            <div class="d-flex align-items-center mt-3">
              <!-- Checkbox dan Product Image -->
              <div class="d-flex align-items-center me-3">
                <input type="checkbox" class="form-check-input me-2" />
                <img
                  src="../assets/images/sepatu.png"
                  alt="Product Image"
                  style="width: 80px; height: auto; border-radius: 8px;" />
              </div>
              <!-- Product Details -->
              <div class="flex-grow-1">
                <h6 style="margin-bottom: 4px;">Sepatu Sevatu</h6>
                <p style="color: #6c757d; font-size: 14px;">White, 36</p>
              </div>
              <!-- Harga dan Aksi -->
              <div class="text-end">
                <p style="margin-bottom: 4px; font-size: 14px;">Rp 30.000</p>
                <div class="d-flex align-items-center gap-2">
                  <!-- Note Icon -->
                  <button class="btn btn-outline-secondary btn-sm" style="display: flex; align-items: center; justify-content: center; padding: 5px;">
                    <img src="../assets/images/note.png" alt="Note Icon" style="width: 16px; height: 16px;" />
                  </button>
                  <!-- Wishlist Icon -->
                  <button class="btn btn-outline-secondary btn-sm" style="display: flex; align-items: center; justify-content: center; padding: 5px;">
                    <img src="../assets/images/wishlist.png" alt="Wishlist Icon" style="width: 16px; height: 16px;" />
                  </button>
                  <!-- Trash Icon -->
                  <button class="btn btn-outline-secondary btn-sm" style="display: flex; align-items: center; justify-content: center; padding: 5px;">
                    <img src="../assets/images/trash.png" alt="Trash Icon" style="width: 16px; height: 16px;" />
                  </button>
                  <!-- Quantity Control -->
                  <div class="d-flex align-items-center border px-2 rounded">
                    <button class="btn btn-sm btn-outline-secondary px-2">-</button>
                    <span class="px-2">1</span>
                    <button class="btn btn-sm btn-outline-secondary px-2">+</button>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- Duplicate Cart Item -->
          <div class="card p-3 mb-3" style="border-radius: 12px; border: 1px solid #e0e0e0; background-color: #ffffff;">
            <div class="d-flex align-items-center">
              <!-- Checkbox dan User Icon -->
              <div class="d-flex align-items-center me-3">
                <input type="checkbox" class="form-check-input me-2" />
                <img
                  src="../assets/images/user.png"
                  alt="User Icon"
                  style="width: 32px; height: 32px; border-radius: 50%;" />
                <span class="ms-2">bymeee</span>
              </div>
            </div>
            <div class="d-flex align-items-center mt-3">
              <!-- Checkbox dan Product Image -->
              <div class="d-flex align-items-center me-3">
                <input type="checkbox" class="form-check-input me-2" />
                <img
                  src="../assets/images/sepatu.png"
                  alt="Product Image"
                  style="width: 80px; height: auto; border-radius: 8px;" />
              </div>
              <!-- Product Details -->
              <div class="flex-grow-1">
                <h6 style="margin-bottom: 4px;">Sepatu Sevatu</h6>
                <p style="color: #6c757d; font-size: 14px;">White, 36</p>
              </div>
              <!-- Harga dan Aksi -->
              <div class="text-end">
                <p style="margin-bottom: 4px; font-size: 14px;">Rp 30.000</p>
                <div class="d-flex align-items-center gap-2">
                  <!-- Note Icon -->
                  <button class="btn btn-outline-secondary btn-sm" style="display: flex; align-items: center; justify-content: center; padding: 5px;">
                    <img src="../assets/images/note.png" alt="Note Icon" style="width: 16px; height: 16px;" />
                  </button>
                  <!-- Wishlist Icon -->
                  <button class="btn btn-outline-secondary btn-sm" style="display: flex; align-items: center; justify-content: center; padding: 5px;">
                    <img src="../assets/images/wishlist.png" alt="Wishlist Icon" style="width: 16px; height: 16px;" />
                  </button>
                  <!-- Trash Icon -->
                  <button class="btn btn-outline-secondary btn-sm" style="display: flex; align-items: center; justify-content: center; padding: 5px;">
                    <img src="../assets/images/trash.png" alt="Trash Icon" style="width: 16px; height: 16px;" />
                  </button>
                  <!-- Quantity Control -->
                  <div class="d-flex align-items-center border px-2 rounded">
                    <button class="btn btn-sm btn-outline-secondary px-2">-</button>
                    <span class="px-2">1</span>
                    <button class="btn btn-sm btn-outline-secondary px-2">+</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Right Section -->
        <div class="col-md-4">
          <div class="card p-4" style="border-radius: 12px; border: 1px solid #e0e0e0; background-color: #ffffff;">
            <h6 style="font-weight: bold; font-size: 16px; margin-bottom: 16px;">Ringkasan Belanja</h6>
            <div class="d-flex justify-content-between align-items-center mb-1">
              <span>Total</span>
              <span>-</span>
            </div>
            <hr>
            <button class="btn btn-outline-primary w-100 mb-3" style="border-radius: 8px; display: flex; justify-content: space-between; align-items: center; background-color: #cfe2ff; color: #ffffff; border: none;">
              <div style="display: flex; align-items: center; gap: 10px;">
                <img
                  src="../assets/images/promo.png"
                  alt="Promo Icon"
                  style="width: 20px; height: 20px;" />
                <span>Makin hemat pakai promo</span>
              </div>
              <i class="fas fa-chevron-right"></i>
            </button>
            <button
              class="btn btn-primary w-100"
              style="border-radius: 8px; background-color: #3d8bfd; border: none;" onclick="window.location.href='pembayaran.php'">
              Beli
            </button>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">

          <div class="bootstrap-tabs product-tabs">
            <div class="tabs-header d-flex justify-content-between border-bottom my-5">
              <h3>Kamu mungkin juga suka</h3>
            </div>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">

                <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                  <div class="col">
                    <div class="product-item">
                      <span class="badge bg-success position-absolute m-3">-30%</span>
                      <a href="#" class="btn-wishlist"><svg width="24" height="24">
                          <use xlink:href="#heart"></use>
                        </svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="../assets/images/jual1.png" class="tab-image">
                        </a>
                      </figure>
                      <h3>Mouse Gaming</h3>
                      <span class="price">Rp 50.000</span>
                    </div>
                  </div>

                  <div class="col">
                    <div class="product-item">
                      <span class="badge bg-success position-absolute m-3">-30%</span>
                      <a href="#" class="btn-wishlist"><svg width="24" height="24">
                          <use xlink:href="#heart"></use>
                        </svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="../assets/images/jual2.png" class="tab-image">
                        </a>
                      </figure>
                      <h3>Sepatu Sevatu</h3>
                      <span class="price">Rp 30.000</span>
                    </div>
                  </div>

                  <div class="col">
                    <div class="product-item">
                      <a href="#" class="btn-wishlist"><svg width="24" height="24">
                          <use xlink:href="#heart"></use>
                        </svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="../assets/images/jual3.png" class="tab-image">
                        </a>
                      </figure>
                      <h3>Keyboard</h3>
                      <span class="price">Rp 45.000</span>
                    </div>
                  </div>

                  <div class="col">
                    <div class="product-item">
                      <a href="#" class="btn-wishlist"><svg width="24" height="24">
                          <use xlink:href="#heart"></use>
                        </svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="../assets/images/jual4.png" class="tab-image">
                        </a>
                      </figure>
                      <h3>Helm Bogo</h3>
                      <span class="price">Rp 50.000</span>
                    </div>
                  </div>

                  <div class="col">
                    <div class="product-item">
                      <a href="#" class="btn-wishlist"><svg width="24" height="24">
                          <use xlink:href="#heart"></use>
                        </svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="../assets/images/jual5.png" class="tab-image">
                        </a>
                      </figure>
                      <h3>Hairdryer</h3>
                      <span class="price">Rp 80.000</span>
                    </div>
                  </div>

                  <div class="col">
                    <div class="product-item">
                      <a href="#" class="btn-wishlist"><svg width="24" height="24">
                          <use xlink:href="#heart"></use>
                        </svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="../assets/images/jual6.png" class="tab-image">
                        </a>
                      </figure>
                      <h3>Kipas Angin Mini</h3>
                      <span class="price">Rp 20.000</span>
                    </div>
                  </div>

                  <div class="col">
                    <div class="product-item">
                      <a href="#" class="btn-wishlist"><svg width="24" height="24">
                          <use xlink:href="#heart"></use>
                        </svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="../assets/images/jual7.png" class="tab-image">
                        </a>
                      </figure>
                      <h3>Setrika Philips</h3>
                      <span class="price">Rp 50.000</span>
                    </div>
                  </div>

                  <div class="col">
                    <div class="product-item">
                      <a href="#" class="btn-wishlist"><svg width="24" height="24">
                          <use xlink:href="#heart"></use>
                        </svg></a>
                      <figure>
                        <a href="index.html" title="Product Title">
                          <img src="../assets/images/jual8.png" class="tab-image">
                        </a>
                      </figure>
                      <h3>Kemeja Uniqlo</h3>
                      <span class="price">Rp 50.000</span>
                    </div>
                  </div>

                </div>
                <!-- / product-grid -->

              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
    <!-- / Banner Blocks -->

  </section>



  <footer class="py-5">
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Telepon</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="#" class="nav-link">Hubungi team jika kamu kesulitan</a>
              </li>
              <li class="menu-item d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" class="me-2">
                  <path fill="currentColor" d="M15.12 5.32H17V2.14A26.11 26.11 0 0 0 14.26 2c-2.72 0-4.58 1.66-4.58 4.7v2.62H6.61v3.56h3.07V22h3.68v-9.12h3.06l.46-3.56h-3.52V7.05c0-1.05.28-1.73 1.76-1.73Z" />
                </svg>
                <a href="#" class="nav-link">+62-821-1111-1111</a>
              </li>
              <br>

              <h6 class="widget-title">Ikuti Sosial Media Kami</h6>
              <li class="menu-item">
                <a href="#" class="nav-link">Diskusikan Kesulitanmu</a>
              </li>
              <li class="menu-item d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" class="me-2">
                  <path fill="currentColor" d="M17.34 5.46a1.2 1.2 0 1 0 1.2 1.2a1.2 1.2 0 0 0-1.2-1.2Zm4.6 2.42a7.59 7.59 0 0 0-.46-2.43a4.94 4.94 0 0 0-1.16-1.77a4.7 4.7 0 0 0-1.77-1.15a7.3 7.3 0 0 0-2.43-.47C15.06 2 14.72 2 12 2s-3.06 0-4.12.06a7.3 7.3 0 0 0-2.43.47a4.78 4.78 0 0 0-1.77 1.15a4.7 4.7 0 0 0-1.15 1.77a7.3 7.3 0 0 0-.47 2.43C2 8.94 2 9.28 2 12s0 3.06.06 4.12a7.3 7.3 0 0 0 .47 2.43a4.7 4.7 0 0 0 1.15 1.77a4.78 4.78 0 0 0 1.77 1.15a7.3 7.3 0 0 0 2.43.47C8.94 22 9.28 22 12 22s3.06 0 4.12-.06a7.3 7.3 0 0 0 2.43-.47a4.7 4.7 0 0 0 1.77-1.15a4.85 4.85 0 0 0 1.16-1.77a7.59 7.59 0 0 0 .46-2.43c0-1.06.06-1.4.06-4.12s0-3.06-.06-4.12ZM20.14 16a5.61 5.61 0 0 1-.34 1.86a3.06 3.06 0 0 1-.75 1.15a3.19 3.19 0 0 1-1.15.75a5.61 5.61 0 0 1-1.86.34c-1 .05-1.37.06-4 .06s-3 0-4-.06a5.73 5.73 0 0 1-1.94-.3a3.27 3.27 0 0 1-1.1-.75a3 3 0 0 1-.74-1.15a5.54 5.54 0 0 1-.4-1.9c0-1-.06-1.37-.06-4s0-3 .06-4a5.54 5.54 0 0 1 .35-1.9A3 3 0 0 1 5 5a3.14 3.14 0 0 1 1.1-.8A5.73 5.73 0 0 1 8 3.86c1 0 1.37-.06 4-.06s3 0 4 .06a5.61 5.61 0 0 1 1.86.34a3.06 3.06 0 0 1 1.19.8a3.06 3.06 0 0 1 .75 1.1a5.61 5.61 0 0 1 .34 1.9c.05 1 .06 1.37.06 4s-.01 3-.06 4ZM12 6.87A5.13 5.13 0 1 0 17.14 12A5.12 5.12 0 0 0 12 6.87Zm0 8.46A3.33 3.33 0 1 1 15.33 12A3.33 3.33 0 0 1 12 15.33Z" />
                </svg>
                <a href="#" class="nav-link">@belibekas_id</a>
              </li>
              <li class="menu-item d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" class="me-2">
                  <path fill="currentColor" d="M22.991 3.95a1 1 0 0 0-1.51-.86a7.48 7.48 0 0 1-1.874.794a5.152 5.152 0 0 0-3.374-1.242a5.232 5.232 0 0 0-5.223 5.063a11.032 11.032 0 0 1-6.814-3.924a1.012 1.012 0 0 0-.857-.365a.999.999 0 0 0-.785.5a5.276 5.276 0 0 0-.242 4.769l-.002.001a1.041 1.041 0 0 0-.496.89a3.042 3.042 0 0 0 .027.439a5.185 5.185 0 0 0 1.568 3.312a.998.998 0 0 0-.066.77a5.204 5.204 0 0 0 2.362 2.922a7.465 7.465 0 0 1-3.59.448A1 1 0 0 0 1.45 19.3a12.942 12.942 0 0 0 7.01 2.061a12.788 12.788 0 0 0 12.465-9.363a12.822 12.822 0 0 0 .535-3.646l-.001-.2a5.77 5.77 0 0 0 1.532-4.202Zm-3.306 3.212a.995.995 0 0 0-.234.702c.01.165.009.331.009.488a10.824 10.824 0 0 1-.454 3.08a10.685 10.685 0 0 1-10.546 7.93a10.938 10.938 0 0 1-2.55-.301a9.48 9.48 0 0 0 2.942-1.564a1 1 0 0 0-.602-1.786a3.208 3.208 0 0 1-2.214-.935q.224-.042.445-.105a1 1 0 0 0-.08-1.943a3.198 3.198 0 0 1-2.25-1.726a5.3 5.3 0 0 0 .545.046a1.02 1.02 0 0 0 .984-.696a1 1 0 0 0-.4-1.137a3.196 3.196 0 0 1-1.425-2.673c0-.066.002-.133.006-.198a13.014 13.014 0 0 0 8.21 3.48a1.02 1.02 0 0 0 .817-.36a1 1 0 0 0 .206-.867a3.157 3.157 0 0 1-.087-.729a3.23 3.23 0 0 1 3.226-3.226a3.184 3.184 0 0 1 2.345 1.02a.993.993 0 0 0 .921.298a9.27 9.27 0 0 0 1.212-.322a6.681 6.681 0 0 1-1.026 1.524Z" />
                </svg>
                <a href="#" class="nav-link">@belibekas_id</a>
              </li>
              <li class="menu-item d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" class="me-2">
                  <path fill="currentColor" d="M15.12 5.32H17V2.14A26.11 26.11 0 0 0 14.26 2c-2.72 0-4.58 1.66-4.58 4.7v2.62H6.61v3.56h3.07V22h3.68v-9.12h3.06l.46-3.56h-3.52V7.05c0-1.05.28-1.73 1.76-1.73Z" />
                </svg>
                <a href="#" class="nav-link">@belibekas_id</a>
              </li>
              <br>

              <h6 class="widget-title">Kunjungan Kami</h6>
              <li class="menu-item d-flex align-items-center">
                <a href="#" class="nav-link">Jalan Prof.Dr.Hamka, Air Tawar Padang, Sumatera Barat</a>
              </li>

            </ul>
          </div>
        </div>


        <div class="col-md-6 col-sm-6">
          <div class="footer-menu">
            <div class="container mt-4">
              <form action="/submit-form" method="POST">
                <!-- First Name and Last Name -->
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="firstName" class="form-label">
                      <h5 class="widget-title">First name</h5>
                    </label>
                    <input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
                  </div>
                  <div class="col-md-6">
                    <label for="lastName" class="form-label">
                      <h5 class="widget-title">Last name</h5>
                    </label>
                    <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
                  </div>
                </div>

                <!-- Email -->
                <div class="row mb-3">
                  <div class="col-12">
                    <label for="email" class="form-label">
                      <h5 class="widget-title">Email</h5>
                    </label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email Address">
                  </div>
                </div>

                <!-- Masukan -->
                <div class="row mb-3">
                  <div class="col-12">
                    <label for="masukan" class="form-label">
                      <h5 class="widget-title">Masukan</h5>
                    </label>
                    <textarea class="form-control" id="masukan" name="masukan" rows="3" placeholder="Enter Your Message" required></textarea>
                  </div>
                </div>

                <!-- Submit Button -->
                <div class="row">
                  <div class="col-12">
                    <button type="submit" class="btn w-100" style="background-color: rgb(214, 214, 39); color: white;">Kirim</button>
                  </div>
                </div>

              </form>
            </div>

          </div>
        </div>

      </div>
    </div>
  </footer>

  <script src="../assets/js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="../assets/js/plugins.js"></script>
  <script src="../assets/js/script.js"></script>
</body>

</html>