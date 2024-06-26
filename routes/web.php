<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;

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

Route::get('/', function () {
    return view('index');
});


Route::get("/customers", function(){
    $customers = Customer::all();
    echo "<pre >";
    print_r($customers);
});


// Route::get('/demo/{name}/{id?}', function ($name, $id = null){
//     $data = compact('name', 'id');
//     // print_r($data);

//     return view("demo")->with($data);
// });

Route::get("/register", [RegistrationController::class, "index"]);

Route::post("/register", [RegistrationController::class, "registration"]);
 
Route::post("/customer", [CustomerController::class, "store"]);
Route::get("/customer", [CustomerController::class, "view"]);

Route::get("/customer/create", [CustomerController::class, "create"])->name('customer.create');
Route::get("/customer/delete/{id}", [CustomerController::class, "delete"])->name("customer.delete");
Route::get("/customer/edit/{id}", [CustomerController::class, "edit"])->name("customer.edit");
Route::post("/customer/update/{id}", [CustomerController::class, "update"])->name("customer.update");

// Route::get("/customer", function(){
//     $customers = Customer::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// }); 