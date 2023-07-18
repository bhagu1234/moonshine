<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CustomerController;
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