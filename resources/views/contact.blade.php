@extends('layouts.default')

@section('title', 'Liên hệ - ' . app_name())
@section('section')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    @include('layouts.partials.breadcrumbs')
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.7885392248586!2d105.67698311433142!3d18.673482769354674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139ce70879c835d%3A0x90384b277e47478e!2zU-G7nyBLaG9hIGjhu41jICYgQ8O0bmcgbmdo4buHIHThu4luaCBOZ2jhu4cgQW4!5e0!3m2!1sen!2s!4v1667984943162!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Địa chỉ:</h4>
                  <p>75 Nguyễn Thị Minh Khai, Lê Mao, Thành phố Vinh, Nghệ An, Vietnam</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>hello@hachinet.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Điện thoại:</h4>
                  <p>(+84)989.284.337</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="{{ route('subcriber.post') }}" method="post" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Tên của bạn">
                  <span class="text-danger">
                    @error('name') {{ $message }} @enderror
                  </span>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
                  <span class="text-danger">
                    @error('email') {{ $message }} @enderror
                  </span>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Tiêu đề">
                <span class="text-danger">
                @error('subject') {{ $message }} @enderror
                </span>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" value="{{ old('message') }}" placeholder="Nội dung..."></textarea>
                <span class="text-danger">
                @error('message') {{ $message }} @enderror
                </span>
              </div>
              <div class="text-center">
                <button type="submit">Gửi</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection