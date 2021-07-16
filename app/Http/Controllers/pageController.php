<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index()
    {
        return view("userViews.home");
    }

    public function accessories()
    {
        return view("userViews.accessories");
    }

    public function livemechanic()
    {
        return view("userViews.livemechanic");
    }
    public function washing()
    {
        return view("userViews.washing");
    }
    public function ridershub()
    {
        return view("userViews.ridershub");
    }
}

