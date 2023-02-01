<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\NewCatModel;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function AllProduct(){ 
        $products = Products::all();
        return view('admin.products.index',compact('products'));
    }

    public function NewProduct(){
        $brands = Brand::all();
        $categories=NewCatModel::all();
        $products = Products::all();
        return view('admin.products.add',compact('products','categories','brands'));
    }




public function AddProduct (Request $request){
       
    $categories=NewCatModel::findOrFail('category_id');
    // $product=$categories->products()->create([
        $product=$categories->products()->Products::insert([
        
        'name'=>$request->name,
        'slug'=>$request->slug,
        'brand'=>$request->brand,
        'small_description'=>$request->small_description,
        'description'=>$request->description,
        'quantity'=>$request->quantity,
        // 'image'=>$last_img,
        'meta_title'=>$request->meta_title,
        'meta_keyword'=>$request->meta_keyword,
        'meta_description'=>$request->meta_description,
        'trending'=>$request->trending==true ? '1':'0',
        'status'=>$request->status==true ? '1':'0',
        'created_at' => Carbon::now(),

    ]);
    // return Redirect()->route('view.newcat')->with('success', 'Product Added Successfully');
    return $product->id;
    
}

}
