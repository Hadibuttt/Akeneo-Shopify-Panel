<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\order_items;
use App\Models\order_details;
use App\Models\User;
use App\Models\products;
use App\Models\ctimeline;
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

    public function about($id,$uid)
    {
        $orders = orders::all();
        $order_items = order_items::all();
        $item = order_items::where('order_id',$id)->first();
        $order_details = order_details::all();
        $detail = order_details::where('order_id',$id)->first();
        $products = products::all();
        $comments = ctimeline::where('c_id',$id)->orderByDesc('id')->get();
        $comment = ctimeline::where('c_id',$id)->count();

        $ords = orders::where('user_id', $uid)->get();

        if(Auth::user()->AboutCustomerPage == 1)
        return view('about-customer')->with([
            'orders'=> $orders,
            'order_items'=> $order_items,
            'order_details'=> $order_details,
            'products' => $products,
            'item' => $item,
            'detail' => $detail,
            'comments' => $comments,
            'comment' => $comment,
            'ords' => $ords
        ]);
        else    
            return view('restricted');
    }

    public function CustomerUpdated(Request $req,$id,$uid)
    {
        $email = $req->email;
        $name = $req->name;
        order_details::where('order_id',$id)->update(['email'=> $email,'name'=> $name]);

        return redirect("/about-customer/$id/$uid");
    }

    public function AddressUpdated(Request $req,$id,$uid)
    {
        $address = $req->address;
        $name = $req->name;
        $city = $req->city;
        $state = $req->state;
        $phone = $req->phone;



        order_details::where('order_id',$id)->update(['address'=> $address,'name'=> $name,'city'=> $city,'state'=> $state,'phone'=> $phone]);

        return redirect("/about-customer/$id/$uid");
    }


    public function CommentAdded(Request $req,$id,$uid)
    {
        $timeline= new ctimeline;
        $timeline->comment = $req->comment;
        $timeline->c_id = $id;
        $timeline->u_id = Auth::user()->id;

        $timeline->save();

        return redirect("/about-customer/$id/$uid");
    }

}
