@extends('layouts.app')

@section("title", "FAQ")

@section('content')

    <Style>
        
        .row{
            margin-right:0;
            margin-left:0;
        }        
        .horizontal-line {
            background: #2c56a7;
            border: 2px solid #2c56a7;
            opacity: 1;
        }
        .faq-text {
            font-family: "Montserrat", sans-serif;
            font-size: 48px;
            color: #2c56a7;
            font-weight: 700;
            letter-spacing: 3px;
        }
        .faq-page{
            margin-bottom: 40px;
        }
        .card-title{
            margin-top: 40px;
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            color:#2c56a7;
        }
        .card{
            font-family:"Montserrat",sans-serif;
            color:#2c56a7;
            letter-spacing:0px;
            text-align:justify;
        }
        .card-body{
            border-radius: 20px;
            transition: all 0.2s ease;
            background: #c3e2f6; 
            padding:1.5rem;
        }
        .card-body:hover{
            -webkit-transform:scale(1.05);
            box-shadow: 0 6px 10px rgba(0,0,0,.08)
        }
        .card-text{
            font-size: 20px;
            font-weight: 600;
        }
    </style>    

<body style="background: url('{{ asset('assets') }}/background/Background_FAQ.png') top / cover no-repeat;background-attachment: fixed;">
    <div class="faq-page pt-4 px-5">

        {{--FAQ Title--}}
        <div class="row mt-5">
            <div class="col-7"></div>
            <div class="col-5 row align-items-center">
                <div class="col-10"><hr class="horizontal-line"/></div>
                <div class="col-2 faq-text">FAQ</div>
            </div>
        </div>        

        <div class="row md-5">
            {{--FAQ coloumn--}}
            <div class="col md-6" style="height: auto;min-width: 65%;padding-left:1.5rem;">
            
            <!----FAQ body---->
                <div class="card" style="border-style: none;background: rgba(255,255,255,0);padding-bottom:1rem;padding-top:1rem;">
                
                <!----FAQ Card---->
                <h4 class="card-title">Apa itu Industrial Games?</h4>
                    <div class="card-body">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Kompetisi tahunan berskala nasional yang diadakan oleh Program Studi Teknik Industri Universitas Surabaya untuk siswa SMA/SMK/sederajat di seluruh Indonesia.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                    <h4 class="card-title">Industrial Games XXXI diadakan secara apa?</h4>
                    <div class="card-body">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Untuk pertama kalinya sejak pandemi, Industrial Games tahun ini akan diadakan secara FULL OFFLINE!</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title">Perlombaan Industrial Games terdiri dari babak apa saja?</h4>
                    <div class="card-body">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Industrial Games terdiri dari babak game besar, semi final, dan final.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title">Materi apa saja yang akan digunakan selama perlombaan Industrial Games XXXI?</h4>
                    <div class="card-body">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Materi yang digunakan adalah pengetahuan umum, IPA SMA, dan seputar teknik industri.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title">Bagaimana bentuk perlombaan Industrial Games?</h4>
                    <div class="card-body">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Perlombaan Industrial games merupakan simulasi dunia industri yang dikemas dalam bentuk games, seperti bagaimana proses distribusi dan produksi. Games pada setiap babaknya akan menguji kemampuan strategi, problem solving, dan kreativitas peserta.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                    <h4 class="card-title">Berapa jumlah anggota dalam satu (1) tim? Apakah boleh dari sekolah yang berbeda?</h4>
                    <div class="card-body">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Satu (1) tim terdiri atas tiga (3) orang yang berasal dari sekolah yang sama. Tim boleh terdiri dari angkatan yang berbeda.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->
                </div>
            </div>
            <!----End FAQ Body---->

            {{-- Sponsor --}}
            {{-- <div style="margin-top:3rem; font-family: Montserrat Thin; color: #2c56a7;">
                @include('layouts.sponsor')
            </div> --}}

            <div class="row spacing-bawah sponsor-section">
                <div class="sponsor-list"></div>
            </div>
            
        </div>
    </div>
</body>
@endsection