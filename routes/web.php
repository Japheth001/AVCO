<?php

use App\Models\Team;
use App\Models\Trip;
use App\Models\User;
use App\Models\About;
use App\Models\Brand;
use App\Models\NTrip;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Products;
use App\Models\Services;
use App\Models\Testimonial;
use App\Models\Availability;
use App\Http\Controllers\NTripSheet;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\TyresController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BatteryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\NewCategoriesController;

// use Intervention\Image\Image;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    // $img = Image::make('foo.jpg')->resize(300, 200);
    // return $img->response('jpg');
    $brands = Brand::all();
    $sliders = Slider::all();
    $abouts = About::all();
    $services = Services::all();
    $teams = Team::all();
    $testimonials = Testimonial::all();
    $availabilities = Availability::all();
    $contacts = Contact::all();
    // return view('homef', compact('brands', 'sliders'));
    return view('layouts.masterf', compact('brands', 'sliders','abouts','services',
    'teams','testimonials','availabilities','contacts'));
    // return view('welcome');
});

// Route::get('/home', function () {
//     // $img = Image::make('foo.jpg')->resize(300, 200);
//     // return $img->response('jpg');
//     // $brands = Brand::all();

//     // return view('homef',compact('brands'));
//     // // return view('welcome');
//     echo "This is home Page";
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {

//         //Deaclare a variable to get the data from the Database Model
//         // $users = User::all();
//         // return view('dashboard', compact('users'));
//         // return view('homefs');
//         return view('newdash');
//     })->name('dashboard');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $users = User::latest()->take(5)->get();
        // get the latest 5 products
        $products = Products::latest()->take(5)->get();
        // get the latest 5 trips
        $trips = NTrip::latest()->take(5)->get();
        return view('dashboard', compact('users', 'products', 'trips'));
        // return view('homefs');
        // return view('newdash');
    })->name('dashboard');

    Route::get('/users/all', function () {
        $users = User::all();
        return view('admin.settings.users', compact('users'));
        // return view('homefs');
        // return view('newdash');
    })->name('users.all');
});

//All Category
Route::get('/category/all', [CategoryController::class, 'AllCat'])->name('all.category');
Route::post('category/add', [CategoryController::class, 'CatAdd'])->name('category.add');
Route::get('/category/edit/{id}', [CategoryController::class, 'CatEdit']);
Route::post('/category/update/{id}', [CategoryController::class, 'CatUpdate']);
Route::get('/category/delete/{id}', [CategoryController::class, 'CatDelete']);

//All Brand
Route::get('/brand/all', [BrandController::class, 'AllBrand'])->name('all.brands');
Route::get('brand/addform', [BrandController::class, 'BrandAddForm'])->name('brand.addform');
Route::post('brand/add', [BrandController::class, 'BrandAdd'])->name('brand.add');
Route::get('/brand/edit/{id}', [BrandController::class, 'EditBrand']);
Route::post('brand/update/{id}', [BrandController::class, 'UpdateBrand']);
Route::get('brand/delete/{id}', [BrandController::class, 'DeleteBrand']);

//All Multi
Route::get('/multi/all', [BrandController::class, 'AllMulti'])->name('all.multi');
Route::get('/multi/alls', [BrandController::class, 'AllMultis'])->name('all.multis');
Route::post('multi/add', [BrandController::class, 'MultiAdd'])->name('multi.add');
Route::get('/multi/edit/{id}', [BrandController::class, 'EditMulti']);
Route::post('multi/update/{id}', [BrandController::class, 'UpdateMulti']);
Route::get('multi/delete/{id}', [BrandController::class, 'DeleteMulti']);

//Vehicle
Route::get('/vehicle/all', [VehicleController::class, 'AllVehicles'])->name('all.vehicles');
Route::post('vehicle/add', [VehicleController::class, 'VehicleAdd'])->name('vehicle.add');
Route::get('/vehicle/edit/{id}', [VehicleController::class, 'EditVehicle']);
Route::post('vehicle/update/{id}', [VehicleController::class, 'UpdateVehicle']);
Route::get('vehicle/delete/{id}', [VehicleController::class, 'DeleteVehicle']);

