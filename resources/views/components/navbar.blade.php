<nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3">
    <div class="container-fluid">
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'homepage') active @endif" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'book.create') active @endif" href="{{route('book.create')}}">Inserisci un libro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'book.index') active @endif" href="{{route('book.index')}}">Lista</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Contattaci</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>