<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    public function index()
    {
        return view('layouts/events', [
            'events' => $this->getEvent(),

        ]);
    }
private function getEvent(){
       return  Event::query()
        ->where('date', '>=', now())
           ->orderByDesc('date')
        ->get();
}
}


