@extends('layouts/template')

@section('cars-products')
<style>
    .card {
        height: 100%;
    }

    .card-title {
        letter-spacing: 0.5px;
        line-height: 1.5;
    }

    .card-body {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .card-text {
        flex-grow: 1;
        overflow: hidden;
    }

    .seedetails-button{
      background-color: #CD5C5C;
      color: #fff;
      width: 100%;
    }

    .seedetails-button:hover{
      background-color: #F08080;
      color: #fff;
    }
</style>

<div class="title-section">
    <div class="container d-flex align-items-center justify-content-center text-black flex-column">
        <h1 class="hero-section-title" style="padding-top: 12%; padding-bottom: 6%; text-shadow: 2px 2px #A9A9A9"> CAR LIST</h1>
    </div>
</div>

<div class="cars-list-section container">
    <div class="row">
        @foreach ($cars as $car)
            <div class="col-12 col-md-6 col-lg-3 mb-5">
                <div class="card shadow rounded">
                    <div class="availibility-badge badge badge-custom bg-success text-white position-absolute">{{ $car->status }}</div>
                    <img src="{{ Storage::url($car->gambar) }}" class="card-img-top" alt="Car Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->nama }}</h5>
                        <div class="rent-detail mb-3 fw-medium">
                            <span class="text" style="color: #DC143C">{{ $car->harga_sewa }}/</span>day
                            <ul class="list-unstyled list-style-group">
                            <li class="border-bottom py-2 d-flex justify-content-between">
                                <span>Bahan bakar</span>
                                <span style="font-weight: 600">{{ $car->bahan_bakar }}</span>
                            </li>
                            <li class="border-bottom py-2 d-flex justify-content-between">
                                <span>Jumlah Kursi</span>
                                <span style="font-weight: 600">{{ $car->jumlah_kursi }}</span>
                            </li>
                            <li class="border-bottom py-2 d-flex justify-content-between">
                                <span>Transmisi</span>
                                <span style="font-weight: 600">{{ $car->transmisi }}</span>
                            </li>
                            </ul>
                        </div>
                        <a href="/detail/{{ $car->id }}" class="seedetails-button btn mt-auto">See Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection