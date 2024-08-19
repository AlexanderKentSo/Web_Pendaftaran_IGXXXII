@extends('layouts.app')

@section("title", "Announcments")

@section("css")
    <style>
        :root{
            --c1: #CB553B;
            --c2: rgba(228, 173, 173, 0.35);
            --c3: rgba(208, 153, 98, 70);
            --c4: rgba(201, 65, 44, 0.85);
            --montserrat-light : 'Montserrat Light';
            --montserrat-medium : 'Montserrat Medium';
            --montserrat-bold : 'Montserrat Bold';
        }

        p {
            margin: 0;
        }

        .monst-bold {
            font-family: var(--montserrat-bold);
        }
        
        .monst-medium {
            font-family: var(--montserrat-medium);
        }
        
        .monst-light {
            font-family: var(--montserrat-light);
        }

        /* Announcement */
        .announ {
            color: var(--c4);
        }
        /* Announcement */

        /* Card */
        .card {
            font-family: "Monteserrat", sans-serif;
            letter-spacing: 0px;
            text-align: justify;
        }

        .card-body {
            transition: all 0.2s ease;
            border-radius: 3px;
            background-color: #F6DFAD
        }

        .card-body:hover {
            -webkit-transform: scale(1.05);
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08)
        }

        .card-text {
            font-family: "Monteserrat Light", sans-serif;
        }
        /* Card */

        /* Box */
        .box{
            width: 18%;
            background-color: var(--c3);
        }
        /* Box */

        /* Garis */
        .garis {
            height: 9px;
            background-color: #CB553B;
        }
        /* Garis */
    </style>
@endsection

@section('content')
    <div class="d-flex mt-5" style="padding-top: 50px;">
        <div class="d-flex justify-content-center align-items-center flex-column pt-5 w-75">
            <div class="w-100 ps-5 pe-4">
                <div class="wrap-all">
                    <h1 class="monst-bold announ">ANNOUNCEMENTS</h1>
                    <!----Announcement Card 1---->
                    <div class="card-body" style="margin: 1rem;padding:1.5rem;">
                        <h4 class="card-title" style="font-family: Montserrat Bold, sans-serif;">Announcement 1</h4>
                        <h6 class="card-subtitle mb-2" style="padding-bottom:10px;"> 21 September 2024 / Day 1 / 07.30-21.00 </h6>
                        <!----Annoucement Text---->
                        <p class="card-text">
                            Setiap tim akan melewati babak penyisihan dimulai dari Tugu Pahlawan, Kota Lama & Universitas Surabaya bersama dengan KIKO the Red Panda.
                        </p>
                    </div>
                    <!----End Annoucement Text---->
                    <!----End Announcement Card---->

                    <!----Announcement Card 1---->
                    <div class="card-body" style="margin: 1rem;padding:1.5rem;">
                        <h4 class="card-title" style="font-family: Montserrat Bold, sans-serif;">Announcement 2</h4>
                        <h6 class="card-subtitle mb-2" style="padding-bottom:10px;"> 22 September 2024 / Day 2 / 09.00 - 20.00 </h6>
                        <!----Annoucement Text---->
                        <p class="card-text">
                            Bagi tim yang lolos babak penyisihan, akan melewati babak FINAL yang akan dilaksanakan di Universitas Surabaya. Tetap semangat untuk setiap tim !
                        </p>
                    </div>
                    <!----End Annoucement Text---->
                    <!----End Announcement Card---->

                    <!----Announcement Card 1---->
                    <div class="card-body" style="margin: 1rem;padding:1.5rem;">
                        <h4 class="card-title" style="font-family: Montserrat Bold, sans-serif;">Announcement 3</h4>
                        <h6 class="card-subtitle mb-2" style="padding-bottom:10px;"> 22 September / Day 2 / 17.00 - 20.00 </h6>
                        <!----Annoucement Text---->
                        <p class="card-text">
                            Akan dilaksanakan closing ceremony yang akan di datangi oleh peserta lomba Video TikTok & 10 tim yang lolos pada babak FINAL. Sampai Jumpa di Closing Ceremony !
                        </p>
                    </div>
                    <!----End Annoucement Text---->
                    <!----End Announcement Card---->
                </div>
            </div>
        </div>
        <div class="w-25 overflow-y-hidden d-flex justify-content-around">
            <div class="box1 box h-100"></div>
            <div class="box2 box h-100"></div>
            <div class="box3 box h-100"></div>
        </div>
    </div>
    {{-- <div class="garis w-100"></div> --}}
@endsection