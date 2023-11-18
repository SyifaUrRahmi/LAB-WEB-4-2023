<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD-Tugas 9</title>
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
            MyData.
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
                <a class="nav-link text-dark" href="/index">Data</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link text-dark" href="/index/create">Create</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container mt-4">
      @yield('welcome')
    </div>

    <div class="container mt-4">
      @include('komponen/pesan')
    </div>

    <div class="container mt-4">
      @yield('index')
    </div>

    <div class="container mt-4">
      @yield('create')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>