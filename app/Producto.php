<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
     const CREATED_AT='fecha_creacion';
    const UPDATE_AT='fecha_at';
    //const DELETE_AT='Fecha_Eliminacion';

    // use SoftDeletes;
    // protected $data = ['Fecha de borrado']; 

    protected $table='productos';
    
    protected $primariKey='id_producto';

    protected $fillable = [
        'nombre','titulo'
    ];
}
