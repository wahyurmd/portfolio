<!-- Connect to master template -->
@extends('templates.master')

<!-- Title -->
@section('title', "Portfolio Details")

<!-- Content -->
@section('content')
<!-- ======= Hero Section ======= -->
@include('templates.hero-detail')
<!-- End Hero Section -->

<main id="main">
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            @foreach ($portfolioImage as $row)
                            <div class="swiper-slide">
                                <img src="{{ $url . 'storage/portfolio/' . $row->image }}" alt="">
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                @foreach ($portfolio as $row)
                <div class="col-lg-6 mb-5">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: {{ $row->category }}</li>
                            <li><strong>Client</strong>: {{ $row->client }}</li>
                            <li><strong>Project date</strong>: {{ $row->project_date }}</li>
                            <li><strong>Project URL</strong>: <a href="{{ $row->project_url }}">{{ $row->project_url }}</a></li>
                        </ul>
                        @if (!empty(trim($row->desc)))
                        <div class="portfolio-description">
                            <h2>Description</h2>
                            <p>
                            {{ $row->desc }}
                            </p>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Portfolio Details Section -->
</main>

@endsection
{{-- End: Content --}}
