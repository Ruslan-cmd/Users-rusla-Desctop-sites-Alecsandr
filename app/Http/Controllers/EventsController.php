<?php

namespace App\Http\Controllers;
use App\Event;
use App\Dish;
use App\MenuSection;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class EventsController extends Controller
{
    public function index()
    {

        return view('layouts/events', [
            'eventData' => $this->getEventData(),
            'events' => $this->getEvent(),
            'events1' => $this->getEvent1(),
        ]);
    }
private function getEvent(){
    return  Event::query()
        ->where('date', '>=', now())
           ->orderByDesc('date')
        ->get();
}
    private function getEvent1()
    {
      return  $event = Event::query()
            ->where('date', '<=', now())
            ->paginate(4);

    }

    private function getEventData()
    {
        //Формирование в таблице events через модель Event
        $event = Event::query()->where('date', '>=', now())->first();
        if (!$event) {
            return [
                'exist' => false,
            ];
        }

        return [
            'title' => $event->title,
            'description' => \Illuminate\Support\Str::limit($event->description, 50),
            'date' => $event->date->format('Y-m-d'),
            'untilDays' => now()->diffInDays($event->date),
            //прибавить колличество дней  - addDays до полночи и отнять до нужного времени от полночи - diffIN...
            'untilHours' => now()->addDays(now()->diffInDays($event->date))->diffInRealHours($event->date),
            'untilMinutes' => now()->addHours(now()->diffInRealHours($event->date))->diffInRealMinutes($event->date),
            'untilSeconds' => now()->addMinutes(now()->diffInRealMinutes($event->date))->diffInRealSeconds($event->date),
            'time_start' => $event->time_start,
            'time_end' => $event->time_end,
            'exist' => true,
        ];
    }


}


