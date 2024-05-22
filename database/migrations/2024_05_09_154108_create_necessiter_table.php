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
        Schema::create('necessiter', function (Blueprint $table) {
            $table->string('idconsultation', 30)->index('necessiter2_fk');
            $table->string('idexam', 30)->index('necessiter_fk');
            $table->date('dateexam')->nullable();
            $table->text('raison')->nullable();
            $table->text('resultatsexam')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            
            $table->primary(['idconsultation', 'idexam']);
            $table->unique(['idconsultation', 'idexam'], 'necessiter_pk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('necessiter');
    }
};
