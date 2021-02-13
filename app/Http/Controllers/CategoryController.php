<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\categories;
use App\Models\AdminLogin;
use Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function save(Request $req)
    {
        $category= new categories;
        $category->cat_title = $req->title;
        $name = $req->image->getClientOriginalName();
        $image=$req->image->move(public_path().'/assets/img/', $name); 
        $category->cat_img = $name;
        $category->save();
        return redirect()->route('category');
    }

    public function index()
    {
        $categorys = categories::orderBy('cat_id', 'desc')->get();
        $users = AdminLogin::all();
        if(Auth::user()->CategoryPage == 1)
        return view('category')->with([
            'categorys'=> $categorys,
            'users' => $users
        ]);
        else    
            return view('restricted');
    }

    public function create()
    {
        $categorys = categories::all();
        if(Auth::user()->AddCategoryPage == 1)
        return view('create-category')->with([
            'categorys'=> $categorys
        ]);
        else    
            return view('restricted');
    }

    public function update($id)
    {
        $categorys = categories::all();
        $cat = categories::where('cat_id',$id)->first();
        if(Auth::user()->UpdateCategoryPage == 1)
        return view('update-category')->with([
            'categorys'=> $categorys
        ]);
        else    
            return view('restricted');
        
    }

    public function updated(Request $req,$cat_id)
    {
        $category= categories::find($cat_id);
        $category->cat_title = $req->title;
        $name = $req->image->getClientOriginalName();
        $image=$req->image->move(public_path().'/assets/img/', $name); 
        $category->cat_img = $name;
        $category->save();

        return redirect('/category');
    }

}