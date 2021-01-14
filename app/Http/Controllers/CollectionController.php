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
        $collection->SEOtitle = $req->SEOtitle;
        $collection->SEOdescription = $req->SEOdescription;
        //$collection->page_title = $req->SEOtitle;
        //$collection->meta_description = $req->SEOdescription;
        $collection->handle = $req->handle;
        
        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $imageName = time().'.'.$req->image->extension();
        $collection->cat_item_img =  $req->image->storeAs('', $imageName, ['disk' => 'my']);

        $collection->save();

        return view('success');
    }

    public function update($id)
    {
        $categorys = categories::all();
        $sub_categorys = sub_categories::all();
        $collections = cat_items::where('cat_item_id',$id)->first();
        $subcat = sub_categories::where('subcat_id',$collections['subcat_id'])->first();
        $cat = categories::where('cat_id',$subcat['cat_id'])->first();

        return view('update-collection')->with([

            'categorys'=> $categorys,
            'sub_categorys'=> $sub_categorys,
            'collections'=> $collections,
            'subcat' => $subcat,
            'cat' => $cat
        
        ]);
    }

    public function updated(Request $req,$cat_item_id)
    {
        $collection = cat_items::find($cat_item_id);
        $collection->cat_item_title = $req->title;
        $collection->subcat_id = $req->subcategory;
        $collection->SEOtitle = $req->SEOtitle;
        $collection->SEOdescription = $req->SEOdescription;
        $collection->handle = $req->handle;
        
        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $imageName = time().'.'.$req->image->extension();
        $collection->cat_item_img =  $req->image->storeAs('', $imageName, ['disk' => 'my']);
        $collection->save();

        return redirect('/collection');
    }


}