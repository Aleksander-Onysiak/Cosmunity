<?php

namespace App\Http\Controllers;

class GroupController extends Controller
{
    public function index()
    {
        return view('social.groups.index');
    }

    public function store()
    {

    }

    public function create()
    {
        return view('social.groups.create');
    }
}
