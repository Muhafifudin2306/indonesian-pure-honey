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
                        "770": {
                          "slidesPerView": 2,
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
                            @foreach ($product as $item)
                                <div class="swiper-slide">
                                    <div class="service-item" data-bs-toggle="modal"
                                        data-bs-target="#{{ $item->id }}ProductModal">
                                        <div class="service-item-contents">
                                            <span class="service-item-category fw-bold">{{ $item->category }}</span>
                                            <h2 class="service-item-title">{{ $item->product_name }}</h2>
                                        </div>
                                        <img src="{{ Storage::url($item->cover) }}" alt="Image"
                                            class="img-custom">
                                    </div>
                                </div>
                            @endforeach
                            <!-- <div class="swiper-pagination"></div> -->
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
                            <img src="{{ Storage::url($aboutImage) }}" alt="Image"
                                class="img-fluid img-overlap mt-1 pt-1" data-aos="zoom-out">
                        </div>
                        <div class="col-lg-6 ml-auto" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="content-subtitle text-white opacity-50">Why Choose Us</h3>
                            <h2 class="content-title mb-4" align="justify">
                                <strong> {{ $aboutTitle }}</strong>
                            </h2>
                            <p class="opacity-50" align="justify">
                                {{ $aboutDescription }}
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
                <div class="row d-md-none">
                    @foreach ($value as $item)
                        <div class="col-md-2" data-aos="fade-up">
                            <div class="image-value text-center">
                                <img height="150" width="150" class="object-fit-cover rounded-circle mb-3"
                                    src="{{ Storage::url($item->image) }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up">
                            <div class="desc-value">
                                <h5 class="fw-bold">{{ $item->title }}</h5>
                                <h6 align="justify" class="mb-5 pb-2">{{ $item->description }}
                                </h6>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row d-none d-md-flex">
                    @foreach ($value as $item)
                        <div class="col-md-2" data-aos="fade-up">
                            <div class="image-value text-center">
                                <img class="w-100 object-fit-cover rounded-circle p-3"
                                    src="{{ Storage::url($item->image) }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up">
                            <div class="desc-value">
                                <h5 class="fw-bold">{{ $item->title }}</h5>
                                <h6 align="justify" class="mb-5 pb-2">{{ $item->description }}
                                </h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team-15 team section" id="team" data-aos="fade-up">
            <div class="container section-title">
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
            <div class="services-2">
                <div class="services-carousel-wrap" data-aos="fade-up">
                    <div class="container">
                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                        {
                          "loop": true,
                          "speed": 600,
                          "autoplay": {
                            "delay": 2000
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
                            "770": {
                              "slidesPerView": 2,
                              "spaceBetween": 40
                            },
                            "1200": {
                              "slidesPerView": 4,
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
                                @foreach ($team as $item)
                                    <div class="swiper-slide">
                                        <div class="person">
                                            <figure>
                                                <img src="{{ Storage::url($item->image) }}" height="450"
                                                    alt="Image" class="w-100 object-fit-cover">
                                                <div class="social">
                                                    @if ($item->linkedin != null)
                                                        <a href="{{ $item->linkedin }}" target="_blank"><span
                                                                class="bi bi-linkedin"></span></a>
                                                    @endif
                                                    @if ($item->instagram != null)
                                                        <a href="{{ $item->instagram }}" target="_blank"><span
                                                                class="bi bi-instagram"></span></a>
                                                    @endif
                                                    @if ($item->email != null)
                                                        <a href="{{ $item->email }}" target="_blank"><span
                                                                class="bi bi-google"></span></a>
                                                    @endif
                                                </div>
                                            </figure>
                                            <div class="person-contents">
                                                <h3>{{ $item->name }}</h3>
                                                <span class="position">{{ $item->position }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- <div class="swiper-pagination"></div> -->
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
                    <div class="col-md-8 position-relative" data-aos="fade-up">
                        <img src="{{ Storage::url($videoCover) }}" alt="Image" class="w-100 object-fit-cover"
                            height="425">
                        <a href="{{ Storage::url($videoLink) }}" class="glightbox pulsating-play-btn">
                            <span class="play"><i class="bi bi-play-fill"></i></span>
                        </a>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="assets/img/blog/blog-3.jpg" class="w-100 object-fit-cover" alt=""
                                    height="220">
                                <span class="post-date">September 05</span>
                            </div>

                            <div class="post-content text-gold">

                                <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                                <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                                <span class="px-3 text-black-50">/</span>
                                <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>

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
    @foreach ($product as $item)
        <div class="modal fade" id="{{ $item->id }}ProductModal" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">{{ $item->product_name }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
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
                                                @foreach ($item->images as $image)
                                                    <div class="swiper-slide">
                                                        <div class="service-item">
                                                            <img src="{{ Storage::url($image->image) }}"
                                                                alt="Image" class="img-custom">
                                                        </div>
                                                    </div>
                                                @endforeach
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
                                        <button class="nav-link text-gold active"
                                            id="specifications-{{ $item->id }}-tab" data-bs-toggle="tab"
                                            data-bs-target="#specifications-{{ $item->id }}" type="button"
                                            role="tab" aria-controls="specifications" aria-selected="true">
                                            Specifications
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-gold" id="knowledge-{{ $item->id }}-tab"
                                            data-bs-toggle="tab" data-bs-target="#knowledge-{{ $item->id }}"
                                            type="button" role="tab" aria-controls="knowledge"
                                            aria-selected="false">
                                            Knowledge
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-gold" id="health-{{ $item->id }}-tab"
                                            data-bs-toggle="tab" data-bs-target="#health-{{ $item->id }}"
                                            type="button" role="tab" aria-controls="knowledge"
                                            aria-selected="false">
                                            Health Benefit
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-gold" id="advantage-{{ $item->id }}-tab"
                                            data-bs-toggle="tab" data-bs-target="#advantage-{{ $item->id }}"
                                            type="button" role="tab" aria-controls="knowledge"
                                            aria-selected="false">
                                            Advantage
                                        </button>
                                    </li>
                                </ul>

                                <!-- Tabs Content -->
                                <div class="tab-content mt-4" id="productTabsContent">
                                    <!-- Product Specifications Tab -->
                                    <div class="tab-pane fade show active" id="specifications-{{ $item->id }}"
                                        role="tabpanel" aria-labelledby="specifications-tab">
                                        {!! $item->specification !!}
                                    </div>

                                    <!-- Product Knowledge Tab -->
                                    <div class="tab-pane fade" id="knowledge-{{ $item->id }}" role="tabpanel"
                                        aria-labelledby="knowledge-tab">
                                        {!! $item->knowledge !!}
                                    </div>

                                    <div class="tab-pane fade" id="health-{{ $item->id }}" role="tabpanel"
                                        aria-labelledby="health-tab">
                                        {!! $item->benefit !!}
                                    </div>

                                    <div class="tab-pane fade" id="advantage-{{ $item->id }}" role="tabpanel"
                                        aria-labelledby="advantage-tab">
                                        {!! $item->advantage !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Preloader -->
    <div id="preloader"></div>

    <script>
        const navLinks = document.querySelectorAll("nav ul li a");

        function setActiveSection() {
            let currentSection = null;

            document.querySelectorAll("section").forEach((section) => {
                const rect = section.getBoundingClientRect();
                if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                    currentSection = section.id;
                }
            });

            navLinks.forEach((link) => {
                link.classList.remove("active");
                if (link.getAttribute("href") === `#${currentSection}`) {
                    link.classList.add("active");
                }
            });
        }

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
