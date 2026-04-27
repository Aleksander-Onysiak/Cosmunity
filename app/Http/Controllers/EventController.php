<?php

namespace App\Http\Controllers;

class EventController extends Controller
{
    public function index()
    {
        return view('events.index');
    }

    public function store()
    {

    }

    public function create()
    {
        return view('events.create');
    }
}
