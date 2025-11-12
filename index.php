<?php require 'db.php'; ?>
<?php
echo password_hash("12345", PASSWORD_DEFAULT);
?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Anasayfa- Sağlam İnşaat</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/main.css" rel="stylesheet">

  
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
      
        <h1 class="sitename">Sağlam<span>İnşaat</span></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Anasayfa</a></li>
          <li><a href="about.php">Hakkımızda</a></li>
          <li><a href="properties.php">İlanlar</a></li>
          <li><a href="agents.php">Ekibimiz</a></li>
          <li><a href="contact.php">İletişim</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">


    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
          <div class="carousel-container">
            <div>
              <p>Gümbet , Bodrum</p>
              <h2><span>204</span> Ayancık</h2>
              <a href="property-single.php" class="btn-get-started">Kiralık | 70.000 ₺ </a>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
          <div class="carousel-container">
            <div>
              <p>Türkbükü, Bodrum</p>
              <h2><span>247</span> Kelebekgülü</h2>
              <a href="property-single.php" class="btn-get-started"> Satılık | 10.000.000 ₺ </a>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
          <div class="carousel-container">
            <div>
              <p>Kaş , Antalya </p>
              <h2><span>247</span> Bor Vadisi</h2>
              <a href="property-single.php" class="btn-get-started"> Kiralık |  50.000 ₺ </a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section>


    
    
   
    <section id="agents" class="agents section">

    
      <div class="container section-title" data-aos="fade-up">
        <h2>Ekibimiz </h2>
       
      </div>

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Eşref Enes Erat</h4>
                <span> Gayrimenkul Yöneticisi</span>
                <div class="social">
                  <a href="https://x.com/?lang=tr"><i class="bi bi-twitter-x"></i></a>
                  <a href="https://www.facebook.com/?locale=tr_TR"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sare Yıkılmaz</h4>
                <span>Kiralama Müdürü</span>
                <div class="social">
                  <a href="https://x.com/?lang=tr"><i class="bi bi-twitter-x"></i></a>
                  <a href="https://www.facebook.com/?locale=tr_TR"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ahmet Değirmenci</h4>
                <span>Satış Müdürü<br></span>
                <div class="social">
                  <a href="https://x.com/?lang=tr"><i class="bi bi-twitter-x"></i></a>
                  <a href="https://www.facebook.com/?locale=tr_TR"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>

                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>

    
    <section id="testimonials" class="testimonials section">

      
      <div class="container section-title" data-aos="fade-up">
        <h2>Sizden Gelenler</h2>
        <p> Değerli Yorumlarınızla Artık Daha Güçlüyüz</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                "Daireyi gezdik ve gerçekten beklediğimizden daha güzel çıktı. Konumu harika, toplu taşımaya yakın. Satıcı da çok ilgiliydi, teşekkürler!"
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Hüseyin Eroğlu</h3>
                  
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                 "Müstakil evin bahçesi ve genişliği bizi çok etkiledi. Sessiz bir semtte olması da büyük avantaj. Satıcı çok yardımcı oldu."
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3> Eylül Şahin</h3>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                 "Şehir merkezine yakınlığı sayesinde ulaşım çok kolay. Daire gerçekten çok güzel ve mobilyalar kaliteli. Kesinlikle tavsiye ederim."
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Sena Yarkın</h3>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "Ofisi gezdik ve profesyonel bir çalışma ortamı için her şey düşünülmüş. Konumu ulaşım açısından çok avantajlı, yönetim süreci hızlı ve sorunsuz. İşimizi kolaylaştıran bir deneyim oldu."
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Murat Gönay<h3>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
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
            <h4>Adres</h4>
            <p>Çamlaraltı Mahallesi 1800 Sok No:20</p>
            <p>Denizli / Pamukkale</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>İletişim</h4>
            <p>
              <strong>Telefon:</strong> <span>+90 000 000 00 00 </span><br>
              <strong>Email:</strong> <span>info@example.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Hizmet Saatleri</h4>
            <p>
              <strong>Hafta içi:</strong> <span>11:00 - 23:00</span><br>
              <strong>Hafta Sonu</strong>: <span>Kapalı</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Takip Et</h4>
          <div class="social-links d-flex">
            <a href="https://x.com/?lang=tr" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.facebook.com/?locale=tr_TR" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span></span> <strong class="px-1 sitename">Sağlam İnşaat</strong> <span>Tüm Hakları Saklıdır</span></p>
      <div class="credits">
       
       
      </div>
    </div>

  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

 
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  
  <script src="assets/js/main.js"></script>

</body>

</html>