<?php

namespace App\Http\Controllers;
use App\Event;
use Carbon\Carbon;

class SiteController extends Controller
{
    public function index ()
    {
        $event = Event::query()->where('date', '>=', now())->first();
        //dd(Carbon::now()->diffInDays($event->date)); //Разница в днях до указанной даты.
        return view('layouts/main' , compact('event'));

    }
}


