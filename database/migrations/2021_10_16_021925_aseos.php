<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Aseos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aseos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nombreProducto');
            $table->string('descripcion');
            $table->string('precio');
            $table->string('imagen');
            $table->string('codigo');



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
        //
    }
}
