<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Countrycontroller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AddressRegionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
// CustomAuthController
Route::get('/', [CustomAuthController::class, 'dashboard'])->name('admin.dashboard'); 
Route::get('plan_subscription', [CustomAuthController::class, 'subscription'])->name('admin.subscription'); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::group(['middleware' => ['auth']], function() {
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

    // SupplierController
    Route::get('supplier', [SupplierController::class, 'index'])->name('supplier.index');
    Route::post('supplier-store', [SupplierController::class, 'store'])->name('supplier.store');
    Route::get('supplier-edit', [SupplierController::class, 'edit'])->name('supplier.edit');
    Route::post('supplier-update', [SupplierController::class, 'update'])->name('supplier.update');
    Route::get('supplier-delete', [SupplierController::class, 'delete'])->name('supplier.delete');
    Route::get('supplier-view', [SupplierController::class, 'view'])->name('supplier.view');


    // CategoryController
    Route::get('category', [CategoryController::class, 'index'])->name('category.index');
    Route::post('category-store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category-edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category-update', [CategoryController::class, 'update'])->name('category.update');
    Route::get('category-delete', [CategoryController::class, 'delete'])->name('category.delete');

    //// Countrycontroller
    Route::get('country', [CountryController::class, 'index'])->name('address.country');
    Route::post('country-store', [CountryController::class, 'store'])->name('country-store');
    Route::get('country-edit',[CountryController::class,'edit'])->name('country-edit');
    Route::post('country-update', [CountryController::class, 'update'])->name('country-update');
    Route::get('country-delete', [CountryController::class, 'delete'])->name('country-delete');

    // OrderController
    Route::get('order', [OrderController::class, 'index'])->name('order.index');
    Route::post('order-store', [OrderController::class, 'store'])->name('order.store');
    Route::get('order-edit',[OrderController::class,'edit'])->name('order.edit');
    Route::post('order-update', [OrderController::class, 'update'])->name('order.update');
    Route::get('order-delete', [OrderController::class, 'delete'])->name('order.delete');
    Route::get('order-view', [OrderController::class, 'view'])->name('order.view');


    // ContactController
    Route::get('contact-create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('contact-store', [ContactController::class, 'store'])->name('contact.store');
    Route::get('contact-edit',[ContactController::class,'edit'])->name('contact.edit');
    Route::post('contact-update', [ContactController::class, 'update'])->name('contact.update');
    Route::get('contact-delete', [ContactController::class, 'delete'])->name('contact.delete');

    // BankController
    Route::post('bank-store', [BankController::class, 'store'])->name('bank.store');
    Route::get('bank-edit',[BankController::class,'edit'])->name('bank.edit');
    Route::post('bank-update', [BankController::class, 'update'])->name('bank.update');
    Route::get('bank-delete', [BankController::class, 'delete'])->name('bank.delete');

    // EnquiryController
    Route::get('enquiry', [EnquiryController::class, 'index'])->name('enquiry.index');
    Route::get('enquiry-create', [EnquiryController::class, 'create'])->name('enquiry.create');
    Route::post('enquiry-store', [EnquiryController::class, 'store'])->name('enquiry.store');
    Route::get('enquiry-edit',[EnquiryController::class,'edit'])->name('enquiry.edit');
    Route::post('enquiry-update', [EnquiryController::class, 'update'])->name('enquiry.update');
    Route::get('enquiry-delete', [EnquiryController::class, 'delete'])->name('enquiry.delete');
    Route::get('enquiry-view', [EnquiryController::class, 'view'])->name('enquiry.view');
    Route::post('enquiry-status_update', [EnquiryController::class, 'status_update'])->name('enquiry.status_update');
    Route::get('enquiry-get_reason', [EnquiryController::class, 'get_reason'])->name('enquiry.get_reason');


    // StateController
    Route::get('state', [StateController::class, 'index'])->name('address.state');
    Route::post('state-store', [StateController::class, 'store'])->name('state-store');
    Route::get('state-edit',[StateController::class,'edit'])->name('state-edit');
    Route::post('state-update', [StateController::class, 'update'])->name('state-update');
    Route::get('state-delete', [StateController::class, 'delete'])->name('state-delete');

    // DistrictController
    Route::get('district', [DistrictController::class, 'index'])->name('address.district');
    Route::post('district-store', [DistrictController::class, 'store'])->name('district-store');
    Route::get('district-edit',[DistrictController::class,'edit'])->name('district-edit');
    Route::post('district-update', [DistrictController::class, 'update'])->name('district-update');
    Route::get('district-delete', [DistrictController::class, 'delete'])->name('district-delete');
    Route::get('district-getDetails', [DistrictController::class, 'getDetails'])->name('district-getDetails');
 
    //citycontroller
    Route::get('city',[CityController::class,'index'])->name('address.city');
    Route::post('city-store',[CityController::class,'store'])->name('city-store');
    Route::get('city-edit',[CityController::class,'edit'])->name('city-edit');
    Route::post('city-update',[CityController::class,'update'])->name('city-update');
    Route::get('city-delete',[CityController::class,'delete'])->name('city-delete');
    Route::get('city-getDetails',[CityController::class,'getDetails'])->name('city-getDetails');

    // AddressRegionController
    Route::get('address_region', [AddressRegionController::class, 'index'])->name('address_region.index');
    Route::post('address_region-store', [AddressRegionController::class, 'store'])->name('address_region.store');
    Route::get('address_region-edit',[AddressRegionController::class,'edit'])->name('address_region.edit');
    Route::post('address_region-update', [AddressRegionController::class, 'update'])->name('address_region.update');
    Route::get('address_region-delete', [AddressRegionController::class, 'delete'])->name('address_region.delete');
});
