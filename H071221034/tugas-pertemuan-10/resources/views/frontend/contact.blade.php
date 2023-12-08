@extends('layouts/template')

@section('contact')
<style>
    .contact-section{
        background: url('images/bg contact.jpg') no-repeat center;
        background-size: cover;
        width: 100%;
        height: 100vh;
        margin-bottom: 5%;
    }

    .contact-section .container{
        height: 100vh;
        z-index: 1;
        position: relative;
    }

    .submit-button{
        background-color: #CD5C5C;
        color: #fff;
        font-size: 14px;
        padding : 8px 20px;
        border-radius: 10px;
        border-color: #CD5C5C;
        text-decoration: none;
        transition: 0.3s;
        margin-top: 2%;
        cursor: pointer;
    }

    .submit-button:hover{  
        background-color: #F08080;
        border-color: #F08080;
    }
</style>

<div class="contact-section">
    <div class="container d-flex justify-content-center text-white flex-column">
        <h1 class="contact-section-title" style="margin-top: 5%; text-shadow: 2px 2px #000">Get In Touch</h1>
        <h5 class="hero-section-subtitle" style="margin-top: 1%; text-shadow: 2px 2px #000"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut elit <br> tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</h5>
        </div>
    </div>
    <div class="container" style="margin-bottom: 15%">
        <div class="row">
            <div class=" input-nama col-lg-6 col-md-6 mb-2">
                <label for="name" class="form-label">Nama</label>
                <input type="name" class="form-control" id="name" placeholder="Masukkan nama lengkap">
            </div>
            <div class="input-email col-lg-6 col-md-6 mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan alamat email">
            </div>
        </div>
        <div class="input-pesan mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Masukkan pesan"></textarea>
        </div>
        <div class="d-flex justify-content-center align-items-center flex-column">
            <button type="submit" class="submit-button">Kirim Pesan</button>
        </div>
    </div>
</div>
@endsection