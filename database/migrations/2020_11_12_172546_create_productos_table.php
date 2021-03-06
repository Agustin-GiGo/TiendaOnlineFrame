<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedbigInteger('categoria_id');
            //$table->bigInteger('user_id');
            $table->string('descripcion');
            $table->string('imagen');
            $table->bigInteger('cantidad')->unisigned()->default(0);
            $table->decimal('precio',12,2)->default(0);
            //$table->string('estado');
            //$table->string('categoria');
            //$table->char('activo',2);
           // $table->tinyInteger('concesionado');
            $table->timestamps();
            

            
            $table->foreign('categoria_id')->references('id')->on('categorias');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
