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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('produsid');
            $table->string('nume');
            $table->double('pret',13,2);
            $table->string('imagine');
            $table->string('categorie');
            $table->string('descriere');
            $table->string('desc_completa');
            $table->string('stare');
            $table->integer('oferta');
            $table->integer('noutati');
            $table->string('cod');
            $table->string('metal');
            $table->string('piatra');
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
        Schema::dropIfExists('products');
    }
};
