@extends('layouts.default')

@section('title', 'Về chúng tôi - ' . app_name())
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    @include('layouts.partials.breadcrumbs')
    <!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2>Tại sao Takumi lựa chọn văn phòng tại Thành Phố Vinh</h2>
                    <h3>Là trung tâm của Bắc Trung Bộ với gồm 6 trường Đại học, 9 trường Cao đẳng chất lượng giáo dục đạt
                        trên mức bình quân chung cả nước, dẫn đầu khu vực Bắc Trung bộ; Hơn nữa, công nghệ thông tin tỉnh
                        nhà đang trên đà phát triển và đây sẽ là cơ hội để Takumi mở rộng ngành công nghệ hơn nữa.</h3>
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
    </section><!-- End About Us Section -->

    <!-- ======= Our Team Section ======= -->
    {{-- <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Our <strong>Team</strong></h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-2.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-3.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-4.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> --}}
    <!-- End Our Team Section -->

    <!-- ======= Our Dev tools Section ======= -->
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
    </section><!-- End Our Clients Section -->
@endsection
