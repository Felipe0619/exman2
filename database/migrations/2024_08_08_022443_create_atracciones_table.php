<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtraccionesTable extends Migration
{
    public function up()
    {
        Schema::create('atracciones', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descripcion')->nullable();
            $table->foreignId('id_especie')->constrained('especies');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('atracciones');
    }
}
