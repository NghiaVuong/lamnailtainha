
<nav id="main-header">
    <nav id="sidenav">
        {{-- <a href="#" data-title="Home"><i class="fa fa-home"></i></a>
                <a href="#" id="messages" data-title="Messages" data-newmessages="1"><i
                        class="fa fa-inbox"></i></a>
                <a href="#" data-title="Settings"><i class="fa fa-cog"></i></a> --}}
        {{-- <div id="sidenav-header">
                <a href="#" id="profile-link">TAKUMI</a>
            </div> --}}

        <ul id="main-nav">
            <div class="navbar-brand navbar-brand-autodark">
                <div>
                    <img style="padding: 5px" src="{{ asset('img/logo_Takumi.png') }}" width=100% height="80"
                        alt="Tabler" />
                </div>
                <li class="active">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fa fa-tachometer"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-check-square-o"></i>
                        Đăng bài
                    </a>
                </li>
                <li>
                    <a href="{{ route('list-blog') }}">
                        <i class="fa fa-user"></i>
                        Bài viết
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-sign-out"></i>
                        <span>Log out</span>
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                {{-- <li>
                    <a href="#">
                        <i class="fa fa-calendar"></i>
                        Calendar
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-life-ring"></i>
                        FAQs
                    </a>
                </li> --}}
        </ul>
    </nav>

    {{-- <div id="header_logo">
        <a href="#">Logo</a>
      </div> --}}
    </nav>

