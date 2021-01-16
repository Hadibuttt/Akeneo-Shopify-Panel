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

        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $imageName = time().'.'.$req->image->extension();
        $product->pro_img =   $req->image->storeAs('', $imageName, ['disk' => 'my']);
        $product->save();

        $id=products::orderBy('id', 'DESC')->first();
        $product_image= new product_images;
        $product_image->pro_id = $id['id'];

        //$imageName2 = time().'.'.$req->image2->getClientOriginalExtension();
        //$product_image->pro_img2 = $req->image2->move(public_path('assets\img'), $imageName2);

        $req->validate([
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'image5' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $imageName2 = time().'.'.$req->image2->extension();
        $product_image->pro_img2 =   $req->image2->storeAs('', $imageName2, ['disk' => 'my']);


        $imageName3 = time().'.'.$req->image3->extension();
        $product_image->pro_img3 =   $req->image3->storeAs('', $imageName3, ['disk' => 'my']);


        $imageName4 = time().'.'.$req->image4->extension();
        $product_image->pro_img4 =   $req->image4->storeAs('', $imageName4, ['disk' => 'my']);


        $imageName5 = time().'.'.$req->image5->extension();
        $product_image->pro_img5 =   $req->image5->storeAs('', $imageName5, ['disk' => 'my']);
        
        $product_image->save(); 


        return view('Success');
    }

    public function updated(Request $req,$id)
    {
        $product= products::find($id);
        $product->pro_title = $req->title;
        $product->description = $req->description;
        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $imageName = time().'.'.$req->image->extension();
        $product->pro_img =   $req->image->storeAs('', $imageName, ['disk' => 'my']);
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
