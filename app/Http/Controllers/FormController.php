<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(FormRequest $req)
    {
   $form = new Form();
   $form->name = $req->input('name');
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
