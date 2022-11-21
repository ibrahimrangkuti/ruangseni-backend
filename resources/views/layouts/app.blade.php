<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Brygada+1918:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .form-control {
            border-radius: 6px;
        }

        .btn-kategori {
            padding: 16px 60px;
            color: #f17945;
            border-radius: 4px;
            border: 1px solid #f17945;
        }

        .btn-kategori:hover {
            background: #f17945;
            color: #fff;
        }

        .btn-active {
            background: #f17945;
            color: #fff;
        }

        @media (min-width: 768px) {
            .pilih-kategori {
                display: none;
            }

            .content-karya {
                margin-top: 60px;
            }
        }

        @media (max-width: 768px) {
            .btn-kategori {
                display: none;
            }
        }
    </style>

    <title>RuangSeni - {{ $title }}</title>
</head>

<body>

    @include('components.navbar')

    @yield('content')

    <div class="site-footer">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Tentang RuangSeni<span class="text-primary">.</span> </h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

                <div class="col-lg-2 ml-auto">
                    <div class="widget">
                        <h3>Links</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="{{ route('home') }}">Beranda</a></li>
                            <li><a href="{{ route('karya') }}">Karya</a></li>
                            <li><a href="{{ route('event') }}">Event</a></li>
                            <li><a href="{{ route('leaderboard') }}">Leaderboard</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

                <div class="col-lg-2 ml-auto">
                    <div class="widget">
                        <h3>Category</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="{{ route('category', 'puisi') }}">Puisi</a></li>
                            <li><a href="{{ route('category', 'video-animasi') }}">Video Animasi</a></li>
                            <li><a href="{{ route('category', 'seni-lukis') }}">Seni Lukis</a></li>
                            <li><a href="{{ route('category', 'cerpen') }}">Cerpen</a></li>
                            <li><a href="{{ route('category', 'pantun') }}">Pantun</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                </div> <!-- /.col-lg-3 -->

            </div> <!-- /.row -->

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p class="mb-0">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved.
                    </p>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.site-footer -->

        <!-- Preloader -->
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

        <script src="//cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
        <script src="{{ asset('assets/js/aos.js') }}"></script>
        <script src="{{ asset('assets/js/navbar.js') }}"></script>
        <script src="{{ asset('assets/js/counter.js') }}"></script>
        <script src="{{ asset('assets/js/rellax.js') }}"></script>
        <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
        <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.ckedit').ckeditor()
            })
        </script>
        @stack('script')
</body>

</html>
