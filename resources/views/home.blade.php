@extends('layouts.app')

@section("title", "Industrial Games 31")

@section('css')
<style>
    body {
        background: url("/assets/background/background_home.png") no-repeat;  
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

    .text-blue {
        color: #2C56A7;
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
        border: 3px solid #2C56A7;
        border-radius: 1.5rem;
        box-sizing: border-box;
        color: #2C56A7;
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

    .button-regis:hover {
        background-color: #2C56A7;
        color: #fff;
    }

    .spacer-2 {
        margin-right: -30px;
        margin-left: -30px;
    }

    .juara-items{
        flex-grow:1;
        flex-basis:1020px;
    }

    .bg-text{
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
            background: url("/assets/background/background_home.png") no-repeat center bottom;
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

        .hiasan{
            margin-top:-10%; 
            margin-left:75%; 
            width:30%;
        }
    }
</style>
@endsection

@section('content')
<div class="container ">
    <div class="row-full">
    <div class="spacer"></div>
    {{-- Logo IG --}}
    <div class="row my-5">
        <div class="col-12 mt-3 d-flex flex-wrap justify-content-center">
            <img class="fix-image headline" src="{{ asset('assets') }}/logo/Logo Besar_Home.png"
                style="max-height: 600px;">
        </div>
    </div>
    {{-- End Of Logo IG --}}

    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>

    {{-- Prize dan Maskot --}}
    <div class="row my-10 mx-0" >
        <div class="col-xl-8 col-sm-12  my-4 d-flex flex-wrap justify-content-start">
            <img class="fix-image prize" src="{{ asset('assets') }}/img/Font_Home.png" style="max-height: 1000px;">
        </div>
        <div class="col-xl-4 col-sm-12 d-flex flex-wrap justify-content-center">
            <img class="fix-image maskot" src="{{ asset('assets') }}/img/Maskot_Home.png" style="max-height: 600px;">
        </div>
    </div>
    {{-- End Of Prize dan Maskot --}}

    {{-- Timeline --}}<div class="col mt-3">
    <div class="col-12 d-flex flex-wrap justify-content-end align-items-center mb-3 mt-5">
        <div style="background-color: #2C56A7; height:2.5px; width:50%"></div>
        <h2 class="ms-5 text-blue">TIMELINE</h2>
    </div>
    <div class="row-12 d-flex flex-wrap align-items-center justify-content-center">
        <div class="row align-items-center">
            <div class="col"> <!-- left side -->
                <div class="col text-end" style="margin-bottom: 150px;">
                    <img class="fix-image timeline" src="{{ asset('assets') }}/img/opreg.png" style="max-height: 60px; margin-left: 65px;">
                    <p class="text-blue">25 Juni - 28 Agustus 2023</p>
                </div>
                <div class="col text-end">
                    <img class="fix-image timeline" src="{{ asset('assets') }}/img/game_semifinal.png" style="max-height: 60px; margin-left: 75px;">
                    <p class="text-blue">9 September 2023</p>
                </div>
                <br><br><br><br>
            </div>
            <div class="col-lg-2 d-flex justify-content-center"> <!-- center side -->
                <img class="fix-image timeline" src="{{ asset('assets') }}/img/tali.png" style="max-height: 700px; margin-left: 25px;">
            </div>
            <div class="col text-start"> <!-- right side -->
                <div class="col text-start" style="margin-top: 150px; margin-bottom: 150px;">
                    <img class="fix-image timeline" src="{{ asset('assets') }}/img/opreg.png" style="max-height: 60px;">
                    <p class="text-blue">2 September 2023</p>
                </div>
                <!-- <div class="col text-start" style="margin-bottom: 70px;">
                    <img class="fix-image timeline" src="{{ asset('assets') }}/img/semifinal.png" style="max-height: 60px;">
                    <p class="text-blue">00 Month 2023</p>
                </div> -->
                <div class="col text-start">
                    <img class="fix-image timeline" src="{{ asset('assets') }}/img/final.png" style="max-height: 60px;">
                    <p class="text-blue">10 September 2023</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Of Timeline --}}

{{-- Info --}}
<div class="row">
    <div class="col-12 d-flex flex-wrap justify-content-start align-items-center mb-3 mt-5">
        <h2 class="me-5 text-blue">INFO</h2>
        <div style="background-color: #2C56A7; height:2.5px; width:50%"></div>
    </div>
    <div class="col-10 col-lg-4">
        <div><img class="fix-image poster" src="{{ asset('assets') }}/img/Poster.png" style="max-height: 700px;"></div>
    </div>
    <div class="col-12 col-lg-6">
        <h2 class="text-blue">PENDAFTARAN BATCH 1<br>SUDAH DIBUKA !</h2>
        {{-- Button --}}
        <button class="button-regis my-2" role="button" onclick="location.href='{{ route('register') }}'">REGISTER NOW</button>
        {{-- <div class="row">
            <h3 class="text-thin mt-4">See More Info</h3>
            <div class="col-md-6">
                <div class="bg-text">
                    <h4 class="text-blue">Lorem ipsum dolor sit.</h4>
                        <p class="text-blue"><i>00 Month 2022 <span style="color:#D3D3D3; font-weight:100">00:00
                                    PM</span></i></p>
                        <p class="text-blue mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem ipsum dolor
                            sit amet consectetur, adipisicing elit. Praesentium deserunt quo.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-text">
                    <h4 class="text-blue">Lorem ipsum dolor sit.</h4>
                    <p class="text-blue"><i>00 Month 2022 <span style="color:#D3D3D3; font-weight:100">00:00
                                PM</span></i></p>
                    <p class="text-blue mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem ipsum dolor
                        sit amet consectetur, adipisicing elit. Praesentium deserunt quo.</p>
                </div>
            </div>
        </div> --}}
    </div>
</div>

{{-- <div style="margin-top:3rem; font-family: Montserrat Thin; color: #2c56a7;">
    @include('layouts.sponsor')
</div> --}}
{{-- <div class="row spacing-bawah sponsor-section">
    <div class="sponsor-list"></div>
</div> --}}

{{-- <div style="height: 500px; width: auto"></div> --}}
{{--hiasan--}}

<div>
    <img class="hiasan" src="{{ asset('assets') }}/img/hiasan-home.png" alt="">
</div>
</div>
@endsection