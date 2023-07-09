<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('judul') Apotek Nurani</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/tema/img/favicon1.png')}}" rel="icon">
  <link href="{{asset('/tema/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/tema/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('/tema/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/tema/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/tema/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="tema/img/logo.png" alt=""> -->
        <h1>Apotek Nurani<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#portfolio">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>Apotek Nurani</span></h2>
          <p>Your Wellness Is Our Wellspring. Dimana Wellness anda adalah jantung kehidupan kami</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{asset('tema/img/farma.png')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>
        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Apotek Nurani Tegal</h3>
            <img src="{{asset('tema/img/about-3.jpg')}}" class="img-fluid rounded-4 mb-4" alt="">
            <p>
              Program mitra jaringan Apotek Nurani terbuka lebar untuk para pemilik apotek konvensional yang ingin mengembangkan bisnis 
              Apoteknya menjadi lebih baik dengan standarisasi dari manajemen Apotek Nurani.
              </p>  
        </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Dalam perjalanannya, Apotek Nurani selalu berusaha untuk mencetak prestasi dalam memberikan
                pelayanan terbaik bagi masyarakat indonesia
            </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Melayani Konsultasi</li>
                <li><i class="bi bi-check-circle-fill"></i> Menerima Pesanan </li>
                <li><i class="bi bi-check-circle-fill"></i> Menerima Resep Dokter</li>
              </ul>
              <p>
              Franchise Apotek Nurani telah terbukti mempunyai sistem franchise unggul, yaitu brand kuat dan sudah dikenal, royalty fee ringan, dukungan terpadu (untuk pendirian gerai, rekrutmen & pelatihan staf, support IT online 24 jam, strategi pemasaran, hingga operasional), mendorong kewirausahaan, bisnis sekaligus ibadah. Serta 
              menjadi berkat dan manfaat dengan memberikan akses obat yang mudah dan terjangkau bagi masyarakat Indonesia.
              </p>

              <div class="position-relative mt-4">
                <img src="{{asset('tema/img/about-2.jpg')}}" class="img-fluid rounded-4" alt="">
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="tema/img/clients/1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="tema/img/clients/2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="tema/img/clients/3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="tema/img/clients/4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="tema/img/clients/5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="tema/img/clients/6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="tema/img/clients/7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="tema/img/clients/8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="{{asset('tema/img/apoteker.png')}}" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Pelayanan</strong> Banyak pelanggan yang berdatangan</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Obat</strong> Tersedia banyak obat</p>
            </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

   
    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pelayanan</h2>
          <p>Apotek Nurani menerima berbagai macam pelayanan kesehatan.</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <h3>Pemeriksaan</h3>
              <p>Disini pelanggan dapat melakukan berbagai macam pemeriksaan</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <h3>Penerimaan Resep Dokter</h3>
              <p>Disini bisa menerima resep dari dokter</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <h3>Obat</h3>
              <p>Menerima pelayanan obat racikan dan non-racikan</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Gallery</h2>
          <p>Berikut ini beberapa gallery yang terdapat pada Apotik Nurani</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{asset('tema/img/portfolio/image.jpg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="tema/img/portfolio/image.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Pemeriksaan Berbagai Macam</a></h4>
                  <p>Disini dapat dilakukan pemeriksaan gula darah, kolesterol, asam urat, dll</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="{{asset('tema/img/portfolio/obat.jpg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="tema/img/portfolio/obat.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Pelayanan Pembelian Obat</a></h4>
                  <p>Pembelian Berbagai Macam Obat dapat dilakukan disini</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="{{asset('tema/img/portfolio/dokter.jpg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="tema/img/portfolio/dokter.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Penerimaan Resep Dokter</a></h4>
                  <p>Dapat melakukan pelayanan penerimaan resep dokter</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="{{asset('tema/img/portfolio/karyawan.jpg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="tema/img/portfolio/karyawan.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Karyawan</a></h4>
                  <p>Semua karyawan disini adalah karyawan yang mengetahui tentang obat</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{asset('tema/img/portfolio/periksa.jpg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="tema/img/portfolio/periksa.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Melakukan Pengecekan Obat</a></h4>
                  <p>Karyawan selalu melakukan pengecekan kesediaan obat yang ada di apotik ini</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="{{asset('tema/img/portfolio/apotik.png')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="tema/img/portfolio/apotik.png" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Apoteker</a></h4>
                  <p>Disini terdapat apoteker yang dapat dipercaya</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->


        

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{asset('tema/img/team/team-2.jpg')}}" class="img-fluid" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Marketing</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->


        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Temui kami di kontak tersebut</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Jalan Serayu Tegal Rt 5 Rw 8 Kecamatan Mintaragen Kelurahan Tegal Timur</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>nuranisentral@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>0897468294759</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sat: 8AM - 9PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Apotik Nurani</span>
          </a>
          <p>Your Wellness Is Our Wellspring. Dimana Wellness anda adalah jantung kehidupan kami</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
          <strong>Street:</strong> Jalan Serayu Tegal Rt 5 Rw 8 <br>
          Kecamatan Mintaragen<br>
          Kelurahan Tegal Timur <br><br>
            <strong>Phone:</strong> 0897468294759<br>
            <strong>Email:</strong> nuranisentral@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Apotik Nurani</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="tema/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="'tema/vendor/aos/aos.js"></script>
  <script src="tema/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="tema/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="tema/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="tema/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="tema/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="tema/js/main.js"></script>

</body>

</html>