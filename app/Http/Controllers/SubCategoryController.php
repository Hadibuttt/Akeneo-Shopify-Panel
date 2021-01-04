<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\sub_categories;

class SubCategoryController extends Controller
{
    public function index()
    {
        $categorys = categories::all();
        $sub_categorys = sub_categories::all();

        return view('subcategory')->with([
            'categorys'=> $categorys,
            'sub_categorys'=> $sub_categorys
        ]);
    }

    public function create()
    {
        $categorys = categories::all();

        return view('create-subcategory')->with([
            'categorys'=> $categorys
        ]);
    }

    public function save(Request $req)
    {
        $sub_category= new sub_categories;
        $sub_category->subcat_title = $req->title;
        $sub_category->cat_id = $req->cat_id;
        $sub_category->SEOtitle = $req->SEOtitle;
        $sub_category->SEOdescription = $req->SEOdescription;
        $sub_category->handle = $req->handle;
        $sub_category->subcat_img = $req->image;
        $sub_category->save();

        return view('success');
    }

}
