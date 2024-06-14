<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Voyager\ProductController;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', function () {
    return view('welcome');
});

// step1 
//Route::get('vendor/voyager/products', [ProductController::class, 'generatePdf']);
Route::get('vendor/voyager/products', [ProductController::class, 'generatePdf'])->name('generatePdf');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    // Route::get("products",function(){
    //     dd("hi");
    // });
});
