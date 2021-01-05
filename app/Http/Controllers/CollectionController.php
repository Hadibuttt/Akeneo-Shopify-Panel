<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\sub_categories;
use App\Models\cat_items;

class CollectionController extends Controller
{
    public function index()
    {
        $collections = cat_items::all();

        return view('collection')->with([
            'collections'=> $collections
        ]);
    }
}
