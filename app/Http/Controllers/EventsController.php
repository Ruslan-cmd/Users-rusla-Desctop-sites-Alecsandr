<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class EventsController extends Controller
{
    public function index()
    {
        return view('layouts/events', [
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



}


