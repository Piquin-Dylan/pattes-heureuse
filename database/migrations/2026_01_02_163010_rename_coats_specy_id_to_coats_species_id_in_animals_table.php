<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->renameColumn('coats_specy_id', 'coats_species_id');
        });
    }

    public function down()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->renameColumn('coats_species_id', 'coats_specy_id');
        });
    }
};
