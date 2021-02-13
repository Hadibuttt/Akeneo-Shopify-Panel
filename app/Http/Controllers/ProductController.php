<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
use App\Models\sub_categories;
use App\Models\cat_items;
use App\Models\User;
use App\Models\AdminLogin;
use Auth;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $categorys = categories::all();
        $sub_categorys = sub_categories::all();
        $collections = cat_items::all();
        $products = products::orderBy('id', 'desc')->get();
        $users = AdminLogin::all();

        if(Auth::user()->ProductPage == 1)
        return view('product')->with([
            'categorys'=> $categorys,
            'sub_categorys'=> $sub_categorys,
            'collections'=> $collections,
            'products' => $products,
            'users' => $users
        ]);
        else    
        return view('restricted');
    }
}
