 <x-main-layout>
  <x-slot:title>Home</x-slot:title>

   <x-hero-section title="" subtitle="Scopri il mondo delle auto con articoli, recensioni e storie su quattro ruote. Il viaggio comincia qui." />


   <!-- HOMEPAGE -->
   <section class="container my-5">
  <div class="text-center">
    <h2 class="mb-4">Scopri il nostro mondo di auto, velocità e passione</h2>
    <p class="lead">
      In un mondo in continua evoluzione, il nostro blog è il punto di riferimento per tutti gli appassionati di auto. Dalle ultime novità ai modelli più iconici, esplora il nostro spazio dedicato al mondo delle quattro ruote.
      Scopri le diverse <strong>categorie di articoli</strong> pensate per guidarti nella tua passione per le auto:
    </p>
    <ul class="list-unstyled mt-4">
      <li><strong>🚗 Novità Auto</strong> – scopri i nuovi modelli, le innovazioni e le tendenze del settore automobilistico.</li>
      <li><strong>🏎️ Auto Sportive</strong> – un tuffo nel mondo delle auto ad alte prestazioni, per chi vive la velocità.</li>
      <li><strong>🔧 Manutenzione e Cura</strong> – consigli pratici per mantenere la tua auto sempre al meglio.</li>
      <li><strong>🚙 Fuoristrada e Avventura</strong> – articoli dedicati agli appassionati di veicoli 4x4 e avventure su strada.</li>
      <li><strong>🔌 Auto Elettriche</strong> – il futuro della mobilità: scopri tutto sulle auto elettriche e sostenibili.</li>
    </ul>
    <p class="mt-4">
      Che tu sia un appassionato di motori o semplicemente un curioso delle ultime novità nel mondo delle auto, sei nel posto giusto.
      <strong>Benvenuto nel tuo angolo di passione automobilistica.</strong>
    </p>
  </div>
</section>



   <!-- CARDS ARTICOLI -->
   <h4 class="mt-5 text-xl-center">Gli articoli più recenti</h4>

   <div class="container my-5">
     <div class="row g-4">
       @forelse ($articles as $article)
      <x-article-card  :article="$article" />
       @empty
       <p>Nessun articolo disponibile.</p>
       @endforelse
     </div>
   </div>

 </x-main-layout>