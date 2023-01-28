<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mantains;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class mantainController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function AllMantain(){
        $mantains=Mantains::latest()->paginate(3);
        return view('admin.maintain.index', compact('mantains'));
    }

    public function MantainForm(){
        $mantains=Mantains::latest()->paginate(3);
        return view('admin.maintain.mantainform', compact('mantains'));
    }

    public function MantainAdd(Request $request){
        Mantains::insert([
            'user_id' => Auth::user()->id,
            'truck_no'=>$request->truck_no,
            // 'provider'=>$request->provider,
            // 'contact_no'=>$request->contact_no,
            'description'=>$request->description,
            // 'labour_cost'=>$request->labour_cost,
            // 'material_cost'=>$request->material_cost,
            'date'=>$request->date,
            'created_at' =>Carbon::now()

        ]);

        return Redirect() ->route('all.mantain') ->with ('success','Record Added Successfully!');
    }

    public function EditMantain($id){
        $mantains=Mantains::find($id);
        return view('admin.maintain.edit', compact('mantains'));
    }

    public function IssueApprove($id){
        $mantains=Mantains::find($id);
        return view('admin.maintain.approve', compact('mantains'));
    }


    public function UpdateMantain(Request $request,$id){
            $update=Mantains::find($id)->update([
                
                'truck_no'=>$request->truck_no,
                // 'provider'=>$request->provider,
                // 'contact_no'=>$request->contact_no,
                'description'=>$request->description,
                // 'labour_cost'=>$request->labour_cost,
                // 'material_cost'=>$request->material_cost,
                'date'=>$request->date,
    
            ]);

            return Redirect() ->route('all.mantain') ->with ('success','Record Added Successfully!');
    }


    public function ApproveMantain(){
        $mantains=Mantains::all();
        return view('admin.maintain.approve');
    }


       public function ApproveReqMantain(Request $request, $id){
        
        $mantains=Mantains::find($id)->paginate(4)->update([
                  
            'status'=>$request->status,
            'approvecomments'=>$request->approvecomments,
            'approvedate'=>$request->approvedate,
        ]);
        return Redirect() ->route('all.mantain') ->with ('success','Request Approved Successfully!');
    }

    // public function AcceptRequestForm($id){
    //     $mantains=Mantains::find($id);
    //     return view('admin.maintain.edit', compact('mantains'));
    // }


    public function SaveApprove(Request $request, $id){

        $mantains=Mantains::find($id)->paginate(4)->update([
                  
            'status'=>$request->status,
            'approvecomments'=>$request->approvecomments,
            'approvedate'=>$request->approvedate,
        ]);
        return Redirect() ->route('all.mantain') ->with ('success','Request Approved Successfully!');
    }

    public function ApprovesNew($id) {
        $mantains = Mantains::find($id);
        return view('admin.maintain.test');
    }

    public function ApproveNewPost(Request $request, $id){
        $mantains=Mantains::find($id)->update([
            'status'=>$request->status,
            'approvecomments'=>$request->approvecomments,
        ]);

        return Redirect()->route('all.mantain')->with('success', 'Fuel Record Updated Successfully');
    }

}
