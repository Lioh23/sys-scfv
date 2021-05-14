<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembroServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membro_servicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('membro_familia_id')->constrained('membro_familias');
            $table->foreignId('servico_convivencia_id')->constrained('servico_convivencias');
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
        Schema::dropIfExists('membro_servicos');
    }
}
