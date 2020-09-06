<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $req)
    {
        $form = new Form();
        $form->name = $req->input('name');
        $form->date = $req->input('date');
        $form->time_start_and = $req->input('time_start_and');
        $form->person = $req->input('person');
        $form->email = $req->input('email');
        $form->phone = $req->input('phone');
        $form->save();
        //return redirect()->route('/layouts/main');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Form $form)
    {
        //
    }

    public function edit(Form $form)
    {
        //
    }

    public function update(Request $request, Form $form)
    {
        //
    }

    public function destroy(Form $form)
    {
        //
    }
}
