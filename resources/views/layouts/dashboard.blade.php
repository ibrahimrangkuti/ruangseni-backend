<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>RuangSeni</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">



    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('dashboard/node_modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/node_modules/weathericons/css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/node_modules/weathericons/css/weather-icons-wind.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/node_modules/summernote/dist/summernote-bs4.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/components.css') }}">
</head>

<body>
    @include('sweetalert::alert')
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset(Auth::user()->avatar) }}" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('home') }}" class="dropdown-item has-icon">
                                <i class="fa fa-home"></i> Home
                            </a>
                            <a href="{{ route('user.profile') }}" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profil
                            </a>
                            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            @include('components.sidebar')
        </div>

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        {{-- <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval
                    Azhar</a>
            </div>
            <div class="footer-right">
                2.3.0
            </div>
        </footer> --}}
    </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('dashboard/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('dashboard/node_modules/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('dashboard/node_modules/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('dashboard/node_modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('dashboard/node_modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('dashboard/node_modules/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('dashboard/node_modules/chocolat/dist/js/jquery.chocolat.min.jsc') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('dashboard/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('dashboard/assets/js/page/index-0.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Ckeditor -->
    <script src="//cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            $('.ckedit').ckeditor()
        })
    </script>
    @stack('script')
</body>

</html>
