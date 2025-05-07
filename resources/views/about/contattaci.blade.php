<x-main-layout>
  <x-slot:title>Contattaci</x-slot:title>

   <x-hero-section title="" subtitle="Vuoi avere un contatto diretto con noi? Compila il form sotto e inviaci una e-mail" />


   @if (session('success'))
    <div class="container mx-auto alert alert-success">
        {{ session('success') }}
    </div>
  @endif

  @if (session('error'))
    <div class="container mx-auto alert alert-danger">
        {{ session('error') }}
    </div>
  @endif
  @if (session('warning'))
    <div class="container mx-auto alert alert-warning">
        {{ session('warning') }}
    </div>
  @endif







   <x-form />

   </x-main-layout>
