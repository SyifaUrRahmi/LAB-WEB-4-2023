<!-- halaman awal dashboard -->

@extends('dashboard/layouts/main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="background-image: url('{{ asset('image/sky.jpg') }}'); background-size: cover; background-position: center;">
        <h1 class="h2 ms-4 text-black">Selamat Datang, {{ auth()->user()->nama }} ({{ auth()->user()->role }})</h1>

        
    </div>
    <center>
    <p class="fs-5 mx-4 mb-3 text-black">Bersiaplah untuk mengeksplorasi dunia ilmu pengetahuan dengan dukungan ahli kami. Mari kita bersama-sama menapaki jalan sukses akademis Anda!.</p>
</center>
@endsection
