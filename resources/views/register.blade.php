@extends('layouts.app')

@section('title', 'Register')

@section('css')
    <style>
        .register-page {
            background-size: cover;
        }

        .horizontal-line {
            background: #2C56A7;
            border: 2px solid #2C56A7;
            opacity: 1;
        }

        .register-text {
            color: #2C56A7;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .cta-box {
            background-color: #7DC1E3;
            border-radius: 30px;
        }

        .step-box {
            background-color: #e1ac61;
            border: 1.5px solid black;
            box-shadow: 2px 2px 10px #888;
            border-radius: 30px;
            padding: 1rem 1.5rem;
            color: white;
        }

        .btn-register {
            background: transparent;
            border: 2px solid #000000;
            transition: 0.5s;
            color: #000000;
            font-size: 18px;
            letter-spacing: 1px;
            text-decoration: none;
            font-weight: 600;
        }

        .btn-register:hover {
            transform: scale(1.05) translateX(15px);
            background: rgba(255, 255, 255, 0.1);
        }

        @media only screen and (max-width: 960px) {
            .register-page {
                background-position: right center;
            }

            .register-text {
                font-size: 24px;
            }

            .btn-register:hover {
                transform: scale(1.05) translateX(15px);
                background: rgba(255, 255, 255, 0.1);
            }
        }
    </style>
@endsection

@section('content')
    <div class="register-page pt-4 px-5 py-5" style="background: url('{{ asset('assets/background/bg-register.png') }}') no-repeat;">
        {{-- Register title with horizontal line --}}
        <div class="row mb-5">
            <div class="col-md-7 d-xs-none"></div>
            <div class="col-md-5 col-xs-12">
                <div class="row align-items-center">
                    <div class="col col-md-4 col-lg-7 col-xs-7">
                        <hr class="horizontal-line" />
                    </div>
                    <div class="col col-md-8 col-lg-5 col-xs-5 register-text">
                        <p class="pe-5 mb-0 text-end fs-1">REGISTER</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Content --}}
        <div class="row mt-0 mb-5">
            {{-- Invitation sentence --}}
            <div class="col-12 col-lg-6">
                <div class="cta-box px-5 py-4 mb-5">
                    <p class="mb-0 fs-1">What you waiting for ?</p>
                    <p class="mb-0 fs-1">Join the <span class="fw-bold">GAMES</span></p>
                    <p class="fs-1">now !</p>

                    <a href="https://bit.ly/PendaftaranIGXXXI2023" target="_blank"
                        class="btn btn-register rounded-pill px-4 py-2 mb-3">
                        REGISTER NOW
                    </a>
                </div>
            </div>

            {{-- Registration flow --}}
            <div class="col-12 col-lg-6 px-5">
                <div class="row mb-5">
                    <div class="col-12 col-lg-9 step-box">
                        <p class="mb-2 fs-4 fw-bold">REGISTRATION</p>
                        <p class="mb-2">By clicking the button on the left</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-12 col-lg-9 offset-lg-3 step-box">
                        <p class="mb-2 fs-4 fw-bold">PAYMENT</p>
                        <p class="mb-2">Can be done via bank transfer to account:<br><strong>BCA 1300-425-816 (Jessica
                                Yolanda)</strong></p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-12 col-lg-9 step-box">
                        <p class="mb-2 fs-4 fw-bold">CONFIRMATION</p>
                        <p class="mb-2">Confirm your payment to:<br><br><strong>Line</strong>: joyceline_24
                            (Joyceline)<br><strong>WhatsApp</strong>: 0812395570281<br><strong>Format:</strong> "(Team
                            name)_(Bank account holder's name)</p>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12 col-lg-9 offset-lg-3 step-box text-center">
                        <p class="fs-4 fw-bold mt-2 mb-2">DONE</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sponsor --}}
        {{-- @include('layouts.sponsor') --}}
    </div>
@endsection
