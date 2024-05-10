<?php
use App\Http\Controllers\SettingController;
Route::group(['middleware' => 'auth'], function () {
       //setting
    Route::get('general-settings',[SettingController::class,'index'])->name('general.settings');

    //ContactCat
    Route::post('create-catcontact',[SettingController::class,'addCatSubmit'])->name('catcontact.add');
    Route::get('edit-catcontact/{id}', [SettingController::class, 'editContact'])->name('catcontact.edit');
    Route::post('edit-catcontact/{id}',[SettingController::class,'editCatSubmit'])->name('catcontact.edit');
    Route::post('delete-catcontact', [SettingController::class, 'deleteContact'])->name('catcontact.delete');

    //ContSubcat
    Route::post('create-subcatcontact',[SettingController::class,'addSubCatSubmit'])->name('subcatcontact.add');
    Route::get('edit-subcatcontact/{id}', [SettingController::class, 'editSubContact'])->name('subcatcontact.edit');
    Route::post('edit-subcatcontact/{id}',[SettingController::class,'editSubSubmit'])->name('subcatcontact.edit');
    Route::post('delete-subcatcontact', [SettingController::class, 'deleteSubContact'])->name('subcatcontact.delete');

    //ContReferralType
    Route::post('create-referraltype',[SettingController::class,'addRefTypeSubmit'])->name('referraltype.add');
    Route::get('edit-referraltype/{id}', [SettingController::class, 'editRefType'])->name('referraltype.edit');
    Route::post('edit-referraltype/{id}',[SettingController::class,'editRefTypeSubmit'])->name('referraltype.edit');
    Route::post('delete-referraltype', [SettingController::class, 'deleteRefType'])->name('referraltype.delete');


    //materialcat
    Route::post('create-catmaterial',[SettingController::class,'addMaterialCatSubmit'])->name('catmaterial.add');
    Route::get('edit-catmaterial/{id}', [SettingController::class, 'editMaterial'])->name('catmaterial.edit');
    Route::post('edit-catmaterial/{id}',[SettingController::class,'editMaterialSubmit'])->name('catmaterial.edit');
    Route::post('delete-catmaterial', [SettingController::class, 'deleteMaterial'])->name('catmaterial.delete');

       //materialcat
    Route::post('create-material-sub-cat',[SettingController::class,'addMaterialSubCatSubmit'])->name('materialSubCat.add');
    Route::get('edit-material-sub-cat/{id}', [SettingController::class, 'editMaterialSubCat'])->name('materialSubCat.edit');
    Route::post('edit-material-sub-cat/{id}',[SettingController::class,'editMaterialSubCatSubmit'])->name('materialSubCat.edit');
    Route::post('delete-material-sub-cat', [SettingController::class, 'deleteMaterialSubCat'])->name('materialSubCat.delete');

    //FinanceCat
    Route::post('create-catinvoice',[SettingController::class,'addInvoiceCatSubmit'])->name('catinvoice.add');
    Route::get('edit-catinvoice/{id}', [SettingController::class, 'editInvoice'])->name('catinvoice.edit');
    Route::post('edit-catinvoice/{id}',[SettingController::class,'editInvoiceSubmit'])->name('catinvoice.edit');
    Route::post('delete-catinvoice', [SettingController::class, 'deleteInvoice'])->name('catinvoice.delete');

    //JobCat
    Route::post('create-catjob',[SettingController::class,'addJobCatSubmit'])->name('catjob.add');
    Route::get('edit-catjob/{id}', [SettingController::class, 'editJob'])->name('catjob.edit');
    Route::post('edit-catjob/{id}',[SettingController::class,'editJobSubmit'])->name('catjob.edit');
    Route::post('delete-catjob', [SettingController::class, 'deleteJob'])->name('catjob.delete');

     //CalenderCat
     Route::post('create-catcalendar',[SettingController::class,'addCalenderCatSubmit'])->name('catcalendar.add');
     Route::get('edit-catcalendar/{id}', [SettingController::class, 'editCalender'])->name('catcalendar.edit');
     Route::post('edit-catcalendar/{id}',[SettingController::class,'editCalenderSubmit'])->name('catcalendar.edit');
     Route::post('delete-catcalendar', [SettingController::class, 'deleteCalender'])->name('catcalendar.delete');

    //CompanyCat
    Route::post('create-catcompany',[SettingController::class,'addCompanyCatSubmit'])->name('catcompany.add');
    Route::get('edit-catcompany/{id}', [SettingController::class, 'editCompany'])->name('catcompany.edit');
    Route::post('edit-catcompany/{id}',[SettingController::class,'editCompanySubmit'])->name('catcompany.edit');
    Route::post('delete-catcompany', [SettingController::class, 'deleteCompany'])->name('catcompany.delete');
});