<nav class="container-fluid navbar navbar-expand-lg bg-body-tertiary position-fixed">
  <div class="row justify-content-center align-items-center">
    <div class="col-12">
      <a class="navbar-brand" href="#">
        <img src="../img/Icona_PS.png" class="iconaNavbar" alt="logo pomosoftware">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
  <div class="row collapse navbar-collapse" id="navbarSupportedContent">
    <div class="col-12">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-around">
        <li class="nav-item">
          <a class="nav-link active vociNavbar" aria-current="page" href="{{ route('homepage') }}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link vociNavbar annunciNavbar" aria-current="page" href="#">ANNUNCI</a>
        </li>
        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle vociNavbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Guest
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item vociNavbar" href="{{ route('register') }}">Registrati</a></li>
            <li><a class="dropdown-item vociNavbar" href="{{ route('login') }}">Login</a></li>
          </ul>
        </li>
        @endguest
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item vociNavbar" href="#">Action</a></li>
            <li><a class="dropdown-item vociNavbar" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item vociNavbar" href="#" onclick="event.preventDefault(); document.querySelector('#logout').submit()">Logout</a></li>
            <form method="POST" action="{{ route('logout') }}" id="logout">
              @csrf
            </form>
          </ul>
        </li>
        @endauth
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark vociNavbar" type="submit">Cerca</button>
      </form>
    </div>
  </div>
  
  
</nav>