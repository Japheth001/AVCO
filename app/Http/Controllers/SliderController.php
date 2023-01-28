<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function AllSlider()
    {
        $sliders = Slider::latest()->paginate(3);
        return view('admin.slider.index', compact('sliders'));
    }

    public function NewSlider()
    {
        return view('admin.slider.addslider');
    }

    public function AddSlider(Request $request)
    {
        //Add Validations
        $validationData = $request->validate(
            [
                // 'slider_name' => 'required|unique:sliders|min:2',
                'image' => 'required|mimes:jpg,jpeg,png,gif,jfif',
            ],
            [
                // 'slider_name.required' => 'Please Enter the slider Name',
                //'slider_image.min' => 'slider Longer than 4 chracters',
            ]

        );

        $slider_image = $request->file('image');

        $name_gen = md5(rand(1000, 10000)) . '.' . $slider_image->getClientOriginalExtension();
        // Image::make($multi_img)->resize(300, 300)->save('image/multi/'.$name_gen);
        // $img = Image::make('foo.jpg')->resize(300, 200);
        Image::make($slider_image)->resize(1920, 1088)->save('storage/images/slider/' . $name_gen);
        $last_img = 'images/slider/' . $name_gen;

        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('all.slider')->with('success', 'Slider Added Successfully');
    }

    public function EditSlider($id)
    {

        $sliders = Slider::find($id);
        return view('admin.slider.edit', compact('sliders'));
    }

    public function UpdateSlider(Request $request, $id)
    {
        $validationData = $request->validate(
            [
                // 'slider_name' => 'required|unique:sliders|min:2',
                'image' => 'required|mimes:jpg,jpeg,png,gif,jfif',
            ],
            [
                // 'slider_name.required' => 'Please Enter the slider Name',
                'image.required' => 'Slider Image required',
            ]

        );

        $slider_image = $request->file('image');

        $name_gen = md5(rand(1000, 10000)) . '.' . $slider_image->getClientOriginalExtension();
        Image::make($slider_image)->resize(1920, 1088)->save('storage/images/slider/' . $name_gen);
        $last_img = 'images/slider/' . $name_gen;

        Slider::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            // 'user_id' => Auth::user()->id,
        ]);

        return Redirect()->route('all.slider')->with('update', 'Slider Updated Successfully!');
    }

    public function DeleteSlider($id)
    {
        Slider::find($id)->delete();
        return Redirect()->route('all.slider')->with('delete', 'Slider Deleted Successfully');
    }

}
