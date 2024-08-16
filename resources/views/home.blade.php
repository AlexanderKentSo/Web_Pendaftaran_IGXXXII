@extends('layouts.app')

@section('title', 'Industrial Games 32')

@section('css')
    <style>
        @import url('https://fonts.cdnfonts.com/css/antique-stories');
        @import url(https://db.onlinewebfonts.com/c/51365148ec9981c18941b8596e6f88f5?family=Pragmatica+Medium);

        .text-main{
            font-family: "ANTIQUE STORIES", sans-serif;
        }
        .text-secondary{
            font-family:"Pragmatica Medium", sans-serif;
        }

        body {
            background: url("/assets/img/Home/Group.png") no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            margin: 0px;
            width: 100%;
        }

        h2 {
            font-family: 'Montserrat Bold';
        }

        h3,
        h4 {
            font-family: 'Montserrat Medium';
        }

        p {
            font-family: 'Montserrat Light';
        }

        .fix-image {
            max-width: 100%;
            max-height: 100%;
            display: block;
            transition: all 0.2s ease;
        }

        .fix-image:hover {
            -webkit-transform: scale(1.05);
        }

        .text-red {
            color: #ea435e;
        }

        .text-black {
            color: black;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .text-thin {
            color: #2C56A7;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .spacer {
            height: 100px;
            width: auto;
        }

        .spacer-1 {
            height: 100px;
            width: auto;
        }

        .container-info {
            transition: all 0.2s ease;
            background-color: #faf0dc;
            border-radius: 24px;
        }

        .container-info:hover {
            -webkit-transform: scale(1.05);
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08)
        }


        .button-regis {
            background: transparent;
            background: black;
            color: white;
            border-radius: 1rem;
            box-sizing: border-box;
            cursor: pointer;
            display: inline-block;
            font-size: 1.1rem;
            font-weight: 600;
            line-height: 1;
            padding: 1rem 1.6rem;
            text-align: center;
            text-decoration: none #0d172a solid;
            text-decoration-thickness: auto;
            transition: all .1s cubic-bezier(.4, 0, .2, 1);
            box-shadow: 0px 1px 2px rgba(166, 175, 195, 0.25);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        /* .button-regis:hover {
                                                                                                                                                    background-color: white;
                                                                                                                                                    color: black;
                                                                                                                                                } */

        .spacer-2 {
            margin-right: -30px;
            margin-left: -30px;
        }

        .juara-items {
            flex-grow: 1;
            flex-basis: 1020px;
        }

        .bg-text {
            border-radius: 20px;
            padding: 20px;
            max-width: 500px;
            transition: all 0.2s ease;
            background: #c3e2f6;
        }

        @media (min-width: 768px) {
            .button-regis {
                font-size: 1.125rem;
                padding: 1rem 2rem;
            }
        }

        @media (max-width: 768px) {
            body {
                background: url("/assets/img/Home/Group.png") no-repeat center bottom;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: auto;
            }

            .spacer {
                height: 100px;
            }

            .spacer-1 {
                height: 70px;
                width: auto;
            }

            .spacer-2 {
                margin-right: 0px;
                margin-left: 0px;
                height: 30px;
                width: auto;
            }

            .spacer-3 {
                height: 100px;
            }

            .container-1 {
                padding: 0px !important;
                margin: 0px !important;
            }

            .poster {
                max-height: 230px !important;
            }

            .timeline {
                max-height: 350px !important;
            }

            .maskot {
                max-height: 300px !important;
            }

            .prize {
                max-height: 230px !important;
            }

            .headline {
                max-height: 200px !important;
            }

            .hiasan {
                margin-top: -10%;
                margin-left: 75%;
                width: 30%;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container">
        {{-- Logo IG --}}
        <div class="row my-5">
            <div class="col-12 mt-5 d-flex flex-wrap justify-content-center">
                <img class="fix-image headline mt-4" src="{{ asset('assets') }}/logo/Logo_IG32.png" style="max-height: 600px;">
            </div>
        </div>
        {{-- End Of Logo IG --}}
        <div class="row-full text-secondary">

            {{-- Prize dan Maskot --}}
            <div class="row my-10 mx-0" style="background: #d09962; border-radius: 30px;">
                <div class="col-xl-7 col-sm-12 my-4 d-flex flex-column justify-content-start">
                    <div class="d-flex align-items-center">
                        <h3 class="ms-5 text-black">Win a total of</h3>
                        <div class=" mx-3 mb-2" style="background-color: black; height: 5px; width: 25%;">
                        </div>
                    </div>
                    <h2 class="mx-5 text-black" style = "font-size:40px;">IDR 0000 MILLION</h2>
                    <h3 class="mx-5 text-black">Worth of prizes</h3>
                    <div class="mx-5 mt-auto">
                        <h4 style="color:#fff;">*REGISTER YOUR TEAM NOW AND</h4>
                        <div class = "d-flex flex-wrap">
                            <h4 style = "color:#fff;">BE A PART OF &nbsp;</h4>
                            <h4 class = "ml-1"style="color:#CB553B;">INDUSTRIAL GAMES 2024!!!</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-sm-12 d-flex justify-content-end align-items-end p-0">
                    <img class="fix-image maskot" src="{{ asset('assets') }}/img/Home/Maskot happy 1.png"
                        style="max-height: 400px; width: auto;">
                </div>
            </div>


            {{-- End Of Prize dan Maskot --}}

            {{-- Timeline --}}
            <div class="col mt-5">
                <div class="row d-flex flex-wrap">
                    <div class="col-8">
                        <img class = "img-fluid" src="{{ asset('assets') }}/img/Home/map timeline.png" alt="">
                    </div>
                    <div class="col-4 d-flex flex-column justify-content-start align-items-end mb-3">
                        {{--    <div style="background-color: black; height:2.5px; width:50%"></div> --}}
                        <h1 class="ms-5 text-black">TIMELINE</h1>
                        <h1 class="ms-5 text-black">INDUSTRIAL</h1>
                        <h1 class="ms-5 text-black">GAMES</h1>
                    </div>
                </div>
                <div class="row-full">

                    <div class="col-12 d-flex flex-wrap justify-content-start align-items-center mb-3 mt-5">
                        <h1 class="me-5 text-black">INFO IG 32</h1>
                    </div>
                    <div class="row-12 d-flex flex-wrap p-0"
                        style = "background-color:#f0d193;border-radius:20px 20px 0px 0px;">
                        <div class="col-12 col-lg-3 mt-5 mt-lg-0 d-flex justify-content-center align-items-center">
                            <div style = "background-color:black;height:200px;">
                                <p style="color:white;">Placeholder Poster</p>
                            </div>
                            {{--     <div><img class="fix-image poster" src="{{ asset('assets') }}/img/Poster.png"
                                style="max-height: 700px;"></div> --}}
                        </div>
                        {{-- Desktop view --}}
                        <div class="col-12 col-lg-5 mt-5 d-none d-md-block pb-5">
                            <h2 class="text-black">PENDAFTARAN BATCH 1<br>SUDAH DIBUKA !</h2>
                            <h6 style = "color:black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat eum
                                nemo a repudiandae et magni doloremque error laborum tempora nobis?</h6>
                            <div class = "d-flex justify-content-center justify-content-lg-start">
                                <button class="button-regis my-2" role="button"
                                    onclick="location.href='{{ route('register') }}'">REGISTER NOW</button>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 d-flex justify-content-end align-items-end d-none d-md-flex">
                            <img class="fix-image mt-5 mb-3"
                                src="{{ asset('assets') }}/img/Home/Emote marah 1.png" alt=""
                                style = "max-height: 200px;opacity: 0.5;">
                        </div>


                        {{-- Mobile view --}}
                        <div class = "d-md-none">
                            <div class="col-12 col-lg-5 mt-5">
                                <h2 class="text-black mx-5">PENDAFTARAN BATCH 1 SUDAH DIBUKA !</h2>
                                <h6 class= "text-black mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Placeat eum
                                    nemo a repudiandae et magni doloremque error laborum tempora nobis?</h6>
                                <div class = "d-flex justify-content-center justify-content-lg-start">
                                    <button class="button-regis my-2" role="button"
                                        onclick="location.href='{{ route('register') }}'">REGISTER NOW</button>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 d-flex justify-content-end align-items-end">
                                <img class="fix-image mt-5 mb-3" src="{{ asset('assets') }}/img/Home/Emote marah 1.png"
                                    alt="" style = "max-height: 200px;opacity: 0.5;">
                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class = "mt-5 mb-5" style="background-color: #CB553B; height:9px; width:100%"></div>
@endsection
