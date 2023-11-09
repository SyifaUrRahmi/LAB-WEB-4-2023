<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Pertemuan 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .nav-item{
            transition: all 0.2s;
        }

        .nav-item:hover{
            border-bottom: 3px solid #87CEEB;
        }
    </style>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-secondary sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand ms-5 fw-bold fs-3" href="/">
            ClassicModels.
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse me-5" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item me-4">
                <a class="nav-link text-dark" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link text-dark" href="/products">Gallery</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Shop
                </a>
                <ul class="dropdown-menu">
                    @foreach ($productlines as $item)
                    <li><a class="dropdown-item" href="/products/{{ $item->productLine }}">
                        {{ $item->productLine }}
                        </a>
                    </li>
                    @endforeach
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      {{-- Carousel --}}
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://i.pinimg.com/564x/22/0f/23/220f23f87466fa7b4269e6e6055a3070.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block mb-4">
                    <h1>1972 Alfa Romeo GTA</h1>
                    <p>Features include: Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.</p>
                    <a href="/products/S10_4757" class="btn btn-primary">View Shop</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/564x/92/b9/30/92b93044f885b1b24ac7a14dafcdee1a.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block mb-4">
                    <h1>1936 Harley Davidson El Knucklehead</h1>
                    <p>Intricately detailed with chrome accents and trim, official die-struck logos and baked enamel finish.</p>
                    <a href="/products/S18_2625" class="btn btn-primary">View Shop</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/564x/a4/8c/59/a48c597eeaa6dcd36dc95e3904bf400b.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block mb-4">
                    <h1>1937 Lincoln Berline</h1>
                    <p>Features opening engine cover, doors, trunk, and fuel filler cap. Color black.</p>
                    <a href="/products/S18_1342" class="btn btn-primary">View Shop</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>