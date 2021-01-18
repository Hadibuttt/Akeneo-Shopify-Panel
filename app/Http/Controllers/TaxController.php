<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tax;
use Auth;

class TaxController extends Controller
{
    public function index()
    {
        $tax = tax::orderBy('id', 'desc')->first();
        if(Auth::user()->TaxPage == 1)
        return view('tax')->with([
            'tax'=> $tax
        ]);
        else    
            return view('restricted');
    }

    public function save(Request $req)
    {
        $tax = new tax;
        $tax->digital = $req->digital;
        $tax->food = $req->food;
        $tax->nonfood = $req->nonfood;
        $tax->save();

    return redirect('settings');
    }

}
