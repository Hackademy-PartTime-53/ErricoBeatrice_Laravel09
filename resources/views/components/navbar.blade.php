<div>
  <nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm mt-0">
    <div class="container-fluid">

      <!-- Logo con accento rosso -->
      <a class="navbar-brand fw-bold fs-4" href="/">
        <span style="color: #d62828;">Auto</span><span class="text-dark">Drive</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
              data-bs-target="#navbarSupportedContent" 
              aria-controls="navbarSupportedContent" 
              aria-expanded="false" 
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active text-dark" aria-current="page" href="{{ route('Allarticles') }}">Articoli</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About us
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Vieni a trovarci</a></li>
              <li><a class="dropdown-item" href="#">Prossimi incontri</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('form') }}">Contattaci</a></li>
              <li><a class="dropdown-item" href="{{ route('createArticle') }}">Pubblica Articolo</a></li>
            </ul>
          </li>

        </ul>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Cerca nel sito" aria-label="Search">
          <button class="btn btn-outline-danger" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</div>

