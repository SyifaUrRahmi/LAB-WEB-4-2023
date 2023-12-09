<!-- Navbar Merah -->

<style>
    .navbar .container {
        padding: 0 5%;
    }

    .navbar .container .btn{
        width: 100px;
    }

    .navbar .navbar-nav .nav-link {
       color: #fff;
    }
    
    .brand-logo {
        color: #fff;
    }
    .bi-person {
        margin-left: -4px;
    }
</style>

<nav class="navbar navbar-expand-lg bg-danger sticky-top py-3 shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}"><span class="brand-logo fw-bold fs-3 my-auto">GO Smar+</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="nav-link my-auto active me-4" aria-current="page" href="{{ route('home') }}">Home</a>
            <a class="nav-link my-auto me-4" href="{{ route('courses.index') }}">Courses</a>
            
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle fs-3"></i>
                </a>
                <ul class="dropdown-menu">
                    @if(auth()->user() && auth()->user()->role !== 'Siswa')
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-bar-chart-line me-2"></i>Dashboard</a></li>
                    @endif
                    
                    <li><a class="dropdown-item" href="{{ route('profile.show') }}"><i class="bi bi-person fs-5 me-1"></i>Profile</a></li>

                    <li>
                    <form action="/logout" method="post">
                        @csrf
                        
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right me-1"></i>Logout</button>
                    </form>
                    </li>
                </ul>
                @else
                <a class="nav-link my-auto me-4" href="{{ route('login') }}">Masuk</a>
                <a class="nav-link " href="/registrasi"><button class="btn btn-outline-secondary text-white fw-medium rounded-pill">Daftar</button></a>
                @endauth
            </ul>
        </div>
      </div>
    </div>
  </nav>
