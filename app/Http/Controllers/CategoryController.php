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
        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $imageName = time().'.'.$req->image->extension();
        $category->cat_img =   $req->image->storeAs('', $imageName, ['disk' => 'my']);
        $category->save();
        return view('success');
    }

    public function index()
    {
        $categorys = categories::all();
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

        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $imageName = time().'.'.$req->image->extension();
        $category->cat_img =   $req->image->storeAs('', $imageName, ['disk' => 'my']);

        $category->save();

        return redirect('/category');
    }

}