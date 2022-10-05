<?php

use App\Http\Controllers\Frontend\WebsiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\Profile\ProfileController;
use App\Http\Controllers\Backend\Profile\ChangePasswordController;
use App\Http\Controllers\Backend\Users\UserController;
use App\Http\Controllers\Backend\Roles\RoleController;
use App\Http\Controllers\Backend\Setting\SettingController;
use App\Http\Controllers\Backend\Dashboard\DashboardController;

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


Auth::routes();
Route::get('/', [WebsiteController::class, 'index'])->name('front.index');
Route::get('/map', [WebsiteController::class, 'map'])->name('front.map');
Route::get('all/donor/{blod?}', [WebsiteController::class, 'allDonor'])->name('all.donor');
Route::get('contact', [WebsiteController::class, 'contact'])->name('contact');
Route::post('donor/search', [WebsiteController::class, 'donorSearch'])->name('donor.search');
Route::get('admin', function (){
   return view('auth.login2');
});

Route::group(['middleware' => ['auth','roleAdmin']], function() {
    Route::get('/user/donee', [UserController::class, 'userDonee'])->name('user.donee');
    Route::get('/user/donor', [UserController::class, 'userDonor'])->name('user.donor');
    Route::get('/user/block/{id}/{status}', [UserController::class, 'userBlock'])->name('user.block');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('dashboard', DashboardController::class);
    Route::post('/change/password', [ChangePasswordController::class, 'store'])->name('password.change');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('profile/user/{id}', [WebsiteController::class, 'userProfile'])->name('profile.user');
    Route::post('user/update/profile', [WebsiteController::class, 'updateProfile'])->name('user.update.profile');
    Route::get('/user/dashboard', [WebsiteController::class, 'dashboard'])->name('user.dashboard');
    Route::post('/send/request', [WebsiteController::class, 'sendRequest'])->name('send.request');
    Route::get('/donner/accept/{id}/{status}', [WebsiteController::class, 'donnerAccept'])->name('donner.accept');
    Route::get('/eligibility', [WebsiteController::class, 'eligibility'])->name('eligibility');
});
