<?php

namespace App\Http\Controllers;

use App\Models\IssueTyre;
use App\Models\Tyres;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

?>
<script src="{{asset('dist/assets/sweetalert2.min.js')}}"></script>

<link rel="stylesheet" href="{{asset('dist/assets/sweetalert2.min.css')}}">
<?php

class TyresController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function AllTyreDash()
    {
        $tyres = Tyres::latest()->paginate(5);
        return view('admin.tyres.tyredash', compact('tyres'));
    }
    public function AllTyres()
    {
        $tyres = Tyres::latest()->paginate(5);
        return view('admin.tyres.index', compact('tyres'));
    } 

    public function TyreAdd2()
    {
        $tyres = Tyres::all();
        return view('admin.tyres.add3', compact('tyres'));
    }

    public function TyreAdd(Request $request)
    {
        //Perform Validations
        $validated = $request->validate([
            'front_or_back_tyre' => 'required|max:255',
            'tyre_serial' => 'required|unique:tyres|max:255',
            //'size' => 'required|max:255',
            'manufacturer' => 'required|max:255',
            'status' => 'required|max:255',

        ],
            [
                'tyre_serial.required' => 'Please Input Tyre Serial Number',

            ]);
        Tyres::insert([
            // $request->session->put('tyreid', $request->getId()),
            // Session::get('tyreid'),
            'user_id' => Auth::user()->id,
            'front_or_back_tyre' => $request->front_or_back_tyre,
            'tyre_serial' => $request->tyre_serial,
            'size' => $request->size,
            'manufacturer' => $request->manufacturer,
            'status' => $request->status,
            // 'status' =>'Pending',
            'issue_to' => $request->issue_to,
            // 'tyre_id' => $request->Session::get('tyreid'),
            'driverid' => $request->driverid,
            'numberplate_id' => $request->numberplate_id,
            'created_at' => Carbon::now(),
            // print_r($tyreid['id']);
        ]);

        return Redirect()->route('all.tyre')->with('success', 'Tyre Successfully registered!');
    }

    public function DeleteTyre(Request $request, $id)
    {
        $delete = Tyres::find($id)->delete();
        return Redirect()->route('all.tyre')->with('delete', 'Tyre Successfully Deleted!');
    }

    public function EditTyre(Request $request, $id)
    {
        $tyres = Tyres::find($id);
        return view('admin.tyres.edit2', compact('tyres'));
    }

    public function UpdateTyre(Request $request, $id)
    {
        $tyres = Tyres::find($id)->update([
            'user_id' => Auth::user()->id,
            'front_or_back_tyre' => $request->front_or_back_tyre,
            'tyre_serial' => $request->tyre_serial,
            'size' => $request->size,
            'status' => $request->status,
            'manufacturer' => $request->manufacturer,
           
            
            
        ]);
        return Redirect()->route('all.tyre')->with('update', 'Tyre Successfully Updated!');
    }

    public function ManageTyres(Request $request, $id)
    {
        $tyres = Tyres::find($id);
        return view('admin.issuetyre.issue', compact('tyres'));
    }
    public function IssueTyre(Request $request, $id)
    {
        // $issue_tyres=IssueTyre::find($id);
        // return view('admin.tyres.issue', compact('issue_tyres'));

        // IssueTyre::insert([
            $tyres = Tyres::find($id)->update([
            'user_id' => Auth::user()->id,
            'issue_to' => $request->issue_to,
            // 'tyre_id' => $request->Session::get('tyreid'),
            'driverid' => $request->driverid,
            'numberplate_id' => $request->numberplate_id,
            'status' => $request->status,
            'created_at' => Carbon::now(),
          
        ]);

        // Tyres::insert([
        //     'status' => $request->status,
        // ]);

        return Redirect()->route('tyre.allissue')->with('success', 'Tyre Successfully Issued!');
    }

    //Tyre Dashboard
    public function IssueTyreDass(){
        // $tyres = Tyres::join('issue_tyres', 'tyres.id' = 'issue_tyres.id')->get(['tyres.*', 'issue_tyres.descrption']);
        $tyres = Tyres::latest()->paginate(5)->join('issue_tyres', 'tyres.id', '=', 'issue_tyres.id')
               ->get(['tyres.*', 'issue_tyres.status']);

        return view('admin.tyredash.issued', compact('tyres'));
    }

    public function IssueTyreDasj(){
        $tyres = Tyres::with('issueTyre')->get();
        $issuetyres = IssueTyre::with('tyre')->get();

        return view('admin.tyredash.issued', compact('tyres','issuetyres'));
    }

    // public function IssueTyreDas(){
    //     $tyres = DB::table('issueTyres')
    // }


    //Issue Tyres Section 

    public function TyresAllIssue()
    {
        $issuetyre=IssueTyre::all();
        $tyres = Tyres::latest()->paginate(5);
        return view('admin.issuetyre.index', compact('tyres','issuetyre'));
    } 

    public function TyresEditIssue(Request $request, $id)
    {
        $tyres = Tyres::find($id);
        return view('admin.issuetyre.edit', compact('tyres'));
    }


    public function IssueTyreUpdate(Request $request, $id)
    {
        // $issue_tyres=IssueTyre::find($id);
        // return view('admin.tyres.issue', compact('issue_tyres'));

        // IssueTyre::insert([
            $tyres = Tyres::find($id)->update([
            'user_id' => Auth::user()->id,
            'issue_to' => $request->issue_to,
            // 'tyre_id' => $request->Session::get('tyreid'),
            'driverid' => $request->driverid,
            'numberplate_id' => $request->numberplate_id,
            'status' => $request->status,
            'created_at' => Carbon::now(),
          
        ]);

               return Redirect()->route('tyre.allissue')->with('update', 'Tyre Successfully Issued!');
    }


    //Store Tyres
    public function StoreTyres()
    {
        $tyres = Tyres::latest()->paginate(5);
        return view('admin.storetyre.index', compact('tyres'));
    } 

    public function Store($id)
    {
        $tyres = Tyres::find($id);
        return view('admin.storetyre.edit', compact('tyres'));
    }
    public function StorePost(Request $request, $id)
    {
        // $issue_tyres=IssueTyre::find($id);
        // return view('admin.tyres.issue', compact('issue_tyres'));

        // IssueTyre::insert([
            $tyres = Tyres::find($id)->update([
           
            'status' => $request->status,
                     
        ]);

        return Redirect()->route('tyre.allstore')->with('updateStore', 'Tyre Successfully Issued!');
    }
    public function RetrayTyres()
    {
        $tyres = Tyres::latest()->paginate(5);
        return view('admin.retray.index', compact('tyres'));
    } 

    public function Retray($id)
    {
        $tyres = Tyres::find($id);
        return view('admin.retray.edit', compact('tyres'));
    }

    public function RetrayPost(Request $request, $id)
    {
        // $issue_tyres=IssueTyre::find($id);
        // return view('admin.tyres.issue', compact('issue_tyres'));

        // IssueTyre::insert([
            $tyres = Tyres::find($id)->update([
           
            'status' => $request->status,
                     
        ]);

        return Redirect()->route('tyre.allretray')->with('updateRetray', 'Tyre Successfully Issued!');
    }

    public function DefectedTyres()
    {
        $tyres = Tyres::latest()->paginate(5);
        return view('admin.defectedT.index', compact('tyres'));
    } 

    public function Defected($id)
    {
        $tyres = Tyres::find($id);
        return view('admin.defectedT.edit', compact('tyres'));
    }

    public function DefectedPost(Request $request, $id)
    {
        // $issue_tyres=IssueTyre::find($id);
        // return view('admin.tyres.issue', compact('issue_tyres'));

        // IssueTyre::insert([
            $tyres = Tyres::find($id)->update([
           
            'status' => $request->status,
                     
        ]);

        return Redirect()->route('tyre.alldefected')->with('updateDefect', 'Tyre Successfully Issued!');
    }

}
