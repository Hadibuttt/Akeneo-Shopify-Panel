<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cpages;

class AddPageController extends Controller
{
    public function index()
    {
        $cpages = cpages::all();
        return view('addPage')->with([
            'cpages'=> $cpages
        ]);    
    }

    public function pages()
    {
        $cpages = cpages::orderBy('id', 'desc')->get();
        return view('pages')->with([
            'cpages'=> $cpages
        ]);    
    }

    public function save(Request $req)
    {
        $page = new cpages;
        $page->title = $req->title;
        $page->description = $req->description; 
        $page->SEOtitle = $req->SEOtitle;
        $page->SEOdescription = $req->SEOdescription;
        $page->SEOurl = $req->SEOurl;

        if($req->visibility == 'visible')
        {
            $page->visibility = 1;   
        } 
        else 
        {
            $page->visibility = 0; 
        }

        $page->save();

        return redirect('pages');
    }

    public function update($id)
    {
        $cpage = cpages::where('id',$id)->first();
        return view('update-page')->with([
            'cpage'=> $cpage
        ]);
    }

    public function updated(Request $req,$id)
    {
        $title = $req->title;
        $description = $req->description;
        $SEOtitle = $req->SEOtitle;
        $SEOdescription = $req->SEOdescription;
        $SEOurl = $req->SEOurl;

        if($req->visibility == 'visible')
        {
            $visibility = 1;   
        } 
        else 
        {
            $visibility = 0; 
        }

        cpages::where('id',$id)->update(['title'=> $title,
        'description'=> $description,
        'SEOtitle'=> $SEOtitle,
        'SEOdescription'=> $SEOdescription,
        'SEOurl'=> $SEOurl,
        'visibility'=> $visibility
        ]);

        return redirect("/pages");
    }

    public function CustomPages($id)
    {
        $cpage = cpages::where('id',$id)->first();
        return view('custom-page')->with([
            'cpage'=> $cpage
        ]);
    }

}