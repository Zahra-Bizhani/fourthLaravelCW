<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    //return Category::show()->get();
    //dd(Product::find(5)->orders);
    // $result=Product::seen()->get();
    // return view('show',get_defined_vars());
    dd(Product::find(2)->toArray());

    
});