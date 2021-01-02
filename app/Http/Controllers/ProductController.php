<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
use App\Models\sub_categories;
use App\Models\cat_items;


class ProductController extends Controller
{
    public function index()
    {
        $categorys = categories::all();
        $sub_categorys = sub_categories::all();
        $collections = cat_items::all();
        $products = products::all();

        return view('product')->with([
            'categorys'=> $categorys,
            'sub_categorys'=> $sub_categorys,
            'collections'=> $collections,
            'products' => $products
        ]);
    }
}
