<div class="col-md-4 d-flex">
         <div class="card h-100 shadow-sm d-flex flex-column">
           <div class="card-body d-flex flex-column">
             <h5 class="card-title">{{ $article['titolo'] }}</h5>
             <h6 class="card-subtitle mb-2 text-muted">{{ $article['data'] }} ··· {{ $article['autore'] }}</h6>
             <p class="card-text">{{ $article['introduzione'] }}</p>
             <div class="mt-auto">
              <img src="{{ asset($article->image) }}" alt="">
               <a href="{{ route('paginadettaglio', $article['id']) }}" class="btn btn-dark">Leggi subito</a>
             </div>
           </div>
         </div>
       </div>