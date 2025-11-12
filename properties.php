<?php

ini_set('memory_limit', '1024M');

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "emlak_db"; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Veritabanı bağlantısı başarısız: " . $e->getMessage());
}


$query = $conn->query("SELECT * FROM ilanlar ORDER BY id DESC");
$ilanlar = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>İlanlar - Sağlam İnşaat</title>

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">
</head>
<body class="properties-page">

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex justify-content-between align-items-center">
    <a href="index.php" class="logo d-flex align-items-center">
      <h1 class="sitename">Sağlam<span>İnşaat</span></h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="index.php">Anasayfa</a></li>
        <li><a href="about.php">Hakkımızda</a></li>
        <li><a href="properties.php" class="active">İlanlar</a></li>
        <li><a href="agents.php">Ekibimiz</a></li>
        <li><a href="contact.php">İletişim</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
  </div>
</header>

<main class="main">

<div class="page-title" data-aos="fade">
  <div class="heading">
    <div class="container text-center">
      <h1>İlanlar</h1>
      <p>En güncel gayrimenkul ilanlarını buradan görebilirsiniz. İster kiralık, ister satılık ilanlar detaylı olarak listelenir.</p>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.php">Anasayfa</a></li>
        <li class="current">İlanlar</li>
      </ol>
    </div>
  </nav>
</div>

<section id="real-estate" class="real-estate section">
  <div class="container">
    <div class="row gy-4">

      <?php foreach($ilanlar as $ilan): ?>
      <?php
      ?>
      <div class="col-xl-4 col-md-6" data-aos="fade-up">
        <div class="card">
          <img src="<?= $ilan['resim'] ?>" alt="" class="img-fluid">
          <div class="card-body">
            <h3><a href="property-single.php?id=<?= $ilan['id'] ?>" class="stretched-link"><?= $ilan['baslik'] ?></a></h3>
            <div class="card-content d-flex flex-column justify-content-center text-center">
              <div class="row propery-info">
                <div class="col">Alan</div>
                <div class="col">Yatak</div>
                <div class="col">Banyo</div>
                <div class="col">Garaj</div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

</main>

<footer id="footer" class="footer light-background">
  <div class="container">
    <div class="row gy-3">
      <div class="col-lg-3 col-md-6 d-flex">
        <i class="bi bi-geo-alt icon"></i>
        <div class="address">
          <h4>Konum</h4>
          <p>Çamlaraltı Mahallesi 1800 Sok No:20</p>
          <p>Denizli / Pamukkale/ <p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex">
        <i class="bi bi-telephone icon"></i>
        <div>
          <h4>İletişim</h4>
          <p>
            <strong>Telefon:</strong> +90 000 000 00 00 <br>
            <strong>E-posta:</strong> info@example.com
          </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex">
        <i class="bi bi-clock icon"></i>
        <div>
          <h4>Çalışma Saatleri</h4>
          <p>
            <strong>Pzt-Cum:</strong> 11:00 - 23:00<br>
            <strong>Pazar:</strong> Kapalı
          </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <h4>Bizi Takip Edin</h4>
        <div class="social-links d-flex">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
