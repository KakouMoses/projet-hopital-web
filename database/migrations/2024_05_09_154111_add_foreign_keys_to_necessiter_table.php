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
        Schema::table('necessiter', function (Blueprint $table) {
            $table->foreign(['idexam'], 'fk_necessit_necessite_examen')->references(['idexam'])->on('examen')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign(['idconsultation'], 'fk_necessit_necessite_consulta')->references(['idconsultation'])->on('consultation')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('necessiter', function (Blueprint $table) {
            $table->dropForeign('fk_necessit_necessite_examen');
            $table->dropForeign('fk_necessit_necessite_consulta');
        });
    }
};
