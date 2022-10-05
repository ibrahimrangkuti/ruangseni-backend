<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>RuangSeni</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/bootstrap.min.css/') }}">
    {{-- <link rel="stylesheet" href="dashboard/assets/css/bootstrap.min.css"> --}}

    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css') }}">



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
                            <img alt="image" src="{{ asset('dashboard/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ibrahim Rangkuti</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profil
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="">RuangSeni</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">RS</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li><a class="nav-link" href=""><i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span></a>
                        <li><a class="nav-link" href=""><i class="fas fa-user"></i> <span>Tambah Postingan</span></a>
                        <li><a class="nav-link" href="../post/index.html"><i class="fas fa-th"></i> <span>Data
                                    Postingan</span></a>
                        <li><a class="nav-link" href="blank.html"><i class="fas fa-th"></i> <span>Data
                                    Kategori</span></a>
                        <li><a class="nav-link" href="blank.html"><i class="fas fa-calendar-alt"></i> <span>Data
                                    Event</span></a>
                        </li>
                        </li>
                    </ul>

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
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="{{ asset('dashboard/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profil
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
<<<<<<< HEAD

=======
>>>>>>> 68553694cb10c18a308acaa13f6d7737617a68b8
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
    <footer class="main-footer">
      <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval
          Azhar</a>
      </div>
      <div class="footer-right">
        2.3.0
      </div>
    </footer>
  </div>

<<<<<<< HEAD
  </div>
    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('dashboard/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('dashboard/node_modules/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('dashboard/node_modules/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('dashboard/node_modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('dashboard/node_modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('dashboard/node_modules/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('dashboard/node_modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('dashboard/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('dashboard/assets/js/page/index-0.js') }}"></script>
=======
=======
>>>>>>> 68553694cb10c18a308acaa13f6d7737617a68b8
  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('dashboard/assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('dashboard/node_modules/simpleweather/jquery.simpleWeather.min.js') }}"></script>
  <script src="{{ asset('dashboard/node_modules/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('dashboard/node_modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('dashboard/node_modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
  <script src="{{ asset('dashboard/node_modules/summernote/dist/summernote-bs4.js') }}"></script>
  <script src="{{ asset('dashboard/node_modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('dashboard/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('dashboard/assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('dashboard/assets/js/page/index-0.js') }}"></script>
</body>

</html>
