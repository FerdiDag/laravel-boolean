<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" alt="Boolean logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::route()->getName() == 'home' ? 'active-l' :  '' }}">
                <a class="nav-link" href="{{ route('home') }}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">CORSO</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">DOPO IL CORSO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">LEZIONE GRATUITA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">ASSUMI I NOSTRI STUDENTI</a>
            </li>
            <li class="button">
                <a href="#" class="myButton">CANDIDATI ORA</a>
            </li>
            {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">HOME</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> --}}
        </ul>
    </div>
</nav>
