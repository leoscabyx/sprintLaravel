<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            //Campos 

            $table->bigIncrements('idProducto');
            $table->string('nombre', 50)->unique();
            $table->text('descripcion');
            $table->double('precio', 8, 2);
            $table->tinyInteger('estado');
            $table->bigInteger('idCategoria')->unsigned();
            $table->string('imagen', 255);

            

            

        });

        Schema::table('productos', function (Blueprint $table) {
            
            //Relaciones
            
            $table->foreign('idCategoria')->references('idCategoria')->on('categorias');
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
