<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string('race_name');
            $table->foreignId('species_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('race');
    }
};
