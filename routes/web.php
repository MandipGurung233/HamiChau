<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CampaingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\User\DonationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [UserController::class, 'index']);



Route::get('/blog', [UserController::class, 'blog']);
Route::get('/cause', [UserController::class, 'cause']);
Route::get('/service', [UserController::class, 'service']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//campaign

Route::middleware(['IsAdmin'])->group(function () {

    // admin routes
    Route::get('/dashboard', [AdminController::class, 'index']);

    // category 
    Route::get('/categories',[CategoryController::class,'index']);
    Route::get('/create_category',[CategoryController::class,'create']);
    Route::post('/add_category',[CategoryController::class,'add']);
    Route::get('/delete_category/{id}', [CategoryController::class, 'delete']);
    Route::get('/edit_category/{id}',[CategoryController::class, 'edit']);
    Route::post('/update_category/{id}',[CategoryController::class, 'update']);
    // campaing
    Route::get('/campaings',[CampaingController::class,'index']);
    Route::get('/create_campaign',[CampaingController::class,'create']);
    Route::post('/add_campaign',[CampaingController::class,'add']);
    Route::get('/delete_campaign/{id}', [CampaingController::class, 'delete']);
    Route::get('/edit_campaing/{id}', [CampaingController::class, 'edit']);
    Route::post('/update_campaing/{id}',[CampaingController::class, 'update']); 

    Route::get('/payment-details', [AdminController::class, 'paymentDetails']);

    // create customer payment
    Route::post('/user-donation/{id}',[DonationController::class,'createPayment']);

    // pay with khalti 
    Route::get('/pay-with-khalti/{amount}/{id}',[DonationController::class,'payWithKhalti']);

    // change payment status
    Route::get('/change-payment-status/{id}',[DonationController::class,'changePaymentStatus']);
});
