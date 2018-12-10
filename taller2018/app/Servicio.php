<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';

    //Muchos servicios 1 usuario

    public function user(){
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'user_id', 'user_id_1', 'tipo_servicio', 'precio', 'punto_encuentro_longitud', 'punto_encuentro_latitud', 'fecha_inicio', 'fecha_fin',
    ];

}
