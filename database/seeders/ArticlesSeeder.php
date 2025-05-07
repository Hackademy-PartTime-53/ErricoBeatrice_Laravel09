<?php

namespace Database\Seeders;
use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles=[
            [
        
            'titolo' => 'Perché ho scelto un’auto ibrida plug-in',
            'data' => '2025-04-01',
            'introduzione' => 'Tra benzina e elettrico, ho trovato la mia via di mezzo.',
            'contenuto' => 'Dopo anni di guida con motori termici, ho deciso di passare a un’ibrida plug-in. In questo articolo ti racconto la mia esperienza, i pro, i contro e cosa devi sapere prima di fare questo passo.',
            'autore' => 'Luca Moretti',
        ],
        [
            
            'titolo' => 'Le city car più agili del 2025',
            'data' => '2025-03-27',
            'introduzione' => 'Piccole fuori, intelligenti dentro: le auto perfette per la città.',
            'contenuto' => 'Hai bisogno di un’auto piccola, pratica ma comoda? Ecco la mia selezione delle city car più interessanti, tra design, consumi e tecnologia.',
            'autore' => 'Elisa Bianchi',
        ],
        [
            
            'titolo' => 'I 5 errori più comuni quando si compra un’auto usata',
            'data' => '2025-03-22',
            'introduzione' => 'Non farti fregare: leggi questa guida prima di acquistare.',
            'contenuto' => 'Comprare usato può essere un affare… oppure un incubo. In questo articolo ti spiego gli errori che ho commesso (e che puoi evitare).',
            'autore' => 'Marco D’Angelo',
        ],
        [
            
            'titolo' => 'Come ho restaurato una Fiat 500 d’epoca',
            'data' => '2025-03-19',
            'introduzione' => 'Una passione diventata progetto: il mio restauro fai-da-te.',
            'contenuto' => 'Ho acquistato una vecchia Fiat 500 e, pezzo dopo pezzo, le ho ridato vita. Qui ti racconto i passaggi principali e qualche consiglio se vuoi iniziare anche tu.',
            'autore' => 'Federico Gallo',
        ],
        [
            
            'titolo' => 'Auto elettrica e viaggi lunghi: si può fare?',
            'data' => '2025-03-15',
            'introduzione' => 'Ansia da ricarica? Ti racconto il mio viaggio di 1.200 km.',
            'contenuto' => 'Viaggiare con un’auto elettrica è possibile, ma serve pianificazione. In questo articolo condivido le mie tappe, le app che ho usato e gli imprevisti.',
            'autore' => 'Chiara Leone',
        ],
        [
           
            'titolo' => 'Le migliori app per automobilisti nel 2025',
            'data' => '2025-03-10',
            'introduzione' => 'Dal parcheggio alla manutenzione, tutto a portata di smartphone.',
            'contenuto' => 'Gestire l’auto oggi è molto più semplice grazie alle app. Te ne consiglio 7 che uso ogni giorno e che ti cambieranno la vita da driver.',
            'autore' => 'Davide Rossi',
        ],
        [
            
            'titolo' => 'Guida notturna: 5 consigli per stare più sicuri',
            'data' => '2025-03-08',
            'introduzione' => 'La notte ha le sue insidie. Preparati a guidare meglio.',
            'contenuto' => 'Dalla pulizia dei fari al riposo adeguato, ti spiego come affrontare lunghi tragitti in notturna in modo più sicuro e consapevole.',
            'autore' => 'Francesca Neri',
        ],
        [
            
            'titolo' => 'I modelli SUV più amati dagli italiani',
            'data' => '2025-03-05',
            'introduzione' => 'Spazio, comfort e stile: ecco perché piacciono tanto.',
            'contenuto' => 'Analizziamo i SUV più venduti in Italia e perché hanno conquistato il cuore (e il garage) degli automobilisti. Bonus: modelli alternativi.',
            'autore' => 'Lorenzo Vitale',
        ],
        [
            
            'titolo' => 'Cosa controllare prima di un lungo viaggio in auto',
            'data' => '2025-03-02',
            'introduzione' => 'Checklist completa per partire in sicurezza.',
            'contenuto' => 'Dalle gomme all’olio, ecco cosa non devi dimenticare. Un articolo pratico da stampare e tenere in auto prima di ogni partenza.',
            'autore' => 'Martina Verdi',
        ],
        [
            
            'titolo' => 'Auto a noleggio a lungo termine: conviene davvero?',
            'data' => '2025-02-28',
            'introduzione' => 'Sempre più persone ci pensano: ecco la mia esperienza.',
            'contenuto' => 'Niente assicurazione, niente bollo, niente sorprese? Ti racconto cosa vuol dire davvero vivere con un’auto a noleggio, e per chi è la scelta giusta.',
            'autore' => 'Alessandro Conti',
        ],
        [
            
            'titolo' => 'I migliori accessori per personalizzare la tua auto',
            'data' => '2025-02-24',
            'introduzione' => 'Un’auto può diventare un piccolo mondo su misura.',
            'contenuto' => 'Dai supporti per smartphone ai profumatori naturali, passando per le luci LED: ecco cosa puoi aggiungere alla tua auto per renderla unica.',
            'autore' => 'Beatrice Gallo',
        ],
        [
            
            'titolo' => 'Quando conviene cambiare le gomme?',
            'data' => '2025-02-20',
            'introduzione' => 'Non solo per legge: è questione di sicurezza.',
            'contenuto' => 'Ti spiego come capire se è il momento di cambiare gli pneumatici e quali sono i segnali da non ignorare.',
            'autore' => 'Tommaso Fabbri',
        ],
        [
           
            'titolo' => 'La mia prima auto: emozione, libertà e nostalgia',
            'data' => '2025-02-15',
            'introduzione' => 'Una storia tra ricordi e motore.',
            'contenuto' => 'Tutti ricordiamo la prima auto. La mia è stata una Punto del ‘99, e qui ti racconto cosa ha significato per me (e come l’ho lasciata andare).',
            'autore' => 'Sofia Marchetti',
        ],
        [
            
            'titolo' => 'Differenze tra auto ibride, plug-in ed elettriche',
            'data' => '2025-02-10',
            'introduzione' => 'Tre mondi simili, ma molto diversi.',
            'contenuto' => 'Cerchi chiarezza? In questo articolo ti spiego con parole semplici le differenze tecniche, economiche e d’uso tra le principali alternative al motore termico.',
            'autore' => 'Nicola Ferretti',
        ],
        [
           
            'titolo' => 'Come mantenere l’auto pulita (anche con poco tempo)',
            'data' => '2025-02-07',
            'introduzione' => 'Piccole abitudini, grande differenza.',
            'contenuto' => 'Tra lavoro, figli e traffico, è difficile trovare tempo. Ma bastano pochi accorgimenti per avere un’auto sempre ordinata e gradevole.',
            'autore' => 'Valentina Russo',
        ],
        ];
        foreach ($articles as $article){
            Article::create ($article);
        }
    }
}
