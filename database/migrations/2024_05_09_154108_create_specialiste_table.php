<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialiste', function (Blueprint $table) {
            $table->string('idspecialiste', 30)->primary();
            $table->string('nomspecialiste', 30)->nullable();
            $table->string('prenomspecialiste', 50)->nullable();
            $table->string('specialite', 50)->nullable();
            $table->string('grade', 30)->nullable();

            $table->unique(['idspecialiste'], 'specialiste_pk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialiste');
    }
};
