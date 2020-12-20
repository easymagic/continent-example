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

//Route::get('/', [App\Http\Controllers\ContactController::class,'showContacts']);



Route::resource('profile',\App\Http\Controllers\ProfileController::class);

Route::resource('continent',\App\Http\Controllers\ContinentController::class);

Route::resource('country',\App\Http\Controllers\CountryController::class);

//Route::get('profile',[\App\Http\Controllers\ProfileController::class,'index']);
//Route::post('profile',[\App\Http\Controllers\ProfileController::class,'store']);
//Route::post('profile/{id}',[\App\Http\Controllers\ProfileController::class,'update']);
//Route::put('profile/{id}/edit',[\App\Http\Controllers\ProfileController::class,'edit']);
//Route::delete('profile/{id}',[\App\Http\Controllers\ProfileController::class,'store']);

// Route::get('/hello/{id}',[App\Http\Controllers\ContactController::class,'hello']);
//Route::get('profile/create',[App\Http\Controllers\ProfileController::class,'create']);
//Route::post('profile/processCreate',[App\Http\Controllers\ProfileController::class,'processCreate'])->name('profile.create.action');


//createAction

//Route::post('profile/{id}/updateAction1',[App\Http\Controllers\ProfileController::class,'updateAction'])->name('profile.update.action');
//
//Route::get('profile/{id}/show',[App\Http\Controllers\ProfileController::class,'show']);
//
//Route::get('profile/{id}/remove',[App\Http\Controllers\ProfileController::class,'remove']);
//
//Route::get('profiles',[App\Http\Controllers\ProfileController::class,'fetch']);