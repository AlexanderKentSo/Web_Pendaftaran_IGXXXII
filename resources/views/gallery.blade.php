@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <style>
        @media (max-width: 991.98px){
            .img-gallery{
                width: 30%;
            }
        }

        body {
            background: url('{{ asset('assets') }}/background/Background Gallery.png') top / cover no-repeat;
            background-attachment: fixed;
        }

        @font-face {
            font-family: 'Morton Bold';
            font-style: normal;
            font-weight: normal;
            src: local('Morton Bold'), url('assets/font/Morton-Bold.otf');
        }

        .indicator {
            border-radius: 50%;
            height: 25px;
            width: 25px;
        }

        .spacing-bawah {
            height: 50px;
        }

        .container-img {
            position: relative;
        }

        .img-gallery {
            position: absolute;
            bottom: 0;
            z-index: 0;
            transform: translateX(10%);
            transform: translateY(50%);
            right: 0;
        }
    </style>

    <div id="carouselIndicator" class="carousel slide mb-5" data-bs-ride="true">
        {{-- Element --}}
        {{-- <img  src="{{ asset('assets/img/Gallery_Element.png') }}" alt="Element Gallery" style="position: absolute;
    z-index:1; width: 400px;">
    <h1 style="font-family: 'Morton Bold'; position: absolute; z-index: 2; color: #ffff;
    margin-top: 30px; margin-left: 90px;">GALERI</h1> --}}

        {{-- Indikator Galeri --}}
        <div class="carousel-indicators">
            @for ($i = 0; $i < 9; $i++)
                @if ($i == 0)
                    <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="{{ $i }}"
                        class="active" aria-current="true" aria-label="Slide {{ $i + 1 }}"
                        style="background-color: #2C56A7"></button>
                @else
                    <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="{{ $i }}"
                        aria-label="Slide {{ $i + 1 }}" style="background-color: #2C56A7"></button>
                @endif
            @endfor
        </div>

        {{-- Foto Galeri --}}
        <div class="carousel-inner">
            @for ($i = 0; $i < 9; $i++)
                @if ($i == 0)
                    <div class="carousel-item active">
                        <div class="container-img">
                            <img src="{{ asset('assets/img/Images_Gallery/img' . ($i + 1) . '.jpg') }}"
                                class="d-block w-100" alt="image {{ $i + 1 }}">
                        </div>

                    </div>
                @else
                    <div class="carousel-item">
                        <div class="container-img">
                            <img src="{{ asset('assets/img/Images_Gallery/img' . ($i + 1) . '.jpg') }}"
                                class="d-block w-100" alt="image {{ $i + 1 }}">
                        </div>
                    </div>
                @endif
            @endfor
        </div>

        {{-- Tombol Next & Prev --}}
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicator" data-bs-slide="prev">
            <img src="{{ asset('assets/img/Prev_Gallery.png') }}" alt="Prev" style="width: 20px;">
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicator" data-bs-slide="next">
            <img src="{{ asset('assets/img/Next_Gallery.png') }}" alt="Next" style="width: 20px;">
            <span class="visually-hidden">Next</span>
        </button>
    </div>

     {{-- Papan Gallery --}}
     <div class="container-img">
        <img class="img-gallery" src="{{ asset('assets') }}/img/Gallery Board.png" />
    </div>

    {{-- Sponsor --}}
    {{-- <div class="row mx-4">
        <div class="col">
            @include('layouts.sponsor')
        </div>
    </div> --}}

    {{-- Alternatif klo misal nanti ternyata perlu mbalikno sponsor ke kode awal masukin di bawahnya line 109 --}}
    {{-- <div class="row spacing-bawah"></div> --}}
@endsection
