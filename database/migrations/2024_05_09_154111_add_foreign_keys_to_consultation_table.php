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
        Schema::table('consultation', function (Blueprint $table) {
            $table->foreign(['numerodossier'], 'fk_consulta_concerner_dossier')->references(['numerodossier'])->on('dossier')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consultation', function (Blueprint $table) {
            $table->dropForeign('fk_consulta_concerner_dossier');
        });
    }
};
