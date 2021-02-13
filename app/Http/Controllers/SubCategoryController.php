<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\User;
use App\Models\sub_categories;
use App\Models\AdminLogin;
use Auth;


class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $categorys = categories::all();
        $sub_categorys = sub_categories::orderBy('subcat_id', 'desc')->get();
        $users = AdminLogin::all();
        if(Auth::user()->SubcategoryPage == 1)
        return view('subcategory')->with([
            'categorys'=> $categorys,
            'sub_categorys'=> $sub_categorys,
            'users' => $users
        ]);
        else    
            return view('restricted');
    }

    public function create()
    {
        $categorys = categories::all();
        if(Auth::user()->AddSubcategoryPage == 1)
        return view('create-subcategory')->with([
            'categorys'=> $categorys
        ]);
        else    
            return view('restricted');
    }

    public function save(Request $req)
    {
        $sub_category= new sub_categories;
        $sub_category->subcat_title = $req->title;
        $sub_category->cat_id = $req->cat_id;
        $sub_category->SEOtitle = $req->SEOtitle;
        //$sub_category->page_title = $req->SEOtitle;
        $sub_category->SEOdescription = $req->SEOdescription;
        //$sub_category->meta_description = $req->SEOdescription;
        $sub_category->handle = $req->handle;
        $name = $req->image->getClientOriginalName();
        $image=$req->image->move(public_path().'/assets/img/', $name); 
        $sub_category->subcat_img = $name;
        $sub_category->save();
        return redirect('subcategory');
    }

    public function update($id)
    {
        $categorys = categories::all();
        $sub_categorys = sub_categories::where('subcat_id',$id)->first();
        $cat = categories::where('cat_id',$sub_categorys['cat_id'])->first();
        if(Auth::user()->UpdateSubcategoryPage == 1)
        return view('update-subcategory')->with([
            'categorys'=> $categorys,
            'sub_category'=> $sub_categorys,
            'cat' => $cat
        ]);
        else    
            return view('restricted');
    }

    public function updated(Request $req,$subcat_id)
    {
        $sub_category=sub_categories::find($subcat_id);
        $sub_category->subcat_title = $req->title;
        $sub_category->cat_id = $req->cat_id;
        $sub_category->SEOtitle = $req->SEOtitle;
        $sub_category->SEOdescription = $req->SEOdescription;
        $sub_category->handle = $req->handle;
        $name = $req->image->getClientOriginalName();
        $image=$req->image->move(public_path().'/assets/img/', $name); 
        $sub_category->subcat_img = $name;
        $sub_category->save();

        return redirect('/subcategory');
    }

}