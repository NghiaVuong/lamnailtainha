<!-- Sidebar -->
<div class="sidebar">

    <h3 class="sidebar-title">Tìm kiếm</h3>
    <!-- Sidebar search formn-->
    <div class="sidebar-item search-form">
        <form action="{{ route('blog.search') }}" method="GET">
            <input type="text" class="form-control shadow-none" name="search">
            <button type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div>
    <!-- End sidebar search formn-->

    <h3 class="sidebar-title">Danh mục bài viết</h3>
    <!-- Sidebar categories-->
    <div class="sidebar-item categories">
        <ul>
            <li><a href="{{ route('blog') }}">Tất cả bài viết <span>({{ count($category) }})</span></a></li>
            @foreach ($category as $item)
                <li><a href="{{ route('category.slug', $item['slug']) }}">{{ $item['name'] }} <span>({{ $item['total'] }})</span></a></li>
            @endforeach
        </ul>
    </div>
    <!-- End sidebar categories-->

    <h3 class="sidebar-title">Bài đăng gần đây</h3>
    <!-- Sidebar recent posts-->
    @foreach ($recentPost as $element)
        <div class="sidebar-item recent-posts">
            <div class="post-item clearfix">
                <img src="{{ asset($element->thumbnail) }}" alt="">
                <h4><a href="{{ route('blogDetails', $element->slug) }}">{{ $element->title }}</a>
                </h4>
                <time datetime>{{ $element->created_at->format('Y-m-d') }}</time>
            </div>
        </div>
    @endforeach
    <!-- End sidebar recent posts-->

    {{-- <h3 class="sidebar-title">Tags</h3>
    <!-- Sidebar tags-->
    <div class="sidebar-item tags">
        <ul>
            <li><a href="#">App</a></li>
            <li><a href="#">IT</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Mac</a></li>
            <li><a href="#">Design</a></li>
            <li><a href="#">Office</a></li>
            <li><a href="#">Creative</a></li>
            <li><a href="#">Studio</a></li>
            <li><a href="#">Smart</a></li>
            <li><a href="#">Tips</a></li>
            <li><a href="#">Marketing</a></li>
        </ul>
    </div> --}}
    <!-- End sidebar tags-->

</div>
<!-- End sidebar -->
