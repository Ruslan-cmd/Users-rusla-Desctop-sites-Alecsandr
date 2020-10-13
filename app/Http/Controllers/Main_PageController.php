<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main_PageController extends Controller
{
    public function index()
    {

        return view('main_page');
    }
}
