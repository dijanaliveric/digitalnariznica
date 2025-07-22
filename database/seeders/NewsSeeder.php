<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        $items = [
            [
                'title'        => 'EU Expands SME Support Fund in 2025',
                'content'      => '<p>Europska unija je danas najavila proširenje fonda za potporu malim i srednjim poduzetnicima u 2025. godini.</p><p>Detalje potražite na <a href="https://ec.europa.eu/commission/presscorner/detail/en/ip_24_1234">službenoj stranici Komisije</a>.</p>',
                'image_url'    => 'news/europe-business.jpg',
                'published_at' => $now,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
            [
                'title'        => 'Digitalizacija Knjigovodstva: Novi Alati za 2025.',
                'content'      => '<p>Platforma Bookify lansirala je niz modula za automatizaciju obračuna poreza i obračuna plaća.</p><p>Više informacija potražite na <a href="https://bookify.com/hr/features">njihovoj službenoj stranici</a>.</p>',
                'image_url'    => 'news/accounting-software.jpg',
                'published_at' => $now,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
            [
                'title'        => 'Knjigovodstveni Trendovi: Blockchain i Fintech',
                'content'      => '<p>Blockchain tehnologija postaje ključna za osiguranje nepromjenjivosti financijskih zapisa.</p><p>Saznajte više na <a href="https://www.finextra.com/newsarticle/12345/blockchain-accounting-trends">Finextra portalu</a>.</p>',
                'image_url'    => 'news/blockchain-finance.jpg',
                'published_at' => $now,
                'created_at'   => $now,
                'updated_at'   => $now,
            ],
        ];

        foreach ($items as $item) {
            // Ubaci samo ako vijest s istim naslovom ne postoji
            if (! DB::table('news')->where('title', $item['title'])->exists()) {
                DB::table('news')->insert($item);
            }
        }
    }
}
