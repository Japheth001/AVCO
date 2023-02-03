<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Brand;
use App\Models\Products;
use App\Models\NewCatModel;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function AllProduct()
    {
        $brands = Brand::all();
        $categories = NewCatModel::all();
        $products = Products::latest()->paginate(4);
        return view('admin.products.index', compact('products', 'categories', 'brands'));
    }

    public function NewProduct()
    {
        $brands = Brand::all();
        $categories = NewCatModel::all();
        $products = Products::all();
        return view('admin.products.add', compact('products', 'categories', 'brands'));
    }

    public function AddProduct(Request $request)
    {

        // $categories = NewCatModel::findOrFail('category_id');
        // // $product=$categories->products()->create([
        // $product = $categories->products()->Products::insert([
            $product_image = $request->file('image');

            $name_gen = md5(rand(1000, 10000)) . '.' . $product_image->getClientOriginalExtension();
            // Image::make($multi_img)->resize(300, 300)->save('image/multi/'.$name_gen);
            // $img = Image::make('foo.jpg')->resize(300, 200);
            Image::make($product_image)->resize(300, 200)->save('storage/images/product/' . $name_gen);
            $last_img = 'images/product/' . $name_gen;
    
            
            
            
            Products::insert([

            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'brand' => $request->brand,
            'small_description' => $request->small_description,
            'description' => $request->description,
            'quantity' => $request->quantity,
            // 'image'=>$last_img,
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
            'trending' => $request->trending == true ? '1' : '0',
            'status' => $request->status == true ? '1' : '0',
            'image'=>$last_img,
            'created_at' => Carbon::now(),

        ]);
        return Redirect()->route('all.product')->with('success', 'Product Added Successfully');
        
       
        // $product=productImage::insert(
        //     'product_id'=> $request->product_id,
        //     'image'=>$last_img,
        // );

        // $productImages->productImages()->create([
        //     'product_id'=> $request->product_id,
        //     'image'=>$last_img,
        //     'created_at' => Carbon::now(),
        // ]);

    }

    public function AddProductp(ProductRequest $request){

        $validatedData = $request->validated();
        $category = NewCatModel::findOrFail($validatedData['category_id']);

        $product=$category->products()->create([
            
            'category_id' => $validatedData['category_id'],
            'name' => $validatedData['name'],
            'brand'=>$validatedData['brand'],
            'slug' => Str::slug($validatedData['slug']),
            'small_description'=> $validatedData['small_description'],
            'description' => $validatedData['description'],
            'quantity'=> $validatedData['quantity'],
            'trending' => $request->trending == true ? '1' : '0',
            'status' => $request->status == true ? '1' : '0',
            'meta_title'=>$validatedData['meta_title'],
            'meta_keyword'=>$validatedData['meta_keyword'],
            'meta_description'=>$validatedData['meta_description']

        ]);

        return $product;
    }

        public function GetNewProd($id){
        $brands = Brand::all();
        // $products = Products::with('productImages')->get();
        $categories = NewCatModel::all();
        $products = Products::all();
        return view('admin.products.edit', compact('products','categories','brands'));
    }

}
