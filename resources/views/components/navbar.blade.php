<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav mt-3">
    <div class="container">

        <div class="site-navigation">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <a href="{{ route('home') }}" class="logo m-0 float-start">RuangSeni</a>
                </div>
                <div class="col-lg-6 d-none d-lg-inline-block text-center nav-center-wrap">
                    <ul class="js-clone-nav  text-center site-menu p-0 m-0">
                        <li class="{{ $title === "Home" ? 'active' : '' }}"><a href="{{ route('home') }}">Beranda</a></li>
                        <li class="{{ $title === "Karya" ? 'active' : '' }}"><a href="{{ route('karya') }}">Karya</a></li>
                        <li class="{{ $title === "Event" ? 'active' : '' }}"><a href="{{ route('event') }}">Event</a></li>
                        <li class="{{ $title === "Leaderboard" ? 'active' : '' }}"><a href="{{ route('leaderboard') }}">Leaderboard</a></li>
                        @if (Auth::check())
                        <li class="{{ (request()->segment(1) == 'profile') ? 'active' : '' }}"><a href="{{ route('profile', Auth::user()->username) }}">My Profile</a></li>
                        @endif
                    </ul>
                </div>
                <div class="col-6 col-lg-3 text-lg-end">
                    <ul class="js-clone-nav d-none d-lg-inline-block text-end site-menu ">
                        @if (Auth::check())
                            @if (Auth::user()->role == 'siswa')
                                <li class="cta-button"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                            @else
                                <li class="cta-button"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            @endif
                        @else
                        <li class="cta-button"><a href="{{ route('login.index') }}">Login</a></li>
                        @endif
                    </ul>

                    <a href="#"
                        class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                        data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</nav>
