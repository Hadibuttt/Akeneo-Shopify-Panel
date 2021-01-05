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

    public function create()
    {
        $categorys = categories::all();
        $sub_categorys = sub_categories::all();

        return view('create-collection')->with([
            'categorys'=> $categorys,
            'sub_categorys'=> $sub_categorys
        ]);
    }

}
