<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PT. Perkasa Elektrika Power</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="fe/img/logo-pep-kecil.png" rel="icon">
  <link href="fe/img/logo-pep-kecil.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="fe/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="fe/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="fe/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="fe/vendor/aos/aos.css" rel="stylesheet">
  <link href="fe/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="fe/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="fe/css/main.css" rel="stylesheet">

  <!-- Sweet Alert -->
  <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
  <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <div class="top-bar bg-dark text-white py-2">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-10 text-center text-lg-start mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center" style="height: 45px;">
            <a class="me-3 text-light" href="https://maps.app.goo.gl/xzH44Eaxbaq2CrWS8" target="_blank">
              <i class="fa fa-map-marker-alt me-2"></i>Griya Anggraini Blok A1 NO 3 - Bogor
            </a>
            <a class="me-3 text-light" href="https://wa.me/628170783922" target="_blank">
              <i class="fa fa-phone-alt me-2"></i>0817-0783-922 
            </a>
            <a class="me-3 text-light" href="https://wa.me/6281293941565" target="_blank">
              <i class="fa fa-phone-alt me-2"></i>0812-9394-1565
            </a>
            <a class="text-light" href="mailto:perkasa.panel@gmail.com">
              <i class="fa fa-envelope-open me-2"></i>perkasa.panel@gmail.com
            </a>
          </div>
        </div>
        {{-- <div class="col-lg-2 d-flex align-items-center justify-content-lg-end justify-content-center gap-2">
          <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white"><i class="bi bi-cart"></i></a>
          <a href="#" class="text-white"><i class="bi bi-tiktok"></i></a>
          <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
        </div> --}}
      </div>
    </div>
  </div>
  <!-- End Top Bar -->

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/home" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="fe/img/logo-panjang.png" alt="">
        {{-- <h1>UpConstruction<span>.</span></h1> --}}
      </a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/home" class="{{ Request::is('home') ? 'active' : '' }}">Home</a></li>
          <li><a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
          <li><a href="/services" class="{{ Request::is('services') ? 'active' : '' }}">Services</a></li>
          <li><a href="/product" class="{{ Request::is('product') ? 'active' : '' }}">Products</a></li>
          <li><a href="/gallery" class="{{ Request::is('gallery') ? 'active' : '' }}">Gallery</a></li>
          {{-- <li><a href="blog.html" class="{{ Request::is('home') ? 'active' : '' }}">Blog</a></li> --}}
          <li><a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
          {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}}
        </ul>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  {{-- <section id="hero" class="hero">
    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span>UpConstruction</span></h2>
            <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(fe/img/hero-carousel/hero-carousel-1.jpg)">
      </div>
      <div class="carousel-item" style="background-image: url(fe/img/hero-carousel/hero-carousel-2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(fe/img/hero-carousel/hero-carousel-3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(fe/img/hero-carousel/hero-carousel-4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(fe/img/hero-carousel/hero-carousel-5.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section> --}}
  <!-- End Hero Section -->

  <main id="main">
    @yield('hero')
    @yield('alasan')
    @yield('features')
    @yield('content')
    @yield('product')
    @yield('services')
    @yield('gallery')
    @yield('client')

    <!-- ======= Get Started Section ======= -->
    {{-- <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>Minus hic non reiciendis ea possimus at quia.</h3>
              <p>Rem id rerum. Debitis deserunt quidem delectus expedita ducimus dolor. Aut iusto ipsa. Eos ipsum nobis
                ipsa soluta itaque perspiciatis fuga ipsum perspiciatis. Eum amet fugiat totam nisi possimus ut delectus
                dicta.
              <p>Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa eos. Deserunt
                porro magni qui necessitatibus dolorem at animi cupiditate.</p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h3>Get a quote</h3>
              <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero
                park flows.</p>
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Get a quote</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section> --}}
    <!-- End Get Started Section -->

    <!-- ======= Constructions Section ======= -->
    {{-- <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Constructions</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem
            dolore earum</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(fe/img/constructions-1.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Eligendi omnis sunt veritatis.</h4>
                    <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti
                      adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(fe/img/constructions-2.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                    <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui
                      iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum
                      dignissimos.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(fe/img/constructions-3.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Error beatae dolor inventore aut</h4>
                    <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat
                      ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla
                      culpa.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(fe/img/constructions-4.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Expedita voluptas ut ut nesciunt</h4>
                    <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque
                      architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores
                      libero nobis.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section> --}}
    <!-- End Constructions Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia
            reprehenderit sunt deleniti</p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="fe/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="fe/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="fe/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="fe/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                    minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="fe/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                    culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                    quid.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> --}}
    <!-- End Testimonials Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    {{-- <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up"">
        <div class=" section-header">
          <h2>Recent Blog Posts</h2>
          <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
        </div>
        <div class="row gy-5">
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-item position-relative h-100">
              <div class="post-img position-relative overflow-hidden">
                <img src="fe/img/blog/blog-1.jpg" class="img-fluid" alt="">
                <span class="post-date">December 12</span>
              </div>
              <div class="post-content d-flex flex-column">
                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                  </div>
                </div>
                <hr>
                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- End post item -->
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-item position-relative h-100">
              <div class="post-img position-relative overflow-hidden">
                <img src="fe/img/blog/blog-2.jpg" class="img-fluid" alt="">
                <span class="post-date">July 17</span>
              </div>
              <div class="post-content d-flex flex-column">
                <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                  </div>
                </div>
                <hr>
                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- End post item -->
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">
              <div class="post-img position-relative overflow-hidden">
                <img src="fe/img/blog/blog-3.jpg" class="img-fluid" alt="">
                <span class="post-date">September 05</span>
              </div>
              <div class="post-content d-flex flex-column">
                <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                  </div>
                </div>
                <hr>
                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                    class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- End post item -->
        </div>
      </div>
    </section> --}}
    <!-- End Recent Blog Posts Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>PT. Perkasa Elektrika Power</h3>
              <p>
                Perum Griya Anggraeni Blok A1 No.3 RT 001/011 Kel. Karang Asem Barat,  Kec. Citeureup, Kab. Bogor<br><br>
                <strong>Phone:</strong> 0812-9394-1565<br>
                <strong>Email:</strong> perkasa.panel@gmail.com<br>
              </p>
              {{-- <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i><a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div> --}}
            </div>
          </div>
          <!-- End footer info column-->
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/about">About us</a></li>
              <li><a href="/services">Services</a></li>
              <li><a href="/product">Products</a></li>
              <li><a href="/gallery">Gallery</a></li>
              <li><a href="/contact">Contact</a></li>
            </ul>
          </div>
          <!-- End footer links column-->
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Layanan Kami</h4>
            <ul>
              <li>Electrical & Instrumentation Supply</li>
              <li>Electrical Power System Design</li>
              <li>Mechanical Electrical</li>
              <li>Switchboard & Panel Manufacturing</li>
              <li>Automation & Control Solutions</li>
              <li>Cable Management Infrastructure</li>
            </ul>
          </div>
          <!-- End footer links column-->
          <div class="col-lg-4 col-md-12 mb-4">
            <h4 class="mb-3" style="color:#ffffff;">Gallery</h4>
            <div style="display:grid; grid-template-columns:repeat(3, 1fr); gap:14px; padding:10px; border-radius:12px;">
              <img src="fe/img/gallery/gallery-footer1.jpg" alt="Gallery 1" style="width:100%; aspect-ratio:3/4; object-fit:cover; border-radius:8px; border:1px solid #eaf8ff;">
              <img src="fe/img/gallery/gallery-footer2.jpg" alt="Gallery 2" style="width:100%; aspect-ratio:3/4; object-fit:cover; border-radius:8px; border:1px solid #eaf8ff;">
              <img src="fe/img/gallery/gallery-footer3.jpg" alt="Gallery 3" style="width:100%; aspect-ratio:3/4; object-fit:cover; border-radius:8px; border:1px solid #eaf8ff;">
              <img src="fe/img/gallery/gallery-footer4.jpg" alt="Gallery 4" style="width:100%; aspect-ratio:3/4; object-fit:cover; border-radius:8px; border:1px solid #eaf8ff;">
              <img src="fe/img/gallery/gallery-footer5.jpg" alt="Gallery 5" style="width:100%; aspect-ratio:3/4; object-fit:cover; border-radius:8px; border:1px solid #eaf8ff;">
              <img src="fe/img/gallery/gallery-footer6.jpg" alt="Gallery 6" style="width:100%; aspect-ratio:3/4; object-fit:cover; border-radius:8px; border:1px solid #eaf8ff;">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>PT. Perkasa Elektrika Power</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="fe/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="fe/vendor/aos/aos.js"></script>
  <script src="fe/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="fe/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="fe/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="fe/vendor/purecounter/purecounter_vanilla.js"></script>
  <!-- <script src="fe/vendor/php-email-form/validate.js"></script> -->
  <script>
  window.addEventListener('scroll', function() {
    const header = document.getElementById('header');
    if (window.scrollY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
</script>
  <script>
  window.addEventListener('load', function() {
    var preloader = document.getElementById('preloader');
    if (preloader) preloader.style.display = 'none';
  });
  </script>

  <!-- Template Main JS File -->
  <script src="fe/js/main.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      function addPlus() {
        document.querySelectorAll('.purecounter[data-plus="true"]').forEach(function(el) {
          if (!el.textContent.endsWith('+')) {
            el.textContent = el.textContent + '+';
          }
        });
      }
      // PureCounter animasi selesai biasanya setelah 1 detik, tapi bisa lebih lama jika duration lebih besar
      // Jalankan beberapa kali untuk memastikan
      setTimeout(addPlus, 1200);
      setTimeout(addPlus, 2000);
      setTimeout(addPlus, 3000);
    });
  </script>

</body>

</html>