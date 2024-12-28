<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> {{ $seoTitle }} </title>
    <meta name="description" content="{{ $seoDescription }}">
    <meta name="keywords" content="{{ $seoKeyword }}">
    <link href="assets-user/img/favicon.png" rel="icon">
    <link href="assets-user/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="assets-user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets-user/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets-user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets-user/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="assets-user/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top"
        style="background-image: url('{{ Storage::url($headerBackground) }}'); background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ Storage::url($headerLogo) }}" alt="AgriCulture">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="fw-bold">Home</a></li>
                    <li><a href="#services-2" class="fw-bold">Our Product</a></li>
                    <li><a href="#about" class="fw-bold">About Us</a></li>
                    <li><a href="#recent-posts" class="fw-bold">Blog</a></li>
                    <li><a href="#footer" class="fw-bold">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">
        <section id="hero" class="hero section dark-background">
            <div id="hero-carousel" class="carousel slide carousel-fade vh-100" data-bs-ride="carousel"
                data-bs-interval="5000">
                @php $isFirst = true; @endphp
                @foreach ($one as $item)
                    <div class="carousel-item {{ $isFirst ? 'active' : '' }}">
                        <img src="{{ Storage::url($item->image) }}" alt="">
                        <div class="carousel-container">
                            <h2 align="center">{{ $item->title }}</h2>
                            <p align="center">{{ $item->description }}</p>
                        </div>
                    </div>
                    @php $isFirst = false; @endphp
                @endforeach

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>

            </div>

        </section>
        <section id="services-2" class="services-2 section" data-aos="fade-up">
            <!-- Section Title -->
            <h2 class="fw-bold text-center">
                <span class="text-gold-i">OUR</span>
                PRODUCT
            </h2>

            <!-- Button trigger modal -->
            <h4 class="text-black-50 mb-5" align="center"> Original Acacia and Trigona Honey</h4>
            <div class="services-carousel-wrap" data-aos="fade-up">
                <div class="container">
                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": ".js-custom-next",
                  "prevEl": ".js-custom-prev"
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 40
                  }
                }
              }
            </script>
                        <button class="navigation-prev js-custom-prev">
                            <i class="bi bi-arrow-left-short"></i>
                        </button>
                        <button class="navigation-next js-custom-next">
                            <i class="bi bi-arrow-right-short"></i>
                        </button>
                        <div class="swiper-wrapper justify-content-lg-center">
                            <div class="swiper-slide">
                                <div class="service-item" data-bs-toggle="modal" data-bs-target="#acraModal">
                                    <div class="service-item-contents">
                                        <span class="service-item-category">Honey</span>
                                        <h2 class="service-item-title">Trigona Honey</h2>
                                    </div>
                                    <img src="assets-user/img/img_sq_s1.jpg" alt="Image" class="img-custom">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item" data-bs-toggle="modal" data-bs-target="#accasiaModal">
                                    <div class="service-item-contents">
                                        <span class="service-item-category">Honey</span>
                                        <h2 class="service-item-title">Acacia Honey</h2>
                                    </div>
                                    <img src="assets-user/img/img_sq_3.jpg" alt="Image" class="img-custom">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
        </section><!-- /Services 2 Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="assets-user/img/img_long_5.jpg" alt="Image"
                                class="img-fluid img-overlap mt-1 pt-1" data-aos="zoom-out">
                        </div>
                        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="content-subtitle text-white opacity-50">Why Choose Us</h3>
                            <h2 class="content-title mb-4">
                                Committed to <strong>quality and innovation</strong> in the Honey industry
                            </h2>
                            <p class="opacity-50" align="justify">
                                Indonesian Pure Honey is all about giving you a natural boost. Packed with pure
                                goodness, our honey
                                supports your immune system, digestion, and fights inflammation - all straight from
                                nature. We're
                                obsessed with quality, sustainability, and keeping it affordable, because we believe
                                that taking care of
                                your health should be simple, accessible, and real. Pure honey, pure vibes, pure you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->
        <section class="value">
            <div class="container section-title" data-aos="fade-up">
                <h2 class="fw-bold">
                    <span class="text-gold-i">OUR</span>
                    KEY VALUE
                </h2>
                <div class="content">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="row">
                    <div class="col-md-2" data-aos="fade-up">
                        <div class="image-value text-center">
                            <img height="150" width="150" class="object-fit-cover rounded-circle mb-3"
                                src="./assets-user/value/value-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="desc-value">
                            <h5 class="fw-bold">Health & Wellness</h5>
                            <h6 align="justify" class="mb-5 pb-2">We prioritize the health and well-being of our
                                customers by offering
                                a
                                natural product
                                that supports immune system health, digestion, and inflammation reduction.
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-2" data-aos="fade-up">
                        <div class="image-value text-center">
                            <img height="150" width="150" class="object-fit-cover rounded-circle mb-3"
                                src="./assets-user/value/value-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="desc-value">
                            <h5 class="fw-bold">Quality & Purity</h5>
                            <h6 align="justify" class="mb-5 pb-2">We are committed to providing only the purest,
                                highest-quality
                                honey,
                                meticulously
                                harvested with attention to detail for maximum effectiveness and flavor.
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-2" data-aos="fade-up">
                        <div class="image-value text-center">
                            <img height="150" width="150" class="object-fit-cover rounded-circle mb-3"
                                src="./assets-user/value/value-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="desc-value">
                            <h5 class="fw-bold">Sustainability & Nature </h5>
                            <h6 align="justify" class="mb-5 pb-2">We respect and honor nature by offering products
                                that are
                                sustainably
                                harvested,
                                ensuring the environment and our beekeeping practices are in harmony.
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-2" data-aos="fade-up">
                        <div class="image-value text-center">
                            <img height="150" width="150" class="object-fit-cover rounded-circle mb-3"
                                src="./assets-user/value/value-4.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="desc-value">
                            <h5 class="fw-bold">Affordability & Accessibility</h5>
                            <h6 align="justify" class="mb-5 pb-2">We believe in making natural wellness accessible to
                                all by offering
                                high-quality honey
                                at affordable prices.
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-2" data-aos="fade-up">
                        <div class="image-value text-center">
                            <img height="150" width="150" class="object-fit-cover rounded-circle mb-3"
                                src="./assets-user/value/value-5.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="desc-value">
                            <h5 class="fw-bold">Customer-Centric Integrity</h5>
                            <h6 align="justify" class="mb-5 pb-2">We believe in making natural wellness accessible to
                                all by offering
                                high-quality honey
                                We place customer satisfaction and trust at the heart of everything we do, delivering a
                                product that
                                enhances their lifestyle and supports their health goals.
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team-15 team section" id="team">
            <div class="container section-title" data-aos="fade-up">
                <h2 class="fw-bold">
                    <span class="text-gold-i">OUR</span>
                    TEAM
                </h2>
                <div class="content">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div><!-- End Section Title -->
            <div class="content">
                <div class="container">

                    <div class="row mb-3">
                        <div class="col-lg-3 col-6 mb-4" data-aos="fade-up">
                            <div class="person">
                                <figure>
                                    <img src="assets-user/img/team/edi.jpeg" height="300" alt="Image"
                                        class="w-100 object-fit-cover">
                                    <div class="social">
                                        <a href="#" target="_blank"><span class="bi bi-linkedin"></span></a>
                                        <a href="https://www.instagram.com/edivictara?igsh=NGl5NmduZjJxem5i"
                                            target="_blank"><span class="bi bi-instagram"></span></a>
                                        <a href="#" target="_blank"><span class="bi bi-google"></span></a>
                                    </div>
                                </figure>
                                <div class="person-contents">
                                    <h3>Edi Tinambunan</h3>
                                    <span class="position">Chief Executive Officer</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6 mb-4" data-aos="fade-up">
                            <div class="person">
                                <figure>
                                    <img src="assets-user/img/team/carlos.jpeg" height="300" alt="Image"
                                        class="w-100 object-fit-cover">
                                    <div class="social">
                                        <a href="https://www.linkedin.com/in/carlos-matias-silitonga-b68a231a2/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"
                                            target="_blank"><span class="bi bi-linkedin"></span></a>
                                        <a href="https://www.instagram.com/carlosmatiaas/?igsh=MTV1cXB2bGhwa3VpYg%3D%3D"
                                            target="_blank"><span class="bi bi-instagram"></span></a>
                                        <a href="#" target="_blank"><span class="bi bi-google"></span></a>
                                    </div>
                                </figure>
                                <div class="person-contents">
                                    <h3>Carlos Matias</h3>
                                    <span class="position">Chief Business Development Officer</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6 mb-4" data-aos="fade-up">
                            <div class="person">
                                <figure>
                                    <img src="assets-user/img/team/ray.jpeg" height="300" alt="Image"
                                        class="w-100 object-fit-cover">
                                    <div class="social">
                                        <a href="https://www.linkedin.com/in/ns-ray-parulian-s-kep-cwcca-8a08091b0?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                                            target="_blank"><span class="bi bi-linkedin"></span></a>
                                        <a href="https://www.instagram.com/rayparulian/profilecard/?igsh=MW4zYTZzd2o4dHhvMg=="
                                            target="_blank"><span class="bi bi-instagram"></span></a>
                                        <a href="#" target="_blank"><span class="bi bi-google"></span></a>
                                    </div>
                                </figure>
                                <div class="person-contents">
                                    <h3>Ray Parulian</h3>
                                    <span class="position">Chief Operational Officer</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6 mb-4" data-aos="fade-up">
                            <div class="person">
                                <figure>
                                    <img src="assets-user/img/team/ayu.png" height="300" alt="Image"
                                        class="w-100 object-fit-cover">
                                    <div class="social">
                                        <a href="https://id.linkedin.com/in/sri-ayu-wulandari-072653210"
                                            target="_blank"><span class="bi bi-linkedin"></span></a>
                                        <a href="https://www.instagram.com/yuwe___/" target="_blank"><span
                                                class="bi bi-instagram"></span></a>
                                        <a href="#" target="_blank"><span class="bi bi-google"></span></a>
                                    </div>
                                </figure>
                                <div class="person-contents">
                                    <h3>Ayu Wulandari</h3>
                                    <span class="position">Chief Marketing Officer</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-between mb-3" data-aos="fade-up">
                        <div class="col-lg-3 col-6 mb-4" data-aos="fade-up">
                            <div class="person">
                                <figure>
                                    <img src="assets-user/img/team/faris.png" height="300" alt="Image"
                                        class="w-100 object-fit-cover">
                                    <div class="social">
                                        <a href="https://www.linkedin.com/in/faris-soamole-0184b8267/?originalSubdomain=id"
                                            target="_blank"><span class="bi bi-linkedin"></span></a>
                                        <a href="https://www.instagram.com/piasua24/" target="_blank"><span
                                                class="bi bi-instagram"></span></a>
                                        <a href="#" target="_blank"><span class="bi bi-google"></span></a>
                                    </div>
                                </figure>
                                <div class="person-contents">
                                    <h3>Faris Soamole</h3>
                                    <span class="position">Chief Legal Officer</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6 mb-4" data-aos="fade-up">
                            <div class="person">
                                <figure>
                                    <img src="assets-user/img/team/gabriel.jpeg" height="300" alt="Image"
                                        class="w-100 object-fit-cover">
                                    <div class="social">
                                        <a href="https://www.linkedin.com/in/gian-gabriel-830368140/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"
                                            target="_blank"><span class="bi bi-linkedin"></span></a>
                                        <a href="https://www.instagram.com/gabisblessing" target="_blank"><span
                                                class="bi bi-instagram"></span></a>
                                        <a href="#" target="_blank"><span class="bi bi-google"></span></a>
                                    </div>
                                </figure>
                                <div class="person-contents">
                                    <h3>Gian Gabriel</h3>
                                    <span class="position">Chief Technology Officer</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section><!-- /Team Section -->

        <!-- About 3 Section -->
        <section id="about-3" class="about-3 section">

            <div class="container">
                <div class="container section-title" data-aos="fade-up">
                    <h2 class="fw-bold">
                        <span class="text-gold-i">SUPPORTED</span>
                        BY
                    </h2>
                    <div class="content">
                        <div class="container">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div><!-- End Section Title -->

                <div class="row">
                    @foreach ($sponsor as $item)
                        <div class="col-6 mb-3 col-md-3" data-aos="fade-up">
                            <img class="w-100 object-fit-contain" height="150"
                                src="{{ Storage::url($item->image) }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- /About 3 Section -->
        <section class="export pt-5 mt-5">
            <div class="container section-title" data-aos="zoom-in">
                <h2 class="fw-bold">
                    <span class="text-gold-i">OUR</span>
                    EXPORT REACH
                </h2>
                <div class="content" data-aos="zoom-in">
                    <div class="container">
                        <div class="box p-2">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div><!-- End Section Title -->
        </section>
        <!-- Recent Posts Section -->
        <section id="recent-posts" class="about-3 section recent-posts section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="fw-bold">
                    <span class="text-gold-i">RECENT</span>
                    POSTS
                </h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5 mb-5">
                    <div class="col-lg-8 position-relative" data-aos="fade-up">
                        <img src="assets-user/img/img_sq_1.jpg" alt="Image" class="w-100" height="425">
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn">
                            <span class="play"><i class="bi bi-play-fill"></i></span>
                        </a>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="assets-user/img/blog/blog-3.jpg" class="w-100" alt=""
                                    height="220">
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
                                        class="bi bi-arrow-right" data-aos="fade-up"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                </div>

                <a href="blog.html">
                    <p class="text-center">More Blog<i class="bi bi-arrow-right"></i></p>
                </a>


            </div>

        </section><!-- /Recent Posts Section -->

        <section class="value">
            <div class="container section-title" data-aos="fade-up">
                <h2 class="fw-bold">
                    <span class="text-gold-i">REACH</span>
                    US
                </h2>
                <div class="content">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up">
                <iframe style="width: 100%; height: 400px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3965.858674568995!2d106.79704807316823!3d-6.282302461490149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1734765388004!5m2!1sid!2sid"
                    frameborder="0" allowfullscreen=""></iframe>
            </div>
        </section>

        <!-- Call To Action Section -->
        <!-- <section id="call-to-action" class="call-to-action section light-background">

      <div class="content">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h3>Subscribe To Our Newsletter</h3>
              <p class="opacity-50">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt, reprehenderit!
              </p>
            </div>
            <div class="col-lg-6">
              <form action="forms/newsletter.php" class="form-subscribe php-email-form">
                <div class="form-group d-flex align-items-stretch">
                  <input type="email" name="email" class="form-control h-100" placeholder="Enter your e-mail">
                  <input type="submit" class="btn btn-secondary px-4" value="Subcribe">
                </div>
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Your subscription request has been sent. Thank you!
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>/Call To Action Section -->

    </main>

    <footer id="footer" class="footer dark-background">

        <div class="footer-top pb-2">
            <div class="container">
                <h3 class="text-gold-i fw-bold mb-3">
                    Indonesian Pure Honey
                </h3>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <a href="https://maps.app.goo.gl/7mSzPfzQdPWnVoVE8" class="fs-6 text-white">Cilandak Mansion,
                            BDN 2 Street,
                            Cipete,
                            <br>South Jakarta, Indonesia 12430
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="phone-1">
                            <strong>Phone 1:</strong>
                            <a class="text-white fs-6" href="https://wa.me/6287889505330" target="_blank">
                                <span>+62 8788 9505 330</span></a>
                        </div>
                        <div class="phone-2">
                            <strong>Phone 2:</strong>
                            <a class="text-white fs-6" href="https://wa.me/6282324022654" target="_blank">
                                <span>+62 823 2402
                                    2654</span></a>
                        </div>
                        <p class="fs-6"><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                    <div class="col-md-4 mb-4 footer-links">
                        <h4>Follow Us</h4>
                        <a href="#" target="_blank" class="text-primary fs-3 me-2"> <span
                                class="bi bi-linkedin"></span></a>
                        <a href="#" target="_blank" class="text-danger fs-3"> <span
                                class="bi bi-instagram"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <div class="whatsapp-float cursor-pointer">
        <div data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-whatsapp text-white fs-4"></i>
        </div>
    </div>
    <div class="message-float bg-light py-1 rounded px-3 border text-black">
        <span class="fw-bold">Contact Us</span>
    </div>
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Contact Us</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                    <div class="row">
                        @foreach ($contact as $item)
                            <div class="col-md-6 mb-3">
                                <div
                                    class="box-contact bg-white border p-3 rounded d-flex flex-md-column text-md-center">
                                    <div class="image-contact mt-0 mt-md-3 me-3 me-md-0">
                                        <img src="{{ Storage::url($item->image) }}" height="350" alt="Image"
                                            class="w-100 object-fit-cover rounded">
                                    </div>
                                    <div class="desc-contact mt-0 mt-md-4 mb-md-3">
                                        <h6 class="fw-bold">{{ $item->name }}</h6>
                                        <h6>{{ $item->title }}</h6>
                                        <a href="{{ $item->contact_link }}" target="_blank" rel="noopener">
                                            <button class="btn btn-success"><i class="bi bi-whatsapp text-white"></i>
                                                Contact Now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Acra Honey -->
    <div class="modal fade" id="acraModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Authentic Trigona Honey</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- <img src="assets-user/img/img_sq_4.jpg" alt="Image" class="img-custom"> -->
                            <div class="services-2 section">
                                <div class="services-carousel-wrap" data-aos="fade-up">
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
                        "clickable": true
                      },
                      "navigation": {
                        "nextEl": ".js-custom-next",
                        "prevEl": ".js-custom-prev"
                      },
                      "breakpoints": {
                        "320": {
                          "slidesPerView": 1,
                          "spaceBetween": 40
                        },
                        "1200": {
                          "slidesPerView": 1,
                          "spaceBetween": 40
                        }
                      }
                    }
                  </script>
                                        <button class="navigation-prev js-custom-prev">
                                            <i class="bi bi-arrow-left-short"></i>
                                        </button>
                                        <button class="navigation-next js-custom-next">
                                            <i class="bi bi-arrow-right-short"></i>
                                        </button>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="service-item">
                                                    <img src="assets-user/img/img_sq_s1.jpg" alt="Image"
                                                        class="img-custom">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="service-item">
                                                    <img src="assets-user/img/img_sq_s1.jpg" alt="Image"
                                                        class="img-custom">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="service-item">
                                                    <img src="assets-user/img/img_sq_s1.jpg" alt="Image"
                                                        class="img-custom">
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <!-- Tabs Navigation -->
                            <ul class="nav nav-tabs" id="productTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-gold active" id="specifications-trigona-tab"
                                        data-bs-toggle="tab" data-bs-target="#specifications-trigona" type="button"
                                        role="tab" aria-controls="specifications" aria-selected="true">
                                        Specifications
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-gold" id="knowledge-trigona-tab"
                                        data-bs-toggle="tab" data-bs-target="#knowledge-trigona" type="button"
                                        role="tab" aria-controls="knowledge" aria-selected="false">
                                        Knowledge
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-gold" id="health-trigona-tab" data-bs-toggle="tab"
                                        data-bs-target="#health-trigona" type="button" role="tab"
                                        aria-controls="knowledge" aria-selected="false">
                                        Health Benefit
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-gold" id="advantage-trigona-tab"
                                        data-bs-toggle="tab" data-bs-target="#advantage-trigona" type="button"
                                        role="tab" aria-controls="knowledge" aria-selected="false">
                                        Advantage
                                    </button>
                                </li>
                            </ul>

                            <!-- Tabs Content -->
                            <div class="tab-content mt-4" id="productTabsContent">
                                <!-- Product Specifications Tab -->
                                <div class="tab-pane fade show active" id="specifications-trigona" role="tabpanel"
                                    aria-labelledby="specifications-tab">
                                    <div class="mb-4">
                                        <h6>1. Product Name:</h6>
                                        <p>Authentic Trigona Honey / Kelulut Honey</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>2. Bee Species:</h6>
                                        <p>This honey is produced by Trigona bees (also known as stingless bees), which
                                            are native to
                                            tropical regions of Indonesia. These bees produce honey from nectar
                                            collected from various local
                                            plants and flowers.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>3. Origin:</h6>
                                        <p>Trigona honey is harvested from the lush tropical rainforests of Indonesia,
                                            particularly from
                                            regions such as Sumatra, Kalimantan, and Papua, where diverse flora provides
                                            abundant nectar for
                                            the bees.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>4. Main Ingredients:</h6>
                                        <p>100% pure honey harvested from Trigona bees, with no added fillers,
                                            preservatives, or artificial
                                            ingredients.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>5. Color:</h6>
                                        <p>The color varies from golden yellow to dark amber, depending on the nectar
                                            source the bees
                                            collect.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>6. Texture:</h6>
                                        <p>Trigona honey tends to be more fluid and thinner than regular honey, with a
                                            slightly cloudy
                                            appearance due to the natural enzymes and particles in the honey.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>7. Taste:</h6>
                                        <p>The flavor profile is unique, with a slightly sand tangy taste that
                                            differentiates it from
                                            regular honey. This gives the honey a distinct, refreshing flavor.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>8. Aroma:</h6>
                                        <p>The honey has a strong and aromatic fragrance, often floral with hints of
                                            tropical plant scents,
                                            reflecting the diverse biodiversity of Indonesia&rsquo;s forests.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>9. Nutritional Content:</h6>
                                        <p>Rich in antioxidants, minerals (such as calcium, magnesium, and potassium),
                                            and vitamins C and
                                            B-complex. It also contains natural enzymes and amino acids that support
                                            overall health.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>10. Moisture Content:</h6>
                                        <p>Typically lower in moisture (below 18%), which contributes to a longer shelf
                                            life and better
                                            stability compared to other types of honey.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>11. Packaging Options:</h6>
                                        <ul>
                                            <li><strong>Retail:</strong> Glass or plastic bottles (100g, 250g, 500g).
                                            </li>
                                            <li><strong>Bulk:</strong> Available in larger containers such as jars,
                                                drums, or jerrycans (1kg,
                                                5kg, 10kg).</li>
                                            <li><strong>Private Label:</strong> Custom packaging available based on
                                                importers' branding needs.
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Product Knowledge Tab -->
                                <div class="tab-pane fade" id="knowledge-trigona" role="tabpanel"
                                    aria-labelledby="knowledge-tab">
                                    <div class="mb-4">
                                        <h6>1. Unique Bee Species - Trigona (Stingless Bees):</h6>
                                        <p>Trigona honey is produced by stingless bees, which do not have stingers. This
                                            makes the
                                            harvesting process safer and less disruptive to the bee population. These
                                            bees are crucial to the
                                            ecosystem, and their honey is considered a natural, sustainable product.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>2. Harvesting and Processing:</h6>
                                        <p>Trigona honey is typically harvested from wild hives found in trees or
                                            man-made hives placed in
                                            forests. After careful collection, the honey is minimally processed to
                                            preserve its natural
                                            enzymes and nutrients, ensuring the highest quality.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>3. Certifications and Standards:</h6>
                                        <p>Indonesian Trigona honey meets international standards (HACCP, BPOM, Organic
                                            certifications in
                                            some cases), ensuring that the product is safe and of consistent quality for
                                            global markets.</p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="health-trigona" role="tabpanel"
                                    aria-labelledby="health-tab">
                                    <div class="mb-4">
                                        <h6>1. Rich in Antioxidants:</h6>
                                        <p>Trigona honey is packed with antioxidants, such as flavonoids and phenolic
                                            compounds, which help
                                            neutralize free radicals in the body. These antioxidants support cellular
                                            health and slow down the
                                            aging process, reducing the risk of chronic diseases.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>2. Boosts Immune System:</h6>
                                        <p>The high levels of vitamin C, minerals, and natural antibacterial properties
                                            in Trigona honey
                                            help strengthen the immune system, protecting the body from infections and
                                            boosting overall
                                            health.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>3. Supports Digestive Health:</h6>
                                        <p>Trigona honey acts as a prebiotic, fostering the growth of beneficial gut
                                            bacteria and promoting
                                            digestive health. It helps improve gut function and alleviate digestive
                                            issues like bloating and
                                            discomfort.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>4. Antibacterial and Anti-inflammatory Properties:</h6>
                                        <p>Trigona honey is naturally rich in antibacterial compounds, which help fight
                                            infections, promote
                                            faster wound healing, and reduce inflammation throughout the body.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>5. Relieves Respiratory Issues:</h6>
                                        <p>Due to its soothing properties, Trigona honey is effective in relieving
                                            symptoms of colds,
                                            coughs, and sore throats. It helps to coat and protect the throat while
                                            reducing irritation and
                                            inflammation.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>6. Promotes Skin Health:</h6>
                                        <p>The antibacterial and anti-inflammatory properties make Trigona honey
                                            effective for treating skin
                                            conditions like acne, eczema, and wounds. It also helps to moisturize the
                                            skin, reduce aging
                                            signs, and promote healthy, glowing skin.</p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="advantage-trigona" role="tabpanel"
                                    aria-labelledby="advantage-tab">
                                    <div class="mb-4">
                                        <h6>1. Unique and High-Quality Honey:</h6>
                                        <p>Trigona honey is distinctive for its tangy taste and floral aroma, offering a
                                            unique flavor
                                            profile compared to regular honey. This makes it an attractive product for
                                            consumers seeking
                                            premium, specialty honey.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>2. Eco-Friendly and Sustainable Harvesting:</h6>
                                        <p>Since Trigona bees do not sting, the harvesting process is more eco-friendly
                                            and safer, helping
                                            maintain healthy bee populations. The honey is also harvested with minimal
                                            environmental impact,
                                            supporting sustainable practices.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>3. Rich Nutritional Value:</h6>
                                        <p>Trigona honey is loaded with beneficial enzymes, amino acids, antioxidants,
                                            and vitamins, making
                                            it a superior choice for health-conscious consumers looking for natural
                                            health benefits.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>4. Premium Product with Market Potential:</h6>
                                        <p>Indonesian Trigona honey has strong market potential globally due to its
                                            rarity, premium quality,
                                            and unique health benefits. It stands out as a luxury product in the honey
                                            market.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>5. International Certification:</h6>
                                        <p>Indonesian Trigona honey meets global quality standards, making it suitable
                                            for export to
                                            international markets. Certifications such as organic, halal, and other
                                            quality assurances are
                                            appealing to global importers.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>6. Sustainable and Ethical Production:</h6>
                                        <p>The honey is produced using sustainable methods that support local
                                            communities of beekeepers and
                                            ensure the preservation of Indonesia’s biodiversity. This makes it an
                                            ethically sourced product.
                                        </p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>7. Competitive Pricing:</h6>
                                        <p>Despite its premium quality, Trigona honey is competitively priced compared
                                            to other types of
                                            honey in the international market, making it an attractive option for
                                            importers looking for
                                            high-quality products at affordable prices.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Accasia Honey -->
    <div class="modal fade" id="accasiaModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Authentic Indonesian Acacia Honey</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- <img src="assets-user/img/img_sq_4.jpg" alt="Image" class="img-custom"> -->
                            <div class="services-2 section">
                                <div class="services-carousel-wrap" data-aos="fade-up">
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
                        "clickable": true
                      },
                      "navigation": {
                        "nextEl": ".js-custom-next",
                        "prevEl": ".js-custom-prev"
                      },
                      "breakpoints": {
                        "320": {
                          "slidesPerView": 1,
                          "spaceBetween": 40
                        },
                        "1200": {
                          "slidesPerView": 1,
                          "spaceBetween": 40
                        }
                      }
                    }
                  </script>
                                        <button class="navigation-prev js-custom-prev">
                                            <i class="bi bi-arrow-left-short"></i>
                                        </button>
                                        <button class="navigation-next js-custom-next">
                                            <i class="bi bi-arrow-right-short"></i>
                                        </button>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="service-item">
                                                    <img src="assets-user/img/img_sq_3.jpg" alt="Image"
                                                        class="img-custom">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="service-item">
                                                    <img src="assets-user/img/img_sq_1.jpg" alt="Image"
                                                        class="img-custom">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="service-item">
                                                    <img src="assets-user/img/img_sq_8.jpg" alt="Image"
                                                        class="img-custom">
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <!-- Tabs Navigation -->
                            <ul class="nav nav-tabs" id="productTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-gold active" id="specifications-accasia-tab"
                                        data-bs-toggle="tab" data-bs-target="#specifications-accasia" type="button"
                                        role="tab" aria-controls="specifications" aria-selected="true">
                                        Specifications
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-gold" id="knowledge-accasia-tab"
                                        data-bs-toggle="tab" data-bs-target="#knowledge-accasia" type="button"
                                        role="tab" aria-controls="knowledge" aria-selected="false">
                                        Knowledge
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-gold" id="health-accasia-tab" data-bs-toggle="tab"
                                        data-bs-target="#health-accasia" type="button" role="tab"
                                        aria-controls="knowledge" aria-selected="false">
                                        Health Benefit
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-gold" id="advantage-accasia-tab"
                                        data-bs-toggle="tab" data-bs-target="#advantage-accasia" type="button"
                                        role="tab" aria-controls="knowledge" aria-selected="false">
                                        Advantage
                                    </button>
                                </li>
                            </ul>

                            <!-- Tabs Content -->
                            <div class="tab-content mt-4" id="productTabsContent">
                                <!-- Product Specifications Tab -->
                                <div class="tab-pane fade show active" id="specifications-accasia" role="tabpanel"
                                    aria-labelledby="specifications-tab">
                                    <div class="mb-4">
                                        <h6>1. Product Name:</h6>
                                        <p>Authentic Indonesian Acacia Honey</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>2. Main Ingredient:</h6>
                                        <ul>
                                            <li>100% pure honey derived from the nectar of Acacia tree flowers grown in
                                                Indonesia&rsquo;s
                                                pristine forests.</li>
                                            <li>Free from artificial additives, preservatives, and refined sugar.</li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">
                                        <h6>3. Origin:</h6>
                                        <ul>
                                            <li>Harvested from the biodiverse regions of Indonesia, including Riau,
                                                Sumatra, and Kalimantan.
                                            </li>
                                            <li>Known for their abundant acacia plantations and unspoiled environment.
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">
                                        <h6>4. Color:</h6>
                                        <p>Light golden to amber, with a bright, translucent appearance that indicates
                                            purity.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>5. Texture:</h6>
                                        <p>Smooth and slightly runny, making it easy to mix into drinks or food
                                            preparations.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>6. Flavor Profile:</h6>
                                        <p>Mildly sweet with a subtle floral note, making it versatile for various
                                            culinary uses.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>7. Aroma:</h6>
                                        <p>Delicate floral fragrance with a hint of freshness that reflects its natural
                                            origins.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>8. Nutritional Content:</h6>
                                        <ul>
                                            <li>Rich in natural sugars, primarily fructose and glucose, providing a
                                                healthy energy source.
                                            </li>
                                            <li>Contains essential vitamins (B-complex, C), minerals (calcium,
                                                potassium, magnesium), and
                                                antioxidants.</li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">
                                        <h6>9. Moisture Content:</h6>
                                        <p>Low (&lt;20%), ensuring extended shelf life and high stability.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>10. Packaging Options:</h6>
                                        <ul>
                                            <li><strong>Retail:</strong> Glass jars, squeeze bottles, or plastic
                                                containers in sizes of 250g,
                                                500g, or 1kg.</li>
                                            <li><strong>Bulk:</strong> Food-grade drums (25kg&ndash;200kg) for
                                                industrial or large-scale
                                                buyers.</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Product Knowledge Tab -->
                                <div class="tab-pane fade" id="knowledge-accasia" role="tabpanel"
                                    aria-labelledby="knowledge-tab">
                                    <div class="mb-4">
                                        <h6>1. Clean and Pristine Environment:</h6>
                                        <p>Harvested from regions such as Riau, Kalimantan, and Sumatra, Indonesia,
                                            where acacia trees grow
                                            in an unspoiled environment free from pollution, ensuring the purity and
                                            quality of the honey.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>2. Rich Biodiversity:</h6>
                                        <p>The diverse flora and fauna in Indonesia’s rainforests create an ideal
                                            environment for bees to
                                            produce honey with a unique taste and aroma that reflects the natural beauty
                                            of the region.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>3. Sustainable and Ethical Beekeeping:</h6>
                                        <p>Acacia honey is sourced through sustainable beekeeping practices that protect
                                            local ecosystems
                                            and support the livelihoods of beekeepers, making it a socially responsible
                                            choice.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>Applications</h6>
                                        <ul>
                                            <li>Culinary: A natural sweetener for beverages, baked goods, desserts, and
                                                gourmet dishes.</li>
                                            <li>Health and Wellness: Used as a supplement for immunity, energy, and
                                                digestive health.</li>
                                            <li>Beauty and Skincare: A key ingredient in natural cosmetics and hydrating
                                                skincare products.
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="health-accasia" role="tabpanel"
                                    aria-labelledby="health-tab">
                                    <div class="mb-4">
                                        <h6>1. Natural Source of Energy:</h6>
                                        <p>Acacia honey contains natural fructose and glucose, which are easily absorbed
                                            by the body. It
                                            provides an instant energy boost without causing excessive blood sugar
                                            spikes, making it ideal for
                                            both physical and mental activities.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>2. Boosts Immune System:</h6>
                                        <p>Rich in antioxidants like flavonoids and polyphenols, acacia honey helps
                                            combat free radicals,
                                            supports the immune system, and helps prevent chronic diseases such as heart
                                            disease and cancer.
                                        </p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>3. Supports Digestive Health:</h6>
                                        <p>Acacia honey acts as a natural prebiotic, promoting the growth of beneficial
                                            bacteria in the gut,
                                            improving gut health, and supporting a balanced digestive system.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>4. Antibacterial and Anti-inflammatory Properties:</h6>
                                        <p>Contains natural enzymes and antibacterial compounds that help fight
                                            infections, speed up wound
                                            healing, and reduce inflammation, offering a natural remedy for various
                                            ailments.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>5. Relieves Cough and Sore Throat:</h6>
                                        <p>The smooth texture of acacia honey coats the throat, providing relief from
                                            irritation and helping
                                            to alleviate coughing and soothe sore throats naturally.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>6. Promotes Skin and Hair Health:</h6>
                                        <p>Acacia honey hydrates and nourishes the skin, reducing signs of aging, and
                                            improving skin
                                            regeneration. For hair, it enhances shine, repairs damage, and strengthens
                                            hair follicles for
                                            healthier hair.</p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="advantage-accasia" role="tabpanel"
                                    aria-labelledby="advantage-tab">
                                    <div class="mb-4">
                                        <h6>1. Premium Quality:</h6>
                                        <p>Acacia honey from Indonesia stands out for its smooth texture, mild flavor,
                                            and light golden
                                            color, making it a high-quality product suitable for discerning consumers.
                                        </p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>2. Low Moisture Content:</h6>
                                        <p>With less than 20% moisture, Indonesian acacia honey is more stable, has a
                                            longer shelf life, and
                                            is less prone to fermentation compared to other honey types.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>3. Mild and Pleasant Flavor:</h6>
                                        <p>The mild sweetness and subtle floral taste of acacia honey make it versatile
                                            and ideal for
                                            various culinary uses, from beverages to desserts.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>4. Multi-functional:</h6>
                                        <p>Indonesian acacia honey is versatile in its applications—used as a natural
                                            sweetener, health
                                            supplement, skincare ingredient, and even in traditional remedies.</p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>5. Certifications and Export-Ready:</h6>
                                        <p>Produced according to international standards (HACCP, ISO, BPOM), ensuring
                                            safety and consistency
                                            for international markets, making it an attractive product for importers.
                                        </p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>6. Sustainability:</h6>
                                        <p>Acacia honey is produced using eco-friendly methods, promoting sustainability
                                            and supporting
                                            local communities, making it an attractive option for conscious consumers.
                                        </p>
                                    </div>

                                    <div class="mb-4">
                                        <h6>7. Competitive Pricing:</h6>
                                        <p>Despite its premium quality, Indonesian acacia honey offers a competitive
                                            price compared to honey
                                            from other countries, making it an economically viable choice for importers
                                            and consumers alike.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Preloader -->
    <div id="preloader"></div>

    <script>
        // Select all navigation links
        const navLinks = document.querySelectorAll("nav ul li a");

        // Function to handle active class
        function setActiveSection() {
            let currentSection = null;

            // Loop through sections to find the one in the viewport
            document.querySelectorAll("section").forEach((section) => {
                const rect = section.getBoundingClientRect();
                if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                    currentSection = section.id;
                }
            });

            // Remove active class from all links
            navLinks.forEach((link) => {
                link.classList.remove("active");
                if (link.getAttribute("href") === `#${currentSection}`) {
                    link.classList.add("active");
                }
            });
        }

        // Listen for scroll events
        window.addEventListener("scroll", setActiveSection);
    </script>


    <!-- Vendor JS Files -->
    <script src="assets-user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets-user/vendor/php-email-form/validate.js"></script>
    <script src="assets-user/vendor/aos/aos.js"></script>
    <script src="assets-user/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets-user/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets-user/js/mapdata.js"></script>
    <script src="assets-user/js/worldmap.js"></script>

    <!-- Main JS File -->
    <script src="assets-user/js/main.js"></script>

</body>

</html>
