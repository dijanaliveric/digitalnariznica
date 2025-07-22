<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable')->orderBy('order');
    }
}
