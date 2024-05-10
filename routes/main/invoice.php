<?php
use App\Http\Controllers\InvoiceController;
Route::group(['middleware' => 'auth'], function () {
     //invoice
    Route::get('invoice',[InvoiceController::class,'index'])->name('invoice.list');
    Route::get('view-jobdetails/{id}',[InvoiceController::class,'viewJobPack'])->name('jobdetails.list');
    Route::get('create-invoice/{contactId?}/{typeId?}',[InvoiceController::class,'addInvoice'])->name('invoice.add');
    Route::post('create-invoice/{contactId?}/{typeId?}',[InvoiceController::class,'addInvoiceSubmit'])->name('invoice.add');
    Route::get('edit-invoice/{id}',[InvoiceController::class,'editInvoice'])->name('invoice.edit');
    Route::post('edit-invoice/{id}',[InvoiceController::class,'editInvoiceSubmit'])->name('invoice.edit');
    Route::get('delete-invoice/{id}',[InvoiceController::class,'deleteInvoice'])->name('invoice.delete');
    Route::get('search-contact',[InvoiceController::class,'getContact'])->name('invoice.contact');
    Route::get('search-material',[InvoiceController::class,'getMaterial'])->name('invoice.material');
    Route::get('search-jobs',[InvoiceController::class,'getJob'])->name('invoice.job');
    Route::get('get-contact-details/{id}',[InvoiceController::class,'getContactDetails'])->name('getContactDetails');
    Route::get('get-material-details/{id}',[InvoiceController::class,'getMaterialDetails'])->name('getMaterialDetails');
    Route::get('view-invoice-pdf/{id?}',[InvoiceController::class,'viewInvoicePdf'])->name('view.invoicePdf');
    Route::post('add-job-pack',[InvoiceController::class,'storeJobPack'])->name('jobpack.create');
    Route::get('download-job-pack/{id}',[InvoiceController::class,'showJobPackPdf'])->name('jobpack.download');
    Route::get('download-job-pack1/{id}',[InvoiceController::class,'showPlannerJobPackPdf'])->name('jobpack1.download');
});