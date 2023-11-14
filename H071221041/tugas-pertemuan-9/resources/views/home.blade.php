@extends('layouts.main')
<style>
.hero__heading {
font-size: 36px;
/* Ukuran teks */
color: #333;
/* Warna teks */
text-align: center;
/* Posisi teks tengah */
animation: blink 1s infinite;
/* Animasi berkedip */
}

@keyframes blink {

0%,
100% {
opacity: 1;
}

50% {
opacity: 0;
}
}

</style>
@section('container')
<center>
    <div class="hero__content h-75 container-custom position-relative">
        <div class="d-flex h-100 align-items-center hero__content-width">
            <div>
                <h1 class="hero__heading fw-bold" style="font-size: 50px; color: #222831;">MiShop</h1>
                <p class="lead fw-bold" style="color: #222831; font-size: bold">Selamat datang di MiShop, destinasi
                    fashion terkini untuk para wanita yang mengagumi gaya busana ala Korea! Di MiShop, kami menghadirkan
                    koleksi outfit yang memukau dan memadukan sentuhan gaya Korea yang trendi dengan kenyamanan yang tak
                    terkalahkan. <br><br>

                    Dengan penuh dedikasi, MiShop senantiasa menghadirkan pilihan outfit berkualitas tinggi yang
                    memenuhi standar fashion terkini. Dari gaya casual yang santai hingga busana yang elegan, setiap
                    item di MiShop dirancang untuk memancarkan keindahan dan kepercayaan diri. 

                    MiShop menghadirkan pilihan terbaik untuk
                    melengkapi gaya Anda sehari-hari atau tampilan khusus. Mulai dari pakaian, aksesori, hingga sepatu,
                    setiap produk dipilih dengan cermat untuk memastikan kepuasan pelanggan.
                </p>
                <a href="/product" class="mt-2 btn" role="button" style="background-color:BFA2DB"><span></span>Go To
                    Product</a>
            </div>
        </div>
    </div>
</center>
@endsection