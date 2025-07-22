<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WidgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing widgets
        DB::table('widgets')->truncate();

        // Seed left sidebar banners
        DB::table('widgets')->insert([
            [
                'area' => 'left',
                'title' => 'HAMAG-BICRO',
                'content' => '<a href="https://hamagbicro.gov.hr" target="_blank"><img src="https://via.placeholder.com/200x100?text=HAMAG-BICRO" alt="HAMAG-BICRO"></a>',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'area' => 'left',
                'title' => 'Europski fondovi',
                'content' => '<a href="https://fondovi.europa.eu" target="_blank"><img src="https://via.placeholder.com/200x100?text=Europski+fondovi" alt="Europski fondovi"></a>',
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Seed right sidebar quick links
        DB::table('widgets')->insert([
            [
                'area' => 'right',
                'title' => 'Brzi linkovi',
                'content' => 
                    '<ul class="list-disc pl-5">'
                  . '<li><a href="' . url('/') . '">Početna</a></li>'
                  . '<li><a href="' . route('programs.index') . '">Programi potpore</a></li>'
                  . '<li><a href="' . route('advices.index') . '">Savjeti</a></li>'
                  . '<li><a href="' . route('news.index') . '">Novosti</a></li>'
                  . '<li><a href="' . route('contact') . '">Kontakt</a></li>'
                  . '</ul>',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'area' => 'right',
                'title' => 'Pretplati se na newsletter',
                'content' => '<a href="/newsletter/subscribe" class="btn btn-primary">Prijavi se na newsletter</a>',
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
