<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('judul') - Drivin.Corp</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('tema/img/favicon.png')}}" rel="icon">
  <link href="{{asset('tema/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('tema/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('tema/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Drivin Corp<span>.</span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#cars">Cars</a></li>
          <li><a class="nav-link scrollto" href="#team">Trainners</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Good Solution for Your Driving Training<span>.</span></h1>
          <h2>We are trainers of talented driving test</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-car-fill"></i>
            <h3><a href="">Lebih dari 100 Mobil</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="bi-person-check-fill"></i>
            <h3><a href="">Trainner berpengalaman</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">Schedule waktu sesuka mu</a></h3>
          </div>
        </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('tema/img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Drivin Corp terus berinovasi untuk menjadi layanan terbaik Anda.</h3>
            <p class="fst-italic">
              Drivin Corp adalah penyedia layanan kursus mobil online pertama yang memudahkan anda untuk dapat memilih trainer dan mobil secara langsung dan anda dapat mengatur sendiri waktu anda, sefleksibel itu. Dengan trainer yang tersebar diseluruh Indonesia, anda tidak perlu khawatir dengan jarak. Cukup pesan dan atur waktu serta tempat yang diinginkan. Kita memiliki trainers yang sudah expert di bidangnya sehingga anda tidak perlu khawatir dengan waktu pembelajaran yang lama.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Trainers yang berpengalaman.</li>
              <li><i class="ri-check-double-line"></i> Ada lebih dari 100 mobil yang bisa kamu pilih sesuai kenyamanan.</li>
              <li><i class="ri-check-double-line"></i> Atur waktu dan tempat samau mu.</li>
            </ul>
            <p>
              Lebih dari 1000 orang telah mempercayakan jasa kami untuk kenyamanan dan keamanan dalam belajar mengemudi. 
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="ri-car-fill"></i></div>
              <h4><a href="">Rent Cars</a></h4>
              <p>Tersedia jasa sewa mobil untuk kebutuhan belajar atau sewa harian.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Driver License</a></h4>
              <p>Perbantuan dalam pengurusan surat Izin Mengemudi (SIM)</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi-person-check-fill"></i></div>
              <h4><a href="">Trainners</a></h4>
              <p>Trainner berpengalaman untuk support tes mengemudi.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="cars" class="cars">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>cars</h2>
            <p>Check our Cars</p>
          </div>
  
          <div class="row cars-container" data-aos="fade-up" data-aos-delay="200">
  
            <div class="col-lg-4 col-md-6 cars-item filter-app">
              <div class="cars-wrap">
                <img src="{{('tema//img/portfolio/portfolio-1.png')}}" class="img-fluid" alt="">
                <div class="cars-info">
                  <h4>Car 1</h4>
                  <p>Car</p>
                  <div class="cars-links">
                    <a href="{{('tema//img/portfolio/portfolio-1.png')}}" data-gallery="carsGallery" class="cars-lightbox" title="Car 1"><i class="bx bx-plus"></i></a>
                    <a href="cars-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 cars-item filter-web">
              <div class="cars-wrap">
                <img src="{{('tema//img/portfolio/portfolio-2.png')}}" class="img-fluid" alt="">
                <div class="cars-info">
                  <h4>Car 2</h4>
                  <p>Car</p>
                  <div class="cars-links">
                    <a href="{{('tema//img/portfolio/portfolio-2.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Car 2"><i class="bx bx-plus"></i></a>
                    <a href="cars-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 cars-item filter-app">
              <div class="cars-wrap">
                <img src="{{('tema//img/portfolio/portfolio-3.png')}}" class="img-fluid" alt="">
                <div class="cars-info">
                  <h4>Car 3</h4>
                  <p>Car</p>
                  <div class="cars-links">
                    <a href="{{('tema//img/portfolio/portfolio-3.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Car 3"><i class="bx bx-plus"></i></a>
                    <a href="cars-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 cars-item filter-card">
              <div class="cars-wrap">
                <img src="{{('tema//img/portfolio/portfolio-4.png')}}" class="img-fluid" alt="">
                <div class="cars-info">
                  <h4>Car 4</h4>
                  <p>Car</p>
                  <div class="cars-links">
                    <a href="{{('tema//img/portfolio/portfolio-4.png')}}" data-gallery="carsGallery" class="cars-lightbox" title="Car 4"><i class="bx bx-plus"></i></a>
                    <a href="cars-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 cars-item filter-web">
              <div class="cars-wrap">
                <img src="{{('tema//img/portfolio/portfolio-5.png')}}" class="img-fluid" alt="">
                <div class="cars-info">
                  <h4>Car 5</h4>
                  <p>Car</p>
                  <div class="cars-links">
                    <a href="{{('tema//img/portfolio/portfolio-5.png')}}" data-gallery="carsGallery" class="cars-lightbox" title="Car 5"><i class="bx bx-plus"></i></a>
                    <a href="cars-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 cars-item filter-app">
              <div class="cars-wrap">
                <img src="{{('tema//img/portfolio/portfolio-6.png')}}" class="img-fluid" alt="">
                <div class="cars-info">
                  <h4>Car 6</h4>
                  <p>Car</p>
                  <div class="cars-links">
                    <a href="{{('tema//img/portfolio/portfolio-6.png')}}" data-gallery="carsGallery" class="cars-lightbox" title="Car 6"><i class="bx bx-plus"></i></a>
                    <a href="cars-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 carsitem filter-card">
              <div class="cars-wrap">
                <img src="{{('tema//img/portfolio/portfolio-7.png')}}" class="img-fluid" alt="">
                <div class="cars-info">
                  <h4>Car 7</h4>
                  <p>Car</p>
                  <div class="cars-links">
                    <a href="{{('tema//img/portfolio/portfolio-7.png')}}" data-gallery="carsGallery" class="cars-lightbox" title="Car 7"><i class="bx bx-plus"></i></a>
                    <a href="cars-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 cars-item filter-card">
              <div class="cars-wrap">
                <img src="{{('tema//img/portfolio/portfolio-8.png')}}" class="img-fluid" alt="">
                <div class="cars-info">
                  <h4>Car 8</h4>
                  <p>Car</p>
                  <div class="cars-links">
                    <a href="{{('tema//img/portfolio/portfolio-8.png')}}" data-gallery="carsGallery" class="cars-lightbox" title="Car 8"><i class="bx bx-plus"></i></a>
                    <a href="cars-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 cars-item filter-web">
              <div class="cars-wrap">
                <img src="{{('tema//img/portfolio/portfolio-9.png')}}" class="img-fluid" alt="">
                <div class="cars-info">
                  <h4>Car 9</h4>
                  <p>Car</p>
                  <div class="cars-links">
                    <a href="{{('tema//img/portfolio/portfolio-9.png')}}" data-gallery="carsGallery" class="cars-lightbox" title="Car 9"><i class="bx bx-plus"></i></a>
                    <a href="cars-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Jika Anda tertarik untuk menggunakan jasa kami, silahkan hubungi kami.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Penilaian dari beberapa Client tentang pelayanan Kami.</h3>
              <p>
                9 dari 10 client senang dan puas dengan pelayanan kami.
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="80" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> seang dengan pelayanan dan keamanan yang diberikan.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Years of experience</strong> dalam jasa penyedia layanan test driving online.</p>
                  </div>
                </div>

              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('tema/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saya suka dengan pelayanannya. Good!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('tema/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The best trainner ever i meet, love it.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('tema/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Cool, trainner nya baik dan ramah. Suka banget dengan pelayanannya.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('tema/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Inovasi yang bagus, membuat saya tidak perlu jauh-jauh ke tempat kursus, pelayanannya juga good.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('tema/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Sangat membantu.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Trainners</h2>
          <p>Check our Trainners</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{asset('tema/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{asset('tema/img/team/team-2.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{asset('tema/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{asset('tema/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3853.074766733948!2d106.8133047812917!3d6.2665753443255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f180500f7d31%3A0x5a76b1a8aee7fefb!2sKoi%20Kemang!5e0!3m2!1sid!2sid!4v1678617944895!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Kemang Street, South Jakarta 12345, DKI Jakarta</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 8982 76546 55</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

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
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Drivin Corps<span>.</span></h3>
              <p>
                Kemang Street <br>
                South Jakarta 12345, DKI Jakarta<br><br>
                <strong>Phone:</strong> +62 8982 76546 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Rent Cars</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Driver License</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Trainners</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Coming Soon</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Drivin Corps</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('tema/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('tema/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('tema/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('tema/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('tema/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('tema/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('tema/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('tema/js/main.js')}}"></script>

</body>

</html>