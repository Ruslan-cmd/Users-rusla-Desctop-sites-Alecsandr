<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormPageController extends Controller
{
    public function index()
    {
        return view('layouts/contact_form');
    }

}
