@extends('layouts.app')

@section("title", "FAQ")

@section("css")
    <style>
        :root{
            --c1: #CB553B;
            --c2: rgba(228, 173, 173, 0.35);
            --c3: rgba(208, 153, 98, 70);
        }

        p {
            margin: 0;
        }

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
            <div class="w-100 px-5">
                <h1>FAQ</h1>
                <div class="wrap-all">
                    <div class="">
                        <div class="box-pertanyaan-1 w-100"></div>
                        <div class="box-pertanyaan-1-isi mx-2 px-4">
                            <h1 class="fs-4">Apa itu Industrial Games?</h1>
                            <p>Kompetisi tahunan berskala nasional yang diadakan oleh Program Studi Teknik Industri Universitas Surabaya untuk siswa SMA/SMK/sederajat di seluruh Indonesia.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="box-pertanyaan-1 w-100"></div>
                        <div class="box-pertanyaan-1-isi mx-2 px-4">
                            <h1 class="fs-4">Industrial Games XXXI diadakan secara apa?</h1>
                            <p>Untuk pertama kalinya sejak pandemi, Industrial Games tahun ini akan diadakan secara FULL OFFLINE!</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="box-pertanyaan-1 w-100"></div>
                        <div class="box-pertanyaan-1-isi mx-2 px-4">
                            <h1 class="fs-4">Perlombaan Industrial Games terdiri dari babak apa saja?</h1>
                            <p>Industrial Games terdiri dari babak game besar, semi final, dan final.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="box-pertanyaan-1 w-100"></div>
                        <div class="box-pertanyaan-1-isi mx-2 px-4">
                            <h1 class="fs-4">Materi apa saja yang akan digunakan selama perlombaan Industrial Games XXXI?</h1>
                            <p>Materi yang digunakan adalah pengetahuan umum, IPA SMA, dan seputar teknik industri.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="box-pertanyaan-1 w-100"></div>
                        <div class="box-pertanyaan-1-isi mx-2 px-4">
                            <h1 class="fs-4">Bagaimana bentuk perlombaan Industrial Games?</h1>
                            <p>Perlombaan Industrial games merupakan simulasi dunia industri yang dikemas dalam bentuk games, seperti bagaimana proses distribusi dan produksi. Games pada setiap babaknya akan menguji kemampuan strategi, problem solving, dan kreativitas peserta.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="box-pertanyaan-1 w-100"></div>
                        <div class="box-pertanyaan-1-isi mx-2 px-4">
                            <h1 class="fs-4">Berapa jumlah anggota dalam satu (1) tim? Apakah boleh dari sekolah yang berbeda?</h1>
                            <p>Satu (1) tim terdiri atas tiga (3) orang yang berasal dari sekolah yang sama. Tim boleh terdiri dari angkatan yang berbeda.</p>
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