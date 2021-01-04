<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class CategoryController extends Controller
{
    public function save(Request $req)
    {
        $category= new categories;
        $category->cat_title = $req->title;
        $category->cat_img = $req->image;
        $category->save();

        return view('success');
    }

    public function index()
    {
        $categorys = categories::all();

        return view('category')->with([
            'categorys'=> $categorys
        ]);
    }

    public function create()
    {
        $categorys = categories::all();

        return view('create-category')->with([
            'categorys'=> $categorys
        ]);
    }


}