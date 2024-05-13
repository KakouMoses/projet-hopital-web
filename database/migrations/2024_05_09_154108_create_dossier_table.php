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
        Schema::create('dossier', function (Blueprint $table) {
            $table->string('numerodossier', 30)->primary();
            $table->string('nom', 30)->nullable();
            $table->string('prenom', 50)->nullable();
            $table->date('datenaissance')->nullable();
            $table->string('lieunaissance', 30)->nullable();
            $table->char('sexe', 30)->nullable();
            $table->string('profession', 50)->nullable();
            $table->decimal('contact', 12, 0)->nullable();
            $table->string('email', 30)->nullable();
            $table->string('groupesanguin', 4)->nullable();
            $table->text('antecedents')->nullable();

            $table->unique(['numerodossier'], 'dossier_pk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dossier');
    }
};
