<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicio extends Model
{
    protected $table = 'servicios';

    use SoftDeletes;
    protected $dates = ['deletedat'];

    //one to many
    public function comentario(){
        return $this->hasMany('App\Comentario');
    }

    //Muchos servicios 1 usuario

    public function user(){
        return $this->belongsTo('App\User');
    }

    //Muchos servicios 1 usuario

    public function canino(){
        return $this->belongsTo('App\Canino');
    }
    protected $fillable = [
        'user_id', 'user_id_1', 'tipo_servicio', 'precio', 'punto_encuentro_longitud', 'punto_encuentro_latitud', 'fecha_inicio', 'fecha_fin',
    ];

}
