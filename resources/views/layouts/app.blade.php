<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">

    {{-- CDN Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- icon --}}
    <script src="https://unpkg.com/feather-icons"></script>

    {{-- CSS Internal --}}
    <style>
        @font-face {
            font-family: 'Montserrat Light';
            font-style: normal;
            font-weight: bold;
            src: local('Montserrat'), url('assets/font/Montserrat-Light.ttf');
        }

        @font-face {
            font-family: 'Montserrat Medium';
            font-style: normal;
            font-weight: normal;
            src: url('assets/font/Montserrat-Medium.ttf');
        }

        @font-face {
            font-family: 'Montserrat Bold';
            font-style: normal;
            font-weight: normal;
            src: url('assets/font/Montserrat-Bold.ttf');
        }

        @font-face {
            font-family: 'Montserrat ExtraBold';
            font-style: normal;
            font-weight: normal;
            src: url('assets/font/Montserrat-ExtraBold.ttf');
        }
        body {
            background-color: #FFF9E1;
        }

        .footer-container {
            color: #fff;
            background-color: #2c56a7;
        }

        .logo-footer {
            max-width: 100%;
            max-height: 100%;
            display: block;
            /* remove extra space below image */
        }

        .nav-link,
        .nav-link:focus {
            font-family: 'Montserrat Bold';
            font-size: 18px;
            color: #ffffff;
        }

        .nav-link:hover {
            color: #ffe2b4;
        }

        .nav-link::after{
            content:'';
            display:block;
            padding-bottom: 0.2rem;
            border-bottom: 0.15rem solid #ffe2b4;
            transform: scaleX(0);
            transition: 200ms;
        }

        .nav-link:hover::after{
            transform: scaleX(0.5);
        }

        #navRegister {
            font-family: 'Montserrat Bold';
            color: #fff;
            background:#76453B;
            border-radius:10px;
            margin:0 20px;
        }

        #navRegister:hover {
            box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.3);
            -webkit-transform: scale(1.05);
        }

        .sosmed {
            width: auto;
            height: 100%;
            max-height: 50px;
        }

        nav{
            position:fixed;
            background-color: #e3ab4b; 
            width:100%;
            top:0;
        }

        #hamburger-menu{
            display: none;
        }

        .navbar-extra{
            visibility: hidden;
        }

        /* Sidebar hidden by default */
        .sidebar {
            background-color: #ffe2b4;
            padding-top: 10px; /* Adjust padding as necessary */
        }

        /* Links inside the sidebar */
        .sidebar a {
            padding: 15px 20px;
            text-decoration: none;
            font-size: 20px; /* Slightly smaller font size */
            color: #fff;
            display: block;
            transition: 0.3s;
        }

        /* Change hover color */
        .sidebar a:hover {
            color: #76453B;
        }

        /* Media query to hide navbar items and show the hamburger menu */
        @media (max-width: 900px) {
            html {
                font-size: 80%;
            }

            .navbar {
                background: #ffe2b4; /* Ensure navbar background matches */
            }

            .navbar-nav,
            #navRegister {
                display: none !important;
            }

            #hamburger-menu {
                display: block !important;
                color: #D3D3D3;
                margin: 0 25px;
            }

            /* Show the sidebar when hamburger menu is clicked */
            #sidebar {
                display: block; /* Show sidebar */
            }

            .sidebar {
                display: block; /* Make sidebar block when in mobile */
                width: 100%; /* Full width of the screen */
            }

            /* Initially hide the sidebar */
            .sidebar.d-none {
                display: none; /* Hide the sidebar when not active */
            }
        }
    </style>

    {{-- CSS Tambahan Internal --}}
    @yield('css')
</head>

