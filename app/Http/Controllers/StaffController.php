<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class StaffController extends Controller
{
    public function index()
    {
        $categorys = categories::all();

        return view('staffaccounts')->with([
            'categorys'=> $categorys
        ]);
    }

    public function create()
    {
        $categorys = categories::all();

        return view('staffarea')->with([
            'categorys'=> $categorys
        ]);
    }

}
