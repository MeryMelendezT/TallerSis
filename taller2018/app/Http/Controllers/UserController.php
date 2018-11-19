<?php

namespace App\Http\Controllers;

use App\Canino;
use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

use App\User;

class UserController extends Controller
{

    public function createUserPropietario(){
        return view('user.createUserPropietario');
    }

    public function saveUserCuidador(Request $request){
        $validatedData = $this->validate($request,[
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'password' => 'required',
            'departamento' => 'required',
            'zona' => 'required',
            'calle' => 'required',
            'numero_puerta' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'ci' => 'required',
            'numero_canes' => 'required',
            'nacimiento' => 'required',
            'descripcion' => 'required',
            'trabajo' => 'required',
            'tipo_casa' => 'required',

        ]);
        $user = new User();
        $user->name = $request->input('name');
        $user->apellido = $request->input('apellido');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->tipo_usuario = 'Cuidador';
        $user->departamento= $request->input('departamento');
        $user->zona = $request->input('zona');
        $user->calle = $request->input('calle');
        $user->numero_puerta = $request->input('numero_puerta');
        $user->direccion = $request->input('direccion');
        $user->telefono = $request->input('telefono');
        $user->numero_canes = $request->input('numero_canes');
        $foto = $request->file('foto');
        if($foto){
            $foto_path = time().$foto->getClientOriginalName();
            \Storage::disk('fotos')->put($foto_path, \File::get($foto));

            $user->foto = $foto_path;
        }
        $user->habilitado = 'Si';
        $user->trabajo = $request->input('trabajo');
        $user->descripcion = $request->input('descripcion');
        $user->nacimiento = $request->input('nacimiento');
        $user->tipo_casa = $request->input('tipo_casa');
        $user->ci = $request->input('ci');
        $foto_ci_anverso = $request->file('foto_ci_anverso');
        if($foto_ci_anverso){
            $foto_ci_anverso_path = time().$foto_ci_anverso->getClientOriginalName();
            \Storage::disk('fotos')->put($foto_ci_anverso_path, \File::get($foto_ci_anverso));

            $user->foto_ci_anverso = $foto_ci_anverso_path;
        }
        $foto_ci_reverso = $request->file('foto_ci_reverso');
        if($foto_ci_reverso){
            $foto_ci_reverso_path = time().$foto_ci_reverso->getClientOriginalName();
            \Storage::disk('fotos')->put($foto_ci_reverso_path, \File::get($foto_ci_reverso));

            $user->foto_ci_reverso = $foto_ci_reverso_path;
        }
        $user->jardin = $request->input('jardin');
        $user->terraza = $request->input('terraza');
        $user->balcon = $request->input('balcon');

        $user->tx_usuario_id = 1;
        $user->tx_host = $_SERVER['REMOTE_ADDR'];
        $user->tx_id = 1;

        $user->save();

        return redirect()->route('home')->with(array('message'=>'El registro fue exitoso'));

    }

