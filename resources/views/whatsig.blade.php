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
    .nav-link::after{
        
    }

    /* Garis */
    .garis {
        height: 9px;
        background-color: #CB553B;
    }
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
                <p>Industrial Games (IG) adalah acara tahunan berskala nasional yang diselenggarakan oleh Teknik
                    Industri Universitas Surabaya dan di tahun 2024 ini adalah pelaksanaan Industrial Games yang ke-32.
                    Industrial Games ke-32 mengusung tema Innovation in Escalating City Heritage Tourism. Tema ini
                    menyoroti pentingnya inovasi dalam pariwisata warisan kota yang semakin meningkat. Inovasi dianggap
                    sebagai kunci untuk mengembangkan dan mempromosikan situs-situs warisan yang tidak hanya menarik
                    bagi wisatawan, tetapi juga berkontribusi pada keberlanjutan dan revitalisasi kota.</p>
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
                    <li>Piala Tetap Rektor Universitas Surabaya</li>
                    <li>Pembebasan 100% Uang Sumbangan Pendidikan dan Uang Penyelenggara Pendidikan (Semester 1) (jika masuk Teknik Industri UBAYA)</li>
                    <li>Sertifikat</li>
                </ul>
            </div>
            <div class="juara 2">
                <h3>JUARA 2</h3>
                <ul>
                    <li>Tabungan Rp4.000.000</li>
                    <li>Piala Tetap Rektor Universitas Surabaya</li>
                    <li>Pembebasan 75% Uang Sumbangan Pendidikan dan Uang Penyelenggara Pendidikan (Semester 1) (jika masuk Teknik Industri UBAYA)</li>
                    <li>Sertifikat</li>
                </ul>
            </div>
            <div class="juara 3 mb-5">
                <h3>JUARA 3</h3>
                <ul>
                    <li>Tabungan Rp2.500.000</li>
                    <li>Piala Tetap Rektor Universitas Surabaya</li>
                    <li>Pembebasan 50% Uang Sumbangan Pendidikan dan Uang Penyelenggara Pendidikan (Semester 1) (jika masuk Teknik Industri UBAYA)</li>
                    <li>Sertifikat</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection