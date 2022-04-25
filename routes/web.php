<?php

use Illuminate\Support\Facades\Route;


//daftarkan semua controller yang ada

//front (landing)
use App\Http\Controllers\Landing\LandingController;


//member (dashboard)

use App\Http\Controllers\Dashboard\MemberController;
use App\Http\Controllers\Dashboard\MyOrderController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\RequestController;
use App\Http\Controllers\Dashboard\ServiceController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');



//dilanding ada page custom maka detailnya harus di atas resource
Route::get('detail_booking/{id}', LandingController::class, 'detail_booking')->name('detail.booking.landing');
Route::get('booking/{id}', LandingController::class, 'booking')->name('booking.landing');
Route::get('detail/{id}', LandingController::class, 'detail')->name('detail.landing');
Route::get('explore', LandingController::class, 'explore')->name('explore.landing');
Route::resource('/', LandingController::class);


//route group
Route::group(['prefix' => 'member', 'as' => 'member.', 'middleware' => ['auth:sanctum', 'verified']], //hanya user yang terverifikasi
function() {
    
    //dashboard
    Route::resource('dashboard', MemberController::class);

    //service
    Route::resource('service', ServiceController::class);

    //request
    Route::get('approve_request/{id}', RequestController::class, 'approve')->name('approve.request');
    Route::resource('request', RequestController::class);

    //myorder
    Route::get('accept/order/{id}', MyOrderController::class, 'accepted')->name('accept.request');
    Route::get('reject/order/{id}', MyOrderController::class, 'rejected')->name('reject.request');
    Route::resource('order', MyOrderController::class);

    //profile
    Route::get('delete_photo', ProfileController::class, 'delete')->name('delete.photo.profile');
    Route::resource('profile', ProfileController::class);
    

});
