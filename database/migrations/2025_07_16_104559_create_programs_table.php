<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

public function up(): void
{
    Schema::create('programs', function (Blueprint $table) {
        $table->id();
        $table->string('title');                     // Naslov programa
        $table->text('description')->nullable();     // Opis (opcionalno)
        $table->string('link')->nullable();          // Link na detalje (opcionalno)
        $table->string('image')->nullable(); 
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
