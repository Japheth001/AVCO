<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //

    public function AllCat()
    {
        $categories = Category::latest()->paginate(4);
        return view('admin.category.index', compact('categories'));
        //return view('admin.category.index');
    }

    public function CatAdd(Request $request)
    {
        //Perform Validations
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',

        ],
            [
                'category_name.required' => 'Please Input Category Name',

            ]);

        Category::insert([

            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success', 'Category Added Successfully!');
    }

    public function CatEdit($id)
    {
        $categories = Category::find($id);
        return view('admin.category.edit', compact('categories'));
    }

    public function CatUpdate(Request $request, $id)
    {
        $update = Category::find($id)->update([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
        ]);

        return Redirect()->route('all.category')->with('success', 'Category Updated Successfully!');
    }

    public function CatDelete($id)
    {
        $delete = Category::find($id)->delete();
        return Redirect()->route('all.category')->with('success', 'Category Name Deleted Successfully');
    }

}
