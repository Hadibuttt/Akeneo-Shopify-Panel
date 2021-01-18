<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class TaxController extends Controller
{
    public function index()
    {
        if(Auth::user()->TaxPage == 1)
        return view('tax');
        else    
            return view('restricted');
    }
}
