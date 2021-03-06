<?php

namespace App\Http\Controllers;
use App\Event;
use App\Dish;
use App\MenuSection;
use App\Comment;
class SiteController extends Controller
{
    public function index()
    {
        return view('layouts/main', [
            'eventData' => $this->getEventData(),
            'specialDish' => $this->getDishAndPrice(),
            'comments' => $this->getUserComment(),
        ]);

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

    private function getDishAndPrice()
    {

        $dish = Dish::query()
            ->inRandomOrder('dish')
            //Запрос должен включать в себя закрузку секций этого блюда
            ->with('menuSections')
            ->first();

        return [
            'dish' => $dish->dish,
            'price' => $dish->price,
            // pluck - берет 1 поле коллекции и по нему выводит информацию
            // коллецию моделей превращает в коллецию строк которые сформированы из атрибута section
            'sections' => $dish->menuSections()->pluck('section'),
        ];
    }

    private function getUserComment()
    {
       return Comment::query()->limit(3)->get();
    }

}

