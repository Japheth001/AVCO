<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\NewCatModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests\CategoryRequest;
use RealRashid\SweetAlert\Facades\Alert;

?>
<script src="{{asset('dist/assets/sweetalert2.min.js')}}"></script>

<link rel="stylesheet" href="{{asset('dist/assets/sweetalert2.min.css')}}">
<?php


class NewCategoriesController extends Controller
{
    public function AllNewCat(){
        $newcats = NewCatModel::all();
        return view('admin.newcategories.add',compact('newcats'));
    }

    public function ViewNewCat(){
        $newcats = NewCatModel::latest()->paginate(3);
        return view('admin.newcategories.index',compact('newcats'));
    }



    public function AddNewCat(CategoryRequest $request){
        $validatedData = $request->validated();

        $category_image = $request->file('image');
        $name_gen = md5(rand(1000, 10000)) . '.' . $category_image->getClientOriginalExtension();
        // Image::make($multi_img)->resize(300, 300)->save('image/multi/'.$name_gen);
        // $img = Image::make('foo.jpg')->resize(300, 200);
        Image::make($category_image)->resize(300, 200)->save('storage/images/category/' . $name_gen);
        $last_img = 'images/category/' . $name_gen;



        // $newcats = new NewCatModel();
        // $newcats->name = $validatedData['name'];

        // $newcats->slug=Str::slug($validatedData['slug']);
        // $newcats->description=$validatedData['description'];
        // $newcats->image = $request->$last_img;
        // $newcats->meta_title = $validatedData['meta_title'];
        // $newcats->meta_keyword = $validatedData['meta_keyword'];
        // $newcats->meta_description = $validatedData['meta_description'];
        // $newcats->status=$request->status==true ?  '1' : '0';

        // $newcats->save();

        NewCatModel::insert([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'description'=>$request->description,
            'image'=>$last_img,
            'meta_title'=>$request->meta_title,
            'meta_keyword'=>$request->meta_keyword,
            'meta_description'=>$request->meta_description,
            'status'=>$request->status==true ? '1':'0',
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('view.newcat')->with('success', 'Category Record Added Successfully');
        
    }

    public function GetNewCat($id){
        $newcats = NewCatModel::find($id);
        return view('admin.newcategories.edit',compact('newcats'));
    }

    public function UpdateNewCat(CategoryRequest $request, $id){

        $validatedData = $request->validated();

        // $category_image = $request->file('image');
        // $name_gen = md5(rand(1000, 10000)) . '.' . $category_image->getClientOriginalExtension();
        // // Image::make($multi_img)->resize(300, 300)->save('image/multi/'.$name_gen);
        // // $img = Image::make('foo.jpg')->resize(300, 200);
        // Image::make($category_image)->resize(300, 200)->save('storage/images/category/' . $name_gen);
        // $last_img = 'images/category/' . $name_gen;


        NewCatModel::find($id)->update([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'description'=>$request->description,
            // 'image'=>$last_img,
            'meta_title'=>$request->meta_title,
            'meta_keyword'=>$request->meta_keyword,
            'meta_description'=>$request->meta_description,
            'status'=>$request->status==true ? '1':'0',
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('view.newcat')->with('update', 'Category Record Updated Successfully');

    }

    public function DeleteNewCat($id){

        // $newcats = NewCatModel::find($id);
        // $path='storage/'.$newcats->image;

        // if (File::exists($path)){
        //     File::delete($path);
        // }
        // $newcats->delete();
        // session()->flash('message','Category Deleted Successfully');
        // return Redirect()->route('view.newcat');
       
        // NewCatModel::find($id)->delete();
        // session('delete')->flash('message','Category Deleted Successfully');
        // return Redirect()->route('view.newcat');

        NewCatModel::find($id)->delete();
        return Redirect()->route('view.newcat')->with('delete', 'Category Deleted Successfully');
    }

}
