<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <!-- Card Articolo -->
        <div class="card shadow rounded-4 p-4 bg-dark text-light">
          <!-- Titolo -->
          <h1 class="display-5 fw-bold mb-3 text-light">{{ $article->titolo }}</h1>

          <!-- Metadati -->
          <div class="mb-4 text-muted small">
            Pubblicato il <strong>{{ $article->data }}</strong> da <strong>{{ $article->autore }}</strong>
          </div>

          <!-- Introduzione -->
          <p class="lead mb-4">{{ $article->introduzione }}</p>

          <hr class="border-secondary">

          <!-- Contenuto -->
          <div class="article-content fs-5">
            {!! nl2br(e($article->contenuto)) !!}
          </div>

          <!-- Back button -->
          <div class="mt-5">
            <a href="{{ route('Allarticles') }}" class="btn btn-outline-light rounded-pill px-4">← Torna agli articoli</a>
          </div>
        </div>
      </div>
    </div>
  </div>