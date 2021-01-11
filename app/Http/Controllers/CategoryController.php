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

    public function update()
    {
        $categorys = categories::all();

        return view('update-category')->with([
            'categorys'=> $categorys
        ]);
    }

    public function updated(Request $req,$cat_id)
    {
        $category= categories::find($cat_id);
        $category->cat_title = $req->title;
        $category->cat_img = $req->image;
        $category->save();

        return redirect('/category');
    }

}