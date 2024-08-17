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
            color: #d2af3a;
            background-color: #fff9e1;
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
            font-size: 15px;
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
            z-index: 99;
        }

        #hamburger-menu{
            display: none;
        }

        .navbar-extra{
            display: none;
        }

        .menu{
            margin-bottom: 25px;
        }

        .menu a{
            text-decoration: none;
            font-family: 'Montserrat light';
            color: #D2AF3A;
            margin: 10px 0 10px 0;
        }

        .event-logo{
            height: 150px;
        }

        /* Garis */
        .garis {
            height: 6px;
            background-color: #CB553B;
        }

        /* Sponsor */
        .sponsor-list div.sponsor {
            border: 1px solid #D2AF3A;
            height: 150px;
        }

        /* Sidebar hidden by default */
        .sidebar {
            background-color: #ffe2b4;
            padding-top: 10px; /* Adjust padding as necessary */
            display: none;
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
        @media (max-width: 1050px) {
            html {
                font-size: 70%;
            }

            .nav-link,
            .nav-link:focus {
                display: none;
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
                z-index: 99;
                margin-top: 40px;
            }

            /* Ensure sidebar links are visible even with the .nav-link class */
            .sidebar a.nav-link {
                display: block !important;
                color: #76453B;
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
                <img src="{{ asset('assets') }}/logo/logo_IG32.png" alt="Logo IGXXXII" style="max-height: 75px" draggable="false">
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
            <a class="btn btn-outline d-none d-lg-flex" id="navRegister" href="https://bit.ly/PendaftaranIGXXX112024">REGISTER NOW</a>

            {{-- Hamburger Menu --}}
            <a href="#" id="hamburger-menu" class="d-lg-none">
                <i data-feather="menu"></i>
            </a>
        </div>
    </nav>

    {{-- Alt NavBar --}}
    <div id="sidebar" class="sidebar d-none" style="position:fixed;">
        <a href="{{ route('home') }}">HOME</a>
        <a href="{{ route('whatsig') }}">WHAT'S IG31?</a>
        <a href="{{ route('announcement') }}">ANNOUNCEMENTS</a>
        <a href="{{ route('faq') }}">FAQ</a>
        <a href="{{ route('gallery') }}">GALLERY</a>
    </div>
    



    {{-- Body --}}
    <div class="container-fluid p-0" style="margin-top:30px;">
        @yield('content')
    </div>

    {{-- Footer --}} 
    {{-- <div class="garis w-100 mt-5"></div> --}}
    <div class="footer-container px-5 pb-4">
        <footer class="row d-flex flex-wrap justify-content-between my-2">
            
            {{-- Sponsor --}}
            {{-- <div class="sponsor-section mt-5 mx-2 mx-md-5 px-0 px-md-5 ">
                <div class="text-center py-md-5">
                    <h2 class="fw-bold" style="color: #D2AF3A">Sponsored by:</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 sponsor-list">
                    @for($i=1; $i <=8; $i++)
                    <div class="col pb-5 px-0 px-md-5">
                        <div class="sponsor"></div>
                    </div>
                    @endfor
                </div>
            </div> --}}
            {{-- Sponsor --}}

            <div class="garis w-100" style="margin:20px 0;"></div>
            {{-- Event By --}}
            <div class="col-md-4">
                <h4>EVENT BY:</h4>
                <div class="row">
                    {{-- Logo Ubaya --}}
                    <div class="col-12 d-flex flex-wrap align-items-center event-logo">
                        <img class="logo-footer mt-3" src="{{ asset('assets') }}/logo/Logo_Ubaya.png">
                    </div>
                    {{-- Logo KSM TI --}}
                    <div class="col-3 d-flex flex-wrap align-items-center event-logo">
                        <img class="logo-footer my-3 me-3" src="{{ asset('assets') }}/logo/Logo_TI.png" style="transform: scale(1.5); margin:20px 0 0 20px;">
                    </div>
                    {{-- Logo IG --}}
                    <div class="col-7 d-flex flex-wrap align-items-center event-logo">
                        <img class="logo-footer my-3 me-3" src="{{ asset('assets') }}/logo/IG_Logo.png">
                    </div>
                </div>
            </div>

            {{-- Menus --}}
            <div class="col-md-4 menu">
                <h4>MENUS</h4>
                <div class="row mt-3 d-flex">
                    <a href="{{ url('/') }}">HOME</a>
                    <a href="{{ url('/announcement') }}">ANNOUNCEMENTS</a>
                    <a href="{{ url('/whatsig') }}">WHAT'S IG31?</a>
                    <a href="{{ url('/gallery') }}">GALLERY</a>
                    <a href="{{ url('/faq') }}">FAQ</a>
                </div>
            </div>

            {{-- Social Media --}}
            <div class="col-md-4">
                <h4 class="">SOCIAL MEDIA</h4>
                <div class="row mt-3 d-flex justify-content-beetween align-items-center sosmed-row">
                    {{-- Instagram --}}
                    <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                        <div class="sosmed-container p-3"><a target="_blank" rel="noopener noreferrer"
                                href="https://www.instagram.com/ig_ubaya"><img class="sosmed"
                                    src="{{ asset('assets') }}/icon/Instagram.png" alt=""></a></div>
                    </div>
                    {{-- Tiktok --}}
                    <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                        <div class="sosmed-container p-3"><a target="_blank" rel="noopener noreferrer"
                                href="https://www.tiktok.com/@ig_ubaya"><img class="sosmed"
                                    src="{{ asset('assets') }}/icon/Tiktok.png" alt=""></a></div>
                    </div>
                    {{-- youtube --}}
                    <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                        <div class="sosmed-container p-3"><a target="_blank" rel="noopener noreferrer"
                                href="https://www.youtube.com/@IndustrialGamesUBAYA"><img class="sosmed"
                                    src="{{ asset('assets') }}/icon/youtube.png" alt=""></a></div>
                    </div>
                    {{-- Facebook --}}
                    <div class="col-lg-2 col-sm-4 d-flex justify-content-center align-items-center">
                        <div class="sosmed-container p-3"><a target="_blank" rel="noopener noreferrer"
                                href="https://www.facebook.com/igubaya"><img class="sosmed"
                                    src="{{ asset('assets') }}/icon/Facebook.png" alt=""></a></div>
                    </div></div>
            </div>

            
            {{-- Garis Pembatas --}}
            <div class="row d-flex justify-content-center">
                <div class="col-12 my-2 d-flex justify-content-center">
                    <div style="background-color: #CB553B; height:2.5px; width:100%"></div>
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