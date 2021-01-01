<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
use App\Models\sub_categories;
use App\Models\cat_items;

class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = categories::all();
        $sub_categorys = sub_categories::all();
        $collections = cat_items::all();
        $products = products::all();

        return view('add-product')->with([
            'categorys'=> $categorys,
            'sub_categorys'=> $sub_categorys,
            'collections'=> $collections,
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $req)
    {
        $product= new products;
        $product->pro_title = $req->title;
        $product->description = $req->description;
        $product->pro_img = $req->image;
        $product->pro_price = $req->sellprice;
        $product->saleprice = $req->saleprice;
        $product->purchaseprice = $req->purchaseprice;
        $product->tax = $req->tax;
        $product->weight = $req->weight;
        $product->dimension = $req->dimension;
        $product->barcode = $req->barcode;
        $product->SEOtitle = $req->SEOtitle;
        $product->SEOdesc = $req->SEOdescription;
        $product->SEOurl = $req->handle;
        $product->status = $req->status;
        $product->cat_item_id = $req->collection;
        $product->tags = $req->tags;
        $product->save();

        return view('Success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
