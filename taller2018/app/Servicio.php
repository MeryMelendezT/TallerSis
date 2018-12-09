<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';

    use SoftDeletes;

    protected $dates = ['deletedat'];

    //Muchos servicios 1 usuario
    public function user(){
        return $this->belongsTo('App\User');
    }
}
