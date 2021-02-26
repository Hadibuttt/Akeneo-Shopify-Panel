<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index()
    {
        return view('navigation');
    }

    public function create()
    {
        return view('menu');
    }
}
