<?php

namespace App\Http\Controllers;
use App\Event;

class SiteController extends Controller
{
    public function index ()
    {
        return view('layouts/main' , [
            'eventData' => $this->getEventData(),
            ]);
    }
    private function getEventData (){
        $event = Event::query()->where('date', '>=', now())->first();
    return [
        'title' => $event->title,
        'description' => \Illuminate\Support\Str::limit($event->description,50),
        'date' => $event->date->format('Y-m-d'),
        'untilDays' => now()->diffInDays($event->date),
        'untilHours' => now()->addDays(now()->diffInDays($event->date))->diffInRealHours($event->date),
        'untilMinutes' => now()->addDays(now()->diffInDays($event->date))->addHours(now()->diffInRealHours($event->date))->diffInRealMinutes($event->date),
        'time_start' => $event->time_start,
        'time_end' => $event->time_end,

    ];
    }
}


