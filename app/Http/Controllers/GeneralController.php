<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\store;
use App\Models\AdminLogin;
use Auth;

class GeneralController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $stores = store::all()->sortByDesc('id');
        if(Auth::user()->GeneralPage == 1)

        return view('general')->with([
            'stores'=> $stores
        ]);
        else    
            return view('restricted');
    }

    public function save(Request $req)
    {
        $store = new store;
        $store->StoreName = $req->StoreName;
        $store->StoreEmail = $req->StoreEmail;
        $store->SenderEmail = $req->SenderEmail;
        $store->StoreIndustry = $req->StoreIndustry;
        $store->LegalName = $req->LegalName;
        $store->Phone = $req->Phone;
        $store->Streets = $req->Streets;
        $store->Apartment = $req->Apartment;
        $store->City = $req->City;
        $store->ZipCode = $req->ZipCode;
        $store->Country = $req->Country;
        $store->TimeZone = $req->TimeZone;
        $store->UnitSystem = $req->UnitSystem;
        $store->WeightUnit = $req->WeightUnit;
        $store->Currency = $req->Currency;
        $store->save();

return redirect('settings');
    }
}