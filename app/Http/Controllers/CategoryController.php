<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\categories;

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
        $users = User::all();

        return view('category')->with([
            'categorys'=> $categorys,
            'users' => $users
        ]);
    }

    public function create()
    {
        $categorys = categories::all();

        return view('create-category')->with([
            'categorys'=> $categorys
        ]);
    }

    public function update($id)
    {
        $categorys = categories::all();
        $cat = categories::where('cat_id',$id)->first();

        return view('update-category')->with([
            'categorys'=> $categorys
        ]);
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