<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\order_items;
use App\Models\order_details;
use App\Models\User;
use App\Models\products;
use App\Models\AdminLogin;
use Auth;

class CustomerController extends Controller
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
        $users = AdminLogin::all();

        if(Auth::user()->CustomerPage == 1)
        return view('customer')->with([
            'orders'=> $orders,
            'order_items'=> $order_items,
            'order_details'=> $order_details,
            'users' => $users
        ]);
        else    
            return view('restricted');
    }

    public function about()
    {
        $orders = orders::all();
        $order_items = order_items::all();
        $order_details = order_details::all();
        $products = products::all();

        if(Auth::user()->AboutCustomerPage == 1)
        return view('about-customer')->with([
            'orders'=> $orders,
            'order_items'=> $order_items,
            'order_details'=> $order_details,
            'products' => $products
        ]);
        else    
            return view('restricted');
    }
}
