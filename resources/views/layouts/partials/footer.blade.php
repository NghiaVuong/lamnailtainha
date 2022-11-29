<footer id="footer">
    <link href="{{ asset('assets/vendors/toastify/toastify.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/vendors/toastify/toastify.js') }}"></script>
    @if (session()->has('subscriber'))
        <script>
            Toastify({
                text: "{{ session()->get('subscriber') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "#4fbe87",
            }).showToast();
        </script>
        {{-- <div class="alert alert-success alert-dismissible position-fixed mt-2 top-50 end-0 d-flex justify-content-between"
            style="z-index: 9999;">
            <strong>Success!</strong>
            {{ session()->get('success') }}
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </div> --}}
    @endif
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Về Takumi</h3>
                    <p>
                        Số 75A, Nguyễn Thị Minh Khai <br>
                        Thành phố Vinh, Nghệ An<br>
                        Việt Nam <br><br>
                        <strong>Số điện thoại:</strong> (+84) 989-284-337<br>
                        <strong>Email:</strong> hello@hachinet.com<br>
                    </p>
                </div>

                {{-- <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="about">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="services">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="term">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="privacy">Privacy policy</a></li>
                    </ul>
                </div> --}}

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Dịch vụ</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('outsourcing-frontend-development') }}">Phát triển Outsource
                                Front-end</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('java-systems-development') }}">Phát triển hệ thống
                                Java</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('smartphone-application-development') }}">Phát triển Mobile và
                                Ứng dụng</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('net-systems-development') }}">Phát triển hệ thống
                                .Net</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('service-of-human-resources') }}">Nguồn nhân lực</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('cobol-systems-development') }}">Hệ thống Cobol</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-5 col-md-6 footer-newsletter">
                    <h4>Đăng ký nhận thông báo</h4>                   
                    <p class="text-muted">Muốn nhận thông báo về Tin tức mới của chúng tôi, chỉ cần đăng ký và chúng tôi sẽ gửi cho bạn thông báo mới nhất qua email.</p>
                    <form action="{{ route('subcriber.postSub') }}" method="post"
                        class="@error('emailSub') border border-3 border-danger @enderror">
                        @csrf
                        <input type="email" class="form-control shadow-none" name="emailSub">
                        <input type="submit" value="Subscribe">
                    </form>
                    <span class="text-danger">
                        @error('emailSub') {{ $message }} @enderror
                        </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Takumi.com</span></strong>. All Rights Reserved
            </div>
            {{-- <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div> --}}
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer>
