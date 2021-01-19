<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
use App\Models\sub_categories;
use App\Models\cat_items;
use App\Models\product_images;
use App\Models\AdminLogin;
use App\Models\tax;
use Auth;

class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $categorys = categories::all();
        $sub_categorys = sub_categories::all();
        $collections = cat_items::all();
        $products = products::all();
        $tax = tax::orderBy('id', 'desc')->first();
        
        if(Auth::user()->AddProductPage == 1)
        return view('add-product')->with([
            'categorys'=> $categorys,
            'sub_categorys'=> $sub_categorys,
            'collections'=> $collections,
            'products' => $products,
            'tax'=> $tax
        ]);
        else    
        return view('restricted');
    }

    public function update($id)
    {
        $categorys = categories::all();
        $sub_categorys = sub_categories::all();
        $collections = cat_items::all();
        $products = products::all();
        $product_image = product_images::where('pro_id',$id)->first();
        $tax = tax::orderBy('id', 'desc')->first();
        if(Auth::user()->UpdateProductPage == 1)
        return view('update-product')->with([
            'categorys'=> $categorys,
            'sub_categorys'=> $sub_categorys,
            'collections'=> $collections,
            'products' => $products,
            'tax'=> $tax,
            'product_image' => $product_image
        ]);
        else    
        return view('restricted');
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

        $name = $req->image->getClientOriginalName();
        $image=$req->image->move(public_path().'/assets/img/', $name); 
        $product->pro_img = $name;
        $product->save();

        $id=products::orderBy('id', 'DESC')->first();
        $product_image= new product_images;
        $product_image->pro_id = $id['id'];

        //$imageName2 = time().'.'.$req->image2->getClientOriginalExtension();
        //$product_image->pro_img2 = $req->image2->move(public_path('assets\img'), $imageName2);

        $name2 = $req->image2->getClientOriginalName();
        $image2=$req->image2->move(public_path().'/assets/img/', $name2); 
        $product_image->pro_img2 = $name2;

        $name3 = $req->image3->getClientOriginalName();
        $image3=$req->image3->move(public_path().'/assets/img/', $name3); 
        $product_image->pro_img3 = $name3;

        $name4 = $req->image4->getClientOriginalName();
        $image4=$req->image4->move(public_path().'/assets/img/', $name4); 
        $product_image->pro_img4 = $name4;
        
        $name5 = $req->image5->getClientOriginalName();
        $image5=$req->image5->move(public_path().'/assets/img/', $name5); 
        $product_image->pro_img5 = $name5;
        
        $product_image->save(); 


        return view('success');
    }

    public function updated(Request $req,$id)
    {
        $product= products::find($id);
        $product->pro_title = $req->title;
        $product->description = $req->description;
        $name = $req->image->getClientOriginalName();
        $image=$req->image->move(public_path().'/assets/img/', $name); 
        $product->pro_img = $name;
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

        $product_image=product_images::find($id);
        $name2 = $req->image2->getClientOriginalName();
        $image2=$req->image2->move(public_path().'/assets/img/', $name2); 
        $product_image->pro_img2 = $name2;

        $name3 = $req->image3->getClientOriginalName();
        $image3=$req->image3->move(public_path().'/assets/img/', $name3); 
        $product_image->pro_img3 = $name3;

        $name4 = $req->image4->getClientOriginalName();
        $image4=$req->image4->move(public_path().'/assets/img/', $name4); 
        $product_image->pro_img4 = $name4;
        
        $name5 = $req->image5->getClientOriginalName();
        $image5=$req->image5->move(public_path().'/assets/img/', $name5); 
        $product_image->pro_img5 = $name5;
        
        $product_image->save(); 


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
