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
        Schema::create('examen', function (Blueprint $table) {
            $table->string('idexam', 30)->primary();
            $table->string('libelleexam', 80)->nullable();
            $table->date(column:'dateexam')->nullable();
            $table->unique(['idexam'], 'examen_pk');
            $table->text('raison')->nullable();
            $table->text('resultats')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examen');
    }
};
