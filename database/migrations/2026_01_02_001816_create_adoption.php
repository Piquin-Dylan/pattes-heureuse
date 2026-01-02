<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('adoption', function (Blueprint $table) {
            $table->id();
            $table>$table->foreignId('animal_id');
            $table->string('status');
            $table->string('name');
            $table->string('email');
            $table->string('tel')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('adoption');
    }
};
