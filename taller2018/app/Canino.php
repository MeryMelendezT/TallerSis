<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Canino extends Model
{
    protected $table = 'caninos';

    use SoftDeletes;

    protected $dates = ['deletedat'];

    //Muchos caninos 1 usuario
    public function user(){
        return $this->belongsTo('App\User');
    }
}
