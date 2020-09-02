<?php

namespace App\Http\Controllers;
use App\Event;
use App\Dish;
use App\Menu_section;

class SiteController extends Controller
{
    public function index ()
    {

        return view('layouts/main' , [
            'eventData' => $this->getEventData(),
            'dishAndPrice' => $this->getDishAndPrice(),
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
        'untilMinutes' => now()->addHours(now()->diffInRealHours($event->date))->diffInRealMinutes($event->date),
        'untilSeconds' => now()->addMinutes(now()->diffInRealMinutes($event->date))->diffInRealSeconds($event->date),
        'time_start' => $event->time_start,
        'time_end' => $event->time_end,

    ];
    }
    private function getDishAndPrice(){

        $dish = Dish::query()->where('price','<=','100')->first();

        return [
            'dish' => $dish->dish,
            'price' => $dish->price,
        ];
    }
    private function getSection(){

        $section = Menu_section::query()->first();

        return [
          'section' => $section->section,
        ];
    }
    private function getOur(){

        /*$dish->menu_sections()->attach([
            $menu_section1->id,
            $menu_section2>id,
            $dish->cars,
        ]);
*/
        $tags = Menu_section::find(1)->dishes;

    }
}


