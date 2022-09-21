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
        Schema::create('citas', function (Blueprint $table) {
           $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('pacientes_id')->unsigned();
            $table->bigInteger('doctores_id')->unsigned();
            $table->bigInteger('servicios_id')->unsigned();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('hora_inicio');
            $table->string('hora_final');
            $table->timestamps();
            $table->foreign('pacientes_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->foreign('doctores_id')->references('id')->on('doctores')->onDelete('cascade');
            $table->foreign('servicios_id')->references('id')->on('servicios')->onDelete('cascade');
            
        
        
        
        
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
