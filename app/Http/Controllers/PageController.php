<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.instructions');
    }

    public function instructions()
    {
        return view('pages.instructions');
    }

}
