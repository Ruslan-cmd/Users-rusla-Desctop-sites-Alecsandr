<?php

namespace App\Http\Controllers;
use App\Event;
use App\Dish;
use App\MenuSection;

class SiteController extends Controller
{
    public function index ()
    {

        return view('layouts/main' , [
            'eventData' => $this->getEventData(),
            'specialDish' => $this->getDishAndPrice(),
            ]);
    }

    private function getEventData (){
        $event = Event::query()->where('date', '>=', now())->first();
        if (!$event){
            return [
                'exist' => false,
            ];
        }

    return [
        'title' => $event->title,
        'description' => \Illuminate\Support\Str::limit($event->description,50),
        'date' => $event->date->format('Y-m-d'),
        'untilDays' => now()->diffInDays($event->date),
        'untilHours' => now()->addDays(now()->diffInDays($event->date))->diffInRealHours($event->date),
        'untilMinutes' => now()->addHours(now()->diffInRealHours($event->date))->diffInRealMinutes($event->date),
        'untilSeconds' => now()->addMinutes(now()->diffInRealMinutes($event->date))->diffInRealSeconds($event->date),
        'time_start' => $event->time_start,
        'time_end' => $event->time_end,
        'exist' => true,
    ];
    }
    private function getDishAndPrice(){

        $dish = Dish::query()
            ->inRandomOrder('dish')
            ->with('menuSections')
            ->first();

        return [
            'dish' => $dish->dish,
            'price' => $dish->price,
            'sections' =>$dish->menuSections()->pluck('section'), //после метода - из коллеции моделей будет колекция строк
        ];
    }

}


