<?php
use App\Http\Controllers\HomeController;

use App\Http\Controllers\MapController;
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard',[HomeController::class,'index'])->name('dashboard');
    //map MapController
    Route::get('maps',[MapController::class,'index'])->name('view-maps');
    
});