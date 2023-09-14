<!-- Connect to master template -->
@extends('templates.master')

<!-- Title -->
@section('title', "Wahyu Ramadhani's Portfolio")

<!-- Content -->
@section('content')

<!-- ======= Hero Section ======= -->
@include('templates.hero')
<!-- End Hero Section -->

<main id="main">
<!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                @foreach ($profile as $row)
                                    <div class="row">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="about-img">
                                            <img src="{{ $url . 'storage/profile/' . $row->picture }}" class="img-fluid rounded b-shadow-a" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-7">
                                            <div class="about-info">
                                            <p><span class="title-s">Name: </span> <span>{{ $row->name }}</span></p>
                                            <p><span class="title-s">Profile: </span> <span>{{ $row->title }}</span></p>
                                            <p><span class="title-s">Email: </span> <span>{{ $row->email }}</span></p>
                                            <p><span class="title-s">Phone: </span> <span>{{ $row->phone }}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="skill-mf row">
                                    <p class="title-s">Skill</p>
                                    <div class="col-md-6">
                                        <span>HTML & CSS</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span>BOOTSTRAP</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span>PHP</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span>LARAVEL</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span>CODEIGNITER</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span>WORDPRESS</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span>JAVASCRIPT</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span>ANALYSIS</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @foreach ($profile as $row)
                                    <div class="about-me pt-4 pt-md-0">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                            About me
                                            </h5>
                                        </div>
                                        <p class="lead">
                                            {!! nl2br(e($row->desc)) !!}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                    <h3 class="title-a">
                        Services
                    </h3>
                    <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Web Development</h2>
                            <p class="s-description text-center">
                                Assist client requests to create a website, be it a company profile or a website application with full coding.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-briefcase"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Wordpress Development</h2>
                            <p class="s-description text-center">
                                Assist client requests to create a website, be it a company profile or a website application by utilizing wordpress.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-binoculars"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Responsive Design</h2>
                            <p class="s-description text-center">
                                Assist client requests to create a website, be it a company profile or a website application and is responsive with various platforms.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-sm-4 col-lg-4">
                    <div class="counter-box counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-check"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="{{ $totalPtoject }}" data-purecounter-duration="1" class="counter purecounter"></p>
                            <span class="counter-text">WORKS COMPLETED</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
                        </div>
                        <div class="counter-num">
                            @foreach ($profile as $row)
                                <p data-purecounter-start="0" data-purecounter-end="{{ $row->years_experience }}" data-purecounter-duration="1" class="counter purecounter"></p>
                            @endforeach
                            <span class="counter-text">YEARS OF EXPERIENCE</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-people"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="{{ $totalClientCount }}" data-purecounter-duration="1" class="counter purecounter"></p>
                            <span class="counter-text">TOTAL CLIENTS</span>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-award"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="counter purecounter"></p>
                            <span class="counter-text">AWARD WON</span>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Portfolio
                        </h3>
                        {{-- <p class="subtitle-a">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p> --}}
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($portfolio as $row)
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="{{ $url . 'storage/portfolio/thumbnails/' . $row->thumbnail }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="{{ $url . 'storage/portfolio/thumbnails/' . $row->thumbnail }}" alt="{{ $row->thumbnail }}" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">{{ $row->title }}</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">{{ $row->category }}</span> / <span class="w-date">{{ $row->project_date }}</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="{{ route('detail.portfolio', $row->id) }}"> <span class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-md-4">
                    <div class="work-box">
                        <a href="assets/img/work-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                            <img src="assets/img/work-2.jpg" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Loreda Cuno Nere</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="assets/img/work-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/work-3.jpg" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Mavrito Lana Dere</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="assets/img/work-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/work-4.jpg" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Bindo Laro Cado</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="assets/img/work-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/work-5.jpg" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Studio Lena Mado</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="assets/img/work-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="assets/img/work-6.jpg" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Studio Big Bang</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="author-test">
                                        <img src="assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                                        <span class="author">Xavi Alonso</span>
                                    </div>
                                    <div class="content-test">
                                        <p class="description lead">
                                            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                            <div class="testimonial-box">
                                <div class="author-test">
                                    <img src="assets/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                                    <span class="author">Marta Socrate</span>
                                </div>
                                <div class="content-test">
                                    <p class="description lead">
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                            </div><!-- End testimonial item -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">

                    </div> -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    {{-- <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
            <div class="title-box text-center">
            <h3 class="title-a">
                Blog
            </h3>
            <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-4">
            <div class="card card-blog">
            <div class="card-img">
                <a href="blog-single.html"><img src="assets/img/post-1.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
                <div class="card-category-box">
                <div class="card-category">
                    <h6 class="category">Travel</h6>
                </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                <p class="card-description">
                Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                a pellentesque nec,
                egestas non nisi.
                </p>
            </div>
            <div class="card-footer">
                <div class="post-author">
                <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                </a>
                </div>
                <div class="post-date">
                <span class="bi bi-clock"></span> 10 min
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-blog">
            <div class="card-img">
                <a href="blog-single.html"><img src="assets/img/post-2.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
                <div class="card-category-box">
                <div class="card-category">
                    <h6 class="category">Web Design</h6>
                </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                <p class="card-description">
                Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                a pellentesque nec,
                egestas non nisi.
                </p>
            </div>
            <div class="card-footer">
                <div class="post-author">
                <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                </a>
                </div>
                <div class="post-date">
                <span class="bi bi-clock"></span> 10 min
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-blog">
            <div class="card-img">
                <a href="blog-single.html"><img src="assets/img/post-3.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
                <div class="card-category-box">
                <div class="card-category">
                    <h6 class="category">Web Design</h6>
                </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                <p class="card-description">
                Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                a pellentesque nec,
                egestas non nisi.
                </p>
            </div>
            <div class="card-footer">
                <div class="post-author">
                <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                </a>
                </div>
                <div class="post-date">
                <span class="bi bi-clock"></span> 10 min
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section> --}}
    <!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Send Message Us
                                        </h5>
                                    </div>
                                    <div>
                                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-center my-3">
                                                    <div class="loading">Loading</div>
                                                    <div class="error-message"></div>
                                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">
                                            Get in Touch
                                        </h5>
                                    </div>
                                    <div class="more-info">
                                        <ul class="list-ico">
                                            @foreach ($profile as $row)
                                                <li><span class="bi bi-geo-alt"></span> {{ $row->address }}</li>
                                                <li><span class="bi bi-phone"></span> {{ $row->phone }}</li>
                                                <li><span class="bi bi-envelope"></span> {{ $row->email }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            @foreach ($sosmed as $row)
                                                <li><a href="{{ $row->instagram }}" target="_blank"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                                                <li><a href="{{ $row->whatsapp }}" target="_blank"><span class="ico-circle"><i class="bi bi-whatsapp"></i></span></a></li>
                                                <li><a href="{{ $row->linkedin }}" target="_blank"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                                                <li><a href="{{ $row->github }}" target="_blank"><span class="ico-circle"><i class="bi bi-github"></i></span></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Contact Section -->
</main>

@endsection
{{-- End: Content --}}
