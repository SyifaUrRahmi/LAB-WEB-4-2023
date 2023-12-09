<!-- COURSE List Card -->

@extends('layouts.main')

@section('container')
    <style>
        .heading {
            margin-top: 1rem;
            color: #252525;
        }
        .row {
            margin-top: 24px;
        }
        .label{
            height: 30px;
            align-items: center;
            justify-content: center;
            margin-top: 35px;
            right: 0;
            bottom: 45%;
        }
        .kontak {
            width: 40px;
            height: 40px;
            background-color: rgb(0, 156, 0);
            right: 15px;
            bottom: 15px;
            outline: 5px solid white;
        }
    </style>


    <h1 class="heading fw-medium fs-1 text-center">Courses List</h1>

    <div class="container mb-5 mt-4">
        <div class="row">
            @forelse ($courses as $course)
            <div class="col-md-3 my-3">
                <div class="card">
                    <img src="{{ asset('images/palindo.jpg') }}" class="card-img-top mx-auto" alt="math-logo" style=" object-fit:contain;width:12rem;">
                    <hr>
                    <div class="card-body">
                      <p class="card-title">{{ $course->course }}</p>
                      <h5 class="card-text mb-3">{{ Str::limit($course->deskripsi, 200) }}</h5>
                      @auth
                        <a href="{{ route('content.index', ['courseName' => $course->course]) }}" class="btn btn-secondary text-white">See More</a>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-secondary text-white">See More</a>
                      @endauth
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-12">
                <p class="text-center align-items-center fs-4 fw-light">Course yang anda cari tidak tersedia.</p>
            </div>
            @endforelse
        </div>
    </div>
@endsection