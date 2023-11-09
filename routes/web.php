<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
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
Route::get('admin/products/restore/{id}', [ProductsController::class, 'restore'])->name('restore.product');
Route::get('admin/products/trash',[ProductsController::class, 'show'])->withTrashed();
Route::get('admin/products/forcedelete/{id}',[ProductsController::class,'force_destroy']);





// Route for Customer page
Route::get('admin/customer/index', [CustomerController::class, 'index']);
Route::get('admin/customer/add', [CustomerController::class, 'create']);
Route::post('admin/customer/add/store', [CustomerController::class, 'store'])->name('add.customer');
Route::get('admin/customer/edit/{id}', [CustomerController::class, 'edit']);
Route::put('admin/customer/update/{id}', [CustomerController::class,'update']);
Route::get('admin/customer/edit', [CustomerController::class, 'edit']);
Route::get('admin/customer/delete/{id}', [CustomerController::class, 'destroy']);




//Route for category page
Route::get('admin/categories/index', [CategoriesController::class, 'index']);
Route::get('admin/categories/add', [CategoriesController::class, 'create']);
Route::post('admin/categories/add/store', [CategoriesController::class, 'store'])->name('add.categories');
Route::get('admin/categories/delete/{id}', [CategoriesController::class, 'destroy']);









// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
