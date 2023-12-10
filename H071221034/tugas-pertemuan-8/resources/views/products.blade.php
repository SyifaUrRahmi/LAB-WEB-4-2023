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

        .card{
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

    {{-- Card --}}
    
    <div class="container mt-4">
      <div class="row">
          @isset($description)
              <div class="col-md-12" style="text-align: justify;">
                  <p>{{ $description }}</p>
              </div>
          @endisset

            @foreach ($products as $item)
                <div class="col-4 mb-4">
                    <div class="card">
                        <img src="https://i.pinimg.com/564x/22/0f/23/220f23f87466fa7b4269e6e6055a3070.jpg" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                          <h5 class="card-title">{{ $item->productName }}
                            <span class="badge text-bg-primary">{{ $item->productLine }}</span>
                          </h5>
                            <p class="card-text">{{ substr($item->productDescription, 0, 100) }}...</p>
                            <h6 class="text-end mb-3">Stock: {{ $item->quantityInStock }}</h6>
                            <a href="/products/{{ $item->productCode }}" class="btn btn-primary mt-auto">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</body>
</html>
