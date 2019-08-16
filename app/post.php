<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;


class post extends Model
{
    const CREATED_AT='Fecha_creacion';
    const UPDATE_AT='Fecha_actualizacion';
    //const DELETE_AT='Fecha_Eliminacion';

    use SoftDeletes;
    protected $data = ['Fecha de borrado']; 

    protected $table='post';
    
    protected $primariKey='id_post';

    protected $fillable = [
        'titulo','contenido','id_autor'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class,'id_autor','id');
    }

}