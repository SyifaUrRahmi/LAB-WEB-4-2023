<!-- PROFIL -->

@extends('layouts.main')

<style>
    .background {
        height: 200px;
        background: linear-gradient(to right, black, black);
    }
    .white-background {
        padding: 30px 35px;
    }
    .white-background-2 {
        padding: 20px;
        height: 500px;
        width: 270px;
        position: absolute;
        overflow-y: scroll
    }
    .profile {
        margin-top: 120px;
        margin-left: 35px;
    }
    .profile-2 {
        width: 35px;
    }
    .nama {
        padding-top: 70px;   
    }
    .email {
        margin-top: -10px;
    }
    .kontak {
        width: 40px;
        height: 40px;
        background-color: rgb(0, 156, 0);
        outline: 5px solid white;
    }
</style>

@section('container')
    <div class="container py-5 ">
        <div class="row">
            <div class="col-md-9">
                <div class="background shadow rounded-top w-100">
                    <a href=""><img class="profile p-1 bg-white rounded-circle position-absolute" src="{{asset ('images/bowopalestin.jpg')}}" style="width: 150px; height:150px;" alt="user photo"></a>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="white-background shadow rounded-bottom w-100 bg-white">
                    <h3 class="nama">{{ $user->nama }}</h3>
                    <p class="email mt-2"><i class="bi bi-envelope me-2 fs-5"></i>{{ $user->email }}</p>
                </div>
            </div>
        </div>
        @if(auth()->user() && auth()->user()->role !== 'Siswa')
            <div class="row py-3">
                <div class="col-md-9">
                    <div class="white-background shadow rounded w-100 bg-white">
                        <h3 class="course mb-4">Course</h3>
                        @foreach ($courses as $course)
                            <a href="" class="btn btn-outline-dark shadow-sm">{{ $course->course }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection