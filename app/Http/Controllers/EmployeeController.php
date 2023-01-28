<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

?>
<script src="{{asset('dist/assets/sweetalert2.min.js')}}"></script>

<link rel="stylesheet" href="{{asset('dist/assets/sweetalert2.min.css')}}">
<?php


class EmployeeController extends Controller
    {

        public function __construct()
        {
            $this->middleware('auth');
        }


    public function AllEmployee()
    {
        $employees = Employee::latest()->paginate(4);
        return view('admin.employees.index', compact('employees'));

    }

    public function NewEmployee()
    {
        $employees = Employee::all();
        return view('admin.employees.add');

    }

    public function EmployeeAdd(Request $request)
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

        $driver_image = $request->file('image');

        $name_gen = md5(rand(1000, 10000)) . '.' . $driver_image->getClientOriginalExtension();
        // Image::make($multi_img)->resize(300, 300)->save('image/multi/'.$name_gen);
        // $img = Image::make('foo.jpg')->resize(300, 200);
        Image::make($driver_image)->resize(300, 200)->save('storage/images/employee/' . $name_gen);
        $last_img = 'images/employee/' . $name_gen;

        Employee::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'experience' => $request->experience,
            'image' => $last_img,
            'created_at' => Carbon::now(),
        ]);

   
        
        // return Redirect()->route('all.employee')->alert('Title','Employee Added Successfully!', 'success');

        return Redirect()->route('all.employee')->with('success', 'Employee Record Added Successfully');
    }

    public function GetEmployee($id)
    {
        $employees = Employee::find($id);
        return view('admin.employees.update', compact('employees'));
    }

    public function UpdateEmployee(Request $request, $id)
    {

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

        $driver_image = $request->file('image');

        $name_gen = md5(rand(1000, 10000)) . '.' . $driver_image->getClientOriginalExtension();
        // Image::make($multi_img)->resize(300, 300)->save('image/multi/'.$name_gen);
        // $img = Image::make('foo.jpg')->resize(300, 200);
        Image::make($driver_image)->resize(300, 200)->save('storage/images/employee/' . $name_gen);
        $last_img = 'images/employee/' . $name_gen;

        Employee::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'experience' => $request->experience,
            'image' => $last_img,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('all.employee')->with('update', 'Record Updated Successfully');
    }

    public function DeleteEmployee($id)
    
    {

        
       
        Employee::find($id)->delete();
        return redirect()->back()->with('delete', 'Deleted!');

      
        // return Redirect()->route('all.employee');
        // return Redirect()->route('all.employee');
    }

}
