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


}
