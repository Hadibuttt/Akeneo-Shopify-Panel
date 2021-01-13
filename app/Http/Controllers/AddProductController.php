<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
use App\Models\sub_categories;
use App\Models\cat_items;
use App\Models\product_images;

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

    public function update()
    {
        $categorys = categories::all();
        $sub_categorys = sub_categories::all();
        $collections = cat_items::all();
        $products = products::all();

        return view('update-product')->with([
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
        $product->vendor = $req->vendor;
        $product->type = $req->type;
        $product->stock = $req->stock;

        $imageName = time().'.'.$req->image->getClientOriginalExtension();
        $product->pro_img =  $req->image->move(public_path('assets\img'), $imageName);

        $product->save();

        $id=products::orderBy('id', 'DESC')->first();
        $product_image= new product_images;
        $product_image->pro_id = $id['id'];

        $imageName2 = time().'.'.$req->image2->getClientOriginalExtension();
        $product_image->pro_img2 = $req->image2->move(public_path('assets\img'), $imageName2);

        $imageName3 = time().'.'.$req->image3->getClientOriginalExtension();
        $product_image->pro_img3 = $req->image3->move(public_path('assets\img'), $imageName3);

        $imageName4 = time().'.'.$req->image4->getClientOriginalExtension();
        $product_image->pro_img4 = $req->image4->move(public_path('assets\img'), $imageName4);

        $imageName5 = time().'.'.$req->image5->getClientOriginalExtension();
        $product_image->pro_img5 = $req->image5->move(public_path('assets\img'), $imageName5);
        
        $product_image->save(); 


        return view('Success');
    }

    public function updated(Request $req,$id)
    {
        $product= products::find($id);
        $product->pro_title = $req->title;
        $product->description = $req->description;
        $imageName = time().'.'.$req->image->getClientOriginalExtension();
        $product->pro_img =  $req->image->move(public_path('assets\img'), $imageName);
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
        $product->vendor = $req->vendor;
        $product->type = $req->type;
        $product->stock = $req->stock;
        $product->save(); 

        return redirect('/product?view=all');
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
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
