<nav class="container-fluid navbar navbar-expand-lg coloreNavbar position-fixed">
  <div class="row justify-content-center align-items-center">
    <div class="col-12">
      <a class="navbar-brand ms-3" href="#">
        <img src="/img/Icona_PS.png" class="iconaNavbar" alt="logo pomosoftware">
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
          <a class="nav-link vociNavbar coloreNavTitle" aria-current="page" href="{{ route('homepage') }}">HOME</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle vociNavbar coloreNavTitle" href="#" id="serviziDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CATEGORIE
          </a>
          <ul class="dropdown-menu">
            @foreach ($categories as $category)
            <li><a class="dropdown-item vociNavbar coloreNavTitle" href="{{ route('byCategory', ['category' => $category]) }}">{{$category->name}}</a></li>
            @if (!$loop->last)
              <hr class="dropdown-divider">
            @endif
            @endforeach 
          </ul>
        </li>        
        <li class="nav-item">
          <a class="nav-link annunciNavbar vociNavbar coloreNavTitle" aria-current="page" href="{{route('article.index')}}">ANNUNCI</a>
        </li>
        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle vociNavbar coloreNavTitle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            GUEST
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item vociNavbar coloreNavTitle" href="{{ route('register') }}">Registrati</a></li>
            <li><a class="dropdown-item vociNavbar coloreNavTitle" href="{{ route('login') }}">Login</a></li>
          </ul>
        </li>
        @endguest
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle vociNavbar coloreNavTitle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{route('create.article')}}" class="dropdown-item vociNavbar coloreNavTitle">Crea</a></li>
            <li><a class="dropdown-item vociNavbar coloreNavTitle" href="#">Action</a></li>
            <li><a class="dropdown-item vociNavbar coloreNavTitle" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item vociNavbar coloreNavTitle" href="#" onclick="event.preventDefault(); document.querySelector('#logout').submit()">Logout</a></li>
            <form method="POST" action="{{ route('logout') }}" id="logout">
              @csrf
            </form>
          </ul>
        </li>
        @endauth
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn vociNavbar coloreNavTitle me-3" type="submit">Cerca</button>
      </form>
    </div>
  </div>
</nav>