<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Ukloni postojeći check constraint
        DB::statement('ALTER TABLE widgets DROP CONSTRAINT widgets_area_check;');

        // Dodaj 'home' u dozvoljene vrijednosti
        DB::statement("ALTER TABLE widgets ADD CONSTRAINT widgets_area_check CHECK (area IN ('left','right','home'));");
    }

    public function down(): void
    {
        DB::statement('ALTER TABLE widgets DROP CONSTRAINT widgets_area_check;');
        DB::statement("ALTER TABLE widgets ADD CONSTRAINT widgets_area_check CHECK (area IN ('left','right'));");
    }
};
