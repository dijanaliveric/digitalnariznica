<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            // polymorphic ključevi:
            $table->string('imageable_type');
            $table->unsignedBigInteger('imageable_id');
            // relativna putanja ili URL
            $table->string('path');
            // opcionalni tekstualni opis/alt ili caption
            $table->string('caption')->nullable();
            // redoslijed slikâ, ako treba
            $table->integer('order')->default(0);
            $table->timestamps();
            
            $table->index(['imageable_type','imageable_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('images');
    }
};
