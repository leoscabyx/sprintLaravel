<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $primaryKey = 'idPedido';
    public $timestamps = false;

    public function getUsuario()
    {
        return $this->belongsTo('App\User', 'idUsuario', 'id');
    }

    public function getProducto()
    {
        return $this->belongsTo('App\Producto', 'idProducto', 'idProducto');
    }
}
