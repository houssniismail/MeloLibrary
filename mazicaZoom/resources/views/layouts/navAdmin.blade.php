<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{asset('/bands')}}">bandes</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{asset('/cretebandes')}}">ajouter une bandes</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="{{asset('/pieceMusical')}}">piece musical</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{asset('/createpiece')}}">ajouter une piece musical</a>
          </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="{{asset('/cretebandes')}}">artists</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{asset('/cretebandes')}}">comments</a>
        </li> --}}
      </ul>
    </div>
  </nav>