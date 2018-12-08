{{ $event }}
<br/>
{{Carbon::parse($event->end_date)}}, {{$b = Carbon::parse($event->start_date)}}
<br/>

{{$a=Carbon::parse($event->end_date)->diffInDays(Carbon::parse($event->start_date))+1}}

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
@for($i=0; $i<$a; $i++)
    @if($i==0)
        {{$fin[]=$event->start_date}}, {{$event->event_name}}
    @elseif($i>0)
        <br/>
        {{$fin[]=$b->addDay(1)}}, {{$event->event_name}}
    @endif
@endfor

<br/>
<br/>

