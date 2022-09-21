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
        Schema::create('cobros', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('servicios_id')->unsigned();
            $table->bigInteger('pacientes_id')->unsigned();
            $table->bigInteger('citas_id')->unsigned();




            $table->integer('valor');
            $table->timestamps();
            $table->foreign('servicios_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('pacientes_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->foreign('citas_id')->references('id')->on('citas')->onDelete('cascade');

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
};
