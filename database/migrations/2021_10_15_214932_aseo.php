<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Aseo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('aseo', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nombreProducto');
            $table->string('descripcion');
            $table->string('precio');
            $table->string('imagen');
            $table->string('codigo');



            $table->timestamps();
        });

    }
}