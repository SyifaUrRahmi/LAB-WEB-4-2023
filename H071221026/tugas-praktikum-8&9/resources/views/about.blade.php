@extends('layouts.mainlayout')

@section('container')
    <h1>HALAMAN ABOUT</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="foto-fail" width="200" height="200">
@endsection
