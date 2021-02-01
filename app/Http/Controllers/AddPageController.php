<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cpages;

class AddPageController extends Controller
{
    public function index()
    {
        return view('addPage');
    }

    public function save(Request $req)
    {
        $page = new cpages;
        $page->title = $req->title;
        $page->description = $req->description; 
        $page->SEOtitle = $req->SEOtitle;
        $page->SEOdescription = $req->SEOdescription;
        $page->SEOurl = $req->SEOurl;

        if($req->visibility == 'visible'){

            $page->visibility = 1;   

        } 
        else {
            $page->visibility = 0; 
        }

        $page->save();

        return view('pages');
    }
}
