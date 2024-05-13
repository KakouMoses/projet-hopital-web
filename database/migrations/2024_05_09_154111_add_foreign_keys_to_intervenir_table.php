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
        Schema::table('intervenir', function (Blueprint $table) {
            $table->foreign(['idspecialiste'], 'fk_interven_interveni_speciali')->references(['idspecialiste'])->on('specialiste')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign(['idconsultation'], 'fk_interven_interveni_consulta')->references(['idconsultation'])->on('consultation')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('intervenir', function (Blueprint $table) {
            $table->dropForeign('fk_interven_interveni_speciali');
            $table->dropForeign('fk_interven_interveni_consulta');
        });
    }
};
