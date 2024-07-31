<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;



Route::any('/',[ApplicationController::class, 'index'])->name('index');
Route::any('/news/{criteria?}',[ApplicationController::class, 'news'])->name('news');
