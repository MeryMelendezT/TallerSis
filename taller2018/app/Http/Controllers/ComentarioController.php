<?php

namespace App\Http\Controllers;

use App\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function updateComentario(Request $request){
        $validate = $this->validate($request,[
            'comentario' => 'required',
        ]);

        $comentario = new Comentario();
        $user = \Auth::user();


        $comentario->usuario_id = $user->id;
        $comentario->servicio_id = $request->input('servicio_id');
        $comentario->comentario = $request->input('comentario');
        $comentario->tx_usuario_id = \Auth::user()->id;
        $comentario->tx_host = $_SERVER['REMOTE_ADDR'];
        $comentario->tx_id = 1;

        $comentario->save();

        return redirect()->route('home')->with(array('message' => 'Comentario añadido correctamente'));
    }
}
