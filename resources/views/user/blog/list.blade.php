@extends('layouts.front')

@section('seo')
    <title> {{ $seoTitle }} </title>
    <meta name="description" content="{{ $seoDescription }}">
    <meta name="keywords" content="{{ $seoKeyword }}">
@endsection

@section('content')
    <header id="header" class="header d-flex align-items-center fixed-top"
        style="background-image: url('{{ Storage::url($headerBackground) }}'); background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <img src="{{ Storage::url($headerLogo) }}" alt="AgriCulture">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/') }}/#hero" class="fw-bold">Home</a></li>
                    <li><a href="{{ url('/') }}/#services-2" class="fw-bold">Our Product</a></li>
                    <li><a href="{{ url('/') }}/#about" class="fw-bold">About Us</a></li>
                    <li><a href="{{ url('/') }}/#recent-posts" class="fw-bold">Blog</a></li>
                    <li><a href="{{ url('/') }}/#footer" class="fw-bold">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Page Title -->
        <div class="page-title mt-5" data-aos="fade">
            <div class="container position-relative">
                <h1>Blog</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Blog</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Blog Posts 2 Section -->
        <section id="blog-posts-2" class="blog-posts-2 section">

            <div class="container">
                <div class="row gy-4">
                    @foreach ($blogList as $item)
                        <div class="col-lg-4">
                            <article class="position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ Storage::url($item->cover) }}" class="w-100" height="300"
                                        class="img-fluid" alt="" style="object-fit: cover">
                                </div>

                                <div class="meta d-flex align-items-end">
                                    <span class="post-date"><span>12</span>December</span>
                                </div>

                                <div class="d-flex flex-column p-4">
                                    <div class="right-content text-gold-i mb-3">
                                        <div class="person">
                                            <i class="bi bi-person"></i> <span class="ps-2">{{ $item->writer }}</span>
                                        </div>
                                        {{-- <span class="px-3 text-black-50">/</span> --}}
                                        <div class="tags">
                                            <i class="bi bi-tags"></i> <span class="ps-2">{{ $item->category }}</span>
                                        </div>
                                    </div>
                                    <h3 class="fw-bold">{{ $item->title }}</h3>
                                    {!! substr($item->content, 0, 25) !!}
                                    <a href="{{ url('blog-' . $item->slug) }}"
                                        class="readmore stretched-link mt-5"><span>Read
                                            More</span><i class="bi bi-arrow-right"></i></a>

                                </div>

                            </article>
                        </div><!-- End post list item -->
                    @endforeach
                </div>
            </div>

        </section><!-- /Blog Posts 2 Section -->

        <!-- Blog Pagination Section -->
        <section id="blog-pagination" class="blog-pagination section">

            <div class="container">
                <div class="d-flex justify-content-center">
                    <ul>
                        <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li>...</li>
                        <li><a href="#">10</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>

        </section><!-- /Blog Pagination Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section light-background">

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
                                    <input type="email" name="email" class="form-control h-100"
                                        placeholder="Enter your e-mail">
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
        </section><!-- /Call To Action Section -->

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
@endsection
