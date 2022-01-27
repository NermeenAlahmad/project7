<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


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
    return view('welcome');
});
// Route::resource('admin', AdminController::class);

//User Route
Route::get("add_user", [UserController::class, 'create']);
Route::post("add_user/store", [UserController::class, 'store'])->name('user.store');
Route::get("/user", [UserController::class, 'index'])->name('user.index');
Route::get("user/edit/{id}", [UserController::class, 'edit'])->name('user.edit');
Route::post("user/update/{id}", [UserController::class, 'update'])->name('user.update');
Route::get("user/destroy/{id}", [UserController::class, 'destroy'])->name('user.destroy');

//Admin Route
Route::get("add_admin", [AdminController::class, 'create']);
Route::post("add_admin/store", [AdminController::class, 'store'])->name('admin.store');
Route::get("/admin", [AdminController::class, 'index'])->name('admin.index');
Route::get("admin/edit/{id}", [AdminController::class, 'edit'])->name('admin.edit');
Route::post("admin/update/{id}", [AdminController::class, 'update'])->name('admin.update');
Route::get("admin/destroy/{id}", [AdminController::class, 'destroy'])->name('admin.destroy');
