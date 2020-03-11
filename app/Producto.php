<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    //protected $table = 'productos';
    protected $primaryKey = 'idProducto';
    public $timestamps = false;


    public function getCategoria()
    {
        return $this->belongsTo('App\Categoria', 'idCategoria', 'idCategoria');
    }
    
}
