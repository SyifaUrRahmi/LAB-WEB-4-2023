<nav class="navbar navbar-expand-lg navbar-dark"
  style="background-color: #61677A; position: sticky; top: 0; z-index: 1000;">
  <div class="container-fluid">

    <a class="navbar-brand" href="#"><!-- Your logo or brand name here --></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <form class="d-flex mt-4 ms-auto" action="{{ route('pengajar.search') }}" method="GET" role="search"
        style="margin: 16px;">
        <input class="form-control me-2" type="search" name="nama" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('pengajar') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pengajar.profile') }}">User Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('course.index') }}">Course Management</a></li>
            <li><a class="dropdown-item" href="{{ route('content.index') }}">Content Management</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="document.getElementById('logout-form').submit()" href="#">
            <i class="fas fa-sign-out-alt"></i>
            Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="post">
            @csrf
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>