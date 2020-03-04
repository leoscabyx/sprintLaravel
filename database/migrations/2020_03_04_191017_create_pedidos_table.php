<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('idPedido');
            $table->bigInteger('idUsuario')->unsigned();
            $table->bigInteger('idProducto')->unsigned();
            $table->bigInteger('cantidad');
            $table->tinyInteger('estatus');
            //$table->timestamps();
        });

        Schema::table('pedidos', function (Blueprint $table) {
            
            //Relaciones
            
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->foreign('idProducto')->references('idProducto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
