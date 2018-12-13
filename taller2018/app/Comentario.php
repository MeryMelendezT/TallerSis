<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model
{
    protected $table = 'comentarios';

    use SoftDeletes;
    protected $dates = ['deletedat'];

    //Muchos comentarios 1 servicio

    public function servicio(){
        return $this->belongsTo('App\Servicio');
    }
    //Muchos comentarios 1 usuario

    public function user(){
        return $this->belongsTo('App\User');
    }
}
