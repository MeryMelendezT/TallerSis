<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Validator;
Use Calendar;

class EventController extends Controller
{
    public function index(){
        $events = Event::get();
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

        return view('events', compact('calendar_details'));
    }

    public function addEvent(Request $request){
        $validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        if($validator->fails()){
            \Session::flash('warnning', 'Please enter the valid details');
            return Redirect::to('events')->withInput()->withErrors($validator);
        }

        $event = new Event;
        $event->event_name = $request->input('event_name');
        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        $event->save();

        \Session::flash('success','Event added successfuly');
        return Redirect::to('/events');

    }
}
