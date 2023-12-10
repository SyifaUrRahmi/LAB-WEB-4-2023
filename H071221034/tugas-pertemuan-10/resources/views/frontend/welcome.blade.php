@extends('layouts/template')

@section('home')
<style>
    .hero-section{
        background: url('images/bg navbar.png') no-repeat center;
        background-size: cover;
        width: 100%;
        height: 100vh;
      }

    .hero-section .container{
        height: 100vh;
        z-index: 1;
        position: relative;
    }

    .hero-section-title, .hero-section-subtitle{
        text-shadow: 2px 2px #000;
        text-align: center
    }

    .learnmore-button, .viewmore-button{
        background-color: #CD5C5C;
        color: #fff;
        font-size: 14px;
        padding : 8px 20px;
        border-radius: 10px;
        text-decoration: none;
        transition: 0.3s;
        margin-top: 2%;
    }

    .learnmore-button:hover, .viewmore-button:hover{
        background-color: #F08080;
    }

    .why-choose-us-section{
        box-sizing: border-box;
    }

    .child{
        float: left;
        width: 48%;
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

    .testimonial-section{
      background: url('images/bg testi.jpg') no-repeat center;
      background-size: cover;
      width: 100%;
      height: 100vh;
      margin-top: 10%;
      margin-bottom: 20%;
    }

    .availibility-badge{
      top: 0;
      right: 0;
      border-radius: 5px;
    }
</style>

{{-- Cover --}}
<div class="hero-section">
    <div class="container d-flex align-items-center justify-content-center text-white flex-column">
        <h1 class="hero-section-title" style="margin-top: 5%"> The Best Way of <br> Renting a Car</h1>
        <h5 class="hero-section-subtitle" style="margin-top: 1%"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut elit <br> tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</h5>
        <a href="/cars" class="learnmore-button shadow mb-5">Learn More</a>
    </div>
</div>

{{-- Why Choose Us --}}
<section class="why-choose-us-section">
    <section class="child">
        <div class="container" style="margin-left: 10%">
            <h3 class="why-choose-us-section-title mt-5" style="color: #dc143c">WHY CHOOSE US</h3>
            <h1 class="why-choose-us-section-subtitle fw-bold">Don't Waste Your Valuable <br> Time or Money</h1>
            <h6 class="why-choose-us-section-subtitle2 text-body-secondary mt-3"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut elit <br> tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</h6>
            <img src="images/why choose us pict.jpg" class="why-choose-us-section-image mt-2 mb-4" style="border-radius: 15px" width="450" alt="honda car picture">
        </div>
    </section>
    <section class="child">
        <div class="container ms-5">
            <div class="card mt-5 mb-4 shadow" style="width: 30rem;">
                <div class="card-body">
                    <div class="title d-flex flex-row">
                        <img src="images/icons/booked-icon.png" class="card-icon me-2" style="border-radius: 5px" width="35" alt="booked icon">
                        <h5 class="card-title mt-1">Easy Booking</h5>
                    </div>    
                    <p class="card-text mt-3 text-body-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                </div>
            </div>
            <div class="card mb-4 shadow" style="width: 30rem;">
                <div class="card-body">
                    <div class="title d-flex flex-row">
                        <img src="images/icons/mechanic-icon.png" class="card-icon me-2" style="border-radius: 5px" width="35" alt="mechanic icon">
                        <h5 class="card-title mt-1">Expert Certified Mechanics</h5>
                    </div>    
                    <p class="card-text mt-3 text-body-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                </div>
            </div>
            <div class="card mb-4 shadow" style="width: 30rem;">
                <div class="card-body">
                    <div class="title d-flex flex-row">
                        <img src="images/icons/pricetag-icon.png" class="card-icon me-2" style="border-radius: 5px" width="35" alt="price tag icon">
                        <h5 class="card-title mt-1">Get Reasonable Price</h5>
                    </div>    
                    <p class="card-text mt-3 text-body-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                </div>
            </div>
        </div>
    </section>
</section>

{{-- Popular Rental Deals --}}
<div class="popular-rental-deals-section">
    <div class="container d-flex align-items-center justify-content-center flex-column">
        <h3 class="popular-rental-deals-section-title mt-5" style="color: #dc143c">POPULAR RENTAL DEALS</h3>
        <h1 class="popular-rental-deals-section-subtitle fw-bold mt-3">Find The Best Cars For You</h1>
        <h6 class="popular-rental-deals-section-subtitle2 text-body-secondary mt-3 mb-3" style="text-align: center"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut elit <br> tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</h5>
    </div>
    <div class="container">
        <div class="row mt-4">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card mb-4 shadow rounded">
              <div class="availibility-badge badge badge-custom bg-success text-white position-absolute">Available</div>
              <img src="images/cars/Mazda CX-5.jpg" class="card-img-top" alt="Treasure's TMI EP.36">
              <div class="card-body">
                <h5 class="card-title">Mazda CX-5 <span class="badge" style="background-color: #CD5C5C">Mazda</span></h5>
                <div class="rent-price mb-3 fw-medium">
                  <span class="text" style="color: #DC143C">Rp.400.000/</span>day
                  <ul class="list-unstyled list-style-group">
                    <li class="border-bottom py-2 d-flex justify-content-between">
                      <span>Bahan bakar</span>
                      <span style="font-weight: 600">Bensin</span>
                    </li>
                    <li class="border-bottom py-2 d-flex justify-content-between">
                      <span>Jumlah Kursi</span>
                      <span style="font-weight: 600">5</span>
                    </li>
                    <li class="border-bottom py-2 d-flex justify-content-between">
                      <span>Transmisi</span>
                      <span style="font-weight: 600">Manual</span>
                    </li>
                  </ul>
                </div>
                <a href="/detail" class="seedetails-button btn">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card mb-4 shadow rounded">
              <div class="availibility-badge badge badge-custom bg-success text-white position-absolute">Available</div>
              <img src="images/cars/Suzuki Baleno.jpg" class="card-img-top" alt="Treasure's WEB DRAMA">
              <div class="card-body">
                <h5 class="card-title">Suzuki Baleno <span class="badge" style="background-color: #CD5C5C">Suzuki</span></h5>
                <div class="rent-price mb-3 fw-medium">
                  <span class="text" style="color: #DC143C">Rp.200.000/</span>day
                  <ul class="list-unstyled list-style-group">
                    <li class="border-bottom py-2 d-flex justify-content-between">
                      <span>Bahan bakar</span>
                      <span style="font-weight: 600">Bensin</span>
                    </li>
                    <li class="border-bottom py-2 d-flex justify-content-between">
                      <span>Jumlah Kursi</span>
                      <span style="font-weight: 600">7</span>
                    </li>
                    <li class="border-bottom py-2 d-flex justify-content-between">
                      <span>Transmisi</span>
                      <span style="font-weight: 600">Matic</span>
                    </li>
                  </ul>
                </div>
                <a href="/detail" class="seedetails-button btn">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card mb-4 shadow rounded">
              <div class="availibility-badge badge badge-custom bg-success text-white position-absolute">Available</div>
              <img src="images/cars/Audi A3.jpg" class="card-img-top" alt="TMAP">
              <div class="card-body">
                <h5 class="card-title">Audi A3 <span class="badge" style="background-color: #CD5C5C">Audi</span></h5>
                <div class="rent-price mb-3 fw-medium">
                  <span class="text" style="color: #DC143C">Rp.400.000/</span>day
                  <ul class="list-unstyled list-style-group">
                    <li class="border-bottom py-2 d-flex justify-content-between">
                      <span>Bahan bakar</span>
                      <span style="font-weight: 600">Bensin</span>
                    </li>
                    <li class="border-bottom py-2 d-flex justify-content-between">
                      <span>Jumlah Kursi</span>
                      <span style="font-weight: 600">5</span>
                    </li>
                    <li class="border-bottom py-2 d-flex justify-content-between">
                      <span>Transmisi</span>
                      <span style="font-weight: 600">Matic</span>
                    </li>
                  </ul>
                </div>
                <a href="/detail" class="seedetails-button btn">See Details</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card mb-4 shadow rounded">
              <div class="availibility-badge badge badge-custom bg-success text-white position-absolute">Available</div>
              <img src="images/cars/Honda HRV.jpg" class="card-img-top" alt="Honda HRV">
              <div class="card-body">
                <h5 class="card-title">Honda HRV <span class="badge" style="background-color: #CD5C5C">Honda</span></h5>
                <div class="rent-price mb-3 fw-medium">
                  <span class="text" style="color: #DC143C">Rp.300.000/</span>day
                  <ul class="list-unstyled list-style-group">
                    <li class="border-bottom py-2 d-flex justify-content-between">
                      <span>Bahan bakar</span>
                      <span style="font-weight: 600">Bensin</span>
                    </li>
                    <li class="border-bottom py-2 d-flex justify-content-between">
                      <span>Jumlah Kursi</span>
                      <span style="font-weight: 600">5</span>
                    </li>
                    <li class="border-bottom py-2 d-flex justify-content-between">
                      <span>Transmisi</span>
                      <span style="font-weight: 600">Matic</span>
                    </li>
                  </ul>
                </div>
                <a href="/detail" class="seedetails-button btn">See Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-center flex-column">
          <a href="/cars" class="viewmore-button shadow mb-5">View More</a>
        </div>
      </div>
    </div>
</div>

{{-- Testimonial --}}
<div class="testimonial-section">
  <div class="container d-flex align-items-center justify-content-center flex-column">
    <h3 class="testimonial-section-title mt-5" style="color: #dc143c">TESTIMONIAL</h3>
    <h1 class="testimonial-section-subtitle text-white fw-bold mt-2" style="text-shadow: 2px 2px #000">Review From Our Client</h1>
    <h6 class="testimonial-section-subtitle2 text-white mt-3 mb-3" style="text-align: center; text-shadow: 2px 2px #000"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut elit <br> tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</h5>
  </div>
  <div class="container">
    <div class="row mt-5">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card mb-4 shadow rounded">
          <div class="card-body">
            <p class="testi-desc text-black fw-medium" style="text-align: center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <div class="title d-flex flex-row">
              <img src="images/testi-peeps/People1.png" class="testi-peeps pt-4 me-3" style="float: left" width="50" alt="Giselle pict">
              <p class="testi-people-name fw-medium" style="margin-top: 10%">Aeri Uchinaga</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card mb-4 shadow rounded">
          <div class="card-body">
            <p class="testi-desc text-black fw-medium" style="text-align: center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <div class="title d-flex flex-row">
              <img src="images/testi-peeps/People2.png" class="testi-peeps pt-4 me-3" style="float: left" width="50" alt="Giselle pict">
              <p class="testi-people-name fw-medium" style="margin-top: 10%">Billy Davidson</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card mb-4 shadow rounded">
          <div class="card-body">
            <p class="testi-desc text-black fw-medium" style="text-align: center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <div class="title d-flex flex-row">
              <img src="images/testi-peeps/People3.png" class="testi-peeps pt-4 me-3" style="float: left" width="50" alt="Giselle pict">
              <p class="testi-people-name fw-medium" style="margin-top: 10%">Kanemoto Yoshinori</p>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>
</div>
@endsection