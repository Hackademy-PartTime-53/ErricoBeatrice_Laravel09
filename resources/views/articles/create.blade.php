<x-main-layout>
<x-slot:title>Pubblica articolo</x-slot:title>

<x-hero-section title="" subtitle="Scopri il mondo delle auto con articoli, recensioni e storie su quattro ruote. Il viaggio comincia qui." />

<div class="container py-5 d-flex justify-content-center align-items-center">

  
<form class="col-md-6" method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data" >
    @csrf
  <div class="mb-3">
    <label for="titolo" class="form-label">Titolo</label>
    <input type="text" class="form-control @error('titolo') is-invalid @enderror " name="titolo" aria-describedby="titolo" value="{{old('title')}}">
    @error('titolo') <span class="small text-danger">{{ $message }}</span>@enderror
    
  </div>
  <div class="mb-3">
    <label for="data" class="form-label">Data</label>
    <input type="data" class="form-control @error('data') is-invalid @enderror" name="data" value="{{old('data')}}" aria-describedby="data">
    @error('data') <span class="small text-danger">{{ $message }}</span>@enderror
  </div>
  <div class="mb-3">
    <label for="introduzione" class="form-label">Introduzione</label>
    <input type="text" class="form-control @error('introduzione') is-invalid @enderror" name="introduzione" value="{{old('introduzione')}}" aria-describedby="text">
    @error('introduzione') <span class="small text-danger">{{ $message }}</span>@enderror
  </div>
  <div class="form-label mb-3">
  <label for="contenuto">Contenuto Articolo</label>
  <textarea class="form-control @error('contenuto') is-invalid @enderror" placeholder="..." name="contenuto"  style="height: 100px" >{{old('contenuto')}}</textarea>
  @error('contenuto') <span class="small text-danger">{{ $message }}</span>@enderror
 </div>
 <div class="mb-3">
    <label for="autore" class="form-label">Nome e Cognome autore</label>
    <input type="text" class="form-control @error('autore') is-invalid @enderror" name="autore" value="{{old('autore')}}" aria-describedby="text">
    @error('autore') <span class="small text-danger">{{ $message }}</span>@enderror
  </div>
  <div class="mb-3">
    <label for="immagine" class="form-label">Inserisci Immagine</label>
    <input type="file" class="form-control @error('immagine') is-invalid @enderror" name="immagine" aria-describedby="text">
    @error('immagine') <span class="small text-danger">{{ $message }}</span>@enderror
  </div>
  <button type="submit" class="btn btn-primary">Pubblica ora</button>
</form>
</div>
<!-- <div>
    @if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
      <li class="text-danger"> {{$error}} </li>
    @endforeach
  </ul>
    @endif
  </div> -->
</x-main-layout>
