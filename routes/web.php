<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'wellcome'])->name('wellcome');

Auth::routes();

Route::middleware(['auth'])->group(function () {
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);

Route::get('active/{id}/user',[UserController::class,'active_user']);
Route::get('inactive/{id}/user',[UserController::class,'inactive_user']);

Route::resource('blogs',BlogController::class);
Route::get('active/{id}/blog',[BlogController::class,'active_blog']);
Route::get('inactive/{id}/blog',[BlogController::class,'inactive_blog']);


Route::resource('advertisements',AdvertisementController::class);
Route::resource('banners', BannerController::class);

Route::get('/change-password', [UserController::class, 'changePassword'])->name('changePassword');
Route::post('/change-password', [UserController::class, 'changePasswordSave'])->name('postChangePassword');

Route::resource('/shops',ShopController::class);

Route::get('/profile/edit',[ProfileController::class,'edit'])->name('profile.edit');
Route::put('/profile/update',[ProfileController::class,'update'])->name('profile.update');
Route::get('/contact_us',[ContactUsController::class,'index'])->name('contacts');
Route::get('/contact/{id}',[ContactUsController::class,'destory'])->name('delete_contact_us');

});
Route::get('anser/all/question',[Answer::class,'display'])->name('display_all_answer');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::get('/languageDemo', 'App\Http\Controllers\HomeController@languageDemo');

Route::post('save/contact_us',[ContactUsController::class,'store'])->name('contact_us');
Route::get('question',[ContactUsController::class,'questions'])->name('questions');
Route::post('store_question',[ContactUsController::class,'store_question'])->name('store_question');

