<?php 
include 'function/connect.php';
session_start();
error_reporting(0);
$level = $_SESSION['level'];
$email = $_SESSION['email'];
$nama_pengguna = $_SESSION['nama'];

$aa = mysqli_query($koneksi, "SELECT * FROM pengaturan");
while ($bb = mysqli_fetch_array($aa)) {
  $nama_website = $bb['nama_website'];
  $logo = $bb['logo'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $nama_website ?> - Situs slot online resmi terpercaya di indonesia</title>
  <meta content="Daftar Situs Agen Judi Online Terpercaya, Bandar Taruhan Bola, Game Slot terbaik, Slot gacor, Togel Online, Live Casino bisa Deposit Via Pulsa, dan OVO" name=description>
  <meta content=iboplay,slotonline,casinogameonline,situsjudislotonline,judislotonline,agenslotiboplay,pokeronline,bolagameonline,idnpoker,judibolaonline,gameslotonline,agenslotonline,agentpokerterbaik,agenslotindoonline,websitepokerterpercaya name=keywords>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
  <!-- Font -->
  <link rel=preload href=admin/assets/fonts/digital_sans_ef_medium.woff2 as=font type=font/woff2 crossorigin>
  <link rel=preload href=admin/assets/fonts/advanced_dot_digital7.woff2 as=font type=font/woff2 crossorigin>
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="admin/assets/images/favicon.ico">
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="admin/assets/libs/bootstrap/css/bootstrap.min.css">
  <!-- Icon CSS -->
  <link href="admin/assets/css/icons.min.css" rel="stylesheet" type="text/css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="admin/assets/libs/owl-carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="admin/assets/libs/owl-carousel/assets/owl.theme.default.min.css">
  <!-- Flatpickr CSS -->
  <link rel="stylesheet" href="admin/assets/libs/flatpickr/flatpickr.min.css">
  <!-- Datatables Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
  <!-- Page CSS -->
  <style>
    @font-face {
      font-family: digital_sans_ef_medium;
      src: url(admin/assets/fonts/digital_sans_ef_medium.woff2);
    }
    @font-face {
      font-family: advanced_dot_digital7;
      src: url(admin/assets/fonts/advanced_dot_digital7.woff2);
    }
    body {
      background: url(admin/assets/images/2799377466_640px-pure_black_wallpaper.jpg) no-repeat fixed;
      background-size: 100% 100%;
      color: #FFFFFF;
      font-family: 'digital_sans_ef_medium';
      font-size: 12px;
    }
    a {
      color: #FFFFFF;
      text-decoration: none;
    }
    a:hover {
      color: #FFFFFF;
    }
    .bg-utama {
      background-color: #000000;
    }
    .text-utama {
      color: #F60808;
    }
    /* Counter USD Jackpot */
    .container-usd-jackpot-counter {
      background: center no-repeat;
      background-size: contain;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 120px;
    }
    .usd-jackpot-counter {
      color: #ffffff;
      font-size: 19px;
      margin-top: 43px;
      font-family: 'advanced_dot_digital7';
    }
    /* Owl Carousel */
    .owl-dots {
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%)!important;
    }
    .owl-theme .owl-dots .owl-dot span {
      margin: 1px!important;
      background: none!important;
      border: 1px solid #FFFFFF!important;
    }
    .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
      background: #FFFFFF!important;
    }
    /* Unduh APK */
    .container-unduh-apk {
      background-size: cover;
      font-family: sans-serif;
    }
    .container-unduh-apk>div {
      flex-basis: 50%;
      text-align: center;
      opacity: 0;
      transition: all 1s ease;
    }
    .container-unduh-apk>div:nth-child(1) {
      align-self: flex-end;
      transform: translateX(100%);
    }
    .container-unduh-apk h2 {
      font-size: 18px;
      font-weight: 600;
      text-transform: uppercase;
      margin: 0;
    }
    .container-unduh-apk h3 {
      font-size: 11px;
      font-weight: 100;
      margin: 0;
    }
    .info-unduh-apk {
      display: flex;
      justify-content: center;
      padding: 7px 0;
    }
    .info-unduh-apk>div {
      flex-basis: 45%;
      max-width: 45%;
    }
    .section-unduh-apk {
      text-align: center;
      margin-right: 5px;
    }
    .section-unduh-apk img {
      width: 45%;
      margin: auto auto 5px auto;
    }
    .section-unduh-apk a {
      color: #FFFFFF;
      text-transform: uppercase;
      padding: 2px 0;
      display: block;
      border-radius: 20px;
      text-align: center;
      text-decoration: none;
      font-size: 11px;
      background: linear-gradient(to bottom,#ff1300 0%,#9a0f04 100%);
    }
    .container-masuk-daftar {
      display: flex;
    }
    .container-masuk-daftar a {
      flex-basis: 50%;
      padding: 14px 20px;
      text-align: center;
      line-height: 1;
      text-decoration: none;
      font-size: 18px;
      color: #FFFFFF;
    }
    .container-masuk-daftar a.masuk {
      background: url(admin/assets/images/tombol-masuk.png);
      background-size: 100% 100%;
      color: #ffffff;
    }
    .container-masuk-daftar a.daftar {
      background: url(admin/assets/images/tombol-masuk.png);
      background-size: 100% 100%;
      color: #ffffff;
    }
    .sidebar-masuk {
      background: url(admin/assets/images/tombol-masuk.png);
      background-size: 100% 100%;
      color: #ffffff;
    }
    .sidebar-daftar {
      background: url(admin/assets/images/tombol-masuk.png);
      background-size: 100% 100%;
      color: #ffffff;
    }
    .bg-bank {
      background: url(admin/assets/images/9335635547_9142257054_1367531251_pngwing.com.png) no-repeat;
      background-size: 100% 100%;
      border: 0;
      color: #ffffff;
    }
    .img-pembayaran {
      position: relative;
    }
    .img-pembayaran:before {
      content: '';
      position: absolute;
      top: 0;
      left: -10px;
      bottom: 0;
      width: 5px;
      border-radius: 2px;
      background-color: #00FF00;
    }
    .hub-kami {
      margin-bottom: 25px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .hub-kami>a {
      color: #FFFFFF;
      width: 100%;
      background-size: cover;
      margin-bottom: 15px;
      min-height: 160px;
      padding: 20px 15px;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      text-decoration: none;
      border-radius: 20px;
      border: 1px solid #4A0A0A;
    }
    .hub-kami>a>h3 {
      font-size: 16px;
      font-weight: 500;
      margin: 0 0 10px;
      text-transform: uppercase;
    }
    .hub-kami>a>h6 {
      font-size: 12px;
      margin: 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      text-transform: uppercase;
    }
    .hub-kami>a>h6>i {
      font-size: 18px;
      font-weight: 800;
    }
    .user-menu {
      background-color: #000000;
      display: flex;
      justify-content: space-around;
      font-size: 10px;
      overflow: hidden;
    }
    .user-menu .user-menu-item {
      flex-basis: initial;
      flex: 1;
      margin: 10px 0;
      padding: 0 10px;
      flex-basis: 22%;
    }
    .user-menu .user-menu-item>a {
      color: #FFFFFF;
      text-decoration: none;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      flex-direction: column;
      height: 100%;
      white-space: nowrap;
    }
    .user-menu .user-menu-item>a>img {
      width: 20px;
      height: 20px;
      margin-bottom: 5px;
      vertical-align: middle;
      border: 0;
    }
    .deposit-note {
      color: #999999;
      display: flex;
      align-items: stretch;
      line-height: 19px;
      margin-bottom: 15px;
    }
    .deposit-note-icon {
      flex-basis: 20%;
      display: flex;
      justify-content: center;
      align-items: center;
      border-top-left-radius: 5px;
      border-bottom-left-radius: 5px;
      padding: 10px;
      background: linear-gradient(to bottom,#787880,#42424f);
    }
    .deposit-note-icon img {
      width: 35px;
    }
    .deposit-note-content {
      flex-basis: 80%;
      background-color: #CBCBCB;
      color: #363565;
      padding: 10px;
      border-top-right-radius: 5px;
      border-bottom-right-radius: 5px;
    }
    .kotak-pembayaran {
      background-color: #CBCBCB;
      color: #000000;
      cursor: pointer;
    }
    .kotak-pembayaran-aktif {
      background-color: #EF0101;
      background-image: linear-gradient(to bottom,#ef0101 0%,#720e0d 100%);
      cursor: pointer;
    }
    .kotak-pembayaran-aktif img {
      filter: brightness(0) invert(1);
    }
    .bank-info {
      background-color: #919197;
      background-image: linear-gradient(to bottom,#919197 0%,#444352 100%);
    }
    .bank-info hr {
      border-top: 1px solid #000000;
      border-bottom: 1px solid #393939;
      margin: 10px 0;
      width: 100%;
    }
    .bg-menu {
      background: url(admin/assets/images/8967248366_3482102655_1686659551997.jpg) no-repeat;
      background-size: 100% 100%;
    }
    .floating-whatsapp {
      text-decoration: none;
      position: fixed;
      bottom: 70px;
      left: 20px;
      width: 50px;
      height: 50px;
      z-index: 9999;
    }
    .floating-whatsapp:before {
      content: "";
      background-repeat: no-repeat;
      background-size: 34px 34px;
      background-position: center center;
      width: 50px;
      height: 50px;
      background-image: url("data:image/svg+xml;charset=utf8,%3csvg viewBox='0 0 24 24' width='32' height='32' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3e%3cg%3e%3cpath style='fill:%23ffffff' d='M16.75,13.96C17,14.09 17.16,14.16 17.21,14.26C17.27,14.37 17.25,14.87 17,15.44C16.8,16 15.76,16.54 15.3,16.56C14.84,16.58 14.83,16.92 12.34,15.83C9.85,14.74 8.35,12.08 8.23,11.91C8.11,11.74 7.27,10.53 7.31,9.3C7.36,8.08 8,7.5 8.26,7.26C8.5,7 8.77,6.97 8.94,7H9.41C9.56,14 9.77,6.94 9.96,7.45L10.65,9.32C10.71,9.45 10.75,9.6 10.66,9.76L10.39,10.17L10,10.59C9.88,10.71 9.74,10.84 9.88,11.09C10,11.35 10.5,12.18 11.2,12.87C12.11,13.75 12.91,14.04 13.15,14.17C13.39,14.31 13.54,14.29 13.69,14.13L14.5,13.19C14.69,12.94 14.85,13 15.08,13.08L16.75,13.96M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C10.03,22 8.2,21.43 6.65,20.45L2,22L3.55,17.35C2.57,15.8 2,13.97 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12C4,13.72 4.54,15.31 5.46,16.61L4.5,19.5L7.39,18.54C8.69,19.46 10.28,20 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z'%3e%3c/path%3e%3c/g%3e%3c/svg%3e");
      background-color: #00C853;
      position: absolute;
      top: 0;
      left: 0;
      border-radius: 100%;
      box-shadow: 0 1px 1.5px 0 rgb(0 0 0 / 12%), 0 1px 1px 0 rgb(0 0 0 / 24%);
    }
    .animation-1 {
      -webkit-animation: rubberBand 1s linear 1s infinite normal;
      animation: rubberBand 1s linear 1s infinite normal;
    }
    @keyframes rubberBand {
      10% {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
      }
      30% {
        -webkit-transform: scale3d(1.25,.75,1);
        transform: scale3d(1.25,.75,1)
      }
      40% {
        -webkit-transform: scale3d(.75,1.25,1);
        transform: scale3d(.75,1.25,1)
      }
      50% {
        -webkit-transform: scale3d(1.15,.85,1);
        transform: scale3d(1.15,.85,1)
      }
      65% {
        -webkit-transform: scale3d(.95,1.05,1);
        transform: scale3d(.95,1.05,1)
      }
      75% {
        -webkit-transform: scale3d(1.05,.95,1);
        transform: scale3d(1.05,.95,1)
      }
    }
    @-webkit-keyframes rubberBand {
      0%,
      100% {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
      }
      30% {
        -webkit-transform: scale3d(1.25,.75,1);
        transform: scale3d(1.25,.75,1)
      }
      40% {
        -webkit-transform: scale3d(.75,1.25,1);
        transform: scale3d(.75,1.25,1)
      }
      50% {
        -webkit-transform: scale3d(1.15,.85,1);
        transform: scale3d(1.15,.85,1)
      }
      65% {
        -webkit-transform: scale3d(.95,1.05,1);
        transform: scale3d(.95,1.05,1)
      }
      75% {
        -webkit-transform: scale3d(1.05,.95,1);
        transform: scale3d(1.05,.95,1)
      }
    }
    .floating-lainnya {
      position: fixed;
      bottom: 50px;
      left: 5px;
      z-index: 10;
    }
    @media screen and (max-width: 960px) {
      .responsive{
        width: 105%;
        height: 100px;
      }
      .lisensi{
        width: 100%;
        height: 50px;
        margin-top: -50px;

      }
      .atas{
        margin-top: -80px;
      }
    }
  </style>
</head>
<body>
  <div class="fixed-top" >
    <div class="container-fluid bg-utama position-relative p-3 ">

      <a href="index.php" class="d-block">
        <img src="admin/assets/images/<?php echo $logo ?>" alt="Logo" height="35" class="d-block mx-auto">
      </a>
      <?php 
      if ($email == "") {
        ?>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark rounded px-2 fs-3 me-3" data-bs-toggle="offcanvas" data-bs-target="#menunya">
          <img src="admin/assets/images/icon/icons8-menu-50.png">
        </div>
        <?php
      }else{
        ?>
        <div class="position-absolute top-50 end-0 translate-middle-y bg-dark rounded px-2 fs-3 me-3">
          <a href="function/logout.php">Logout</a>
        </div>
        <?php
      }
      ?>

    </div>
  </div>
  <div class="container-fluid px-0" style="padding: 67px 0 5rem 0;">
    <div class="offcanvas offcanvas-end text-bg-dark w-75" data-bs-backdrop="static" tabindex="-1" id="menunya" aria-labelledby="menunyaLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="menunyaLabel">
          <img src="admin/assets/images/<?php echo $logo ?>" alt="Logo" height="35">
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <form method="post" action="function/aksi_masuk.php">
          <div class="input-group mb-3">
            <span class="input-group-text text-bg-dark border-end-0 rounded-0">
              <i class="ri-user-line"></i>
            </span>
            <input type="text" name="nama_pengguna_akun" class="form-control text-bg-dark border-start-0 rounded-0" placeholder="Nama Pengguna">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text text-bg-dark border-end-0 rounded-0">
              <i class="ri-lock-line"></i>
            </span>
            <input type="password" name="kata_sandi_akun" class="form-control text-bg-dark border-start-0 border-end-0 rounded-0" id="input-kata-sandi" placeholder="Kata Sandi">
            <span class="input-group-text text-bg-dark border-start-0 rounded-0" id="peralihan-kata-sandi" style="cursor: pointer;">
              <i id="kata-sandi" class="ri-eye-off-line"></i>
            </span>
          </div>
          <div class="row g-2 mb-3">
            <div class="col">
              <a href="daftar.php" class="btn btn-sm rounded-0 w-100 sidebar-daftar">Daftar</a>
            </div>
            <div class="col">
              <button type="submit" name="masuk" class="btn btn-sm rounded-0 w-100 sidebar-masuk">Masuk</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex align-items-center p-2" style="background: #d4d400; color: #000000;">
      <i class="ri-volume-up-line me-2"></i>
      <marquee behavior="scroll" direction="left">Daftar Slot Online Terlengkap di <?php echo $nama_website ?> dan mainkan judi slot online terlengkap win rate paling tinggi dengan deposit pulsa.</marquee>
    </div>
    <!-- Slideshow -->
    <div class="owl-carousel owl-theme">
      <div class="item">
        <img src="admin/assets/images/promosi/5005235839_mg-playboyclub-june-mobile.gif" alt=" " class="img-fluid">
      </div>
      <div class="item">
        <img src="admin/assets/images/promosi/8974065534_2024287140_pp-exclusive-robber-strike-mobile.png" alt=" " class="img-fluid">
      </div>
      <div class="item">
        <img src="admin/assets/images/promosi/4729069473_8164313879_mg-exclusive-storm-hammer-mobile.gif" alt=" " class="img-fluid">
      </div>
      <div class="item">
        <img src="admin/assets/images/promosi/3964608615_4166202376_pp-zeus-vs-hades-mobile.gif" alt=" " class="img-fluid">
      </div>
      <div class="item">
        <img src="admin/assets/images/promosi/7966096080_mg-kekayaan-kerajaan-zeus-mobile.gif" alt=" " class="img-fluid">
      </div>
    </div>
    <?php 
    if($email == ""){
      ?>
      <div class="container-masuk-daftar">
        <a href="masuk.php" class="masuk">Masuk</a>
        <a href="daftar.php" class="daftar">Daftar</a>
      </div>
      <?php
    }

    ?>
    <?php 
    if ($email != "") {
      ?>
      <div class="container-fluid bg-utama py-2">
        <div class="row g-2">
          <div class="col">
            <a href="deposit.php" class="d-flex flex-column align-items-center text-decoration-none">
              <img src="admin/assets/images/icon/icons8-deposit-64.png" alt="Home" width="25" height="25">
              <span class="text-white">Deposit</span>
            </a>
          </div>

          <div class="col">
            <a href="withdraw.php" class="d-flex flex-column align-items-center text-decoration-none">
              <img src="admin/assets/images/icon/icons8-withdraw-64.png" alt="Home" width="25" height="25">
              <span class="text-white">Withdraw</span>
            </a>
          </div>
          <div class="col">
            <a href="profil.php" class="d-flex flex-column align-items-center text-decoration-none">
              <img src="admin/assets/images/icon/icons8-user-24.png" alt="Home" width="25" height="25">
              <span class="text-white">Akun Saya</span>
            </a>
          </div>
          <?php 
            if ($level == "admin") {
              ?>
              <div class="col">
                <a href="pengaturan.php" class="d-flex flex-column align-items-center text-decoration-none">
                  <img src="admin/assets/images/icon/icons8-setting-50.png" alt="Home" width="25" height="25">
                  <span class="text-white">Pengaturan</span>
                </a>
              </div>
              <?php
            }
          ?>
          
          <div class="col">
            <span class="text-white">
              <?php 
              $query2 = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email' ");
              while ($data2 = mysqli_fetch_array($query2)) {
                $saldo = $data2['saldo'];
              }
              ?>
              <?php echo $nama_pengguna; ?><br>
              <p style="color: green">Rp. <?php echo number_format($saldo); ?></p>
            </span>
          </div>

        </div>
      </div>
      <?php
    }
    ?>

    <div class="row g-0">
      <div class="col-12">
        <div class="d-flex bg-menu">
          <i class="ri-arrow-left-s-line fs-4 fw-bold d-flex align-items-center top-0 px-2" id="scroll-kiri"></i>
          
            <div class="flex-grow-1 overflow-auto m-0" id="scroll-kategori">
              <center>
              <a href="masuk.php" class="d-block text-nowrap text-white text-decoration-none text-uppercase p-3 ms-auto">          
                <img src="admin/assets/images/categories_w.webp">
              </a>
              </center>
            </div>
          
          <i class="ri-arrow-right-s-line fs-4 fw-bold d-flex align-items-center top-0 px-2" id="scroll-kanan"></i>

        </div>
      </div>
    </div>
        <div class="container-usd-jackpot-counter" style="background-image: url(admin/assets/images/jackpot.gif);">
    </div>
    <hr>  

    <!--<div class="p-3">-->
    <!--  <div class="row g-3 justify-content-center align-items-center">-->
    <!--    <h1 class="text-center">PILIH PROVIDER TERBAIK ANDA</h1>-->
    <!--    <a href="game.php?provider=pragmaticplay" class="col-lg-2 col-md-3 col-sm-4 col-4">-->
    <!--        <div class=" d-flex justify-content-center align-items-center p-2 fw-bold">-->
    <!--          <img src="https://img.pay4d.info/slot-prag.png" width="70px">-->
    <!--        </div>-->
    <!--        <h6 class="text-center">PRAGMATIC PLAY</h6>-->

    <!--    </a>-->
    <!--    <a href="game.php?provider=pgsoft" class="col-lg-2 col-md-3 col-sm-4 col-4">-->
    <!--        <div class=" d-flex justify-content-center align-items-center p-2 fw-bold">-->
    <!--          <img src="https://img.pay4d.info/slot-pg.png" width="70px">          -->
    <!--        </div>-->
    <!--        <h6 class="text-center">PG SOFT</h6>-->
    <!--    </a>-->
    <!--  </div>-->
    <!--</div>-->
    <div class="p-3">
      <div class="row g-3 justify-content-center align-items-center">
        <?php 
        $query = mysqli_query($koneksi, "SELECT * FROM game ORDER BY id LIMIT 23");
        while ($data = mysqli_fetch_array($query)) {
          ?>
          <div class="col-lg-2 col-md-3 col-sm-4 col-4">
            <div class="bg-bank d-flex justify-content-center align-items-center p-2 fw-bold">
              <?php 
              
              if ($email == "") {
                ?>
                <a href="masuk.php" onclick="alert('Silahkan Login Terlebih Dahulu !')">
                  <div class="card" style="width: 100%">
                    <img class="card-img-top" src="admin/assets/images/slot/<?php echo $data['gambar'] ?>" alt="Card image cap">
                  </div>
                </a>
                <?php
              }else{
                  $query1 = mysqli_query($koneksi, "SELECT saldo FROM user WHERE email = '$email' ");
              while ($data1 = mysqli_fetch_array($query1)) {
                if ($data1['saldo'] == 0) {
                  ?>
                  <div class="card" style="width: 100%">
                    <a href="deposit.php" onclick="alert('Saldo Anda Masih 0 Silahkan Lakukan Deposit Terlebih Dahulu !')">
                      <img class="card-img-top" src="admin/assets/images/slot/<?php echo $data['gambar'] ?>" alt="Card image cap">
                    </div>
                  </a>
                  <?php
                }else{
                  ?>
                  <div class="card" style="width: 100%">
                    <a href="main/main.php?id=<?php echo $data['id'] ?>&provider=<?php echo $data['provider'] ?>" target="_blank">
                      <img class="card-img-top" src="admin/assets/images/slot/<?php echo $data['gambar'] ?>" alt="Card image cap">
                    </div>
                  </a>
                  <?php
                }

              }
              }
              ?>


            </div>
          </div>
          <?php
        }
        ?>
        <hr>

    </div>


    <div style="background-color: white; width: 100%; margin: 0; padding: 0;" class="bungkus">
      <div class="container-usd-jackpot-counter container-fluid">   
        <img src="admin/assets/images/providers_w.webp" class="responsive mt-5 d-flex justify-content-center align-items-center">
      </div>
    <div class="container-usd-jackpot-counter container-fluid">   
        <img src="https://img.pay4d.info/guidelines_w.png" class="lisensi d-flex justify-content-center align-items-center p-2 fw-bold">
      </div>
    <div class="p-3 atas" style="margin-top: -50px;">
      <div class="row g-3 justify-content-center align-items-center">
        <div class="col-lg-2 col-md-3 col-sm-4 col-4">
          <div class="bg-bank d-flex justify-content-center align-items-center p-2 fw-bold">
            <i class="ri-checkbox-blank-circle-fill text-success me-2"></i>            <span>BCA</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-4">
          <div class="bg-bank d-flex justify-content-center align-items-center p-2 fw-bold">
            <i class="ri-checkbox-blank-circle-fill text-success me-2"></i>            <span>MANDIRI</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-4">
          <div class="bg-bank d-flex justify-content-center align-items-center p-2 fw-bold">
            <i class="ri-checkbox-blank-circle-fill text-success me-2"></i>            <span>CIMB</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-4">
          <div class="bg-bank d-flex justify-content-center align-items-center p-2 fw-bold">
            <i class="ri-checkbox-blank-circle-fill text-success me-2"></i>            <span>BNI</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-4">
          <div class="bg-bank d-flex justify-content-center align-items-center p-2 fw-bold">
            <i class="ri-checkbox-blank-circle-fill text-success me-2"></i>            <span>BRI</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-4">
          <div class="bg-bank d-flex justify-content-center align-items-center p-2 fw-bold">
            <i class="ri-checkbox-blank-circle-fill text-success me-2"></i>            <span>OVO</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-4">
          <div class="bg-bank d-flex justify-content-center align-items-center p-2 fw-bold">
            <i class="ri-checkbox-blank-circle-fill text-success me-2"></i>            <span>GOPAY</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-4">
          <div class="bg-bank d-flex justify-content-center align-items-center p-2 fw-bold">
            <i class="ri-checkbox-blank-circle-fill text-success me-2"></i>            <span>XL</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-4">
          <div class="bg-bank d-flex justify-content-center align-items-center p-2 fw-bold">
            <i class="ri-checkbox-blank-circle-fill text-success me-2"></i>            <span>TELKOMSEL</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-4">
          <div class="bg-bank d-flex justify-content-center align-items-center p-2 fw-bold">
            <i class="ri-checkbox-blank-circle-fill text-success me-2"></i>            <span>DANA</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-4">
          <div class="bg-bank d-flex justify-content-center align-items-center p-2 fw-bold">
            <i class="ri-checkbox-blank-circle-fill text-success me-2"></i>            <span>LINKAJA</span>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-4">
          <div class="bg-bank d-flex justify-content-center align-items-center p-2 fw-bold">
            <i class="ri-checkbox-blank-circle-fill text-success me-2"></i>            <span>BSI</span>
          </div>
        </div>


      </div>

      </div>
    </div>
    <div class="row g-0 justify-content-center align-items-center mt-3">
      <div class="col-10">
        <div class="text-center">
          <u class="d-block" style="text-align: left;"><span style="background-color: var(--vz-card-bg); text-align: var(--vz-body-text-align); font-size: 36px;"><font color="#ffff00" face="Poppins"><b><?php echo $nama_website ?></b></font></span><font color="#ffff00" style="font-size: 36px;"><b><span style="font-family: Poppins;">&nbsp;situs Slot online &amp; Judi bola Terlengkap</span></b></font></u>
          <p style="text-align: left;"><b style="font-size: 14.4px;"><?php echo $nama_website ?> situs slot&nbsp;terlengkap</b><span style="font-size: 14.4px;"> dengan RTP tinggi 97% Kemenangan. <?php echo $nama_website ?> kini menjadi salah satu pilihan bermain judi online paling dipercaya dan juga paling lengkap tahun 2021 sampai 2023.&nbsp;</span><span style="font-size: 14.4px;"><?php echo $nama_website ?></span><span style="font-size: 14.4px;">&nbsp;menyediakan permainan slot online,togel online,live casino,poker online,sabung ayam sampai pancing ikan.
          </span></p>
          <u class="d-block" style="text-align: left;"><font color="#ffff00" style=""><span style="font-size: 36px;">MENGAPA <?php echo $nama_website ?></span></font><font color="#ffff00" style=""><span style="font-size: 36px;">&nbsp;MENJADI PILIHAN SEBAGAI WEBSITE SLOT ONLINE PALING POPULER</span></font></u>
          <p style="text-align: left; font-size: 14.4px;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);"><?php echo $nama_website ?></span>&nbsp;memiliki banyak hal yang membuat website ini menjadi salah satu tempat bermain paling populer dikalangan remaja sampai dengan orang tua.Salah satunya permainan slot online yang sangat mudah dimainkan dan dimenangkan.Dengan <strong><a href="#" class="text-decoration-none" style="color: #FFFF00;">RTP live tinggi</a></strong> 97% <?php echo $nama_website ?>&nbsp;memberikan kemudahan MAXWIN.Dengan modal 10 ribu rupiah kita bisa memainkan slot online dan memenangkan JACKPOT sampai dengan ratusan juta hanya dengan satu kali spin.Permainan slot juga sangat mudah dan asyik untuk dimainkan karena dilengkapi dengan tampilan grafis terbaik.
          </p>
          <u class="d-block" style="text-align: left; font-size: 36px; font-weight: 500;"><font color="#ffff00">29 Slot online yang tersedia dan paling populer di judi online</font></u>
          <p style="font-size: 14.4px;">
          </p><ol>
            <li style="text-align: left;">Slot Online Pragmatic play</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">pragmatic play merupakan provider judi slot online yang memiliki banyak permainan populer di kalangan komunitas slot online.Untuk saat ini pasaran market Slot online di indonesia di rajai oleh Pragmatic play sebagai slot gampang menang.</span></div><li style="text-align: left;">Slot Online PGSOFT</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">PGsoft merupakan provider yang mulai mengungguli pasar indonesia belakangan ini,dengan slot online dengan grafik menarik PGsoft ini hampir mengimbangi kepopuleran Provider slot online pragmatic play di indonesia.</span></div><li style="text-align: left;">Slot Online Joker gaming</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Joker gaming merupakan provider bagus sangat banyak dicari dengan kepopuleran game Rome yang menarik minat para pemain slot online.</span></div><li style="text-align: left;">Slot Online Habanero</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Habanero merupakan provider slot online asli cina yang banyak sekali dimainkan oleh banyak orang di komunitas. Dengan sebutna slot anti nyedot ini juga memiliki grafik memukau mata.</span></div><li style="text-align: left;">Slot Online PlaynGO</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Play nGo merupakan provider belum lama menyediakan game slot online yang mulai banyak diminati oleh para komunitas slot dengan maximal jackpot Major x10000.</span></div><li style="text-align: left;">Slot Online Slot88</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Slot88 merupakan perusahaan baru menekuni dunia slot dengan game sedikit tetapi banyak dimainkan oleh banyak orang.Hanya dengan waktu setahun provider ini berhasil mengumpulkan peminat slot nya.</span></div><li style="text-align: left;">Slot Online Flow gaming</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Flow gaming merupakan provider slot baru sangat mudah untuk dimainkan dengan grafik memanjakan mata ,Flow Gaming dipastikan menjadi provider slot online yang sangat mudah untuk dimainkan.</span></div><li style="text-align: left;">Slot Online RTG slot</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Slot online RTG slot merupakan provider Asli china lama menciptakan slot online.Dengan permainan dengan grafik fantastis RTG slot dikenal oleh banyak sekali komunitas slot online di indonesia.</span></div><li style="text-align: left;">Slot Online Yggdrasil</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Slot online Yggdrasil merupakan provider slot online yang mengumpulkan slot dengan tema tema negara china.Provider ini juga mulai banyak dimainkan oleh para pemain slot baru.</span></div><li style="text-align: left;">Slot Online Live22</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Live22 menjadi pilihan provider slot online dengan menawarkan RTP Tinggi sampai dengan 95% di tiap gamenya.Bagaimana tidak menarik para pemain slot jika RTP saja rata 95%.</span></div><li style="text-align: left;">Slot Online Microgaming</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Microgaming merupakan provider slot online yang memiliki banyak sekali game .Provider ini memiliki banyak sekali slot online yang bisa kita mainkan diiringi dengan grafik terbaik.</span></div><li style="text-align: left;">Slot Online One touch</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">One touch merupakan provider online slot yang sangat mudah untuk dimainkan,dengan menerapkan kesederhanaan dalam bermain One touch bisa menggarap member dalam bermain.</span></div><li style="text-align: left;">Slot Online JILI</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">JILI slot online merupakan Provider baru yang berasal dari china yang menawarkan Perkalian tinggi di setiap game nya .Tidak hanya perkalian yang tinggi JILI juga menawarkan RTP tinggi sampai dengan 96% di setiap Game nya.</span></div><li style="text-align: left;">Slot Online CQ9</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">CQ9 merupakan slot asli negara bambu atau china yang menunjukkan grafik permainan HD dna juga kemudahan dalam memenangkan Jackpot yang besar.</span></div><li style="text-align: left;">Slot Online JDB</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">JDB gaming merupakan provider slot yang kurang dikenal slot pemula,Memang kurang dikenal tetapi JDB bisa memastikan para pemain setianya dengan RTP 98% pasti akurat.</span></div><li style="text-align: left;">Slot Online AdvantPlay</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Advantplay merupakan provider slot online menawarkan banyak sekali game yang memanjakan mata anda juga membuat kita tidak jenuh dalam bermain slot online.</span></div><li style="text-align: left;">Slot Online Astrotech</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Astro tech merupakan provider slot lama mulai naik daun berkat game gamenya di update dan juga ditambahkan.Tidak hanya dengan update game Astrotech juga menawarkan RTP live langsung dari pusat game.</span></div><li style="text-align: left;">Slot Online Fachai</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Fachai merupakan provider slot online paling baru yang pastinya sangat tidak pelit memberikan BOnus dan kemenangan sampai dengan jutaan rupiah di tiap harinya.</span></div><li style="text-align: left;">Slot Online Crowdplay</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Provider Crowd Play merupakan slot online berasal dari eropa yang dimasukkan ke dalam list slot gacor oleh nexus engine.Selain dari pilihan nexus engine provider ini juga menawarkan Live RTP langsung akurat.</span></div><li style="text-align: left;">Slot Online Ambslot</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Ambslot merupakan provider slot online sudah lama berdiri,Selain dari pengalaman bermain dikembangkan Ambslot, Ambslot juga memberikan kepuasan dengan taju modal kecil menang besar.</span></div><li style="text-align: left;">Slot Online Bigpot gaming</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Big Pot gaming merupakan provider slot online baru muncul dengan mengedepankan Jackpot besar di setiap game nya.</span></div><li style="text-align: left;">Slot Online V Power</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Vpower merupakan provider slot online yang sangat mudah untuk dicari di website judi manapun.Bedanya V Power menawarkan IBOPlay sebagai partner dengan menambahkan RTP live di persen 98 di setiap game nya.</span></div><li style="text-align: left;">Slot Online ION Slot</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">IONSlot merupakan provider judi online yang berkecimpung di dunia slot online.Dengan game slot sudah banyak ditambahkan dalam list slot nya membuat IONSLOT sangat populer di kalangan pemain slot.</span></div><li style="text-align: left;">Slot Online Playstar</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Playstar merupakan provider slot online yang banyak sekali dicari oleh para pemain slot online.Dikarenakan permainan slot online di provider ini sangat bagus dan juga mudah dimenangkan sangat jarang Playstar ditambahkan di situs judi lain.</span></div><li style="text-align: left;">Slot Online Playtech</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Slot online Playtech juga mendapatkan gelar provider slot online yang sangat populer dengan game mudah untuk dimenangkan.Playtech juga memberikan jaminan Jackpot di 97% di awal game.</span></div><li style="text-align: left;">Slot Online Spadegaming</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Spade gaming merupakan provider tertua yang ada di slot online dengan banyak nya slot online yang dibuat untuk membuat situs judi online semakin ramai dan juga membuat provider ini lebih dikenal lebih dalam lagi.</span></div><li style="text-align: left;">Slot Online Betsoft</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Betsoft merupakan slot online baru yang langsung dimasukkan ke list slot gacor oleh nexus gaming. Dikarenakan tawaran provider ini dengan persenan 99% anti rungkad membuat provider ini termasuk slot gacor hari ini.</span></div><li style="text-align: left;">Slot Online TopTrend Gaming</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">TopTrend gaming merupakan slot online yang sangat mudah dimainkan dan juga memiliki grafik sangat bagus dan juga menawarkan Jackpot chance 96% di tiap harinya . Dengan ada nya RTP membantu kita dalam memilih game game di Toptrend gaming ini.</span></div><li style="text-align: left;">Slot Online Funky gaming</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Funky Gaming merupakan provider slot online yang baru saja berdiri di tahun ini.Game game yang dibuat oleh Funky gaming sangatlah mudah dimainkan dan merupakan pilihan game tema terbaik dicontoh dari provider pendahulunya.</span></div></ol>
            <p></p>
            <u class="d-block" style="text-align: left; font-size: 36px; font-weight: 500;"><font color="#ffff00">Cara memilih provider slot terbaik untuk mendapatkan profit</font></u>
            <p style="text-align: left; font-size: 14.4px;">
              Pastikan Tujuan Bermain <strong><a href="#" class="text-decoration-none" style="color: #FFFF00;">slot online</a></strong> hanyalah meraih kemenangan dan menghilangkan kebosanan.Maka dari itu kita harus dengan detail mencari provider mana yang bisa memberikan kedua aspek tersebut.Berikut Tips Mencari Provider slot online yang memberikan kemenangan tanpa batas:
            </p>
            <ol>
              <li style="text-align: left;">Pastikan Tujuan bermain slot online</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Pastikan Tujuan kita bermain slot online adalah kemenangan,Siapa yang tidak menginginkan kemenangan besar hanya dengan modal kecil?.Maka dari itu kita pastikan untuk mengetahui apa tujuan kita bermain slot online, apakah hanya bersenang senang atau hanya bermain untuk mencari jackpot.Percayalah bahwa MAXWIN pasti hadir kapan saja tanpa pandang waktu.Maka dari itu jangan berhenti untuk mencoba dan mencari MAXWIN.</span></div><li style="text-align: left;">Pilih provider dengan RTP diatas 90%</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); text-align: var(--vz-body-text-align);"><font color="rgba(0, 0, 0, 0)" face="var(--vz-body-font-family)"><span style="font-weight: var(--vz-body-font-weight);">Cara memilih provider yang sedang gacor ataupun provider yang sangat terkenal dari RTP LIVE&nbsp;</span></font><font color="rgba(0, 0, 0, 0)" face="var(--vz-body-font-family)"><span style="font-weight: var(--vz-body-font-weight);"><span style="color: rgb(33, 37, 41); font-size: 14.4px;"><?php echo $nama_website ?></span>.Setelah melihat RTP tinggi maka kita harus seleksi lagi dengan cara melakukan riset di Komunitas Dewaslot808.Setelah melakukan riset maka cobalah bermain dengan Pola ataupun jam gacor yang tersedia di RTP&nbsp;</span></font><font color="rgba(0, 0, 0, 0)" face="var(--vz-body-font-family)"><span style="font-weight: var(--vz-body-font-weight);"><span style="color: rgb(33, 37, 41); font-size: 14.4px;"><?php echo $nama_website ?></span>.</span></font></span></div><li style="text-align: left;">Cari slot online yang banyak dimainkan player lain</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Pemain Slot online tidaklah sedikit, dengan komunitas aktif dengan kata kunci slot gacor hari ini sangat banyak di cari di mesin Google maupun Facebook.Membuktikan bahwa permainan ini sangat populer di kalangan semua umur .Maka dari itu kita juga harus lebih sering aktif di komunitas agar tahu update tentang Slot gacor hari ini di komunitas&nbsp;<span style="font-size: 14.4px;"><?php echo $nama_website ?></span>.</span></div><li style="text-align: left;">Pilih permainan yang kita ketahui cara bermain dan perhitungannya</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Setelah mendapatkan rekomendasi kita hanya perlu mencoba bermain untuk mengetahui perhitungan jackpot dna juga cara bermain yang pantas untuk kita coba.Pola yang ada di RTP Belum tentu mantap dan juga pasti Jackpot maka dari itu kita perlu mencoba bermain dengan modal sangat minim yaitu 10 ribu atau dengan Demo Slot online.</span></div></ol>
              <u class="d-block" style="text-align: left; font-size: 36px; font-weight: 500;"><font color="#ffff00">4 Tips memilih situs judi online terpercaya</font></u>
              <p style="text-align: left; font-size: 14.4px;">
                Bermain Judi Tidak hanya memikirkan Kemenangan besar yang akan kita raih,Hal paling penting dalam Bermain judi adalah Memilih situs terpercaya.Berikut rangkuman cara mencari <strong><a href="#" class="text-decoration-none" style="color: #FFFF00;">situs judi online</a></strong> yang terbukti membayar kemenangan:
              </p>
              <ol>
                <li style="text-align: left;">Terkenal dan memiliki banyak member aktif</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Pastinya syarat atau tips dasar yang harus dipenuhi adalah Situs/Link yang memiliki banyak member aktif dan komunitas aktif.</span></div><li style="text-align: left;">Memiliki permainan lengkap</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Tips kedua yang menjadi bukti bahwa situs judi online aman adalah memiliki permainan lengkap yang bisa dimainkan oleh semua orang.</span></div><li style="text-align: left;">Memiliki promo dan event</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Pastinya setiap Situs judi online memiliki promo dan event yang selalu update setiap saat untuk menarik member bermain dan menjadi situs yang tidak pelit.</span></div><li style="text-align: left;">Pelayanan cepat</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); text-align: var(--vz-body-text-align);"><font color="rgba(0, 0, 0, 0)" face="var(--vz-body-font-family)"><span style="font-weight: var(--vz-body-font-weight);">Situs Terpercaya pastinya memberikan pelayanan tercepat dalam menyelesaikan permasalahan dan juga persoalan yang ada.Seperti&nbsp;</span></font><font color="rgba(0, 0, 0, 0)" face="var(--vz-body-font-family)"><span style="font-weight: var(--vz-body-font-weight);"><span style="color: rgb(33, 37, 41); font-size: 14.4px;"><?php echo $nama_website ?></span>&nbsp;yang membalas Chat member tidak sampai 1 menit.</span></font></span></div><li style="text-align: left;">Terlisensi Badan Resmi</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Situs judi online pastinya memiliki lisensi yang ditampilkan di situsnya.Seperti&nbsp;<span style="font-size: 14.4px;">Zeus88</span>&nbsp;yang dilisensi oleh PAGCOR dna juga bmm testlabs yang menjadikan situs&nbsp;<span style="font-size: 14.4px;"><?php echo $nama_website ?></span>&nbsp;sebagai situs terpercaya.</span></div></ol>
                <u class="d-block" style="text-align: left; font-size: 36px; font-weight: 500; color: rgb(255, 0, 0);">Cara mendaftar di <?php echo $nama_website ?></u>
                <p style="text-align: left;"><span style="font-size: 14.4px;">
                Cara mendaftar di&nbsp;</span><span style="font-size: 14.4px;"><?php echo $nama_website ?></span><span style="font-size: 14.4px;">&nbsp;sangatlah mudah hanya dengan menyediakan data diri dan juga saldo untuk bermain.
                </span></p>
                <ol>
                  <li style="text-align: left;">Klik daftar di bagian pojok menu</li>
                  <li style="text-align: left;">Lalu isi data lengkap dan benar sesuai yang diminta</li>
                </ol>
                <u class="d-block" style="text-align: left; font-size: 36px; font-weight: 500; color: rgb(255, 0, 0);">Alasan Mengapa harus memilih <?php echo $nama_website ?></u>
                <p style="text-align: left; font-size: 14.4px;">
                  Mengapa memilih <?php echo $nama_website ?>&nbsp;sebagai tempat bermain judi ? Jawabanya karena aman cepat mudah dan nyaman.Dengan mendaftar di <?php echo $nama_website ?>&nbsp;kita bisa mendapatkan semua aspek yang kita butuhkan mulai dari data yang aman,cepat dalam hal pelayanan,mudah dalam bermain dan melakukan deposit sampai nyaman karena sering diberi jackpot.Alasan lainnya memiliki <?php echo $nama_website ?>&nbsp;sebagai <strong><a href="#" class="text-decoration-none" style="color: #FFFF00;">situs judi online</a></strong> adalah kelengkapan game yang bisa kita mainkan mulai dari game populer slot online,game poker online,domino qiu qiu,live casino,judi taruhan bola online, togel online,mancing ikan bisa kita mainkan dalam satu website saja.
                </p>
                <u class="d-block" style="text-align: left; font-size: 36px; font-weight: 500; color: rgb(255, 0, 0);">Bonus dan Promo terbaik untuk setiap member</u>
                <p style="text-align: left; font-size: 14.4px;">
                  Yang membedakan Situs <?php echo $nama_website ?>&nbsp;dengan situs lainnya pastinya dari bonusnya.<?php echo $nama_website ?>&nbsp;memberikan banyak sekali promo atau bonus yang bisa kita klaim dalam bermain di situs judi online <?php echo $nama_website ?>:
                </p>
                <ol>
                  <li style="text-align: left;">Bonus new member 20%</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); text-align: var(--vz-body-text-align);"><font color="rgba(0, 0, 0, 0)" face="var(--vz-body-font-family)"><span style="font-weight: var(--vz-body-font-weight);">Untuk setiap New member yang mendaftar di&nbsp;</span></font><font color="rgba(0, 0, 0, 0)" face="var(--vz-body-font-family)"><span style="font-weight: var(--vz-body-font-weight);"><span style="color: rgb(33, 37, 41); font-size: 14.4px;"><?php echo $nama_website ?></span>&nbsp;pastinya akan mendapatkan Bonus 20% dari deposit pertama yang bisa kita mainkan di slot online .Bonus ini diberikan sebagai kepercayaan dalam memilih&nbsp;</span></font><font color="rgba(0, 0, 0, 0)" face="var(--vz-body-font-family)"><span style="font-weight: var(--vz-body-font-weight);"><span style="color: rgb(33, 37, 41); font-size: 14.4px;"><?php echo $nama_website ?></span>&nbsp;sebagai situs judi onlin terpercaya.</span></font></span></div><li style="text-align: left;">Bonus Refferal seumur hidup</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Bonus Refferal seumur hidup yang dibagikan di tiap minggunya.Bonus ini Tidak memiliki syarat khusus.Dengan hanya berdiam diri dirumah kita bisa mendapatkan pasif income sampai ratusan juta tiap harinya.</span></div><li style="text-align: left;">Bonus Turnover</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Bonus Turnover bisa didapatkan dari bermain setia di Dewaslot808 setiap minggunya .di tiap minggunya Pastinya Dewaslot808 membagikan bonus 0.5% dari total turnover mingguan yang akan otomatis masuk ke dalam dompet bermain.</span></div><li style="text-align: left;">Bonus Cashback 5%</li><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-size: var(--vz-body-font-size); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Bonus Cashback ini merupakan Bonus kekalahan yang dibagikan bersamaan dengan Bonus Turnover.Menarik bukan mendapatkan Double cashback dalam satu hari sebanyak 5.5% tiap harinya dalam satu minggu.</span></div></ol>
                  <u class="d-block" style="text-align: left; font-weight: 500;"><span style="color: rgb(255, 0, 0); font-size: 36px;">Kemudahan yang ditawarkan</span><font color="#ff0000"><span style="font-size: 36px;">&nbsp;dalam bermain judi online</span></font></u>
                  <p style=""></p><div style="text-align: left; font-size: 14.4px;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Pastinya&nbsp;</span><?php echo $nama_website ?><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">&nbsp;menawarkan kemudahan dalam bermain judi online, dengan hanya 1 ID kita bisa bermain segala jenis permainan yang ada.Selain dari Keuntungan diatas kita juga bisa melakukan metode deposit pulsa tanpa potongan .Sebagai situs yang memudahkan bermain judi online&nbsp;</span><?php echo $nama_website ?><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">&nbsp;menawarkan </span><strong style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); text-align: var(--vz-body-text-align);"><a href="#" class="text-decoration-none" style="color: #FFFF00;">Deposit pulsa Telkomsel</a></strong><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);"> dan </span><strong style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); text-align: var(--vz-body-text-align);"><a href="#" class="text-decoration-none" style="color: #FFFF00;">Deposit pulsa XL</a></strong><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);"> dengan tanpa potongan dengan TO rendah,Deposit dana , E Wallet dan segala jenis bank termasuk bank digital.</span></div><div style="text-align: left;"><span style="font-size: 14.4px;"><br></span></div><span style="font-size: 14.4px;"><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Selain dari metode deposit yang beragam&nbsp;</span><?php echo $nama_website ?><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">&nbsp;juga menawarkan Pelayanan Customer service 24 jam tanpa offline.Customer service 24 jam yang dipilih pastinya dapat mengatasi dan menyelesaikan permasalahan yang muncul ketika bermain judi online.</span></div></span><p></p>
                  <u class="d-block" style="text-align: left; font-size: 36px; font-weight: 500; color: rgb(255, 0, 0);">FAQ Seputar Slot online</u>
                  <p style=""></p><div style="text-align: left; font-size: 14.4px;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Apa itu slot online?</span></div><div style="text-align: left;"><span style="font-size: 14.4px;"><br></span></div><span style="font-size: 14.4px;"><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">slot online merupakan Jenis permainan mesin slot yang biasa ditemukan di kasino, dengan perkembangan zaman Slot bisa dimainkan dengan online hanya bermodalkan kuota dna 10 ribu rupiah.</span></div></span><span style="font-size: 14.4px;"><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Bagaimana cara bermain slot online?</span></div></span><div style="text-align: left;"><br></div><span style="font-size: 14.4px;"><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Bermain slot online sangatlah mudah hanya perlu mendaftarkan diri di Bagian menu daftar dan menyediakan kuota dan modal 10 ribu kita bisa mendapatkan keuntungan yang fantastis.</span></div></span><span style="font-size: 14.4px;"><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Apa itu RTP slot?</span></div></span><div style="text-align: left;"><br></div><span style="font-size: 14.4px;"><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">RTP slot online merupakan tingkatan Return to player ke pemain , simpelnya RTP biasa dilihat sebagai indikasi bahwa slot yang kita lihat lagi bagus atau tidaknya.Maka dari itu pentingnya melihat RTP dalam bermain slot online.</span></div></span><span style="font-size: 14.4px;"><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Provider apa yang bisa kita mainkan ?</span></div></span><div style="text-align: left;"><br></div><span style="font-size: 14.4px;"><div style="text-align: left;"><span style="background-color: var(--vz-card-bg); color: var(--vz-card-color); font-family: var(--vz-body-font-family); font-weight: var(--vz-body-font-weight); text-align: var(--vz-body-text-align);">Banyak provider yang sudah kami jelaskan diatas merupakan provider Pilihan Nexus engine.Tetapi untuk Provider terbaik dan dikenal orang banyak seperti Pragmatic play,PG soft,Slot88,Live22,Microgaming,Habanero dan CQ9 Bagaimana bermain slot agar mudah menang?</span></div></span><p></p>
                  <ol>
                    <li style="text-align: left;">Melihat RTP</li>
                    <li style="text-align: left;">Mengecek jam GAcor</li>
                    <li style="text-align: left;">Mengecek Pola gacor</li>
                  </ol>
                  <p style="text-align: left; font-size: 14.4px;">
                    Apakah Slot online menguntungkan? Judi slot online sangat menguntungkan para pemain karena hadiah yang ditawarkan bisa sampai 10000x dari total bet.
                  </p>        </div>
                </div>
                <div class="col-10">
                  <p class="mt-3" style="font-size: 14.4px;">© 2021 Asiapay4d menawarkan berbagai macam provider terbaik pilihan dan di dukung pelayanan customer service profesional 24/7 siap melayani anda.</p>
                </div>
              </div>
            </div>
            <div class="fixed-bottom">
              <div class="container-fluid bg-utama py-2">
                <div class="row g-2">
                  <div class="col">
                    <a href="index.php" class="d-flex flex-column align-items-center text-decoration-none">

                      <img src="admin/assets/images/svg/home-active.svg" alt="Home" width="25" height="25">
                      <span class="text-utama">Beranda</span>
                    </a>
                  </div>
                  <?php 
                  if ($email == "") {
                    ?>
                    <div class="col">
                      <a href="masuk.php" class="d-flex flex-column align-items-center text-decoration-none">

                        <img src="admin/assets/images/svg/login.svg" alt="Home" width="25" height="25">
                        <span class="text-white">Masuk</span>
                      </a>
                    </div>
                    <?php
                  }
                  ?>

                  <div class="col">
                    <a href="promosi.php" class="d-flex flex-column align-items-center text-decoration-none">

                      <img src="admin/assets/images/svg/promotion.svg" alt="Home" width="25" height="25">
                      <span class="text-white">Promosi</span>
                    </a>
                  </div>
                  <div class="col">
                    <a href="hub_kami.php" class="d-flex flex-column align-items-center text-decoration-none">

                      <img src="admin/assets/images/svg/live-chat.svg" alt="Home" width="25" height="25">
                      <span class="text-white">Hub Kami</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="floating-lainnya">
              <a href="rtp.php" target="_blank">
                <img src="admin/assets/images/3585816612_2940979039_7472518187_rtp-fc.gif" alt="Livescore" width="80" height="80">
              </a>
            </div>
            <!-- Popup Pengumuman -->
            <div class="modal fade" id="popup-pengumuman" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="popup-pengumuman" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color: #0C0C0C!important;">
                  <div class="modal-header align-items-start border-0">
                    <h4 class="modal-title mx-auto" id="popup-pengumuman" style="font-size: 15px; color: #B90D00;">
                      <img src="admin/assets/images/notification.png" alt="Pengumuman" class="d-block mx-auto" width="70" height="70" style="margin: 10px 0;">
                      PENGUMUMAN
                    </h4>
                    <i class="ri-close-line fs-6 fw-bold" data-bs-dismiss="modal" style="cursor: pointer;"></i>
                  </div>
                  <div class="modal-body">
                    <a href="index.php" class="d-block text-center" style="margin-bottom: 10px;">
                      <img src="admin/assets/images/<?php echo $logo ?>" alt="Pengumuman" class="img-fluid">
                    </a>
                    <h2 style="margin-top: 20px; margin-bottom: 10px; line-height: 1.1; text-align: center;"><font style="font-family: digital_sans_ef_medium; font-size: 30px; color: rgb(255, 255, 255); background-color: rgb(0, 0, 0);">WELCOME TO</font><font color="#ce0000" style="font-family: digital_sans_ef_medium; font-size: 30px; background-color: rgb(0, 0, 0);">&nbsp;</font><font style="font-family: digital_sans_ef_medium; font-size: 30px; background-color: rgb(255, 255, 0);" color="#000000"><b><?php echo $nama_website ?></b></font></h2><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: digital_sans_ef_medium; font-size: 14px; background-color: rgb(12, 12, 12); text-align: center;"><span style="font-weight: 600;"><font color="#ffcc00">HATI-HATI TERHADAP PENIPUAN YANG MENGATASNAMAKAN&nbsp;SITUS <?php echo $nama_website ?></font></span></p><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(187, 187, 187); font-family: digital_sans_ef_medium; font-size: 14px; background-color: rgb(12, 12, 12); text-align: center;"><span style="font-weight: 600;"><span style="color: rgb(255, 0, 0);">KONFIRMASI DEPOSIT ATAU WITHDRAW HANYA MELALUI LIVECHAT DAN WHATSAPP YANG ADA DI BAWAH</span></span></p>        </div>
                    <div class="modal-footer justify-content-center border-secondary" style="border-top: 1px solid #2B2B2B!important;">
                      <button type="button" class="btn fw-normal text-white" data-bs-dismiss="modal" style="min-width: 100px; background: #9A0F04; font-size: 14px!important;">OK</button>
                    </div>
                  </div>
                </div>
              </div>


              <!-- JQuery 3.6.3 -->
              <script src="admin/assets/js/jquery-3.6.3.min.js"></script>
              <!-- Bootstrap 5 JS -->
              <script src="admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
              <!-- Owl Carousel JS -->
              <script src="admin/assets/libs/owl-carousel/owl.carousel.min.js"></script>
              <!-- Flatpickr JS -->
              <script src="admin/assets/libs/flatpickr/flatpickr.min.js"></script>
              <!-- Datatables Bootstrap 5 -->
              <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
              <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
              <!-- Page JS -->
              <script>
    // Popup Pengumuman
    var popupPengumuman = new bootstrap.Modal(document.getElementById("popup-pengumuman"), {});
    document.onreadystatechange = function () {
      popupPengumuman.show();
    };

    $(document).ready(function () {

      let jackpot = 10000000000;
      let count = 41394775;

      let interval = setInterval(function() {
        count += 1.11;
        if (count >= jackpot) {
          clearInterval(interval);
          count = jackpot;
        }
        let formattedJackpot = 'IDR ' + count.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '1,');
        $('#counter').text(formattedJackpot);
      }, 10);
      // Owl Carousel
      $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
      });


    });
  </script>
</body>
</html>