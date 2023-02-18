<?php

namespace App\Http\Controllers;

use App\Models\About;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function AllAbout(){

        $abouts=About::latest()->paginate(4);
        return view('admin.aboutus.index', compact('abouts'));
    }

    public function NewAbout()
    {
        $abouts = About::all();
        return view('admin.aboutus.addnew');

    }

    public function AddAbout(Request $request){
      

        About::insert([
           
            'aboutus' => $request->aboutus,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('all.about')->with('success', 'About Added Successfully');
    }


    public function EditAbout($id)
    {

        $abouts = About::find($id);
        return view('admin.aboutus.edit', compact('abouts'));
    }

    public function UpdateAbout(Request $request, $id)
    {
        
        About::find($id)->update([
            
            'aboutus' => $request->aboutus,
        
        ]);

        return Redirect()->route('all.about')->with('update', 'About Updated Successfully!');
    }

    public function DeleteAbout($id)
    {
        About::find($id)->delete();
        return Redirect()->route('all.about')->with('delete', 'About Deleted Successfully');
    }

}
