<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->enum('categorias', ['energia', 'automacao', 'eficiencia', 'treinamentos', 'outros']);
            $table->string('local', 255);
            $table->string('foto', 255)->nullable();
            $table->longText('descricao');
            $table->string('autor', 255);
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
        Schema::dropIfExists('galeria');
    }
}
