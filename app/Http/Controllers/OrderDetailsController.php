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
    
    public function index()
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

}
