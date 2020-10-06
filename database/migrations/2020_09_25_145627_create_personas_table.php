<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            //id, nombre, apellido, correo, celular, email, fecha_reg
            $table->id();
            $table->string('nombre', 30);
            $table->string('apellido', 40);
            $table->string('correo', 40);
            $table->string('celular');
            $table->string('email');
            $table->dateTime('fecha_reg');
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
        Schema::dropIfExists('personas');
    }
}