//Tyres
Route::get('/tyres/tdashboard', [TyresController::class, 'AllTyreDash'])->name('all.tyredash');
Route::get('/tyres/issuedash', [TyresController::class, 'IssueTyreDas'])->name('issued.tyre');
Route::get('/tyres/all', [TyresController::class, 'AllTyres'])->name('all.tyre');
Route::post('tyres/add', [TyresController::class, 'TyreAdd'])->name('tyre.add');
Route::get('tyres/add2', [TyresController::class, 'TyreAdd2'])->name('tyre.add2');
Route::get('/tyre/edit/{id}', [TyresController::class, 'EditTyre']);
Route::post('tyre/update/{id}', [TyresController::class, 'UpdateTyre']);
Route::get('tyre/delete/{id}', [TyresController::class, 'DeleteTyre']);
Route::get('/', function () {
   
    $batteries = Battery::all();
    return view('admin.tyres.tyredash', compact('batteries'));
    // return view('welcome');
});

//Tyres Isssue
Route::get('tyres/allissue', [TyresController::class, 'TyresAllIssue'])->name('tyre.allissue');
Route::get('tyres/editissue/{id}', [TyresController::class, 'TyresEditIssue'])->name('tyre.editissue');

//Manage Tyres
Route::get('tyre/manage/{id}', [TyresController::class, 'ManageTyres']);
Route::post('tyre/issue/{id}', [TyresController::class, 'IssueTyre']);
Route::post('tyre/issueupdate/{id}', [TyresController::class, 'IssueTyreUpdate']);

//Store Tyres
Route::get('tyres/allstore', [TyresController::class, 'StoreTyres'])->name('tyre.allstore');
Route::get('tyres/store/{id}', [TyresController::class, 'Store'])->name('tyre.store');
Route::post('tyres/storepost/{id}', [TyresController::class, 'StorePost'])->name('tyre.storepost');

//Retray Tyres
Route::get('tyres/allretray', [TyresController::class, 'RetrayTyres'])->name('tyre.allretray');
Route::get('tyres/retray/{id}', [TyresController::class, 'Retray'])->name('tyre.retray');
Route::post('tyres/retraypost/{id}', [TyresController::class, 'RetrayPost'])->name('tyre.retraypost');

//Defected Tyres
Route::get('tyres/alldefected', [TyresController::class, 'DefectedTyres'])->name('tyre.alldefected');
Route::get('tyres/defected/{id}', [TyresController::class, 'Defected'])->name('tyre.defected');
Route::post('tyres/defectedpost/{id}', [TyresController::class, 'DefectedPost'])->name('tyre.defectedpost');

//Trip Sheet
Route::get('/trip/all', [TripController::class, 'AllTrip'])->name('all.trip');
Route::post('trip/add', [TripController::class, 'TripAdd'])->name('trip.add');
Route::get('/trip/edit/{id}', [TripController::class, 'EditTrip']);
Route::post('trip/update/{id}', [TripController::class, 'UpdateTrip']);
Route::get('trip/delete/{id}', [TripController::class, 'DeleteTrip']);

//Fuel
Route::get('/fuel/all', [FuelController::class, 'AllFuel'])->name('all.fuel');
Route::post('fuel/add', [FuelController::class, 'FuelAdd'])->name('fuel.add');
Route::get('/fuel/edit/{id}', [FuelController::class, 'EditFuel']);
Route::post('fuel/update/{id}', [FuelController::class, 'UpdateFuel']);
Route::get('fuel/delete/{id}', [FuelController::class, 'DeleteFuel']);

//Maintenance
Route::get('/mantain/all', [MaintenanceController::class, 'AllMantain'])->name('all.mantain');
Route::get('/mantain/getForm', [MaintenanceController::class, 'MantainForm'])->name('form.mantain');
Route::post('mantain/add', [MaintenanceController::class, 'MantainAdd'])->name('mantain.add');
Route::get('/mantain/edit/{id}', [MaintenanceController::class, 'EditMantain']);
Route::get('/mantain/issueapprove/{id}', [MaintenanceController::class, 'IssueApprove']);
Route::get('/mantain/approves/{id}', [MaintenanceController::class, 'ApproveMantain']);
Route::post('mantain/update/{id}', [MaintenanceController::class, 'UpdateMantain']);
Route::get('mantain/delete/{id}', [MaintenanceController::class, 'DeleteMantain']);
Route::get('/mantain/getApproved', [MaintenanceController::class, 'AcceptRequestForm']);
Route::post('mantain/approved/{id}', [MaintenanceController::class, 'ApproveReqMantain'])->name('approve.mantain');
Route::post('mantain/saveapprove', [MaintenanceController::class, 'SaveApprove'])->name('save.approve');

//test
Route::get('/mantain/approvesnew/{id}', [MaintenanceController::class, 'ApprovesNew']);
Route::post('mantain/approvenewpost/{id}', [MaintenanceController::class, 'ApproveNewPost'])->name('approve.now');
Route::get('mantain/approvenewpost/{id}', function ($id) {
    return 'Maintenance ' . $id;
});

