<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class TeamController extends Controller
{
    public function AllTeam(){

        $teams=Team::latest()->paginate(4);
        return view('admin.team.index', compact('teams'));
    }

    public function NewTeam()
    {
        $teams = Team::all();
        return view('admin.team.addnew');

    }

    public function AddTeam(Request $request){

        $validationData = $request->validate(
            [
                // 'slider_name' => 'required|unique:sliders|min:2',
                'image' => 'required|mimes:jpg,jpeg,png,gif,jfif,avif',
            ],
            [
                // 'slider_name.required' => 'Please Enter the slider Name',
                'image.required' => 'Team Image required',
            ]

        );

        $team_image = $request->file('image');

        $name_gen = md5(rand(1000, 10000)) . '.' . $team_image->getClientOriginalExtension();
        Image::make($team_image)->resize(1920, 1088)->save('storage/images/team/' . $name_gen);
        $last_img = 'images/team/' . $name_gen;
      

        Team::insert([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('all.team')->with('success', 'New Member Added Successfully');
    }


    public function EditTeam($id)
    {

        $teams = Team::find($id);
        return view('admin.team.edit', compact('teams'));
    }

    public function UpdateTeam(Request $request, $id)
    {

        $validationData = $request->validate(
            [
                // 'slider_name' => 'required|unique:sliders|min:2',
                'image' => 'required|mimes:jpg,jpeg,png,gif,jfif','avif',
            ],
            [
                // 'slider_name.required' => 'Please Enter the slider Name',
                'image.required' => 'Team Image required',
            ]

        );

        $team_image = $request->file('image');

        $name_gen = md5(rand(1000, 10000)) . '.' . $team_image->getClientOriginalExtension();
        Image::make($team_image)->resize(1920, 1088)->save('storage/images/team/' . $name_gen);
        $last_img = 'images/team/' . $name_gen;
       
        Team::find($id)->update([
            
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
        
        ]);

        return Redirect()->route('all.team')->with('update', 'Team Member Updated Successfully!');
    }

    public function DeleteTeam($id)
    {
        Team::find($id)->delete();
        return Redirect()->route('all.team')->with('delete', 'Team Member Deleted Successfully');
    }

}
