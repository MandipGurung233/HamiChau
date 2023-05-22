<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\User\CommentController;
use App\Http\Controllers\User\DonationController;
use App\Http\Controllers\User\CampaingControllers;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\HomeController;
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
Route::get('/userDashboard',[UserController::class, 'dashboard']);
Route::get('/blog', [UserController::class, 'blog']);
Route::get('/cause', [UserController::class, 'cause']);
Route::get('/service', [UserController::class, 'service']);
Route::get('/category/{id}',[UserController::class,'causes']);
Route::get('/campaing-details/{id}',[CampaingControllers::class,'details']);
Route::post('/subscribe',[UserController::class,'subscribe']);
Route::get('/subscription',[UserController::class,'subscription']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/comment/{id}',[CommentController::class,'comments'])->middleware('auth');


// User ko details haru
//campaign
Route::get('/caused',[CampaingControllers::class,'view']);
Route::get('/create_campaign',[CampaingControllers::class,'create']);
Route::post('/add_campaign',[CampaingControllers::class,'add']);
Route::get('/delete_campaign/{id}', [CampaingControllers::class, 'delete']);
Route::get('/edit_campaing/{id}', [CampaingControllers::class, 'edit']);
Route::post('/update_campaing/{id}',[CampaingControllers::class, 'update']);
// create customer payment
Route::post('/user-donation/{id}',[DonationController::class,'createPayment']);
// pay with khalti 
Route::get('/pay-with-khalti/{amount}/{id}',[DonationController::class,'payWithKhalti']);
Route::get('/payment-details', [AdminController::class, 'paymentDetails']);
// change payment status
Route::get('/change-payment-status/{id}',[DonationController::class,'changePaymentStatus']);


//Shooping
Route::get('/shopping',[ProductController::class,'shop']);
Route::get('/productPage/{id}',[ProductController::class,'productpage']);

//add-to-cart
Route::post('/add-to-cart/{id}',[CartController::class,'add'])->middleware('auth');
Route::get('/user-card-details',[CartController::class,'showDetails']);
Route::get('/delete_cart/{id}',[CartController::class,'delete']);

Route::middleware(['IsAdmin'])->group(function () {

    // admin routes
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/logout',[AdminController::class,'logout']);
    // category 
    Route::get('/categories',[CategoryController::class,'index']);
    Route::get('/create_category',[CategoryController::class,'create']);
    Route::post('/add_category',[CategoryController::class,'add']);
    Route::get('/delete_category/{id}', [CategoryController::class, 'delete']);
    Route::get('/edit_category/{id}',[CategoryController::class, 'edit']);
    Route::post('/update_category/{id}',[CategoryController::class, 'update']);
    // campaing
    Route::get('/adminCampaings',[AdminController::class,'index1']);
    Route::get('/approve_campaing/{id}',[AdminController::class, 'approve']); 
    Route::get('/view_campaing/{id}',[AdminController::class, 'view']); 

    //products
    Route::get('/shop-product',[ProductController::class,'product']);
    Route::get('/create-product',[ProductController::class,'createProduct']);
    Route::post('/add-product',[ProductController::class,'addProduct']);
    Route::get('/delete-product/{id}',[ProductController::class,'deleteProduct']);
    Route::get('/edit-product/{id}',[ProductController::class,'editProduct']);
    Route::post('/update-product/{id}',[ProductController::class,'updateProduct']);
});
