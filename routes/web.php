<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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




// Route::get('/index', [ProductsController::class, 'index']);


Route::get('index', [ProductsController::class, 'index']);

Route::get('admin/products/edit/{id}', [ProductsController::class, 'edit']);
Route::put('admin/products/update/{id}', [ProductsController::class,'update']);

Route::get('admin/products/add', [ProductsController::class, 'create']);
Route::post('admin/products/add/store', [ProductsController::class, 'store'])->name('add.product');

Route::get('admin/products/delete/{id}', [ProductsController::class, 'destroy']);
Route::get('admin/products/trash',[ProductsController::class, 'show'])->withTrashed();




// Route for Customer page
Route::get('admin/customer/index', [CustomerController::class, 'index']);
Route::get('admin/customer/add', [CustomerController::class, 'create']);



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
