@extends('layouts.app')

@section("title", "What's IG 30")

@section('css')
<style>
    @font-face {
        src: local('Montserrat'), url('assets/font/Montserrat/Montserrat-VariableFont_wght.ttf') format('truetype');
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: normal;
    }
    form {
        display: block;
        margin-top: 0em;
        margin-block-end: 0em;
    }
    .whatsig-page{
        background-size:cover;
        color:#2c56a7;
        font-family:"Montserrat Bold";
        letter-spacing:0px;
    }
    .whatsig-definition{
        padding-bottom:20px;
        font-family:"Montserrat Light";
    }
    .maskot{
        width:300px;    
    }
    .btn-register {
    background: rgba(255,255,255,0);
    border: 2px solid #2c56a7;
    transition: all 0.2s ease;
    color: #2c56a7;
    font-family: 'Montserrat Medium';
    font-size: 18px;
    letter-spacing: 1px;
    text-decoration: none;
    }

    .btn-register:hover {
        -webkit-transform:scale(1.05);
        box-shadow: 0 6px 10px rgba(0,0,0,.08);
    }

    .spacing{
        height:200px;
    }

    .spacing-bawah{
        height:50px;
    }

    .horizontal-line {
        border: 2px solid #2c56a7;
        opacity: 1;
    }

    .prize-text {
        font-family:"Montserrat";
        font-size: 2rem;
        color: #2c56a7;
        font-weight: 700;
        letter-spacing: 3px;
    }

    .col-6{
        background-color:#faf0dc;
    }

    .hiasan{
        margin-top:-10%; 
        margin-left:80%; 
        width:20%;
    }

    .juara-container{
        display:flex;
        flex-wrap:wrap;
    }

    .juara-items{
        flex-grow:1;
        flex-basis:1020px;
    }

    /* media query (responsive) */

    /* tablet */
    @media(max-width:717px){
        html{
            font-size:75%;
        }

        .hiasan{
            margin-top:-10%; 
            margin-left:75%; 
            width:30%;
        }
    }

    /* mobile */
    @media(max-width:450px){
        html{
            font-size:62.5%;
        }
        
        .hiasan{
            margin-top:-10%; 
            margin-left:75%; 
            width:35%;
        }
    }

</style>

