<section class="py-5 bg-light text-dark">
  <div class="container">
    <div class="row align-items-center">

      <!-- Testo -->
      <div class="col-md-6 text-center text-md-start">
        <h1 class="display-4 fw-bold">
          <span class="text-danger">Velocità</span>, <span class="text-dark">stile</span> e <span class="text-danger">passione</span>
        </h1>
        <p class="lead mt-3">{{$subtitle}}</p>
        <a href="{{ route('Allarticles') }}" class="btn btn-danger btn-lg mt-4 shadow">Inizia a leggere</a>
      </div>

      <!-- Immagine -->
      <div class="col-md-6 mt-4 mt-md-0 text-center">
      <img src="{{ asset('image/pexels-highervibration-12652577.jpg') }}" class="img-fluid rounded shadow" alt="Auto sportiva" style="width: 400px; height: 500px;">
      </div>
      
    </div>
  </div>
</section>