<!-- halaman awal GO GO GO -->

@extends('layouts.main')

@section('container')

    <style>
        .custom-section {
            background-image: url('{{ asset('images/putih.jpg') }}');
            background-size: cover;
            background-position: center;
            color: #ffffff;
            padding: 100px 0;
        }

        .custom-heading {
            color: #FFD700;
        }

        .custom-container h1 {
            font-size: 3.5rem;
        }

        .custom-about-section img {
            width: 150px;
        }

        .custom-sub-heading {
            color: #FFD700;
        }

        .custom-label {
            height: 30px;
            align-items: center;
            justify-content: center;
            margin-top: 35px;
            right: 0;
            bottom: 45%;
        }

        .custom-kontak {
            width: 40px;
            height: 40px;
            background-color: #FF4500;
            right: 15px;
            bottom: 15px;
        }

        .custom-carousel-control-prev,
        .custom-carousel-control-next {
            height: 90px;
            width: 90px;
            top: 41%;
            background-color: #008080;
        }

        /* Menambahkan gaya untuk warna biru tua pada teks "Learn, Create, Elevate" */
        .custom-heading-learn {
            color: #003366; /* Warna biru tua yang diinginkan */
        }

        .custom-heading-go {
            color: #FF0000
        }
    </style>

<section class="custom-home-section py-5 custom-section text-center" id="custom-home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <img src="{{ asset('images/letsgo.jpg') }}" alt="letsgo.jpg" class="img-fluid mb-4">
                    <h6 class="text-secondary">GO GO GO!!!</h6>
                    <h1 class="custom-heading custom-heading-learn fw-bold mt-3">Learn, Create, Elevate</h1>
                    <p class="custom-heading custom-heading-go mt-4">Gak Mau Pusing? GO Smar+ Aja</p>
                    <a href="{{ route('courses.index') }}">
                        <button class="btn btn-warning mt-4 text-white px-5 py-2 fw-medium rounded">GO</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection