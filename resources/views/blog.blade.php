@extends('layouts.default')

@section('title', 'Blog - ' . app_name())
@section('section')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        @include('layouts.partials.breadcrumbs')
        <!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">
                        @if (count($blogList) > 0)
                            @foreach ($blogList as $element)
                                <article class="entry" id="{{ $element->id }}">

                                    <div class="entry-img">
                                        <img src="{{ asset($element->thumbnail) }}" alt="" class="img-fluid">
                                    </div>

                                    <h2 class="entry-title">
                                        <a href="{{ route('blogDetails', $element->slug) }}">{{ $element->title }}</a>
                                    </h2>

                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time
                                                    date>{{ date('Y-m-d', strtotime($element->created_at)) }}
                                                </time></a></li>
                                        </ul>
                                    </div>

                                    <div class="entry-content">
                                        <p>
                                            {{ $element->description }}
                                        </p>
                                        <div class="read-more">
                                            <a href="{{ route('blogDetails', $element->slug) }}">Xem thêm</a>
                                        </div>
                                    </div>
                                </article><!-- End blog entry -->
                            @endforeach
                        @else
                            <article class="text-center">
                                <h4>Hiện tại chưa có bài viết nào</h4>
                            </article>
                        @endif
                        <div class="col-12 d-inline-flex justify-content-between align-items-center mb-2">
                            <ul class="pagination pagination-primary float-end dataTable-pagination mb-0">
                                <li class="page-item">{{ $blogList->links() }}</li>
                            </ul>
                        </div>

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        @include('layouts.blog-sidebar')

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->
@endsection
