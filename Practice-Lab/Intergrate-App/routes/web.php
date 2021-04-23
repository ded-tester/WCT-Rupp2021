<?php

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
Route::group(['web'], function(){
    Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('home');
    Route::get('/about',[App\Http\Controllers\PageController::class,'aboutPage'])->name('page.about');
    Route::get('/contact',[App\Http\Controllers\PageController::class,'contactPage'])->name('page.contact');
    Route::get('/post/{id}',[App\Http\Controllers\PostController::class,'show'])->name('show.detail');

    Route::post('/forms/contact',[App\Http\Controllers\FormController::class, 'contactSubmit'])->name('forms.contact_submit');
});

Auth::routes();


