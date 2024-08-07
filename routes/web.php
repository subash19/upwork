<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ApplicationController;
use App\Http\Controllers\Backend\DashboardController;



Route::group(['namespace'=>'Frontend'], function()
{
    Route::any('/',[ApplicationController::class, 'home'] )->name('home');
    Route::any('/contact',[ApplicationController::class, 'contact'] )->name('contact');
});

Route::group(['namespace'=>'Backend','prefix'=>'admin'], function()
{
    Route::any('/',[DashboardController::class, 'dashboard'] )->name('dashboard');
    
});
