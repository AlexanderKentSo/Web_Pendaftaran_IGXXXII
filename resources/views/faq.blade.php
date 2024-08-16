@extends('layouts.app')

@section("title", "FAQ")

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

        /* FAQ */
        .faq {
            color: var(--c4);
        }
        /* FAQ */

        /* Box Pertanyaan 1 */
        .box-pertanyaan-1 {
            height: 1rem;
            background-color: var(--c1);
        }
        
        .box-pertanyaan-1-isi{
            background-color: var(--c2);
        }
        /* Box Pertanyaan 1 */

        /* Box */
        .box{
            width: 18%;
            background-color: var(--c3);
        }
        /* Box */
    </style>
@endsection

@section('content')
    <div class="d-flex">
        <div class="d-flex justify-content-center align-items-center flex-column pt-5 w-75">
            <div class="w-100 ps-5 pe-4">
                <h1 class="monst-bold faq">FAQ</h1>
                <div class="wrap-all">
                    <div class="">
                        <div class="box-pertanyaan-1 w-100"></div>
                        <div class="box-pertanyaan-1-isi pt-2 pb-3 mx-2 px-4">
                            <h1 class="mb-1 monst-bold fs-5 ">Apa itu Industrial Games?</h1>
                            <p class="monst-medium fs-6">Kompetisi tahunan berskala nasional yang diadakan oleh Program Studi Teknik Industri Universitas Surabaya untuk siswa SMA / SMK / sederajat di seluruh Indonesia.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="box-pertanyaan-1 w-100"></div>
                        <div class="box-pertanyaan-1-isi pt-2 pb-3 mx-2 px-4">
                            <h1 class="mb-1 monst-bold fs-5 ">Industrial Games XXXI diadakan secara apa?</h1>
                            <p class="monst-medium fs-6">Untuk pertama kalinya sejak pandemi, Industrial Games tahun ini akan diadakan secara FULL OFFLINE!</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="box-pertanyaan-1 w-100"></div>
                        <div class="box-pertanyaan-1-isi pt-2 pb-3 mx-2 px-4">
                            <h1 class="mb-1 monst-bold fs-5 ">Perlombaan Industrial Games terdiri dari babak apa saja?</h1>
                            <p class="monst-medium fs-6">Industrial Games terdiri dari babak penyisihan dan final.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="box-pertanyaan-1 w-100"></div>
                        <div class="box-pertanyaan-1-isi pt-2 pb-3 mx-2 px-4">
                            <h1 class="mb-1 monst-bold fs-5 ">Materi apa saja yang akan digunakan selama perlombaan Industrial Games XXXI?</h1>
                            <p class="monst-medium fs-6">Materi yang digunakan adalah pengetahuan umum, IPA SMA, dan seputar teknik industri.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="box-pertanyaan-1 w-100"></div>
                        <div class="box-pertanyaan-1-isi pt-2 pb-3 mx-2 px-4">
                            <h1 class="mb-1 monst-bold fs-5 ">Bagaimana bentuk perlombaan Industrial Games?</h1>
                            <p class="monst-medium fs-6">Perlombaan Industrial games merupakan simulasi dunia industri yang dikemas dalam bentuk games, seperti bagaimana proses distribusi dan produksi. Games pada setiap babaknya akan menguji kemampuan strategi, problem solving, dan kreativitas peserta.</p>
                        </div>
                    </div>
                    <div class="mt-4 mb-5">
                        <div class="box-pertanyaan-1 w-100"></div>
                        <div class="box-pertanyaan-1-isi pt-2 pb-3 mx-2 px-4">
                            <h1 class="mb-1 monst-bold fs-5 ">Berapa jumlah anggota dalam satu (1) tim? Apakah boleh dari sekolah yang berbeda?</h1>
                            <p class="monst-medium fs-6">Satu (1) tim terdiri atas tiga (3) orang yang berasal dari sekolah yang sama. Tim boleh terdiri dari angkatan yang berbeda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-25 overflow-y-hidden d-flex justify-content-around">
            <div class="box1 box h-100"></div>
            <div class="box2 box h-100"></div>
            <div class="box3 box h-100"></div>
        </div>
    </div>
@endsection