<?php

namespace App\Http\Controllers;
use App\http\Requests\PostRequest;
use App\Form;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function index(Request $req)
    {
/*
        $form = new Form();
        $form->name = $req->input('reserv_name');
        $form->date = $req->input('datepicker');
        $form->date ->format('Y-m-d');
        $form->time_start_and = $req->input('reserv_time');
        $form->person = $req->input('reserv_persons');
        $form->email = $req->input('reserv_email');
        $form->phone = $req->input('reserv_phone');
        if (($form->name == 'Your Name') || ($form->date === 'Choose A Date')){echo 'рп';}
        else { $form->save();}
  */
    }
    public function create()
    {

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
