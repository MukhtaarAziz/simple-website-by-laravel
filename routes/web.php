<?php

use App\Http\Controllers\ContactUsMessageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;

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


// Authentication Routes.
Auth::routes(
    ['register'=>false]
);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Langauges Routes
Route::get('language/ar',function(){
    Cookie::queue('language','ar',3600);
    return to_route('home.page');
});
Route::get('language/en',function(){
    Cookie::queue('language','en',3600);
    return to_route('home.page');
});
Route::get('language/fa',function(){
    Cookie::queue('language','fa',3600);
    return to_route('home.page');
});
Route::get('language/tr',function(){
    Cookie::queue('language','tr',3600);
    return to_route('home.page');
});

// Guest Area
Route::middleware(['language'])->group( function() {
    // welcome page.
    Route::get('/', function () {
        return view('welcome');
    })->name('home.page');

    // about page.
    Route::get('/about', function(){
        return view('about');
    })->name('about.page');

    // contact page.
    Route::get('/contact', function(){
        return view('contact');
    })->name('contact.page');

    Route::post('/contact',[ContactUsMessageController::class,'store'])->name('contactusmessage.store');
});

// Admins Area
Route::prefix('admins')->middleware(['language','auth'])->group( function() {
    Route::get('/messages',[ContactUsMessageController::class,'index'])->name('contactusmessage.index');
    Route::delete('/messages/{messageID}',[ContactUsMessageController::class,'destroy'])->name('contactusmessage.destroy');
    Route::get('/messages/{messageID}',[ContactUsMessageController::class,'show'])->name('contactusmessage.show');
});

// admins area
Route::get('/admins',[UserController::class,'profile']) ->middleware(['language','auth'])->name('admins.profile');
Route::post('/admins/update-email',[UserController::class,'updateUserEmail']) ->middleware(['language','auth'])->name('admins.update-email');

