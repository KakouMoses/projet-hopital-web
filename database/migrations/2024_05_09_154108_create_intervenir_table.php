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
        Schema::create('intervenir', function (Blueprint $table) {
            $table->string('idconsultation', 30)->index('intervenir2_fk');
            $table->string('idspecialiste', 30)->index('intervenir_fk');
            $table->string('tache', 50)->nullable();

            $table->primary(['idconsultation', 'idspecialiste']);
            $table->unique(['idconsultation', 'idspecialiste'], 'intervenir_pk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intervenir');
    }
};
