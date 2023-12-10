@extends('layouts/template')

@section('detail')
<style>
    .sewa-mobil-button{
        background-color: #CD5C5C;
        color: #fff;
        font-size: 14px;
        padding : 8px 20px;
        border-radius: 10px;
        text-decoration: none;
        transition: 0.3s;
        margin-top: 2%;
    }

    .sewa-mobil-button:hover{
        background-color: #F08080;
        color: #fff;
    }
</style>

<div class="detail-section">
    <div class="container d-flex align-items-center justify-content-center text-black flex-column">
        <h1 class="hero-section-title" style="padding-top: 12%; text-shadow: 2px 2px #A9A9A9"> Mazda CX-5</h1>
    </div>
</div>
<section class="py-5">
      <div class="container px-4 px-lg-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 mb-5">
            <div class="card h-100">
              <img class="card-img-top" src="images/cars/Mazda CX-5.jpg" alt="Mazda CX-5 Pict"/>
              <div class="card-body card-body-custom pt-4">
                <div>
                  <h3 class="fw-bolder" style="text-shadow: 2px 2px #D3D3D3">Deskripsi</h3>
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Ipsa dolor corrupti porro, sit ex nemo itaque, est
                    voluptatum illum dignissimos facilis alias facere rem
                    consequatur?
                  </p>
                  <div class="mobil-info-list border-top pt-4">
                    <ul class="list-unstyled list-inline" style="display: flex; justify-content: space-evenly">
                        <li class="list-inline-item">
                            <i class="bi bi-check-circle me-2" style="color: #DC143C"></i><span>P3K</span>
                        </li>
                        <li class="list-inline-item">
                            <i class="bi bi-x-circle me-2"></i><span>CHARGER</span>
                        </li>
                        <li class="list-inline-item">
                            <i class="bi bi-x-circle me-2"></i><span>AUDIO</span>
                        </li>
                        <li class="list-inline-item">
                            <i class="bi bi-check-circle me-2" style="color: #DC143C"></i><span>AC</span>
                        </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card">
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="fw-bolder">Special Item</h5>
                    <div class="rent-price mb-3">
                      <span style="font-size: 1rem; color: #DC143C" class="price">Rp.200.000/</span>day
                    </div>
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li class="border-bottom p-2 d-flex justify-content-between">
                      <span>Bahan Bakar</span>
                      <span style="font-weight: 600">Bensin</span>
                    </li>
                    <li class="border-bottom p-2 d-flex justify-content-between">
                      <span>Jumlah Kursi</span>
                      <span style="font-weight: 600">5</span>
                    </li>
                    <li class="border-bottom p-2 d-flex justify-content-between">
                      <span>Transmisi</span>
                      <span style="font-weight: 600">Manual</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a href="#" class="sewa-mobil-button btn d-flex align-items-center justify-content-center mt-auto">Sewa Mobil</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection