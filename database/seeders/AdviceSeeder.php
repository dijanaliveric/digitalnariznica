<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        $items = [
            [
                'title'   => 'Fiskalizacija eRačunom: korak po korak',
                'content' => '
                    <p>Fiskalizacija eRačunom nije više samo preporuka – zakonska je obveza. 
                       Prvo se prijavite u sustav eRačun i instalirajte fiskalni modul na Vašem računalu ili POS uređaju.</p>
                    <p>Zatim, u aplikaciji odaberite “Novi račun”, unesite podatke o kupcu i artiklima te kliknite “Fiskaliziraj”. 
                       Sustav će automatski generirati JIR i ZKI oznake, koje je potrebno pohraniti uz kopiju računa.</p>
                    <img src="/storage/advice/fiskalizacija-step1.png"
                         alt="Prikaz eRačun sučelja"
                         class="w-full max-w-lg mt-4 rounded-md shadow-sm">
                    <p>Na kraju svakog dana izvezite „Dnevno izvješće” i pošaljite ga Poreznoj upravi.  
                       Redovitim praćenjem statusa putem ePorezne smanjujete rizik od prekršajnih kazni.</p>
                ',
            ],
            [
                'title'   => 'Porez na dohodak za samostalne djelatnosti: često postavljana pitanja',
                'content' => '
                    <p>Porez na dohodak za samostalne djelatnosti obračunava se progresivnom ljestvicom. 
                       Ako Vaš godišnji dohodak prelazi osnovni prag, stopa raste s 20 % na 30 %.</p>
                    <img src="/storage/advice/tax-form.png"
                         alt="Ispravno popunjeni PD dohoda obrazac"
                         class="w-full max-w-lg mt-4 rounded-md shadow-sm">
                    <p>Ne zaboravite da imate pravo na osobni odbitak, doprinose za mirovinsko i zdravstveno osiguranje, 
                       te na sve porezne olakšice (npr. za djecu i uzdržavane članove obitelji).</p>
                    <p>Obračun dostavite do 15. veljače za prethodnu godinu i štedite vrijeme uz pripremljene predloške
                       u digitalnom obliku.</p>
                ',
            ],
            [
                'title'   => 'Digitalno knjigovodstvo: kako odabrati pravi alat',
                'content' => '
                    <p>Digitalni računovodstveni sustavi štede stotine sati ručnog unosa. Pri odabiru alata obratite pozornost na:</p>
                    <ul class="list-disc list-inside mb-4">
                      <li>Automatsko povlačenje podataka iz banke</li>
                      <li>Povezivanje s fiskalnim uređajima</li>
                      <li>Integraciju s e-ray računima i portalima</li>
                    </ul>
                    <img src="/storage/advice/kni-tool.png"
                         alt="Prikaz sučelja knjigovodstvenog alata"
                         class="w-full max-w-lg mt-4 rounded-md shadow-sm">
                    <p>Odaberite rješenje koje omogućava mobilni pristup, jednostavno arhiviranje i detaljna financijska izvješća 
                       na samo jedan klik.</p>
                ',
            ],
            [
                'title'   => 'Pravilno obračunavanje plaća i doprinosa: vaši koraci',
                'content' => '
                    <p>Obračun plaća započinje točnim unosom osnovica: neto plaća, porezne osnovice i doprinosi. 
                       Korak po korak:</p>
                    <ol class="list-decimal list-inside mb-4">
                      <li>Unesite bruto osnovicu i obračunajte doprinos za mirovinsko.</li>
                      <li>Automatski izračunajte porez na dohodak prema važećim stopama.</li>
                      <li>Provjerite neto iznos i priložite obračune Poreznoj upravi.</li>
                    </ol>
                    <img src="/storage/advice/payroll-chart.png"
                         alt="Dijagram obračuna plaća"
                         class="w-full max-w-lg mt-4 rounded-md shadow-sm">
                    <p>Korištenje predložaka i unaprijed definiranih profila zaposlenika smanjuje rizik od grešaka
                       te ubrzava proces obračuna i isplate plaća.</p>
                ',
            ],
            [
                'title'   => 'Upravljanje likvidnošću u malim i srednjim poduzećima',
                'content' => '
                    <p>Ključ stabilnog poslovanja je pravovremena analitika novčanih tokova.  
                       Redovito sastavljajte mjesečne izvještaje o priljevima i odlivima gotovine.</p>
                    <img src="/storage/advice/cash-flow-graph.png"
                         alt="Primjer grafa novčanog toka"
                         class="w-full max-w-lg mt-4 rounded-md shadow-sm">
                    <p>Preporučujemo korištenje razdoblja obračuna od 7, 14 i 30 dana kako biste otkrili 
                       potencijalne „uska grla” ili sezonske oscilacije.</p>
                    <p>Uvedite automatizirano slanje podsjetnika za fakture i pratite rokove plaćanja 
                       putem elektroničkih obavijesti.</p>
                ',
            ],
            [
                'title'   => 'Optimizacija PDV-a: savjeti i trikovi',
                'content' => '
                    <p>PDV je često najveći stavka u troškovniku. Evo nekoliko trikova:</p>
                    <ul class="list-disc list-inside mb-4">
                      <li>Korištenje unatrag preddoreznih računa za brži povrat</li>
                      <li>Ispravna klasifikacija ulaznih i izlaznih računa</li>
                      <li>Automatizirani porezni podsjetnici prije roka</li>
                    </ul>
                    <img src="/storage/advice/pdv-invoice.png"
                         alt="Digitalni PDV obrazac"
                         class="w-full max-w-lg mt-4 rounded-md shadow-sm">
                    <p>Redovitim uparivanjem računa i automatskom izradom PDV obrasca smanjujete administrativne troškove
                       i rizik od kašnjenja plaćanja.</p>
                ',
            ],
        ];

        foreach ($items as $item) {
            DB::table('advice')
              ->updateOrInsert(
                  ['title' => $item['title']],
                  [
                    'content'    => trim($item['content']),
                    'created_at' => $now,
                    'updated_at' => $now,
                  ]
              );
        }
    }
}
