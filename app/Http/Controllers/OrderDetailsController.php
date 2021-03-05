<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\order_items;
use App\Models\order_details;
use App\Models\products;
use App\Models\AdminLogin;
use Auth;
use App\Models\otimeline;

class OrderDetailsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($id)
    {
        $orders = orders::where('id',$id)->first();
        $order_items = order_items::where('order_id',$id)->get();
        $qtytotal = 0;
        $pricetotal = 0;

    foreach ($order_items as $order_item) 
{
    $qtytotal = $qtytotal + $order_item->qty;
    $pricetotal = $pricetotal + $order_item->total;
}

        $order_details = order_details::where('order_id',$id)->first();
        $products = products::all();
        $comments = otimeline::where('o_id',$id)->orderByDesc('id')->get();
        $comment = otimeline::where('o_id',$id)->count();

        if(Auth::user()->OrderDetailsPage == 1)
        return view('orderdetails')->with([
            'orders'=> $orders,
            'order_items'=> $order_items,
            'order_details'=> $order_details,
            'products' => $products,
            'comments' => $comments,
            'comment' => $comment,
            'qtytotal' => $qtytotal,
            'pricetotal' => $pricetotal
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

    public function CommentAdded(Request $req,$id)
    {
        $timeline= new otimeline;
        $timeline->comment = $req->comment;
        $timeline->o_id = $id;
        $timeline->u_id = Auth::user()->id;

        $timeline->save();

        return redirect("/orderdetails/$id");

    }

}
