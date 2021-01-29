<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\order_items;
use App\Models\order_details;
use App\Models\products;
use App\Models\AdminLogin;
use Auth;

class OrderDetailsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($id)
    {
        $orders = orders::all();
        $order_items = order_items::all();
        $order_details = order_details::all();
        $products = products::all();

        if(Auth::user()->OrderDetailsPage == 1)
        return view('orderdetails')->with([
            'orders'=> $orders,
            'order_items'=> $order_items,
            'order_details'=> $order_details,
            'products' => $products
        ]);
        else    
            return view('restricted');
    }

    public function NoteUpdated(Request $req,$id)
    {
        $note = $req->note;
        order_details::where('order_id',$id)->update(['note'=> $note]);

        return redirect("/orderdetails/$id");
    }

    public function EmailUpdated(Request $req,$id)
    {
        $email = $req->email;
        order_details::where('order_id',$id)->update(['email'=> $email]);

        return redirect("/orderdetails/$id");
    }

    public function InformationUpdated(Request $req,$id)
    {
        $name = $req->name;
        $address = $req->address;
        $city = $req->city;
        $state = $req->state;
        $phone = $req->phone;

        order_details::where('order_id',$id)->update(['name'=> $name,
        'address'=> $address,
        'city'=> $city,
        'state'=> $state,
        'phone'=> $phone]);

        return redirect("/orderdetails/$id");
    }

}
