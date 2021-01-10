<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\order_items;
use App\Models\order_details;
use App\Models\products;

class CustomerController extends Controller
{
    public function index()
    {
        $orders = orders::all();
        $order_items = order_items::all();
        $order_details = order_details::all();


        return view('customer')->with([
            'orders'=> $orders,
            'order_items'=> $order_items,
            'order_details'=> $order_details
        ]);
    }

    public function about()
    {
        $orders = orders::all();
        $order_items = order_items::all();
        $order_details = order_details::all();
        $products = products::all();


        return view('about-customer')->with([
            'orders'=> $orders,
            'order_items'=> $order_items,
            'order_details'=> $order_details,
            'products' => $products
        ]);
    }
}
