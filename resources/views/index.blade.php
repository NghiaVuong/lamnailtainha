@extends('layouts.default')

@section('title', 'Trang chủ - ' . app_name())

@section('section')
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->

                @foreach ($responses1 as $element)
                    <div class="carousel-item active" id="{{ $element->id }}"
                        style="background-image: url({{ asset($element->thumbnail) }});">
                        <div class="carousel-container">
                            <div class="carousel-content animate__animated animate__fadeInUp">
                                <h2>{{ $element->title }}</h2>
                                <p>{!! $element->content !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($responses2 as $element)
                    <div class="carousel-item" id="{{ $element->id }}"
                        style="background-image: url({{ asset($element->thumbnail) }});">
                        <div class="carousel-container">
                            <div class="carousel-content animate__animated animate__fadeInUp">
                                <h2>{{ $element->title }}</h2>
                                <p>{!! $element->content !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($responses3 as $element)
                    <div class="carousel-item" id="{{ $element->id }}"
                        style="background-image: url({{ asset($element->thumbnail) }});">
                        <div class="carousel-container">
                            <div class="carousel-content animate__animated animate__fadeInUp">
                                <h2>{{ $element->title }}</h2>
                                <p>{!! $element->content !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach


                <!-- Slide 2 -->
                {{-- <div class="carousel-item" style="background-image: url({{ asset('img/slide/slide_3.jpg') }});">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Nghệ Nhân - Takumi</h2>
                            <p>Không gian làm việc phẳng. Không khoảng cách giữa các vai trò và cấp bậc. Đạt được những mơ
                                ước và khát vọng của Nghệ nhân - Takumi.</p>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url({{ asset('img/slide/slide_2.jpg') }});">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Dịch vụ phần mềm tại Takumi</h2>
                            <p>Takumi cung cấp các giải pháp phần mềm quản lý cho các doanh nghiệp tập đoàn, tổng công ty,
                                ngân hàng, trường đại học, bệnh viện, các giải pháp kết nối cộng đồng trên nền tảng
                                internet,
                                các hệ thống website, các hệ thống trong lĩnh vực thương mại điện tử, cung cấp nhân lực phần
                                mềm của nước nhà và thế giới.</p>
                        </div>
                    </div> --}}
            </div>


            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section>
@endsection

@section('content')
    <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2>Tại sao Takumi lựa chọn văn phòng tại Thành Phố Vinh</h2>
                    <h3>Là trung tâm của Bắc Trung Bộ với gồm 6 trường Đại học, 9 trường Cao đẳng chất lượng giáo dục đạt
                        trên mức bình quân chung cả nước, dẫn đầu khu vực Bắc Trung bộ; Vì vậy Nghệ Nhân Takumi luôn mong
                        muốn được xây dựng một thung lũng đổi mới sáng tạo của miền trung ngay tại quê hương xứ "Nghệ".</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                    <p>
                        Nhiệm vụ và sứ mệnh của tổ chức:
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Công nghệ: triển khai công nghệ mới và chuyên nghiệp trong
                            từng line code </li>
                        <li><i class="ri-check-double-line"></i> Đào tạo: Thực tập sinh, đào tạo kiến thức chuyên sâu cho
                            key member (Leader, Project manager,…) </li>
                        <li><i class="ri-check-double-line"></i> Xuất khẩu phần mềm: Hướng đưa Takumi trở thành địa chỉ hàng
                            đầu về outsourcing quốc tế và là trung tâm đào tạo, cung cấp nhân lực phần mềm của nước nhà và
                            thế giới. </li>
                        <li><i class="ri-check-double-line"></i> Ngoại ngữ: Xây dựng đội Sale Nhật, Brse, Comtor </li>
                        <li><i class="ri-check-double-line"></i> Giải pháp: Đưa ra các giải pháp cho khách hàng và sáng tạo
                            giải pháp công nghệ mới tháo gỡ những nút thắt khó khăn trong cuộc sống </li>
                        <li><i class="ri-check-double-line"></i> Sản phẩm: Tập trung cho các sản phẩm dịch vụ phần mềm như
                            hiện tại Hachinet đang có devwork, hatonet </li>
                    </ul>
                    <p class="fst-italic">
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue flex-fill">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                </path>
                            </svg>
                            <i class="bx bx-line-chart"></i>
                        </div>
                        <h4><a href="{{ route('cobol-systems-development') }}">Hệ thống Cobol</a></h4>
                        <p>Được sử dụng trong các hệ thống kinh doanh, tài chính và hành chính cho các công ty, COBOL được
                            sử dụng rộng rãi trong các ứng dụng cũ</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                </path>
                            </svg>
                            <i class="bx bxl-google-cloud"></i>
                        </div>
                        <h4><a href="{{ route('service-of-human-resources') }}">Dịch vụ phải cử kỹ sư</a></h4>
                        <p>Đây là dịch vụ những kỹ sư có nhiều năm kinh nghiệm sẽ hỗ trợ từng giai đoạn phát triển
                            hệ thống trong khoảng thời gian cần thiết cho khách hàng
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                </path>
                            </svg>
                            <i class="bx bx-laptop"></i>
                        </div>
                        <h4><a href="{{ route('outsourcing-frontend-development') }}">Phát triển Outsource Front-end</a>
                        </h4>
                        <p>Tuyển các lập trình viên Front-end để phát triển ứng dụng mạng kinh doanh có khả năng mở
                            rộng cao
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-yellow">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                                </path>
                            </svg>
                            <i class="bx bx-code-alt"></i>
                        </div>
                        <h4><a href="{{ route('java-systems-development') }}">Phát triển hệ thống Java</a></h4>
                        <p>Dịch vụ phát triển Java của Takumi là một dịch vụ phát triển phần mềm toàn diện (từ tư
                            vấn đến hỗ trợ)
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                                </path>
                            </svg>
                            <i class="bx bx-mobile"></i>
                        </div>
                        <h4><a href="{{ route('smartphone-application-development') }}">Phát triển Mobile và Ứng dụng</a>
                        </h4>
                        <p>Chúng tôi cung cấp dịch vụ đồng thời cung cấp công nghệ gốc, front-end, máy chủ và cơ sở
                            dữ liệu trong cùng thời điểm
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-teal">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                </path>
                            </svg>
                            <i class="bx bx-window"></i>
                        </div>
                        <h4><a href="{{ route('net-systems-development') }}">Phát triển hệ thống .NET</a></h4>
                        <p>Hệ thống kinh doanh dành cho các doanh nghiệp, nhà kho và nhà máy</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                        <a href="{{ asset('img/portfolio/booking-platform.jpeg') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Booking platform"><i
                                class="bx bx-plus"></i></a>
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
                            class="portfolio-lightbox preview-link" title="Devwork.vn"><i class="bx bx-plus"></i></a>
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
                            class="portfolio-lightbox preview-link" title="Gametector"><i class="bx bx-plus"></i></a>
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
                            class="portfolio-lightbox preview-link" title="Hệ thống ICM"><i class="bx bx-plus"></i></a>
                        {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a> --}}
                    </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="{{ asset('img/portfolio/he-thong-quan-ly-noi-bo-doanh-nghiep.png') }}" class="img-fluid"
                        alt="">
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
                            class="portfolio-lightbox preview-link" title="Netbee.vn"><i class="bx bx-plus"></i></a>
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
                        <a href="{{ asset('img/portfolio/nhat-ky-giac-mo.png') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Nhật ký giấc mơ"><i
                                class="bx bx-plus"></i></a>
                        {{-- <a href="{{ route('portfolio/details') }}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a> --}}
                    </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="{{ asset('img/portfolio/platform-bat-dong-san.png') }}" class="img-fluid" alt="">
                    {{-- <a href="{{ route('portfolio/details') }}"> --}}
                    <div class="portfolio-info">
                        <h4>Platform Bất động sản</h4>
                        <p>Web</p>
                        <a href="{{ asset('img/portfolio/platform-bat-dong-san.png') }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Platform Bất động sản"><i
                                class="bx bx-plus"></i></a>
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
                            class="portfolio-lightbox preview-link" title="Varsan.jp"><i class="bx bx-plus"></i></a>
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
                            class="portfolio-lightbox preview-link" title="Ví tiền ảo"><i class="bx bx-plus"></i></a>
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
    </section>

    <section id="dev-tools" class="dev-tools">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>CÔNG CỤ PHÁT TRIỂN</h2>
            </div>

            <div class="row no-gutters dev-tools-wrap clearfix" data-aos="fade-up">
                <div class="row  pt-1 pb-1">
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/java.png') }}" alt="Java System">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/c_sharp.png') }}" alt="C# Development tools">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/dotnet.png') }}" alt=".Net system">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/python.png') }}" alt="Python Development tools">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/php.png') }}" alt="PHP Development tools">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/angular.png') }}" alt="Angular Development tools">
                        </div>
                    </div>
                </div>
                <div class="row  pt-1 pb-1">
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/react.png') }}" alt="React Development tools">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/redux.png') }}" alt="Redux Development tools">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/fabricjs.png') }}" alt="Fabricjs Development tools">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/spring.png') }}" alt="Java system Development tools">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/Swagger.png') }}" alt="Swagger Development tools">
                        </div>
                    </div>


                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/mysql.png') }}" alt="MySQL Development tools">
                        </div>
                    </div>
                </div>
                <div class="row  pt-1 pb-1">
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/oracle.png') }}" alt="Oracle Development tools">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/sql_server.png') }}" alt="SQL Server Development tools">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/rabbit.png') }}" alt="Rabbit Development tools">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/mongodb.png') }}" alt="Mongodb Development tools">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/docker.png') }}" alt="Docker Development tools">
                        </div>
                    </div>


                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/aws.png') }}" alt="Amazon Web Service Development tools">
                        </div>
                    </div>
                </div>
                <div class="row  pt-1 pb-1 offset-md-3 offset-sm-0">
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/notejs.png') }}" alt="Nodejs Development tools">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/firebase.png') }}" alt="Firebase Development tools">
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="dev-tools-logo">
                            <img src="{{ asset('img/dev-tools/consul.png') }}" alt="Consul Development tools">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
