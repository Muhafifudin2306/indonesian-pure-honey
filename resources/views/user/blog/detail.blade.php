@extends('layouts.front')

@section('seo')
    <title> {{ $seoTitle }} | {{ $blog->title }} </title>
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
        <div class="container">
            <div class="row mt-4 pt-4">

                <div class="col-lg-8">

                    <!-- Blog Details Section -->
                    <section id="blog-details">
                        <div class="container">

                            <article class="article">

                                <div class="post-img">
                                    <img src="{{ Storage::url($blog->cover) }}" alt="" class="img-fluid mb-3">
                                </div>

                                <h2 class="title">{{ $blog->title }}</h2>

                                <div class="meta-top">
                                    <div class="d-flex">
                                        <div class="me-3"><i class="bi bi-person"></i>
                                            <span class="text-gold-i">{{ $blog->writer }}</span>
                                        </div>
                                        <div class="me-3"><i class="bi bi-clock"></i>
                                            <span class="text-gold-i">{{ $blog->created_at->format('d F Y') }}</span>
                                        </div>
                                        <div class="me-3"><i class="bi bi-tags"></i>
                                            <span class="text-gold-i">{{ $blog->category }}</span>
                                        </div>
                                    </div>
                                </div><!-- End meta top -->

                                <div class="content mt-4">
                                    {!! $blog->content !!}

                                </div><!-- End post content -->

                            </article>

                        </div>
                    </section><!-- /Blog Details Section -->

                </div>

                <div class="col-lg-4 sidebar">

                    <div class="widgets-container">

                        <!-- Recent Posts Widget 2 -->
                        <div class="recent-posts-widget-2 widget-item">

                            <h3 class="widget-title">Recent Posts</h3>
                            @foreach ($blogList as $item)
                                <div class="post-item">
                                    <h4><a href="{{ url('blog-' . $item->slug) }}">{{ $item->title }}</a></h4>
                                    <time>{{ $item->created_at->format('d F Y') }}</time>
                                </div><!-- End recent post item-->
                            @endforeach
                        </div><!--/Recent Posts Widget 2 -->

                    </div>

                </div>

            </div>
        </div>

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