//Admin-Log-Out
Route::get('/admin/logout', [AdminController::class, 'LogOut'])->name('user.logout');

//All Slider
Route::get('/slider/all', [SliderController::class, 'AllSlider'])->name('all.slider');
Route::get('/slider/new', [SliderController::class, 'NewSlider'])->name('new.slider');
Route::post('slider/add', [SliderController::class, 'AddSlider'])->name('add.slider');
Route::get('/slider/edit/{id}', [SliderController::class, 'EditSlider']);
Route::post('slider/update/{id}', [SliderController::class, 'UpdateSlider']);
Route::get('slider/delete/{id}', [SliderController::class, 'DeleteSlider']);

//About Us
Route::get('/about/all', [AboutController::class, 'AllAbout'])->name('all.about');
Route::get('/about/new', [AboutController::class, 'NewAbout'])->name('new.about');
Route::post('about/add', [AboutController::class, 'AddAbout'])->name('add.about');
Route::get('/about/edit/{id}', [AboutController::class, 'EditAbout']);
Route::post('about/update/{id}', [AboutController::class, 'UpdateAbout']);
Route::get('about/delete/{id}', [AboutController::class, 'DeleteAbout']);

//Services
Route::get('/service/all', [ServicesController::class, 'AllService'])->name('all.service');
Route::get('/service/new', [ServicesController::class, 'NewService'])->name('new.service');
Route::post('service/add', [ServicesController::class, 'AddService'])->name('add.service');
Route::get('/service/edit/{id}', [ServicesController::class, 'EditService']);
Route::post('service/update/{id}', [ServicesController::class, 'UpdateService']);
Route::get('service/delete/{id}', [ServicesController::class, 'DeleteService']);

//Team
Route::get('/team/all', [TeamController::class, 'AllTeam'])->name('all.team');
Route::get('/team/new', [TeamController::class, 'NewTeam'])->name('new.team');
Route::post('team/add', [TeamController::class, 'AddTeam'])->name('add.team');
Route::get('/team/edit/{id}', [TeamController::class, 'EditTeam']);
Route::post('team/update/{id}', [TeamController::class, 'UpdateTeam']);
Route::get('team/delete/{id}', [TeamController::class, 'DeleteTeam']);

//Testimonial
Route::get('/testimonial/all', [TestimonialController::class, 'AllTestimonial'])->name('all.testimonial');
Route::get('/testimonial/new', [TestimonialController::class, 'NewTestimonial'])->name('new.testimonial');
Route::post('testimonial/add', [TestimonialController::class, 'AddTestimonial'])->name('add.testimonial');
Route::get('/testimonial/edit/{id}', [TestimonialController::class, 'EditTestimonial']);
Route::post('testimonial/update/{id}', [TestimonialController::class, 'UpdateTestimonial']);
Route::get('testimonial/delete/{id}', [TestimonialController::class, 'DeleteTestimonial']);

//Availability
Route::get('/available/all', [AvailabilityController::class, 'AllAvailability'])->name('all.available');
Route::get('/available/new', [AvailabilityController::class, 'NewAvailability'])->name('new.available');
Route::post('available/add', [AvailabilityController::class, 'AddAvailability'])->name('add.available');
Route::get('/available/edit/{id}', [AvailabilityController::class, 'EditAvailability']);
Route::post('available/update/{id}', [AvailabilityController::class, 'UpdateAvailability']);
Route::get('available/delete/{id}', [AvailabilityController::class, 'DeleteAvailability']);

//Contact
Route::get('/contact/all', [ContactController::class, 'AllContact'])->name('all.contact');
Route::get('/contact/new', [ContactController::class, 'NewContact'])->name('new.contact');
Route::post('contact/add', [ContactController::class, 'AddContact'])->name('add.contact');
Route::get('/contact/edit/{id}', [ContactController::class, 'EditContact']);
Route::post('contact/update/{id}', [ContactController::class, 'UpdateContact']);
Route::get('contact/delete/{id}', [ContactController::class, 'DeleteContact']);

//Settings
Route::get('/settings/settdashboard', [SettingsController::class, 'AllSetDash'])->name('all.setdash');
Route::get('/settings/setback', [SettingsController::class, 'EditBack'])->name('edit.back');

