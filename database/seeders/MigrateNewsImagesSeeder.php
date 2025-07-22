<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\Image;

class MigrateNewsImagesSeeder extends Seeder
{
    public function run(): void
    {
        // Dohvatimo sve vijesti koje imaju image_url ali nemaju yet images
        $newsItems = News::whereNotNull('image_url')
                          ->whereDoesntHave('images')
                          ->get();

        foreach ($newsItems as $news) {
            Image::create([
                'imageable_type' => News::class,
                'imageable_id'   => $news->id,
                'path'           => $news->image_url,
                'caption'        => null,
                'order'          => 0,
            ]);
        }
    }
}
