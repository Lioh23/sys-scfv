<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembroFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membro_familias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('familia_id')->constrained('familias');
            $table->string('nome', 120);
            $table->date('dt_nasc');
            $table->string('parentesco', 40);
            $table->string('escola', 191)->nullable();
            $table->string('turno_escolar', 30)->nullable();
            $table->string('nis', 11)->nullable();
            $table->string('cpf', 11)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membro_familias');
    }
}
