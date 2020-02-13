<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    //protected $table = 'productos';
    protected $primaryKey = 'idProducto';
    public $timestamps = false;

    /*
    public function getMarca()
    {
        return $this->belongsTo('App\Marca', 'idMarca', 'idMarca');
    }
    public function getCategoria()
    {
        return $this->belongsTo('App\Categoria', 'idCategoria', 'idCategoria');
    }
    */
}
