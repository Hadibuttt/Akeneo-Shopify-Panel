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

    public function save(Request $req)
    {
        $collection = new cat_items;
        $collection->cat_item_title = $req->title;
        $collection->subcat_id = $req->subcategory;
        $collection->page_title = $req->SEOtitle;
        $collection->meta_description = $req->SEOdescription;
        //$collection->handle = $req->handle;
        $collection->cat_item_img = $req->image;
        $collection->save();

        return view('success');
    }

}