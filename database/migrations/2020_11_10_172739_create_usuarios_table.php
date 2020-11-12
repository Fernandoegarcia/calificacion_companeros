<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {

            $table->id('id');
            $table->text('nombre');
            $table->text('compañia')->nullable($value = true);
            $table->text('cargo');
            $table->text('sexo');
            $table->text('edad');
            $table->enum('tipo', ['empleador','empleado','desempleado']);
            $table->date('fecha_nacimiento');
            $table->integer('usuario_id');
            $table->integer('aptitud_id');
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
        Schema::dropIfExists('usuarios');
    }
}