<body>
    {{-- NavBar --}}
    <nav>
        <div class="container-fluid d-flex align-items-center justify-content-between">
            {{-- Logo IG --}}
            <a class="navbar-brand" href="#" style="margin:0 50px;">
                <img src="{{ asset('assets') }}/logo/Logo_IG32.png" alt="Logo IGXXXII" style="max-height: 75px">
            </a>

            {{-- Menus --}}
            <div class="navbar d-flex align-items-center gap-3 d-none d-lg-flex">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">HOME</a>
                <a class="nav-link active" aria-current="page" href="{{ route('whatsig') }}">WHAT'S IG31?</a>
                <a class="nav-link active" aria-current="page" href="{{ route('announcement') }}">ANNOUNCEMENTS</a>
                <a class="nav-link active" aria-current="page" href="{{ route('faq') }}">FAQ</a>
                <a class="nav-link active" aria-current="page" href="{{ route('gallery') }}">GALLERY</a>
            </div>

            {{-- Buttons --}}
            <a class="btn btn-outline d-none d-lg-flex" id="navRegister" href="{{ route('register') }}">REGISTER NOW</a>

            {{-- Hamburger Menu --}}
            <a href="#" id="hamburger-menu" class="d-lg-none">
                <i data-feather="menu"></i>
            </a>
        </div>
    </nav>

    {{-- Sidebar --}}
    <div id="sidebar" class="sidebar d-none">
        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">HOME</a>
        <a class="nav-link active" aria-current="page" href="{{ route('whatsig') }}">WHAT'S IG31?</a>
        <a class="nav-link active" aria-current="page" href="{{ route('announcement') }}">ANNOUNCEMENTS</a>
        <a class="nav-link active" aria-current="page" href="{{ route('faq') }}">FAQ</a>
        <a class="nav-link active" aria-current="page" href="{{ route('gallery') }}">GALLERY</a>
    </div>



    {{-- Body --}}
    <div class="container-fluid p-0">
        @yield('content')
    </div>

    {{-- Footer --}}
    <div class="footer-container px-5 pt-5 pb-4">
        <footer class="row d-flex flex-wrap justify-content-between my-2">
            {{-- Event By --}}
            <div class="col-md-4">
                <h4>EVENT BY:</h4>
                <div class="row">
                    {{-- Logo Ubaya --}}
                    <div class="col-12 d-flex flex-wrap align-items-center">
                        <img class="logo-footer mt-3" src="{{ asset('assets') }}/logo/Logo_Ubaya.png"
                            style="max-height: 150px; margin-left:-20px">
                    </div>
                    {{-- Logo KSM TI --}}
                    <div class="col-3 d-flex flex-wrap align-items-center">
                        <img class="logo-footer my-3 me-3" src="{{ asset('assets') }}/logo/Logo_TI.png"
                            style="max-height: 100px;">
                    </div>
                    {{-- Logo IG --}}
                    <div class="col-7 d-flex flex-wrap align-items-center">
                        <img class="logo-footer my-3 me-3" src="{{ asset('assets') }}/logo/IG_Logo.png"
                            style="max-height: 60px;">
                    </div>
                </div>
            </div>

            {{-- Menus --}}
            <div class="col-md-4">
                <h4>MENUS</h4>
                <div class="row mt-3">
                    <div class="col-lg-6 col-sm-8 my-4">
                        <ul class="pages d-flex justify-content-between">
                            <li>
                                <a href="{{ url('/') }}">HOME</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-8 my-4">
                        <ul class="pages d-flex justify-content-between">
                            <li class="me-5">
                                <a href="{{ url('/announcement') }}">ANNOUNCEMENTS</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-8 my-4">
                        <ul class="pages d-flex justify-content-between">
                            <li>
                                <a href="{{ url('/whatsig') }}">WHAT'S IG31?</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-8 my-4">
                        <ul class="pages d-flex justify-content-between">
                            <li class="me-5">
                                <a href="{{ url('/gallery') }}">GALLERY</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-8 my-4">
                        <ul class="pages d-flex justify-content-between">
                            <li class="me-5">
                                <a href="{{ url('/faq') }}">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Recent Post --}}
            <div class="col-md-4">
                <h4>RECENT POST</h4> 
                <div class="row mt-3"> 
                    {{-- Gambar Maskot --}}
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <img class="logo-footer my-3 me-3" src="{{ asset('assets') }}/img/Footer_Maskot.png"
                            style="max-height: 120px;">
                    </div> 
                    {{-- Pengumuman --}}
                    <div class="col-8 d-flex flex-wrap justify-content-start align-items-center">
                        <h3>Industrial Games</h3>
                        <p>Industrial Games is a competition held by Industrial Engineering of University of Surabaya.</p>

                        <p><i>01 July 2023 <span style="color:#D3D3D3; font-weight:100">23:59 PM</span></i></p>
                    </div> 
                </div> 

                {{-- Social Media --}}
                <h4 class="">SOCIAL MEDIA</h4>
                <div class="row mt-3 d-flex justify-content-beetween align-items-center sosmed-row">
                    {{-- Email --}}
                    <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                        <div class="sosmed-container p-3"><a target="_blank" rel="noopener noreferrer"
                                href="mailto: industrialgames.ubaya@gmail.com"><img class="sosmed"
                                    src="{{ asset('assets/icon/gmail.png') }}" alt=""></a></div>
                    </div>
                    {{-- Twitter --}}
                    <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                        <div class="sosmed-container p-3"><a target="_blank" rel="noopener noreferrer"
                                href="https://twitter.com/ig_ubaya"><img class="sosmed"
                                    src="{{ asset('assets/icon/twitter.png') }}" alt=""></a></div>
                    </div>
                    {{-- Facebook --}}
                    <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                        <div class="sosmed-container p-3"><a target="_blank" rel="noopener noreferrer"
                                href="https://www.facebook.com/igubaya"><img class="sosmed"
                                    src="{{ asset('assets/icon/facebook.png') }}" alt=""></a></div>
                    </div>
                    {{-- Instagram --}}
                    <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                        <div class="sosmed-container p-3"><a target="_blank" rel="noopener noreferrer"
                                href="https://www.instagram.com/ig_ubaya"><img class="sosmed"
                                    src="{{ asset('assets/icon/instagram.png') }}" alt=""></a></div>
                    </div>
                    {{-- Line --}}
                    <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                        <div class="sosmed-container p-3"><a target="_blank" rel="noopener noreferrer"
                                href="https://line.me/ti/p/@257saktt"><img class="sosmed"
                                    src="{{ asset('assets/icon/line.png') }}" alt=""></a></div>
                    </div>
                    {{-- Tiktok --}}
                    <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                        <div class="sosmed-container p-3"><a target="_blank" rel="noopener noreferrer"
                                href="https://www.tiktok.com/@ig_ubaya"><img class="sosmed"
                                    src="{{ asset('assets/icon/tiktok.png') }}" alt=""></a></div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                {{-- Garis Pembatas --}}
                <div class="col-12 my-2 d-flex justify-content-center">
                    <div style="background-color: #FFFFF7; height:2.5px; width:100%"></div>
                    <br>
                </div>
            </div>
        </footer>
    </div>

    {{-- CDN Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- feather icon --}}
    <script>
        feather.replace();
    </script>

    {{--SIDE BAR--}}
    <script>
        document.getElementById('hamburger-menu').onclick = function () {
            const sidebar = document.getElementById('sidebar');
            // Toggle the class to show or hide the sidebar
            if (sidebar.classList.contains('d-none')) {
                sidebar.classList.remove('d-none');
            } else {
                sidebar.classList.add('d-none');
            }
        };
    </script>
</body>

</html>