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
            'comment' => $this->getUserComment(),
        ]);

    }

    private function getEventData()
    {
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
            ->with('menuSections')
            ->first();

        return [
            'dish' => $dish->dish,
            'price' => $dish->price,
            'sections' => $dish->menuSections()->pluck('section'), //после метода - из коллеции моделей будет колекция строк
        ];
    }

    private function getUserComment()
    {
        do {
            $comment = Comment::query()
                ->inRandomOrder()
                ->first();
            $comment1 = Comment::query()
                ->inRandomOrder()
                ->first();
            $comment2 = Comment::query()
                ->inRandomOrder()
                ->first();
        } while ($comment != ($comment1 != $comment2));

        return [
            'name' => $comment->name,
            'profession' => $comment->profession,
            'comment' => $comment->comment,
            'rating' => $comment->rating,
            'name1' => $comment1->name,
            'profession1' => $comment1->profession,
            'comment1' => $comment1->comment,
            'rating1' => $comment1->rating,
            'name2' => $comment2->name,
            'profession2' => $comment2->profession,
            'comment2' => $comment2->comment,
            'rating2' => $comment2->rating,
        ];
    }

   /* private function postUserComment()
    {
 DB::table('events')->insert(['date'=>'21.05.2010','time'=>'23:45:24', 'title' => 'Lupita Smith','image'=>'NULL', 'description' => 'lupita@gmail.com' ]);
    }*/
}

