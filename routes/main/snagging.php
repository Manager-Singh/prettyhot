<?php
use App\Http\Controllers\SnaggingController;
Route::group(['middleware' => 'auth'], function () {
     //snagging
     Route::get('snagging-lists',[SnaggingController::class,'index'])->name('snagging.list');
     Route::get('create-snagging',[SnaggingController::class,'addSnagging'])->name('snagging.add');
     Route::post('create-snagging',[SnaggingController::class,'addSnaggingSubmit'])->name('snagging.add');
     Route::get('delete-snagging/{id}',[SnaggingController::class,'deleteSnagging'])->name('snagging.delete');
     Route::get('company-snagging/{id}',[SnaggingController::class,'companyWiseSnagging'])->name('snagging.company');
 
     Route::get('edit-snagging/{id}',[SnaggingController::class,'editSnagging'])->name('snagging.edit');
     Route::post('edit-snagging/{id}',[SnaggingController::class,'editSnaggingSubmit'])->name('snagging.edit');
});