<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

use App\Canino;
use App\User;
use Carbon\Carbon;
use Calendar;
use App\Event;

class UserController extends Controller
{
    public function listCuidador(){
        $users = User::where('tipo_usuario','Cuidador')->orderBy('id','desc')->paginate('5');
        return view('user.listCuidador', array(
            'users' => $users
        ));
    }

    public function getProfileCuidador($user_id){
        $user = User::find($user_id);
        $events = Event::get()->where('user_id',$user_id);
        $event_list = [];
        foreach($events as $key => $event){
            $event_list[] = Calendar::event(
                $event->event_name,
                true,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date.' +1 day')
            );
        }
        $calendar_details = Calendar::addEvents($event_list);

        return view('user.profileCuidador', compact('calendar_details') , array(
            'user' => $user
        ));
    }

    public function getProfilePropietario($user_id){
        $user = User::find($user_id);
        $caninos = Canino::orderBy('nacimiento','desc')->paginate(5);
        return view('user.profilePropietario', array(
            'user' => $user
        ), array(
            'caninos' => $caninos
        ));
    }

    public function createUserPropietario(){
        return view('user.createUserPropietario');
    }

    public function saveUserCuidador(Request $request){
        $validatedData = $this->validate($request,[
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
            'jardin' => 'required',
            'terraza' => 'required',
            'balcon' => 'required',
            'alojamiento' => 'required',
            'paseo' => 'required',
            'image' => 'required',

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
        $image = $request->file('image');
        if($image){
            $image_path = time().$image->getClientOriginalName();
            \Storage::disk('image')->put($image_path, \File::get($image));

            $user->image = $image_path;
        }
        $user->habilitado = 'Si';
        $user->trabajo = $request->input('trabajo');
        $user->descripcion = $request->input('descripcion');
        $user->nacimiento = $request->input('nacimiento');
        $user->tipo_casa = $request->input('tipo_casa');
        $user->ci = $request->input('ci');
        $user->numero_canes = $request->input('numero_canes');
        $foto_ci_anverso = $request->file('foto_ci_anverso');
        if($foto_ci_anverso){
            $foto_ci_anverso_path = time().$foto_ci_anverso->getClientOriginalName();
            \Storage::disk('image')->put($foto_ci_anverso_path, \File::get($foto_ci_anverso));

            $user->foto_ci_anverso = $foto_ci_anverso_path;
        }
        $foto_ci_reverso = $request->file('foto_ci_reverso');
        if($foto_ci_reverso){
            $foto_ci_reverso_path = time().$foto_ci_reverso->getClientOriginalName();
            \Storage::disk('image')->put($foto_ci_reverso_path, \File::get($foto_ci_reverso));

            $user->foto_ci_reverso = $foto_ci_reverso_path;
        }
        $user->jardin = $request->input('jardin');
        $user->terraza = $request->input('terraza');
        $user->balcon = $request->input('balcon');
        $user->alojamiento = $request->input('alojamiento');
        $user->precio_alojamiento = $request->input('precio_alojamiento');
        $user->precio_adicional_alojamiento = $request->input('precio_adicional_alojamiento');
        $user->direccion_recogida = $request->input('direccion_recogida');
        $user->paseo = $request->input('paseo');
        $user->precio_paseo = $request->input('precio_paseo');
        $user->direccion_recogida_paseo = $request->input('direccion_recogida_paseo');

        $user->tx_usuario_id = 1;
        $user->tx_host = $_SERVER['REMOTE_ADDR'];
        $user->tx_id = 1;

        $user->save();

        return redirect()->route('homeCuidador')->with(array('message'=>'El registro fue exitoso'));

    }

    public function saveUserPropietario(Request $request){
        $validatedData = $this->validate($request, [
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'departamento' => 'required',
            'zona' => 'required',
            'calle' => 'required',
            'numero_puerta' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'image' => 'required',
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
        $image = $request->file('image');
        if($image){
            $image_path = time().$image->getClientOriginalName();
            \Storage::disk('image')->put($image_path, \File::get($image));

            $user->image = $image_path;
        }
        $user->habilitado = 'Si';
        $user->tx_usuario_id = 1;
        $user->tx_host = $_SERVER['REMOTE_ADDR'];
        $user->tx_id = 1;

        $user->save();

        return redirect()->route('home')->with(array('message'=>'El registro fue exitoso'));

    }

    public function editUserCuidador(){
        $events = Event::get()->where('user_id',\Auth::user()->id);
        $event_list = [];
        foreach($events as $key => $event){
            $event_list[] = Calendar::event(
                $event->event_name,
                true,
                new \DateTime($event->start_date),
                new \DateTime($event->start_date.' +1 day')
            );
        }
        $calendar_details = Calendar::addEvents($event_list);

        return view('user.editCuidador', compact('calendar_details'));
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
            'password' => 'confirmed',
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
            'jardin' => 'required',
            'terraza' => 'required',
            'balcon' => 'required',
            'alojamiento' => 'required',
            'paseo' => 'required',
            'image' => 'required',

        ]);
        $user = \Auth::user();
        $user->name = $request->input('name');
        $user->apellido = $request->input('apellido');
        $user->password = bcrypt($request->input('password'));
        $user->tipo_usuario = 'Cuidador';
        $user->departamento= $request->input('departamento');
        $user->zona = $request->input('zona');
        $user->calle = $request->input('calle');
        $user->numero_puerta = $request->input('numero_puerta');
        $user->direccion = $request->input('direccion');
        $user->telefono = $request->input('telefono');
        $user->numero_canes = $request->input('numero_canes');
        $image = $request->file('image');
        if($image){
            $image_path = time().$image->getClientOriginalName();
            \Storage::disk('image')->put($image_path, \File::get($image));

            $user->image = $image_path;
        }
        $user->habilitado = 'Si';
        $user->trabajo = $request->input('trabajo');
        $user->descripcion = $request->input('descripcion');
        $user->nacimiento = $request->input('nacimiento');
        $user->tipo_casa = $request->input('tipo_casa');
        $user->ci = $request->input('ci');

        $user->jardin = $request->input('jardin');
        $user->terraza = $request->input('terraza');
        $user->balcon = $request->input('balcon');
        $user->alojamiento = $request->input('alojamiento');
        $user->precio_alojamiento = $request->input('precio_alojamiento');
        $user->precio_adicional_alojamiento = $request->input('precio_adicional_alojamiento');
        $user->direccion_recogida = $request->input('direccion_recogida');
        $user->paseo = $request->input('paseo');
        $user->precio_paseo = $request->input('precio_paseo');
        $user->direccion_recogida_paseo = $request->input('direccion_recogida_paseo');

        $user->tx_usuario_id = $user->id;
        $user->tx_host = $_SERVER['REMOTE_ADDR'];
        $user->tx_id = $user->id;

        $user->update();

        return redirect()->route('homeCuidador')->with(array('message'=>'El registro fue modificado'));

    }

    public function updateUserPropietario(Request $request){
        $validatedData = $this->validate($request,[
            'name' => 'required',
            'apellido' => 'required',
            'password' => 'confirmed',
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
        $user->password = bcrypt($request->input('password'));
        $user->tipo_usuario = 'Propietario';
        $user->departamento= $request->input('departamento');
        $user->zona = $request->input('zona');
        $user->calle = $request->input('calle');
        $user->numero_puerta = $request->input('numero_puerta');
        $user->direccion = $request->input('direccion');
        $user->telefono = $request->input('telefono');
        $user->habilitado = 'Si';

        $image = $request->file('image');
        if($image){
            $image_path = time().$image->getClientOriginalName();
            \Storage::disk('image')->put($image_path, \File::get($image));

            $user->image = $image_path;
        }

        $user->tx_usuario_id = $user->id;
        $user->tx_host = $_SERVER['REMOTE_ADDR'];
        $user->tx_id = $user->id;

        $user->update();

        return redirect()->route('home')->with(
            array('message' => 'Los datos del usuario se actualizaron correctamente')
        );
    }

    public function getImagePerfil($filename){
        $file = Storage::disk('image')->get($filename);
        return new Response($file,200);
    }
}
