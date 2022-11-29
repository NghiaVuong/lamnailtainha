<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        {{-- <h1 class="logo me-auto"><a href="{{ route('home') }}"><span>Takumi</span></a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="logo me-auto"><img src="{{ asset("img/logo_Takumi.png") }}" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="{{ route('home') }}" class="<?php if ($_SERVER['REQUEST_URI']=="/"){echo "active";} ?>">Trang chủ</a></li>

                <li class="dropdown <?php if ($_SERVER['REQUEST_URI']=="/services"){echo "active";} ?>"><a href="{{route('services')}}"><span>Các dịch vụ</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('outsourcing-frontend-development') }}">Phát triển Outsource Front-end</a></li>
                        <li><a href="{{ route('java-systems-development') }}">Phát triển hệ thống Java</a></li>
                        <li><a href="{{ route('smartphone-application-development') }}">Phát triển Mobile và Ứng dụng</a></li>
                        <li><a href="{{ route('net-systems-development') }}">Phát triển hệ thống .Net</a></li>
                        <li><a href="{{ route('service-of-human-resources') }}">Nguồn nhân lực</a></li>
                        <li><a href="{{ route('cobol-systems-development') }}">Hệ thống Cobol</a></li>
                    </ul>
                </li>
                <li><a class="<?php if ($_SERVER['REQUEST_URI']=="/about-us"){echo "active";} ?>" href="{{route('about')}}">Về Takumi</a></li>
                <li><a class="<?php if ($_SERVER['REQUEST_URI']=="/portfolio"){echo "active";} ?>" href="{{route('portfolio')}}">Danh mục</a></li>
                <li><a class="<?php if ($_SERVER['REQUEST_URI']=="/blog"){echo "active";} ?>" href="{{route('blog')}}">Blog</a></li>
                <li><a class="<?php if ($_SERVER['REQUEST_URI']=="/contact"){echo "active";} ?>" href="{{route('contact')}}">Liên hệ</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <!-- <nav id="navbar" class="navbar order-last order-lg-0">
        <a class="">Đăng nhập</a>
        </nav> -->
</header>
