<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

use App\Canino;
use App\User;
use App\Event;
use Calendar;
use Carbon\Carbon;



class ServicioController extends Controller
{
    public function createServicio($user_id){
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

        return view('servicio.createServicio', compact('calendar_details') , array(
            'user' => $user
        ));
    }

    public function saveServicio(Request $request){

        //Servicio
        $validatedData = $this->validate($request, [
            'user_id_1' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
        ]);
        $servicio = new Servicio();
        $servicio->user_id = \Auth::user()->id;
        $servicio->user_id_1 = $request->input('user_id_1');
        $user = User::find($servicio->user_id_1);
        $servicio->tipo_servicio = $request->input('tipo_servicio');
        if($servicio->tipo_servicio == 'Paseo'){
            $servicio->precio = $user->precio_paseo;
        }elseif ($servicio->tipo_servicio == 'Alojamiento'){
            $servicio->precio = $user->precio_alojamiento;
        }
        $servicio->punto_encuentro_latitud = $request->input('lat-span');
        $servicio->punto_encuentro_longitud = $request->input('lon-span');
        $events = Event::get()->where('user_id',$servicio->user_id_1);
        $event_list = [];
        $servicio->fecha_inicio = $request->input('fecha_inicio');
        $servicio->fecha_fin = $request->input('fecha_fin');
        foreach($events as $key => $event){
            $event_list[] = Calendar::event(
                $event->event_name,
                true,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date.' +1 day')
            );
            if($servicio->tipo_servicio == 'Paseo') {
                if (Carbon::parse($event->start_date)->year == Carbon::parse($servicio->fecha_inicio)->year && Carbon::parse($event->start_date)->month == Carbon::parse($servicio->fecha_inicio)->month && Carbon::parse($event->start_date)->day == Carbon::parse($servicio->fecha_inicio)->day) {
                    return back()->with(array('message' => 'Cuidador ocupado'));
                }
            }elseif ($servicio->tipo_servicio == 'Alojamiento'){
                $servicio->duracion = Carbon::parse($servicio->fecha_fin)->diffInDays(Carbon::parse($servicio->fecha_inicio));
                for($i=0; $i <= $servicio->duracion; $i++){
                    if($i==1){
                        if (Carbon::parse($event->start_date)->year == Carbon::parse($servicio->fecha_inicio)->year && Carbon::parse($event->start_date)->month == Carbon::parse($servicio->fecha_inicio)->month && Carbon::parse($event->start_date)->day == Carbon::parse($servicio->fecha_inicio)->day) {
                            return back()->with(array('message' => 'Cuidador ocupado'));
                        }
                    }elseif ($i>1){
                        $fecha = Carbon::parse($servicio->fecha_inicio)->addDay(1);
                        if (Carbon::parse($event->start_date)->year == Carbon::parse($fecha)->year && Carbon::parse($event->start_date)->month == Carbon::parse($fecha)->month && Carbon::parse($event->start_date)->day == Carbon::parse($fecha)->day) {
                            return back()->with(array('message' => 'Cuidador ocupado'));
                        }
                    }
                }
            }
        }

        if($servicio->tipo_servicio == 'Paseo') {
            $servicio->duracion = Carbon::parse($servicio->fecha_fin)->diffInHours(Carbon::parse($servicio->fecha_inicio));
        }elseif ($servicio->tipo_servicio == 'Alojamiento'){
            $servicio->duracion = Carbon::parse($servicio->fecha_fin)->diffInDays(Carbon::parse($servicio->fecha_inicio));
        }

        $servicio->estado = 'Pendiente';
        $servicio->precio_empresa = $servicio->precio*0.26;
        $servicio->precio_total = $servicio->duracion*(($servicio->precio)+($servicio->precio_empresa));
        $servicio->tx_usuario_id = \Auth::user()->id;
        $servicio->tx_host = $_SERVER['REMOTE_ADDR'];
        $servicio->tx_id = 1;

        $servicio->save();

        return redirect()->route('home')->with(array('message'=>'El registro fue exitoso'));
    }

}
