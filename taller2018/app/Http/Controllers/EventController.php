<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Validator;
Use Calendar;
use App\User;

class EventController extends Controller
{
    public function createEvent(){
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

        return view('event.createEvents', compact('calendar_details'));
    }

    public function addEvent(Request $request){
        $validatedData = $this->validate($request, [
            'start_date' => 'required'
            //'end_date' => 'required',
        ]);

        $event = new Event();
        $user = \Auth::user();
        $event->user_id = $user->id;
        $event->event_name = 'Ocupado';
        $event->start_date = $request->input('start_date');
        //$event->end_date = $request->input('end_date');
        $event->save();

        return redirect()->route('crearEvent')->with(array('message' => 'La disponibilidad fue correctamente creada'));
    }

    public function listEvent(){
        $events = Event::all();
        return view('event.listEvent',array(
            'events' => $events
        ));
    }

    public function editEvent($event_id){
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
        $event = Event::find($event_id);
        return view('event.editEvent', array(
           'event' => $event
        ), compact('calendar_details'));
    }

    public function updateEvent(Request $request, $event_id){
        $validatedData = $this->validate($request, [
            'start_date' => 'required'
        ]);

        $event = Event::find($event_id);
        $user = \Auth::user();
        $event->user_id = $user->id;
        $event->event_name = 'Ocupado';
        $event->start_date = $request->input('start_date');
        $event->update();

        return redirect()->route('listEvent')->with(array('message' => 'La disponibilidad fue correctamente editada'));
    }

    public function deleteEvent($event_id){
        $user = \Auth::user();
        $event = Event::find($event_id);

        if($user && $event->user_id == $user->id){
            $event->delete();
            $message = array('message' => 'Event eliminada');
            return redirect()->route('listEvent')->with($message);
        }else{
            $message = array('message' => 'Event no eliminada');
            return back()->with($message);
        }

    }
}
