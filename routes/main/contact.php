<?php
use App\Http\Controllers\ContactController;
Route::group(['middleware' => 'auth'], function () {
      //contact
    Route::get('contacts',[ContactController::class,'index'])->name('contact.list');
    Route::get('create-contact',[ContactController::class,'addContact'])->name('contact.add');
    Route::post('create-contact',[ContactController::class,'addContactSubmit'])->name('contact.add');
    Route::get('delete-contact/{id}',[ContactController::class,'contactDelete'])->name('contact.delete');
    Route::get('company-contact/{id}',[ContactController::class,'companyWiseContact'])->name('contact.company');
    Route::get('category-contact/{id}',[ContactController::class,'categoryWiseContact'])->name('contact.category');
    Route::get('edit-contact/{id}',[ContactController::class,'editContact'])->name('contact.edit');
    Route::post('edit-contact/{id}',[ContactController::class,'editContactSubmit'])->name('contact.edit');
    Route::get('get-address/{postcode}',[ContactController::class,'getAddressData'])->name('address.pincode');
    Route::get('view-contact/{id}',[ContactController::class,'viewContact'])->name('contact.view');
    Route::post('create-contact-note',[ContactController::class,'addContactNote'])->name('contact.addNote');
    Route::get('delete-contact-note/{id}',[ContactController::class,'deleteNote'])->name('contact.delNote');
    Route::post('import-contact-csv',[ContactController::class,'uploadCsv'])->name('contact.csvImport');
});