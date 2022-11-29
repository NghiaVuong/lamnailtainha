<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('img/logo_Takumi.png') }}" style="width: 160px; height: auto;" alt="Logo" srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item">
                <a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="{{ route('category.get') }}" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Danh mục</span>
                </a>
            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-collection-fill"></i>
                    <span>Bài viết</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{ route('list-blog') }}">Danh sách</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('add-blog.post') }}">Thêm bài viết</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-image"></i>
                    <span>Banner</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{ route('list-banner') }}">Danh sách</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('add-banner.post') }}">Thêm slide</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('subcriber.get') }}" class='sidebar-link'>
                    <i class="bi bi-person-check-fill"></i>
                    <span>Subscriber</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('logout') }}" class='sidebar-link'>
                    <i class="bi bi-power"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
