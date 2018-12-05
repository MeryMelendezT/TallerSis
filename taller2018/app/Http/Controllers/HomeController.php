<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Canino;
use Calendar;
use App\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caninos = Canino::orderBy('nacimiento','desc')->paginate(5);

        return view('home', array(
            'caninos' => $caninos
        ));
    }

    public function indexCuidador()
    {
        $events = Event::get()->where('user_id',\Auth::user()->id);
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
        return view('homeCuidador', compact('calendar_details'));
    }

    public function index1()
    {
        return view('home1');
    }


}
