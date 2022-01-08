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

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/',function (){
       return view('Admin.Dashboard');
    });
    Route::resource('service',\App\Http\Controllers\ServiceController::class)->except(['show']);
    Route::resource('project',\App\Http\Controllers\ProjectController::class)->except('show');
    Route::resource('contact',\App\Http\Controllers\ContactController::class)->only(['index','show']);
    Route::resource('skill',\App\Http\Controllers\SkillController::class)->except(['show']);
    Route::resource('info',\App\Http\Controllers\InfoController::class)->only(['edit','update']);
    Route::get('/user',[\App\Http\Controllers\UserController::class,'index'])->name('users');
    Route::resource('education',\App\Http\Controllers\EducationController::class)->except(['show']);
    Route::resource('expirement',\App\Http\Controllers\ExpirementController::class)->except(['show']);
    Route::resource('social',\App\Http\Controllers\SocialController::class)->except(['show']);




});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
