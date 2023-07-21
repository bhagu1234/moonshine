<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
// CustomAuthController
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('admin.dashboard'); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// CustomerController
Route::get('customer', [CustomerController::class, 'index'])->name('customer.index');
Route::post('customer-store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('customer-edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('customer-update', [CustomerController::class, 'update'])->name('customer.update');
Route::get('customer-delete', [CustomerController::class, 'delete'])->name('customer.delete');
Route::get('customer-view', [CustomerController::class, 'view'])->name('customer.view');
Route::get('customer-getDetails', [CustomerController::class, 'getDetails'])->name('customer.getDetails');

// ProductController
Route::get('product', [ProductController::class, 'index'])->name('product.index');
Route::post('product-store', [ProductController::class, 'store'])->name('product.store');
Route::get('product-edit', [ProductController::class, 'edit'])->name('product.edit');
Route::post('product-update', [ProductController::class, 'update'])->name('product.update');
Route::get('product-view', [ProductController::class, 'view'])->name('product.view');
Route::get('product-delete', [ProductController::class, 'delete'])->name('product.delete');
Route::get('product-getCategoryDetails', [ProductController::class, 'getCategoryDetails'])->name('product.getCategoryDetails');

// UserController
Route::get('user', [UserController::class, 'index'])->name('user.index');
Route::post('users-store', [UserController::class, 'store'])->name('users-store');
Route::get('users-edit',[UserController::class,'edit'])->name('users-edit');
Route::post('user-update', [UserController::class, 'update'])->name('user-update');
Route::get('user-delete', [UserController::class, 'delete'])->name('user-delete');