@section('content')
<body style="background: url('{{ asset('assets') }}/background/Background_WhatIsIG31.png') top / cover no-repeat">
   <div class="whatsig-page pt-4 px-5">

        {{--Whats'IG definition--}}
        <div class="row mt-5 whatsig-definition" >
            {{--Maskot--}}
            <div class="col-3" style="width: fit-content;">
                <img class="maskot" src="{{ asset('assets') }}/img/Maskot_Lingkaran_WhatIsIG31.png" alt="">
            </div>

            <div class="col-5" style="margin-left:50px;">
                {{--What's IG Title--}}
                <div class="row md-5">
                    <div clsss="col" style="width:fit-content; padding:3px; font-family:Montserrat Light; font-size:32px;">What is </div>
                    <div clsss="col" style="width:fit-content; padding:3px; font-family:Montserrat Medium; font-weight:Bolder; font-size:32px;">INDUSTRIAL GAMES </div>
                    <div clsss="col" style="width:fit-content; padding:3px; font-size:32px;font-family:Montserrat Medium;">?</div>
                </div>

                {{--What's IG text--}}
                <div class="row">
                    <p style="padding:0px;">
                        Industrial Games adalah kompetisi dalam bidang Teknik Industri yang diadakan Program Studi Teknik Industri Universitas Surabaya untuk siswa-i SMA/SMK/Sederajat di seluruh Indonesia. Industrial Games dikemas dalam bentuk games di mana peserta dapat bermain sambil belajar dalam merancang, mengatur, dan mengaplikasikan sistem industri yang memuat manusia, mesin, material, lingkungan, dan manajemen. Sebagai lomba terbesar dan tertua yang sudah berjalan selama 30 tahun di Indonesia, Industrial Games mengenalkan industri manufaktur, industri jasa, dan industri digital yang sekarang sudah diterapkan di seluruh dunia. Tidak hanya itu, Industrial Games memberikan kesempatan kepada peserta dalam menambah pengalaman, relasi, dan pengetahuan lebih dalam terkait Teknik Industri.
                    </p>
                </div>
                
                {{--Register Now Button--}}
                <a href="{{ route('register') }}" target="_blank">
                    <button class="btn-register rounded-pill px-4 py-2 mt-4">REGISTER NOW</button>
                </a>
            </div>
        </div>

        {{--Prize--}}
        {{-- Register title with horizontal line --}}
        <div class="row md-5 mx-5">
            <div class="col-5 offset-7 row align-items-center">
                <div class="col-7"><hr class="horizontal-line"/></div>
                <div class="col-5 prize-text" style="text-align:right; font-family:Montserrat Bold;">PRIZE</div>
            </div>
        </div>

        {{--Juara--}}
        <div class="juara-container row mt-5 mx-3 px-3 py-5" style="background-color:#7dc1e3; ">
            <div class="row justify-content-center" style="text-align:center;">
                {{--Juara 1--}}
                <div class="col sm-5 juara-items" style="item-align:center; padding:30px;">
                    <div class="row d-flex flex-wrap justify-content-center">
                        <div style="background-color:#ffffff;border-radius:50%;width:200px;height:200px;margin-bottom:20px;padding-top:25px;">
                            <img src="{{ asset('assets/img/Juara 1.png') }}" style="width:180px;height:auto;">
                        </div>
                    </div>
                    <div class="row d-flex flex-wrap justify-content-center" style="font-family:'Montserrat Bold';font-weight:Bolder; font-size:26px; padding:10px;">
                        JUARA 1
                    </div>
                    <div class="row" style="font-size:18px;">
                        <ul style="list-style-type:none; color:#000; font-family:Montserrat Light;">
                            <li>Tabungan Rp6.000.000</li>
                            <li>Piala Bergilir Gubernur Jawa Timur</li>
                            <li>100% USP dan UPP Semester 1 (jika masuk Teknik Industri UBAYA)</li>
                            <li>Piala Tetap Rektor Ubaya</li>
                        </ul>
                    </div>
                </div>

                {{--Juara 2--}}
                <div class="col sm-5 order-first juara-items" style="item-align:center;padding:30px;">
                    <div class="row d-flex flex-wrap justify-content-center" >
                        <div style="background-color:#ffffff;border-radius:50%;width:200px;height:200px;margin-bottom:20px;padding-top:25px;">
                            <img src="{{ asset('assets/img/Juara 2.png') }}" style="width:180px;height:auto;">
                        </div>
                    </div>
                    <div class="row d-flex flex-wrap justify-content-center" style="font-family:'Montserrat Bold';font-weight:Bolder; font-size:26px; padding:10px;">
                        JUARA 2
                    </div>
                    <div class="row " style="font-size:18px;">
                    <ul style="list-style-type:none; color:#000; font-family:Montserrat Light;">
                        <li>Tabungan Rp4.000.000</li>
                        <li>75% USP dan UPP Semester 1 (jika masuk Teknik Industri UBAYA)</li>
                        <li>Piala Tetap Rektor Ubaya</li>
                    </ul>
                    </div>
                </div>

                {{--Juara 3--}}
                <div class="col sm-5 order-last juara-items" style="item-align:center;padding:30px;">
                    <div class="row d-flex flex-wrap justify-content-center">
                        <div style="background-color:#ffffff;border-radius:50%;width:200px;height:200px;margin-bottom:20px;padding-top:25px;">
                            <img src="{{ asset('assets/img/Juara 3.png') }}" style="width:180px;height:auto;">
                        </div>
                    </div>
                    <div class="row d-flex flex-wrap justify-content-center" style="font-family:'Montserrat Bold';font-weight:Bolder; font-size:26px; padding:10px;">
                        JUARA 3
                    </div>
                    <div class="row" style="font-size:18px;">
                    <ul style="list-style-type:none; color:#000; font-family:Montserrat Light;">
                        <li>Tabungan Rp2.500.000</li>
                        <li>50% USP dan UPP Semester 1 (jika masuk Teknik Industri UBAYA)</li>
                        <li>Piala Tetap Rektor Ubaya</li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        
        {{--hiasan--}}
        <div>
            <img class="hiasan" src="{{ asset('assets') }}/img/pelampung_WhatIsIG31.png" alt="">
        </div>

        {{--Sponsor--}}
        {{-- <div style="margin-top:-6rem;">
            @include('layouts.sponsor')
        </div> --}}
        <div class="row spacing-bawah sponsor-section">
            <div class="sponsor-list"></div>
        </div>
    </div>
</body>
@endsection