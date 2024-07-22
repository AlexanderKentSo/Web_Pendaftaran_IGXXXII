@extends('layouts.app')

@section('title', 'Announcements')

@section('content')
    <Style>
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
            src: local('Montserrat'), url('assets/font/Montserrat-Medium.ttf');
        }

        @font-face {
            font-family: 'Montserrat Bold';
            font-style: normal;
            font-weight: normal;
            src: local('Montserrat'), url('assets/font/Montserrat-Bold.ttf');
        }
        .row {
            margin-right: 0;
            margin-left: 0;
        }

        .hr {
            opacity: 1;
        }

        .horizontal-lines:after {
            content: "";
            height: 5px;
            width: 500px;
            background: #2C56A7;
            display: inherit;
            position: absolute;
        }

        .horizontal-lines {
            position: relative;
        }

        .card {
            font-family: "Monteserrat", sans-serif;
            color: #2C56A7;
            letter-spacing: 0px;
            text-align: justify;
        }

        .card-body {
            transition: all 0.2s ease;
            border-radius: 3px;
        }

        .card-body:hover {
            -webkit-transform: scale(1.05);
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08)
        }

        .card-subtitle {
            color: #2C56A7;
        }

        .card-text {
            font-family: "Monteserrat Light", sans-serif;
        }

        .lighthouse {
            position: relative;
        }

        .image-lighthouse {
            position: absolute;
            bottom: 0;
            z-index: -1;
            transform: translateX(3rem);
            right: 0px;
        }
    </style>

    <body
        style="background: url('{{ asset('assets') }}/background/Background Announcement.png') top / cover no-repeat;background-attachment: fixed;">
        <div class="announcement-page pt-4 px-5">

            {{-- Announcement Title --}}
            <div class="row">
                <div class="col" style="max-width:500px;">
                    <h1 style="margin: 1rem; font-family: Montserrat Bold, sans-serif; color:#2C56A7;">ANNOUNCEMENTS</h1>
                </div>
                <div class="col md-auto">
                    <hr class="horizontal-lines"
                        style="height:5px;color:#2C56A7;opacity:1;background-color:rgba(255,255,255,0);top:50%;margin:0px;">
                    </hr>
                </div>
            </div>

            {{-- Announcement coloumn --}}
            <div class="row">
                <div class="col-md-6" style="height: auto;min-width: 65%;padding-left:1.5rem;">
                    <!----Announcement body---->
                    <div class="card"
                        style="border-style: none;background: rgba(255,255,255,0);padding-bottom:1rem;padding-top:1rem;">

                        <!----Announcement Card 1---->
                        <div class="card-body" style="background-color: #C3E2F6;margin: 1rem;padding:1.5rem;">
                            <h4 class="card-title" style="font-family: Montserrat Bold, sans-serif;">Pengumuman Terkait</h4>
                            <h6 class="card-subtitle mb-2" style="padding-bottom:10px;"> <!-- 00 Month 2022 / 00.00 PM --></h6>
                            <!----Annoucement Text---->
                            <p class="card-text">
                                <!--
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                -->
                            </p>
                        </div>
                        <!----End Annoucement Text---->
                        <!----End Announcement Card---->

                        <!----Announcement Card 1---->
                        <div class="card-body" style="background-color: #C3E2F6;margin: 1rem;padding:1.5rem;">
                            <h4 class="card-title" style="font-family: Montserrat Bold, sans-serif;">Pengumuman Terkait</h4>
                            <h6 class="card-subtitle mb-2" style="padding-bottom:10px;"><!-- 00 Month 2022 / 00.00 PM --></h6>
                            <!----Annoucement Text---->
                            <p class="card-text">
                                <!--
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                -->
                            </p>
                        </div>
                        <!----End Annoucement Text---->
                        <!----End Announcement Card---->

                        <!----Announcement Card 1---->
                        <div class="card-body" style="background-color: #C3E2F6;margin: 1rem;padding:1.5rem;">
                            <h4 class="card-title" style="font-family: Montserrat Bold, sans-serif;">Pengumuman Terkait</h4>
                            <h6 class="card-subtitle mb-2" style="padding-bottom:10px;"><!-- 00 Month 2022 / 00.00 PM --></h6>
                            <!----Annoucement Text---->
                            <p class="card-text">
                                <!--
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                -->
                            </p>
                        </div>
                        <!----End Annoucement Text---->
                        <!----End Announcement Card---->
                    </div>
                    <!----End Announcement Body---->
                </div>
            </div>

            {{-- Sponsor
            @include('layouts.sponsor')
            <div class="row spacing-bawah"></div> --}}

            {{-- Maskot --}}
            <div class="lighthouse">
                <img class="image-lighthouse" src="{{ asset('assets') }}/img/Lighthouse Announcement.png" />
            </div>
    </body>
@endsection
