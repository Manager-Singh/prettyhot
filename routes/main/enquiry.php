<?php
use App\Http\Controllers\EnquiryController;
Route::group(['middleware' => 'auth'], function () {
     //enquiry
     Route::get('enquiries',[EnquiryController::class,'index'])->name('enquiries.list');
     Route::get('create-enquiry',[EnquiryController::class,'addEnquiry'])->name('enquiries.add');
     Route::post('create-enquiry',[EnquiryController::class,'addEnquirySubmit'])->name('enquiries.add');
     Route::get('edit-enquiry/{id}',[EnquiryController::class,'editEnquiry'])->name('enquiries.edit');
     Route::post('edit-enquiry/{id}',[EnquiryController::class,'editEnquirySubmit'])->name('enquiries.edit');
     Route::get('delete-enquiry/{id}',[EnquiryController::class,'enquiryDelete'])->name('enquiries.delete');
     Route::get('view-enquiry/{id}',[EnquiryController::class,'enquiryDetails'])->name('enquiries.view');
     Route::get('company-enquiry/{id}',[EnquiryController::class,'companyWiseEnquiry'])->name('enquiries.company');
     Route::get('enquiry-contact/{id}',[EnquiryController::class,'enquiryToContact'])->name('enquiries.addcontact');
     Route::post('add-enquiry-note',[EnquiryController::class,'addEnquiryNote'])->name('enquiries.addNote');
     Route::get('delete-enquiry-note/{id}',[EnquiryController::class,'deleteNote'])->name('enquiries.deleNote');
     Route::get('status-enquiry/{status}',[EnquiryController::class,'statusWiseEnquiry'])->name('enquiries.status');
     Route::post('add-enquiry-task',[EnquiryController::class,'addTasKEnq'])->name('enquiries.addTask');
     Route::post('send-enquiry-email',[EnquiryController::class,'sendEmail'])->name('enquiries.sendEmail');
});