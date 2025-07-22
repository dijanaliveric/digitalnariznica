<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $table = 'news';

    // Omogućavamo masovno dodjeljivanje
    protected $fillable = [
        'title',
        'content',
        'image_url',
        'published_at',
    ];

    // Automatski kastamo published_at u Carbon instancu
    protected $casts = [
        'published_at' => 'datetime',
    ];


    public function images()
    {
        return $this->morphMany(Image::class, 'imageable')->orderBy('order');
    }
}
