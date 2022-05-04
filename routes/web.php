<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Livewire\NotificationSweetAlert;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PayuMoneyController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\QrCodeController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::resource('product', ProductController::class);
Route::resource('customer', CustomerController::class);
Route::resource('sale', SaleController::class);
Route::resource('try', SaleController::class);


Route::post('api/fetch-states', [SaleController::class, 'fetchState']);
Route::post('api/fetch-cities', [SaleController::class, 'fetchCity']);
Route::post('api/fetch-product', [SaleController::class, 'fetchProduct']);
Route::post('api/fetch-customer', [SaleController::class, 'fetchCustomer']);
Route::post('api/fetch-sale_type', [SaleController::class, 'fetchSale']);
Route::post('fetch_sales', [SaleController::class, 'fetchSales']);
Route::post('getTodaysData', [SaleController::class, 'fetchtoday']);
Route::post('getYesterdaysData', [SaleController::class, 'fetchyesterday']);
Route::post('getLast7Data', [SaleController::class, 'fetchlast7']);
Route::post('getLast30Data', [SaleController::class, 'fetchlast30']);
Route::post('getCustomData', [SaleController::class, 'fetchcustom']);
Route::get('pdf', [SaleController::class, 'printlist']);

Route::get('salelist', [SaleController::class, 'listsale']);
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
Route::get('file-import-export', [UserController::class, 'fileImportExport']);
Route::post('file-import', [UserController::class, 'fileImport'])->name('file-import');
Route::get('downloadEXCELLFilterBased', [UserController::class, 'exportexcell']);
Route::get('downloadCSVFilterBased', [UserController::class, 'exportcsv']);
Route::get('downloadPDFFilterBased', [UserController::class, 'exportpdf']);
Route::get('downloadOnlinePDF', [SaleController::class, 'exportonlinepdf']);


Route::post('payment', [RazorpayPaymentController::class, 'payment']);
Route::get('razorpay-payment', [RazorpayPaymentController::class, 'index']);
Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');

Route::get('/generate-qrcode', [QrCodeController::class, 'index']);
Route::get('sale/pdf', [SaleController::class, 'createPDF']);
Route::post('apple', [tryController::class, 'appletree']);
Route::get('generate01', [SaleController::class, 'generatePDF']);
Route::get('report/export-pdf', 'ReportController@export_pdf')->name('report.export-pdf');

Route::get('subscribe_process', [SigninController::class, 'Subscrib_Process']);


Route::get('subscribe_cancel', [SigninController::class, 'Subscribe_Cancel']);

Route::get('subscribe_response', [SigninController::class, 'Response']);