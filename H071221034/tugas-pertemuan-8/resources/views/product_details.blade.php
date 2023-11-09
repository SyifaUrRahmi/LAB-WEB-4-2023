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

        .card {
            height: 100%;
        }

        .card-title {
            letter-spacing: 0.5px;
            line-height: 1.5;
        }

        .card-body {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-text {
            flex-grow: 1;
            overflow: hidden;
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

    <div class="container">
        @foreach ($productdetails as $item)
            <div class="row">
                <div class="col-md-5 mt-5">
                    <img src="https://i.pinimg.com/564x/22/0f/23/220f23f87466fa7b4269e6e6055a3070.jpg" class="img-fluid" alt="Product Image" >
                </div>
                <div class="col-md-7 mt-3">
                    <h2>{{ $item->productName }}</h2>
                    <span class="badge text-bg-primary">{{ $item->productLine }}</span>
                    <span class="badge text-bg-secondary">{{ $item->productVendor }}</span>
                    <p class="mt-3" style="text-align: justify;">{{ $item->productDescription }}</p>

                    <div class="col-md-6 border border-primary py-3 ps-4" style="border-radius: 5px;">
                        <h5 class="text-decoration-underline">Order {{ $item->productName }}</h5>

                        <div class="row align-items-center g-2">
                            <div class="btn-group btn-group-sm col-md-5" role="group" aria-label="Small button group">
                                <button type="button" class="btn btn-outline-primary">-</button>
                                <button type="button" class="btn btn-outline-primary">0</button>
                                <button type="button" class="btn btn-outline-primary">+</button>
                            </div>
                            <p class="col-md-5 mt-3">Stock:
                                <span style="font-weight: bold;">{{ $item->quantityInStock }}</span>
                            </p>
                        </div>

                        <div class="row justify-content-between align-items-center mt-3">
                            <h6 class="col-md-5">Product Scale</h6>
                            <h4 class="col-md-5">{{ $item->productScale }}</h4>
                        </div>

                        <div class="row justify-content-between align-items-center mt-1">
                            <h6 class="col-md-5">Price</h6>
                            <h4 class="col-md-5">${{ $item->buyPrice }}</h4>
                        </div>

                        <div class="d-flex mt-3">
                            <button class="btn btn-primary col-md-5 me-3">Buy Now</button>
                            <button class="btn btn-primary col-md-5">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>