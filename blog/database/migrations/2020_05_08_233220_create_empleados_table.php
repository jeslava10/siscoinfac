<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->enum('tipoDocumento',['Cedula','Tarjeta identidad','pasaporte']);
            $table->string('numeroDocumento');
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fechaDeIngreso');
            $table->string('cargo ');
            $table->decimal('salario',8,2);
            $table->enum('horario',['Jornada Diurna','Jornada Noturna','Jornada Completa']);
            $table->boolean('activo');
            $table->timestamp('fechaCreacion');
            $table->string('usuarioCreacion');
            $table->timestamp('fechaModificacion');
            $table->string('usuarioModificacion');

            $table->primary('id');
            $table->unique('numeroDocumento');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
