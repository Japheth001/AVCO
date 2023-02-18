<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function AllTestimonial(){

        $testimonials=Testimonial::latest()->paginate(2);
        return view('admin.testimony.index', compact('testimonials'));
    }

    public function NewTestimonial()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimony.addnew');

    }

    public function AddTestimonial(Request $request){
      

        Testimonial::insert([
           
            'customer' => $request->customer,
            'comments' => $request->comments,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('all.testimonial')->with('success', 'Testimonial Added Successfully');
    }


    public function EditTestimonial($id)
    {

        $testimonials = Testimonial::find($id);
        return view('admin.testimony.edit', compact('testimonials'));
    }

    public function UpdateTestimonial(Request $request, $id)
    {
        
        Testimonial::find($id)->update([
            
            'customer' => $request->customer,
            'comments' => $request->comments,
        
        ]);

        return Redirect()->route('all.testimonial')->with('update', 'Testimonial Updated Successfully!');
    }

    public function DeleteTestimonial($id)
    {
        Testimonial::find($id)->delete();
        return Redirect()->route('all.testimonial')->with('delete', 'Testimonial Deleted Successfully');
    }

}
