<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/Profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/Profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');




    // admin product

    Route::get('/admin/product', [AdminController::class, 'AdminProduct'])->name('admin.product');
    Route::get('/admin/add/product', [AdminController::class, 'AdminAddProduct'])->name('admin.add.product');
    Route::post('/admin/product/store', [AdminController::class, 'AdminProductStore'])->name('admin.product.store');
    Route::get('/admin/product/edit', [AdminController::class, 'AdminAddProduct'])->name('admin.edit.product');
    Route::get('/admin/product/view', [AdminController::class, 'AdminProductView'])->name('admin.product.view');

    

});  // End Admin group middleware


Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');