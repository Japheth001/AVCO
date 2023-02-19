<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

use RealRashid\SweetAlert\Facades\Alert;

?>
<script src="{{asset('dist/assets/sweetalert2.min.js')}}"></script>

<link rel="stylesheet" href="{{asset('dist/assets/sweetalert2.min.css')}}">
<?php


class MaintenanceController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function AllMantain(){
        $mantains=Maintenance::latest()->paginate(4);
        return view('admin.maintain.index', compact('mantains'));
    }

    public function MantainForm(){
        $mantains=Maintenance::latest()->paginate(3);
        return view('admin.maintain.mantainform', compact('mantains'));
    }

    public function MantainAdd(Request $request){
        Maintenance::insert([
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
        $mantains=Maintenance::find($id);
        return view('admin.maintain.edit', compact('mantains'));
    }

    public function IssueApprove($id){
        $mantains=Maintenance::find($id);
        return view('admin.maintain.approve', compact('mantains'));
    }


    public function UpdateMantain(Request $request,$id){
            $update=Maintenance::find($id)->update([
                
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
        $mantains=Maintenance::all();
        return view('admin.maintain.approve', compact('mantains'));
    }


       public function ApproveReqMantain(Request $request, $id){
        
        $mantains=Maintenance::find($id)->paginate(4)->update([
                  
            'status'=>$request->status,
            'approvecomments'=>$request->approvecomments,
            'approvedate'=>$request->approvedate,
        ]);
        return Redirect() ->route('all.mantain') ->with ('success','Request Approved Successfully!');
    }

    // public function AcceptRequestForm($id){
    //     $mantains=Maintenance::find($id);
    //     return view('admin.maintain.edit', compact('mantains'));
    // }


    public function SaveApprove(Request $request, $id){

        $mantains=Maintenance::find($id)->paginate(4)->update([
                  
            'status'=>$request->status,
            'approvecomments'=>$request->approvecomments,
            'approvedate'=>$request->approvedate,
        ]);
        return Redirect() ->route('all.mantain') ->with ('success','Request Approved Successfully!');
    }

    public function ApprovesNew($id) {
        $mantains = Maintenance::find($id);
        return view('admin.maintain.approve', compact('mantains'));
    }

    public function ApproveNewPost(Request $request, $id){
        Maintenance::find($id)->update([
            'status'=>$request->status,
            'approvecomments'=>$request->approvecomments,
        ]);

        return Redirect()->route('all.mantain')->with('update', 'Record Updated Successfully');
    }

}