    public function saveUserPropietario(Request $request){
        $validatedData = $this->validate($request,[
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'password' => 'required',
            'departamento' => 'required',
            'zona' => 'required',
            'calle' => 'required',
            'numero_puerta' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);
        $user = new User();
        $user->name = $request->input('name');
        $user->apellido = $request->input('apellido');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->tipo_usuario = 'Propietario';
        $user->departamento= $request->input('departamento');
        $user->zona = $request->input('zona');
        $user->calle = $request->input('calle');
        $user->numero_puerta = $request->input('numero_puerta');
        $user->direccion = $request->input('direccion');
        $user->telefono = $request->input('telefono');
        $foto = $request->file('foto');
        if($foto){
            $foto_path = time().$foto->getClientOriginalName();
            \Storage::disk('fotos')->put($foto_path, \File::get($foto));

            $user->foto = $foto_path;
        }
        $user->habilitado = 'Si';
        $user->tx_usuario_id = 1;
        $user->tx_host = $_SERVER['REMOTE_ADDR'];
        $user->tx_id = 1;

        $user->save();

        return redirect()->route('home')->with(array('message'=>'El registro fue exitoso'));

    }

    public function editUserCuidador(){
        return view('user.editCuidador');
    }

    public function editUserPropietario(){
            $caninos = Canino::orderBy('nacimiento','desc')->paginate(5);
            return view('user.editUserPropietario', array(
                'caninos' => $caninos
            ));
    }

    public function updateUserCuidador(Request $request){
        $validatedData = $this->validate($request,[
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'departamento' => 'required',
            'zona' => 'required',
            'calle' => 'required',
            'numero_puerta' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'ci' => 'required',
            'numero_canes' => 'required',
            'nacimiento' => 'required',
            'descripcion' => 'required',
            'trabajo' => 'required',
            'tipo_casa' => 'required',

        ]);
        $user = \Auth::user();
        $user->name = $request->input('name');
        $user->apellido = $request->input('apellido');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->tipo_usuario = 'Cuidador';
        $user->departamento= $request->input('departamento');
        $user->zona = $request->input('zona');
        $user->calle = $request->input('calle');
        $user->numero_puerta = $request->input('numero_puerta');
        $user->direccion = $request->input('direccion');
        $user->telefono = $request->input('telefono');
        $user->numero_canes = $request->input('numero_canes');
        $foto = $request->file('foto');
        if($foto){
            $foto_path = time().$foto->getClientOriginalName();
            \Storage::disk('fotos')->put($foto_path, \File::get($foto));

            $user->foto = $foto_path;
        }
        $user->habilitado = 'Si';
        $user->trabajo = $request->input('trabajo');
        $user->descripcion = $request->input('descripcion');
        $user->nacimiento = $request->input('nacimiento');
        $user->tipo_casa = $request->input('tipo_casa');
        $user->ci = $request->input('ci');
        $foto_ci_anverso = $request->file('foto_ci_anverso');
        if($foto_ci_anverso){
            $foto_ci_anverso_path = time().$foto_ci_anverso->getClientOriginalName();
            \Storage::disk('fotos')->put($foto_ci_anverso_path, \File::get($foto_ci_anverso));

            $user->foto_ci_anverso = $foto_ci_anverso_path;
        }
        $foto_ci_reverso = $request->file('foto_ci_reverso');
        if($foto_ci_reverso){
            $foto_ci_reverso_path = time().$foto_ci_reverso->getClientOriginalName();
            \Storage::disk('fotos')->put($foto_ci_reverso_path, \File::get($foto_ci_reverso));

            $user->foto_ci_reverso = $foto_ci_reverso_path;
        }
        $user->jardin = $request->input('jardin');
        $user->terraza = $request->input('terraza');
        $user->balcon = $request->input('balcon');

        $user->tx_usuario_id = 1;
        $user->tx_host = $_SERVER['REMOTE_ADDR'];
        $user->tx_id = 1;

        $user->update();

        return redirect()->route('homeCuidador')->with(array('message'=>'El registro fue modificado'));

    }

    public function updateUserPropietario(Request $request){
        $validatedData = $this->validate($request,[
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'departamento' => 'required',
            'zona' => 'required',
            'calle' => 'required',
            'numero_puerta' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);

        $user = \Auth::user();
        $user->name = $request->input('name');
        $user->apellido = $request->input('apellido');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->tipo_usuario = 'Propietario';
        $user->departamento= $request->input('departamento');
        $user->zona = $request->input('zona');
        $user->calle = $request->input('calle');
        $user->numero_puerta = $request->input('numero_puerta');
        $user->direccion = $request->input('direccion');
        $user->telefono = $request->input('telefono');
        $user->habilitado = 'Si';

        $foto = $request->file('foto');
        if($foto){
            $foto_path = time().$foto->getClientOriginalName();
            \Storage::disk('fotos')->put($foto_path, \File::get($foto));

            $user->foto = $foto_path;
        }

        $user->tx_usuario_id = 1;
        $user->tx_host = $_SERVER['REMOTE_ADDR'];
        $user->tx_id = 1;

        $user->update();

        return redirect()->route('home')->with(
            array('message' => 'Los datos del usuario se actualizaron correctamente')
        );
    }
}
