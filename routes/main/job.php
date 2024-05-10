<?php
use App\Http\Controllers\JobController;
Route::group(['middleware' => 'auth'], function () {
      //jobs
    Route::get('jobs',[JobController::class,'index'])->name('job.list');
    Route::get('create-job/{invoiceId?}',[JobController::class,'addJob'])->name('job.add');
    Route::post('create-job/{invoiceId?}',[JobController::class,'addJobSubmit'])->name('job.add');
    Route::get('edit-job/{id}',[JobController::class,'editJob'])->name('job.edit');
    Route::post('edit-job/{id}',[JobController::class,'editJobSubmit'])->name('job.edit');
    Route::get('delete-job/{id}',[JobController::class,'deleteJob'])->name('job.delete');
    Route::get('company-wise-job/{id}',[JobController::class,'companyWiseJob'])->name('job.company');
    Route::get('category-wise-job/{id}',[JobController::class,'categoryWiseJob'])->name('job.category');
    Route::get('view-job-details/{id}',[JobController::class,'jobDetails'])->name('job.view');
    Route::get('status-wise-job/{status}',[JobController::class,'statusWiseJob'])->name('job.statuswise');
    Route::post('change-job-stage/{id}',[JobController::class,'changeJobStage'])->name('job.stage');
    Route::post('add-call-log/{id}',[JobController::class,'addCallLog'])->name('job.callLog');
});