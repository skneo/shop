<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;
use App\Models\Products;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     // echo "hello world";
//     return view('demo');
// });
// Route::any('/data/{mydata}/{emp_no?}', function ($mydata, $emp_no = NULL) {
//     // echo "hello $mydata empo no is $emp_no";
//     $data = compact('mydata', 'emp_no');
//     return view('demo')->with($data);
// });

// Route::get('/home/{empName}/{empNo?}', function ($empName, $empNo = Null) {
//     $data = compact('empName', 'empNo');
//     return view('home')->with($data);
// });
// Route::get('/', [DemoController::class, 'index']);
Route::get('/about', [DemoController::class, 'about']);
Route::get('/contact', function () {
    echo "do not contact me. I will get disturbed";
});
Route::get('/contact/{name}/{empName?}', function ($name, $empName = Null) {
    $data = compact('name', 'empName');
    return view('contact')->with($data);
});
// Route::get('/single', SingleActionController::class);
Route::get('/', [ShopController::class, 'index']);
Route::get('/add_product', [ProductController::class, 'index']);
Route::post('/add_product', [ProductController::class, 'add_product']);
Route::get('/all_products', [ProductController::class, 'all_products']);
Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
Route::post('/products/update/{id}', [ProductController::class, 'update']);
Route::get('/products/trashed', [ProductController::class, 'trashed_products']);
Route::get('/products/trash/{id}', [ProductController::class, 'trash']);
Route::get('/products/restore/{id}', [ProductController::class, 'restore']);
Route::get('/products/delete/{id}', [ProductController::class, 'delete']);
// Route::get('/all_products', function () {
//     $products = Products::all();
//     echo "<pre>";
//     print_r($products->toArray());
// });
