@extends('layouts.default')

@section('title', 'Trang chủ - ' . app_name())

@section('content')
    <header class="header-banner">
        <div id="home" class="header-hero bg_cover"
            style="background-image: url(https://hachinet.com/landing/haken/images/banner.png)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="header-content text-center">
                            <h3 class="header-title">Dịch vụ phái cử kỹ sư</h3>
                            <p class="text">Đây là dịch vụ những kĩ sư có nhiều năm kinh nghiệm sẽ hỗ trợ từng giai đoạn
                                phát triền hệ thống trong khoảng thời gian cần thiết cho khách hàng.</p>
                            <ul class="header-btn">
                                <li><a class="main-btn btn-hachinet" href="#">Đăng ký</a></li>
                                <li><a class="main-btn btn-two video-popup"
                                        href="https://www.youtube.com/watch?v=jlywRNDwUyc">Xem Video<i
                                            class="lni-play"></i></a></li>
                            </ul>
                        </div> <!-- header content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-shape">
                <img src="https://hachinet.com/landing/haken/images/header-shape.svg" alt="shape">
            </div>
        </div> <!-- header content -->
    </header>
    <section id="service" class="services-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-10">
                        <h4 class="title">Lợi ích</h4>
                        <p class="text">Tăng năng lực cạnh tranh và tối ưu hóa nguồn lực là bài toán chung của rất nhiều
                            doanh nghiệp. </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-bolt"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">Linh hoạt</h4>
                                    <p class="text">Linh hoạt trong chiến lược sử dụng nhân sự với nhiều biến động tăng
                                        hay giảm nhân sự. </p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-bar-chart"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">Tập trung </h4>
                                    <p class="text">Giải pháp hữu hiệu giúp doanh nghiệp tập trung tốt hơn cho các lĩnh
                                        vực kinh doanh cốt lõi. </p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-brush"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">Tiết kiệm</h4>
                                    <p class="text">Tiết kiệm các chi phí như: tạo nguồn, tuyển dụng, tính lương, trả
                                        lương... </p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-bulb"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">Nguồn lực dồi dào </h4>
                                    <p class="text">Khả năng đáp ứng lao động dồi dào của Dịch Vụ Cung Ứng lao động thuê
                                        ngoài </p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- row -->
            </div> <!-- row -->
        </div> <!-- conteiner -->
        <div class="services-image d-lg-flex align-items-center">
            <div class="image">
                <img src="https://hachinet.com/landing/haken/images/services.png" alt="Services">
            </div>
        </div> <!-- services image -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== PRICING PART START ======-->

    <section id="pricing" class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">Bảng giá </h4>
                        <p class="text">Các loại hợp đồng</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing mt-40">
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Dưới 3 tháng</h5>
                            <span class="price">1</span>
                            <p class="year">Hợp đồng ngắn hạn</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Mất chi phí Visa</li>
                                <li><i class="lni-check-mark-circle"></i> Mất chi phí vé máy bay</li>
                                <li><i class="lni-check-mark-circle"></i> Mất chi phí đi lại</li>
                                <li><i class="lni-check-mark-circle"></i> Mất chi phí nhà ở</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn" href="#">GET STARTED</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 350 112.35">
                                <defs>
                                    <style>
                                        .color-1 {
                                            fill: #2bdbdc;
                                            isolation: isolate;
                                        }

                                        .cls-1 {
                                            opacity: 0.1;
                                        }

                                        .cls-2 {
                                            opacity: 0.2;
                                        }

                                        .cls-3 {
                                            opacity: 0.4;
                                        }

                                        .cls-4 {
                                            opacity: 0.6;
                                        }
                                    </style>
                                </defs>
                                <title>bottom-part1</title>
                                <g id="bottom-part">
                                    <g id="Group_747" data-name="Group 747">
                                        <path id="Path_294" data-name="Path 294" class="cls-1 color-1"
                                            d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_297" data-name="Path 297" class="cls-2 color-1"
                                            d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_296" data-name="Path 296" class="cls-3 color-1"
                                            d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_295" data-name="Path 295" class="cls-4 color-1"
                                            d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z"
                                            transform="translate(0 0)" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>

                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing pro mt-40">
                        <div class="pricing-baloon">
                            <img src="https://hachinet.com/landing/haken/images/baloon.svg" alt="baloon">
                        </div>
                        <div class="pricing-header">
                            <h5 class="sub-title">Dưới 6 tháng</h5>
                            <span class="price">2</span>
                            <p class="year">Hợp đồng trung hạn</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Miễn phí phí Visa</li>
                                <li><i class="lni-check-mark-circle"></i> Miến phí vé máy bay</li>
                                <li><i class="lni-check-mark-circle"></i> Miễn phí phí đi lại</li>
                                <li><i class="lni-check-mark-circle"></i> Mất chi phí nhà ở</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn" href="#">GET STARTED</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 350 112.35">
                                <defs>
                                    <style>
                                        .color-2 {
                                            fill: #ffb701;
                                            isolation: isolate;
                                        }

                                        .cls-1 {
                                            opacity: 0.1;
                                        }

                                        .cls-2 {
                                            opacity: 0.2;
                                        }

                                        .cls-3 {
                                            opacity: 0.4;
                                        }

                                        .cls-4 {
                                            opacity: 0.6;
                                        }
                                    </style>
                                </defs>
                                <title>bottom-part1</title>
                                <g id="bottom-part">
                                    <g id="Group_747" data-name="Group 747">
                                        <path id="Path_294" data-name="Path 294" class="cls-1 color-2"
                                            d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_297" data-name="Path 297" class="cls-2 color-2"
                                            d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_296" data-name="Path 296" class="cls-3 color-2"
                                            d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_295" data-name="Path 295" class="cls-4 color-2"
                                            d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z"
                                            transform="translate(0 0)" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>

                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing enterprise mt-40">
                        <div class="pricing-flower">
                            <img src="https://hachinet.com/landing/haken/images/flower.svg" alt="flower">
                        </div>
                        <div class="pricing-header text-right">
                            <h5 class="sub-title">Trên 1 năm</h5>
                            <span class="price">3</span>
                            <p class="year">Hợp đồng dài hạn</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> Miễn phí phí Visa</li>
                                <li><i class="lni-check-mark-circle"></i> Miến phí vé máy bay</li>
                                <li><i class="lni-check-mark-circle"></i> Miễn phí phí đi lại</li>
                                <li><i class="lni-check-mark-circle"></i> Miễn phí phí nhà ở</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn" href="#">GET STARTED</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 350 112.35">
                                <defs>
                                    <style>
                                        .color-3 {
                                            fill: #4da422;
                                            isolation: isolate;
                                        }

                                        .cls-1 {
                                            opacity: 0.1;
                                        }

                                        .cls-2 {
                                            opacity: 0.2;
                                        }

                                        .cls-3 {
                                            opacity: 0.4;
                                        }

                                        .cls-4 {
                                            opacity: 0.6;
                                        }
                                    </style>
                                </defs>
                                <title>bottom-part1</title>
                                <g id="bottom-part">
                                    <g id="Group_747" data-name="Group 747">
                                        <path id="Path_294" data-name="Path 294" class="cls-1 color-3"
                                            d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_297" data-name="Path 297" class="cls-2 color-3"
                                            d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_296" data-name="Path 296" class="cls-3 color-3"
                                            d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z"
                                            transform="translate(0 0)" />
                                        <path id="Path_295" data-name="Path 295" class="cls-4 color-3"
                                            d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z"
                                            transform="translate(0 0)" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
            </div> <!-- row -->
        </div> <!-- conteiner -->
    </section>

    <!--====== PRICING PART ENDS ======-->

    <!--====== CALL TO ACTION PART START ======-->

    <section id="call-to-action" class="call-to-action">
        <div class="call-action-image">
            <img src="https://hachinet.com/landing/haken/images/call-to-action.png" alt="call-to-action">
        </div>

        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="call-action-content text-center">
                        <h2 class="call-title">Liên hệ với Hachinet</h2>
                        <p class="text">Nếu doanh nghiệp của bạn cần đối tác cung ứng nhân sự phái cử tại nước của bạn ,
                            đừng ngần ngại hãy để lại email cho chúng tôi. </p>
                        <div class="">
                            <i class="lni-envelope"></i>
                            <form action="{{ route('subcriber.postSub') }}" method="post" class="d-flex p-0 shadow rounded"
                                class="@error('emailSub') border border-3 border-danger @enderror">
                                @csrf
                                <input type="email" class="form-control shadow-none form-email p-2" placeholder="exam@gmail.com" name="emailSub">
                                <input type="submit" class="button-email p-2" value="Subscribe">
                            </form>
                            <span class="text-danger">
                                @error('emailSub')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div> <!-- slider-content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CALL TO ACTION PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">Liên lạc</h4>
                        <p class="text">Hãy để lại liên hệ, chúng tôi sẽ liên lạc với bạn</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row mt-5 justify-content-center aos-init aos-animate" data-aos="fade-up">
                <div class="col-lg-10">
                  <form action="http://127.0.0.1:8000/subcriber" method="post" class="php-email-form">
                    <input type="hidden" name="_token" value="e934eKNTLHgvoRqjaDxMmc0bhzVf9oFpFbakD2l4">              <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control p-2" id="name" value="" placeholder="Tên của bạn">
                        <span class="text-danger">
                                            </span>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control p-2" name="email" id="email" value="" placeholder="Email">
                        <span class="text-danger">
                                            </span>
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <input type="text" class="form-control p-2" name="subject" id="subject" value="" placeholder="Tiêu đề">
                      <span class="text-danger">
                       </span>
                    </div>
                    <div class="form-group mt-3">
                      <textarea class="form-control p-2" name="message" rows="5" value="" placeholder="Nội dung..."></textarea>
                      <span class="text-danger">
                                      </span>
                    </div>
                    <div class=" single-form form-group text-center">
                      <button type="submit" class="main-btn button-email rounded">Gửi</button>
                    </div>
                  </form>
                </div>
              </div>
        </div> <!-- conteiner -->
    </section>
    <link rel="stylesheet" href="{{ asset('servicecss/husman.css') }}">
@endsection
