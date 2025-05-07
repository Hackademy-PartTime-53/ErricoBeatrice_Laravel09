<x-main-layout>
<x-slot:title>Articoli</x-slot:title>

   <!-- HERO-SECTION -->
 <x-hero-section title="" subtitle="Scopri il mondo delle auto con articoli, recensioni e storie su quattro ruote. Il viaggio comincia qui." />

<!-- TABELLA TUTTI GLI ARTICOLI -->
  <div class="container p-5 mx-auto">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">*</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Data</th>
                        <th scope="col">Autore</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                   @forelse ($articles as $article)
                       <x-article-tabella :article="$article" />
                    @empty
                    <p>Non ci sono articoli</p>
                    @endforelse
                </tbody>
            </table>
        </div>

</x-main-layout>