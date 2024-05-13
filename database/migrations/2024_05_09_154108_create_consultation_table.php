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
        Schema::create('consultation', function (Blueprint $table) {
            $table->string('idconsultation', 30)->primary();
            $table->string('numerodossier', 30)->index('concerner_fk');
            $table->text('diagnostic')->nullable();
            $table->text('prescription')->nullable();
            $table->string('actemedical', 100)->nullable();
            $table->date('dateconsultation')->nullable();
            $table->date('datecontrole')->nullable();
            $table->text('constantes')->nullable();
            $table->text('observations')->nullable();

            $table->unique(['idconsultation'], 'consultation_pk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultation');
    }
};
