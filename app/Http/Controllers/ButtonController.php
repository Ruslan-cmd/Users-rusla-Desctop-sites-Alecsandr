<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ButtonController extends Controller
{
    public function index()
    {
        session()->get('dish');
dd (session('dish'));
    }
}
