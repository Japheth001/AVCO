<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\NTripSheet;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\TyresController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ExpenseController;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('homef', compact('brands', 'sliders'));
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

        $users = User::all();
        return view('dashboard', compact('users'));
        // return view('homefs');
        // return view('newdash');
    })->name('dashboard');
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
Route::get('/tyre/edit/{id}', [TyresController::class, 'EditTyre']);
Route::post('tyre/update/{id}', [TyresController::class, 'UpdateTyre']);
Route::get('tyre/delete/{id}', [TyresController::class, 'DeleteTyre']);

//Manage Tyres
Route::get('tyre/manage/{id}', [TyresController::class, 'ManageTyres']);
Route::post('tyre/issue/{id}', [TyresController::class, 'IssueTyre']);

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

//All Slide
Route::get('/slider/all', [SliderController::class, 'AllSlider'])->name('all.slider');
Route::get('/slider/new', [SliderController::class, 'NewSlider'])->name('new.slider');
Route::post('slider/add', [SliderController::class, 'AddSlider'])->name('add.slider');
Route::get('/slider/edit/{id}', [SliderController::class, 'EditSlider']);
Route::post('slider/update/{id}', [SliderController::class, 'UpdateSlider']);
Route::get('slider/delete/{id}', [SliderController::class, 'DeleteSlider']);

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
Route::get('/ntripsheet/new', [NTripSheet::class, 'ViewTrips'])->name('view.tripsheets');
Route::post('ntripsheet/add', [NTripSheet::class, 'AddTrip'])->name('tripsheets.add');
Route::get('/ntripsheet/getTrip/{id}', [NTripSheet::class, 'GetTrip']);
Route::post('/ntripsheet/update/{id}', [NTripSheet::class, 'UpdateTrip'])->name('tripsheets.update');
Route::get('ntripsheet/delete/{id}', [NTripSheet::class, 'DeleteTrip']);

//Fill Expense Record
Route::get('/expense/all', [ExpenseController::class, 'AllExpense'])->name('all.expense');
Route::get('/expense/new', [ExpenseController::class, 'ViewExpense'])->name('view.expense');
Route::post('expense/add', [ExpenseController::class, 'AddExpense'])->name('expense.add');
Route::get('/expense/getExpense/{id}', [ExpenseController::class, 'GetExpense']);
Route::post('/expense/update/{id}', [ExpenseController::class, 'UpdateExpense'])->name('expense.update');
Route::get('expense/delete/{id}', [ExpenseController::class, 'DeleteExpense']);
