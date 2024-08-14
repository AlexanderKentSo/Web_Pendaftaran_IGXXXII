@extends('layouts.app')

@section("title", "What's IG 30")

@section('css')
<style>
    :root {
        --c1: #CB553B;
        --c2: rgba(228, 173, 173, 0.35);
        --c3: rgba(208, 153, 98, 70);
        --c4: rgba(201, 65, 44, 0.85);
        --c5: #e8ac4c;
        --montserrat-medium: 'Montserrat Medium';
        --montserrat-bold: 'Montserrat Bold';
        --montserrat-extrabold: 'Montserrat ExtraBold';
    }

    /* What's ig page */
    .whatsig-page {
        padding-top: 8em
    }

    .whatsig-text {
        padding: 3em 7em;
    }

    .maskot {
        width: 30%;
        position: absolute;
        padding-right: 5%;
        max-height: 400px;
        max-width: 550px;
    }

    .whatsig-definition {
        background-color: #FCF1CF;
        font-family: var(--montserrat-medium);
        position: relative;
        z-index: -2;
    }

    .underline {
        font-family: var(--montserrat-extrabold);
        text-decoration: underline;
        text-decoration-color: var(--c5);
        text-decoration-thickness: 4.5px;
    }

    /* What's IG Prize */
    .gedung {
        width: 100%;
    }

    .whatsig-prize {
        background-color: #FCF1CF;
        border-radius: 2em 2em 0 0;
    }

    .juara {
        font-family: var(--montserrat-medium);
    }

    h3 {
        font-family: var(--montserrat-bold);
        color: #e8ac4c;
    }

    /* media query (responsive) */

    /* mobile */
    @media(max-width:550px) {
        .whatsig-text {
            padding: 10%;
        }

        .whatsig-juara {
            padding-left: 10% !important;
        }
    }

    /* Tablet */
    @media(max-width:768px) {
        .whatsig-text {
            padding: 11%;
        }

        .whatsig-juara {
            padding-left: 10% !important;
        }
    }

    /* Garis */
    .garis {
        height: 9px;
        background-color: #CB553B;
    }

    /* Sponsor */
    .sponsor-list div.sponsor {
        border: 1px solid #D2AF3A;
        height: 150px;
    }

    /* Sponsor */
</style>


@section('content')

<div class="whatsig-page">
    <div class="row" style="position:relative; z-index: -1">
        {{--Whats IG Title--}}
        <div class="col-1"></div>
        <div class="col-7">
            <h1 class="whatsig-title fw-semibold" style="font-family: var(--montserrat-medium)">What is <span
                    class="underline">INDUSTRIAL GAMES?</span></h1>
        </div>
        {{--Maskot--}}
        <div class="col-4 maskot-ig">
            <img class="maskot" src="{{ asset('assets/img/whats_ig/rakun_berpikir.png') }}" alt="maskot IG">
        </div>
    </div>

    {{--Whats'IG definition--}}
    <div class="row whatsig-definition">
        {{--Whats IG Text--}}
        <div class="col-12 col-sm-10 col-md-8">
            <div class="whatsig-text" style="background-color: #FCF1CF">
                <p>Industrial Games adalah kompetisi dalam bidang Teknik Industri yang diadakan Program Studi Teknik
                    Industri Universitas Surabaya untuk siswa-i SMA/SMK/Sederajat di seluruh Indonesia. Industrial
                    Games dikemas dalam bentuk games di mana peserta dapat bermain sambil belajar dalam merancang,
                    mengatur, dan mengaplikasikan sistem industri yang memuat manusia, mesin, material, lingkungan,
                    dan manajemen. Sebagai lomba terbesar dan tertua yang sudah berjalan selama 30 tahun di
                    Indonesia, Industrial Games mengenalkan industri manufaktur, industri jasa, dan industri digital
                    yang sekarang sudah diterapkan di seluruh dunia. Tidak hanya itu, Industrial Games memberikan
                    kesempatan kepada peserta dalam menambah pengalaman, relasi, dan pengetahuan lebih dalam terkait
                    Teknik Industri.</p>
            </div>
        </div>
    </div>

    <h1 class="text-end px-5" style="font-family: var(--montserrat-bold)">PRIZE</h1>
    {{--Juara--}}
    <div class="row whatsig-prize">
        {{--Gedung--}}
        <div class="col-md-6 order-md-1 col-12 order-2 align-self-end">
            <img class="gedung" src="{{ asset('assets/img/whats_ig/gedung.png') }}" alt="Gedung">
        </div>
        {{--Prize--}}
        <div class="whatsig-juara col-md-5 order-md-2 col-10 order-1 ms-5 align-self-center">
            <div class="juara 1 mt-5">
                <h3>JUARA 1</h3>
                <ul>
                    <li>Tabungan Rp6.000.000</li>
                    <li>Piala Bergilir Gubernur Jawa Timur</li>
                    <li>100% USP dan UPP Semester 1 (jika masuk Teknik Industri UBAYA)</li>
                    <li>Piala Tetap Rektor Ubaya</li>
                </ul>
            </div>
            <div class="juara 2 mt-5">
                <h3>JUARA 2</h3>
                <ul>
                    <li>Tabungan Rp4.000.000</li>
                    <li>75% USP dan UPP Semester 1 (jika masuk Teknik Industri UBAYA)</li>
                    <li>Piala Tetap Rektor Ubaya</li>
                </ul>
            </div>
            <div class="juara 3 mt-5">
                <h3>JUARA 3</h3>
                <ul>
                    <li>Tabungan Rp2.500.000</li>
                    <li>50% USP dan UPP Semester 1 (jika masuk Teknik Industri UBAYA)</li>
                    <li>Piala Tetap Rektor Ubaya</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="garis w-100"></div>
{{-- Sponsor --}}
<div class="sponsor-section mt-5 mx-2 mx-md-5 px-0 px-md-5 ">
    <div class="text-center py-md-5">
        <h2 class="fw-bold" style="color: #D2AF3A">Sponsored by:</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 sponsor-list">
        @for($i = 1; $i <= 8; $i++)
            <div class="col pb-5 px-0 px-md-5">
                <div class="sponsor"></div>
            </div>
        @endfor
    </div>
</div>

@endsection