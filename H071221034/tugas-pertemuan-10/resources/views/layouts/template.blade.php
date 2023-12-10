<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Rental Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
      .navbar{
        background-color: #fff;
        height: 80px;
        margin: 20px;
        border-radius: 16px;
        padding: 0.5rem;
      }

      .navbar-brand{
        font-weight: 500;
        color: #DC143C;
        font-size: 24px;
        text-shadow: 2px 2px #c9c9c9;
        transition: 0.3s;
      }

      .navbar-brand:hover{
        color: #DC143C;
      }

      .login-button{
        background-color: #CD5C5C;
        color: #fff;
        font-size: 14px;
        padding : 8px 20px;
        border-radius: 50px;
        text-decoration: none;
        transition: 0.3s;
      }

      .login-button:hover{
        background-color: #F08080;
      }

      .navbar-toggler{
        border: none;
      }

      .navbar-toggler:focus, .btn-close:focus{
        box-shadow: none;
      }

      .nav-link{
        color: #666777;
        font-weight: 500;
        position: relative;
      }

      .nav-link:hover{
        color: #000000;
      }

      @media (width > 991px){
        .nav-link{
          color: #000000;
          font-weight: 500;
          position: relative;
        }

        .nav-link::before{
          content: "";
          position: absolute;
          bottom: 0;
          left: 50%;
          transform: translateX(-50%);
          width: 0;
          height: 2px;
          background-color: #CD5C5C;
          visibility: hidden;
          transition: 0.3s ease-in-out;
        }

        .nav-link:hover::before{
          width: 100%;
          visibility: visible;
        }
      }
    </style>
</head>
<body>
    {{-- Navbar --}} 
    <nav class="navbar navbar-expand-lg fixed-top shadow">
      <div class="container">
        <a class="navbar-brand me-auto" href="/">MyCars.</a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MyCars.</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link mx-lg-2" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="/cars">Cars</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">Drivers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">About</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="/contact">Contact</a>
              </li>
            </ul>
          </div>  
        </div>
        <a href="/login" class="login-button">Login</a>
        <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav> 

    @yield('home')
    @yield('contact')
    @yield('detail')
    @yield('cars-products')

    {{-- Footer --}}
    <footer class="bg-dark text-white pt-5 pb-4">
      <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 fw-bold" style="color: #CD5C5C">MyCars.</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 fw-bold" style="color: #CD5C5C">Get In Touch</h5>
            <div class="title d-flex flex-row">
              <i class="bi bi-geo-alt-fill me-2"></i>
              <h6 class="fw-normal">Tanjung Bunga</h6>
            </div>
            <div class="title d-flex flex-row">
              <i class="bi bi-envelope-fill me-2"></i>
              <h6 class="fw-normal">anymail@mail.com</h6>
            </div>
            <div class="title d-flex flex-row">
              <i class="bi bi-telephone-fill me-2"></i>
              <h6 class="fw-normal">+0421*****</h6>
            </div>
            <div class="title d-flex flex-row">
              <i class="bi bi-clock-fill me-2"></i>
              <h6 class="fw-normal">10 AM - 18 AM</h6>
            </div>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 fw-bold" style="color: #CD5C5C">Quick Links</h5>
            <p><a href="/" class="text-white" style="text-decoration: none">Home</a></p>
            <p><a href="#" class="text-white" style="text-decoration: none">About</a></p>
            <p><a href="#" class="text-white" style="text-decoration: none">FAQs</a></p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 fw-bold" style="color: #CD5C5C">Contact</h5>
            <p>adsjdwjdskdfjwo@gmail.com</p>
            <p>+628**********, 08********** </p>
          </div>
          <hr class="mb-1">
          <div class="row align-items-center">
            <div class="col-md-7 col-lg-8 mt-5">
              <p>Copyright &copy;2023 All rights reserved by:
                <a href="/" style="text-decoration: none"><strong style="color: #CD5C5C">MyCars.</strong></a>
              </p>
            </div>
            <div class="col-md-5 col-lg-4 mt-2">
              <div class="text-center text-md-right">
                <ul class="list-unstyled list-inline"></ul>
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px"><i class="bi bi-facebook"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px"><i class="bi bi-twitter"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px"><i class="bi bi-instagram"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px"><i class="bi bi-linkedin"></i></a>
                  </li>  
                  <li class="list-inline-item"> 
                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px"><i class="bi bi-whatsapp"></i></a>
                  </li>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>