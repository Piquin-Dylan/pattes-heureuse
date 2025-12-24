<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('coats_species', function (Blueprint $table) {
            $table->id();
            $table->foreignId('species_id')->constrained()->cascadeOnDelete();
            $table->foreignId('coats_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coats_species');
    }
};