//Employees
Route::get('/employee/all', [EmployeeController::class, 'AllEmployee'])->name('all.employee');
Route::get('/employee/new', [EmployeeController::class, 'NewEmployee'])->name('new.employee');
Route::post('employee/add', [EmployeeController::class, 'EmployeeAdd'])->name('employee.add');
Route::get('/employee/getEmployee/{id}', [EmployeeController::class, 'GetEmployee']);
Route::post('/employee/update/{id}', [EmployeeController::class, 'UpdateEmployee'])->name('employee.update');
Route::get('employee/delete/{id}', [EmployeeController::class, 'DeleteEmployee']);

//New Trip Sheet
Route::get('/ntripsheet/all', [NTripSheet::class, 'AllTripSheet'])->name('all.tripsheets');
Route::get('/ntripsheet/all2', [NTripSheet::class, 'AllTripSheet2'])->name('all.tripsheets2');
Route::get('/ntripsheet/new', [NTripSheet::class, 'ViewTrips'])->name('view.tripsheets');
Route::post('ntripsheet/add', [NTripSheet::class, 'AddTrip'])->name('tripsheets.add');
Route::get('/ntripsheet/getTrip/{id}', [NTripSheet::class, 'GetTrip']);
Route::post('/ntripsheet/update/{id}', [NTripSheet::class, 'UpdateTrip'])->name('tripsheets.update');
Route::get('ntripsheet/delete/{id}', [NTripSheet::class, 'DeleteTrip']);

//Fill Expense Record
Route::get('/expense/all', [ExpenseController::class, 'AllExpense'])->name('all.expense');
Route::get('/expense/new', [ExpenseController::class, 'ViewExpense'])->name('view.expense');
Route::post('expense/add', [ExpenseController::class, 'AddExpense'])->name('expense.add');
Route::get('/expense/getExpense/{id}', [ExpenseController::class, 'GetExpense'])->name('file.expense');
Route::post('/expense/update/{id}', [ExpenseController::class, 'UpdateExpense'])->name('expense.update');
Route::get('expense/delete/{id}', [ExpenseController::class, 'DeleteExpense']);

// NewCategoriesController
Route::get('/newcat/all', [NewCategoriesController::class, 'AllNewCat'])->name('all.newcat');
Route::get('/newcat/new', [NewCategoriesController::class, 'ViewNewCat'])->name('view.newcat');
Route::post('newcat/add', [NewCategoriesController::class, 'AddNewCat'])->name('newcat.add');
Route::get('/newcat/getNewCat/{id}', [NewCategoriesController::class, 'GetNewCat']);
Route::post('/newcat/update/{id}', [NewCategoriesController::class, 'UpdateNewCat'])->name('newcat.update');
Route::get('newcat/delete/{id}', [NewCategoriesController::class, 'DeleteNewCat']);

// ProductsController
Route::get('/product/all', [ProductController::class, 'AllProduct'])->name('all.product');
Route::get('/product/new', [ProductController::class, 'NewProduct'])->name('new.product');
Route::post('product/add', [ProductController::class, 'AddProduct'])->name('product.add');
Route::get('/product/getNewProd/{id}', [ProductController::class, 'GetNewProd']);
Route::post('/product/update/{id}', [ProductController::class, 'UpdateProduct'])->name('product.update');
Route::get('product/delete/{id}', [ProductController::class, 'DeleteProduct']);
Route::get('product/quantity/{id}', [ProductController::class, 'productQuantity'])->name('product.quantity.all');
Route::get('product/quantity/new/{id}', [ProductController::class, 'productQuantityNew'])->name('product.quantity.new');
Route::post('product/quantity/new', [ProductController::class, 'saveProductQuantity'])->name('product.quantity.save');
Route::get('product/usage/all/{id}', [ProductController::class, 'productUsage'])->name('product.usage.all');
Route::get('product/usage/new/{id}', [ProductController::class, 'productUsageNew'])->name('product.usage.new');
Route::post('product/usage/new', [ProductController::class, 'saveProductUsage'])->name('product.usage.save');
Route::get('product/report/pdf', [ProductController::class, 'generatePdfReport'])->name('product.report.pdf');

// BatteryController
Route::get('/battery/all', [BatteryController::class, 'AllBattery'])->name('all.battery');
Route::get('/battery/new', [BatteryController::class, 'NewBattery'])->name('new.battery');
Route::post('battery/add', [BatteryController::class, 'AddBattery'])->name('battery.add');
Route::post('battery/adds', [BatteryController::class, 'AddsBattery'])->name('battery.adds');
Route::get('/battery/getNewBat/{id}', [BatteryController::class, 'GetNewBattery']);
Route::post('/battery/update/{id}', [BatteryController::class, 'UpdateBattery'])->name('battery.update');
Route::get('battery/delete/{id}', [BatteryController::class, 'DeleteBattery']);
