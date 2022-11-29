@extends('layouts.default')

@section('title', 'Danh mục - ' . app_name())
@section('section')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        @include('layouts.partials.breadcrumbs')
        <!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            {{-- <li data-filter=".filter-card">Card</li> --}}
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('img/portfolio/bccs.png') }}" class="img-fluid" alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>BCCS</h4>
                            <p>Web</p>
                            <a href="{{ asset('img/portfolio/bccs.png') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="BCCS"><i class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('img/portfolio/BI.png') }}" class="img-fluid" alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>BI</h4>
                            <p>Web</p>
                            <a href="{{ asset('img/portfolio/BI.png') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="BI"><i class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('img/portfolio/booking-platform.jpeg') }}" class="img-fluid" alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>Booking platform</h4>
                            <p>Web</p>
                                <a href="{{ asset('img/portfolio/booking-platform.jpeg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                    title="Booking platform"><i class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('img/portfolio/dcorp---fb--crm.png') }}" class="img-fluid" alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>CRM</h4>
                            <p>Web</p>
                            <a href="{{ asset('img/portfolio/dcorp---fb--crm.png') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="CRM"><i class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('img/portfolio/devworkvn.png') }}" class="img-fluid" alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>Devwork.vn</h4>
                            <p>Web</p>
                            <a href="{{ asset('img/portfolio/devworkvn.png') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="Devwork.vn"><i
                                        class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('img/portfolio/e-form.png') }}" class="img-fluid" alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>E-FORM</h4>
                            <p>Web</p>
                            <a href="{{ asset('img/portfolio/e-form.png') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="E-FORM"><i class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('img/portfolio/gametector.jpeg') }}" class="img-fluid" alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>Gametector</h4>
                            <p>App</p>
                            <a href="{{ asset('img/portfolio/gametector.jpeg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="Gametector"><i
                                        class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('img/portfolio/he-thong-building-men-portal.png') }}" class="img-fluid"
                            alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>Hệ thống Building Men Portal</h4>
                            <p>Web</p>
                            <a href="{{ asset('img/portfolio/he-thong-building-men-portal.png') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Hệ thống Building Men Portal"><i class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('img/portfolio/he-thong-icm.jpeg') }}" class="img-fluid" alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>Hệ thống ICM</h4>
                            <p>Web</p>
                            <a href="{{ asset('img/portfolio/he-thong-icm.jpeg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Hệ thống ICM"><i
                                    class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('img/portfolio/he-thong-quan-ly-noi-bo-doanh-nghiep.png') }}"
                            class="img-fluid" alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>Hệ thống quản lý nội bộ doanh nghiệp</h4>
                            <p>Web</p>
                            <a href="{{ asset('img/portfolio/he-thong-quan-ly-noi-bo-doanh-nghiep.png') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Hệ thống quản lý nội bộ doanh nghiệp"><i class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('img/portfolio/he-thong-truong-hoc-truc-tuyen.png') }}" class="img-fluid"
                            alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>Hệ thống trường học trực tuyến</h4>
                            <p>Web</p>
                            <a href="{{ asset('img/portfolio/he-thong-truong-hoc-truc-tuyen.png') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Hệ thống trường học trực tuyến"><i class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('img/portfolio/netbeevn.png') }}" class="img-fluid" alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>Netbee.vn</h4>
                            <p>Web</p>
                            <a href="{{ asset('img/portfolio/netbeevn.png') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="Netbee.vn"><i
                                        class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('img/portfolio/nhat-ky-giac-mo.png') }}" class="img-fluid" alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>Nhật ký giấc mơ</h4>
                            <p>App</p>
                                <a href="{{ asset('img/portfolio/nhat-ky-giac-mo.png') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                    title="Nhật ký giấc mơ"><i class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('img/portfolio/platform-bat-dong-san.png') }}" class="img-fluid"
                            alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>Platform Bất động sản</h4>
                            <p>Web</p>
                            <a href="{{ asset('img/portfolio/platform-bat-dong-san.png') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Platform Bất động sản"><i class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('img/portfolio/shimada.png') }}" class="img-fluid" alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>CMS service HTML and WordPress</h4>
                            <p>Web</p>
                            <a href="{{ asset('img/portfolio/shimada.png') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="CMS service HTML and WordPress"><i
                                    class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('img/portfolio/varsanjp.png') }}" class="img-fluid" alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>Varsan.jp</h4>
                            <p>Web</p>
                            <a href="{{ asset('img/portfolio/varsanjp.png') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="Varsan.jp"><i
                                        class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('img/portfolio/vi-tien-ao.png') }}" class="img-fluid" alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>Ví tiền ảo</h4>
                            <p>App</p>
                            <a href="{{ asset('img/portfolio/vi-tien-ao.png') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="Ví tiền ảo"><i
                                        class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('img/portfolio/wanwan-house.png') }}" class="img-fluid" alt="">
                        {{-- <a href="{{ route('portfolio/details') }}"> --}}
                        <div class="portfolio-info">
                            <h4>CMS service HTML and WordPress</h4>
                            <p>Web</p>
                            <a href="{{ asset('img/portfolio/wanwan-house.png') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="CMS service HTML and WordPress"><i
                                    class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a> --}}
                        </div>
                        </a>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->
@endsection
