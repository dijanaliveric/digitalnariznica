<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        $programs = [
            [
                'title'       => 'Potpora MSP-ovima za internacionalizaciju (PK.1.3.10)',
                'description' => 'Ministarstvo gospodarstva 3. lipnja 2025. otvorilo je stalni Poziv na dostavu projektnih prijedloga u okviru Programa Konkurentnost i kohezija 2021.–2027. Namijenjen je malim i srednjim poduzećima za pokriće troškova sudjelovanja na sajmovima, izrade tržišnih studija, usluga prevođenja i carinskog savjetovanja radi širenja na inozemna tržišta.',
                'link'        => 'https://investcroatia.gov.hr/en/virtual-workshop/',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'title'       => 'Mikrokrediti za mikro i mala poduzeća (ESF+)',
                'description' => 'Hrvatska je u okviru Europskog socijalnog fonda Plus (ESF+) pokrenula instrument mikrokredita za mikro i mala poduzeća radi jačanja poduzetništva, poticanja ulaganja i otvaranja radnih mjesta. Krediti se odobravaju putem ovlaštenih financijskih posrednika uz povoljne kamatne stope.',
                'link'        => 'https://european-social-fund-plus.ec.europa.eu/en/projects/microloans-micro-and-small-businesses-boost-growth-and-inclusion-croatia',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'title'       => 'InvestEU Advisory Hub',
                'description' => 'InvestEU Advisory Hub centralna je platforma Europske unije za pružanje tehničke i savjetodavne potpore nositeljima projekata i posrednicima u pripremi bankabilnih investicija. Pomaže u izradi studija izvodljivosti, poslovnih planova, pravno-financijskom strukturiranju i povezivanju s relevantnim stručnjacima.',
                'link'        => 'https://investeu.europa.eu/investeu-programme/investeu-advisory-hub_en',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'title'       => 'Jednokratne potpore za samozapošljavanje 2025.',
                'description' => 'U okviru programa potpore samozapošljavanju, novi poduzetnici, osobito mladi i nezaposleni, mogu ostvariti jednokratne potpore do 60.000 HRK za pokriće troškova opreme, najma prostora, licence i početnog obrtnog kapitala, uz besplatnu mentorsku i edukativnu podršku.',
                'link'        => 'https://iaudit.hr/en/self-employment-grants-in-2025/',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'title'       => 'EIT Community Hub Hrvatska',
                'description' => 'EIT Community Hub Hrvatska povezuje inovativne poduzetnike s paneuropskim zajednicama znanja i inovacija, pružajući bespovratne potpore, programe osposobljavanja, umrežavanje i podršku u plasmanu proizvoda. Dosad je dodijeljeno više od 12 milijuna EUR, a kroz programe je prošlo više od 2.500 sudionika.',
                'link'        => 'https://eit-ris.eu/croatia/',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
        ];

        foreach ($programs as $program) {
            DB::table('programs')
              ->updateOrInsert(
                  ['title' => $program['title']],
                  $program
              );
        }
    }
}
