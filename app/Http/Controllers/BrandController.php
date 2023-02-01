<?php

namespace App\Http\Controllers;

// require 'vendor/autoload.php';
use App\Models\Brand;
use App\Models\Multipic;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

?>
<script src="{{asset('dist/assets/sweetalert2.min.js')}}"></script>

<link rel="stylesheet" href="{{asset('dist/assets/sweetalert2.min.css')}}">
<?php

// use Nette\Utils\Image;
// use Intervention\Image\Image;
// use Image;

// use Intervention\Image\Facades\Image;
class BrandController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function AllBrand()
    {
        $brands = Brand::latest()->paginate(4);
        return view('admin.braco.index', compact('brands'));
    }

    public function BrandAddForm(){
        $brands=Brand::latest()->paginate(3);
        return view('admin.braco.addform', compact('brands'));
    }

    public function BrandAdd(Request $request)
    {
        //Add Validations
        $validationData = $request->validate(
            [
                'brand_name' => 'required|unique:brands|min:2',
                'brand_image' => 'required|mimes:jpg,jpeg,png,gif,jfif',
            ],
            [
                'brand_name.required' => 'Please Enter the Brand Name',
                //'brand_image.min' => 'Brand Longer than 4 chracters',
            ]

        );

        $brand_image = $request->file('brand_image');
        // $name_gen = hexdec(uniqid());
        // // $name_gen = md5(rand(1000,10000)) . '.' . $multi_img->getClientOriginalExtension();
        // $image_ext = strtolower($brand_image->getClientOriginalExtension());
        // $image_name = $name_gen . '.' . $image_ext;
        // $up_location = 'images/brand/';
        // $last_img = $up_location . $image_name;
        // // $brand_image->move($up_location, $image_name);
        // $brand_image->move($up_location, $image_name);

        $name_gen = md5(rand(1000, 10000)) . '.' . $brand_image->getClientOriginalExtension();
        // Image::make($multi_img)->resize(300, 300)->save('image/multi/'.$name_gen);
        // $img = Image::make('foo.jpg')->resize(300, 200);
        Image::make($brand_image)->resize(300, 200)->save('storage/images/brand/' . $name_gen);
        $last_img = 'images/brand/' . $name_gen;

        Brand::insert([
            'brand_name' => $request->brand_name,
            'slug' => $request->slug,
            'brand_image' => $last_img,
            'status'=>$request->status==true ? '1':'0',
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success', 'Brand Added Successfully');
    }

    public function EditBrand($id)
    {

        $brands = Brand::find($id);
        return view('admin.braco.edit', compact('brands'));
    }

    public function UpdateBrand(Request $request, $id)
    {
        // $brand_image = $request->file('brand_image');
       
        // $name_gen = md5(rand(1000, 10000)) . '.' . $brand_image->getClientOriginalExtension();
        // Image::make($brand_image)->resize(300, 200)->save('storage/images/brand/' . $name_gen);
        // $last_img = 'images/brand/' . $name_gen;
        
        
        
        
        Brand::find($id)->update([
            'brand_name' => $request->brand_name,
            'slug' => $request->slug,
            // 'brand_image' => $last_img,
            'status'=>$request->status==true ? '1':'0',
            'user_id' => Auth::user()->id,
        ]);

        return Redirect()->route('all.brands')->with('update', 'Brand Updated Successfully!');
    }

    public function DeleteBrand($id)
    {
        Brand::find($id)->delete();
        return Redirect()->route('all.brands')->with('delete', 'Brand Deleted Successfully');
    }

    ////All Multi Images

    public function AllMulti()
    {
        $images = Multipic::all();
        return view('admin.multi.index', compact('images'));
    }

    public function MultiAdd(Request $request)
    {

        //Add Validations
        $validationData = $request->validate(
            // [

            //     'image' => 'required|mimes:jpg,jpeg,png,gif,jfif',
            // ],

            [
                'image.required' => 'Please Choose an Image',
                //'brand_image.min' => 'Brand Longer than 4 chracters',
            ]

        );

        $images = $request->file('image');

        foreach ($images as $multi_img) {

            // if ($request->hasFile('image')) {
            //     $destination_path = 'public/image/multi';
            //     $images=$request->file('image');
            //     $name_gen = hexdec(uniqid()) . '.' . $multi_img->getClientOriginalExtension();
            //     $path=$request->file('image')->storeAs($destination_path, $name_gen);
            //     $images['image'] = $name_gen;

            // }

            $name_gen = md5(rand(1000, 10000)) . '.' . $multi_img->getClientOriginalExtension();
            // Image::make($multi_img)->resize(300, 300)->save('image/multi/'.$name_gen);
            // $img = Image::make('foo.jpg')->resize(300, 200);
            Image::make($multi_img)->resize(300, 200)->save('storage/images/multi/' . $name_gen);
            $last_img = 'storage/images/multi/' . $name_gen;

            $images = Multipic::insert([

                'image' => $last_img,
                'created_at' => Carbon::now(),
            ]);

        } //end of for each

        // return view('admin.multi.index', compact('images'))->with('success', 'Image Added Successfully');
        return Redirect()->back()->with('success', 'Image Added Successfully');
    }

    public function AllMultis()
    {
        $images = Multipic::all();
        return view('admin.multi.root', compact('images'));
    }

    //Store image
    public function MultiAddas(Request $request)
    {
        $data = new Brand();

        if ($request->hasFile('image')) {
            // $file= $request->file('image');

            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();

            // $file = $request->file('image');

            $fileName = $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return Redirect()->back()->with('success', 'Image Added Successfully');

    }

    public function MultiAddz(Request $request)
    {
        $image = array();

        if ($files = $request->file('image')) {

            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'images/multi/';
                $image_url = $upload_path . $image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;

            }

        }
        Multipic::insert([

            'image' => implode('|', $image),
            'created_at' => Carbon::now(),
        ]);
        return view('admin.multi.index')->with('success', 'Image Added Successfully');
    }

}
