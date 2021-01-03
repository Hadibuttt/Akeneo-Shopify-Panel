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
        $category->SEOtitle = $req->SEOtitle;
        $category->SEOdescription = $req->SEOdescription;
        $category->handle = $req->handle;
        $category->cat_img = $req->image;
        $category->save();

        return view('success');
    }

}
