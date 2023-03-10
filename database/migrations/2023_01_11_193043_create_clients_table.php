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
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('strada');
            $table->string('oras');
            $table->string('tara');
            $table->string('codpostal');
            $table->string('nrcard');
            $table->string('tipcard');
            $table->date('dataexpcard');
            $table->integer('acceptare_email');
            $table->integer('nrinregRC');
            $table->string('nume');
            $table->integer('codfiscal');
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
        Schema::dropIfExists('clients');
    }
};
