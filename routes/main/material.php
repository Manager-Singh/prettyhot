<?php
use App\Http\Controllers\MaterialController;
Route::group(['middleware' => 'auth'], function () {
      //material
    Route::get('materials',[MaterialController::class,'index'])->name('material.list');
    Route::get('create-material',[MaterialController::class,'addMaterial'])->name('material.add');
    Route::post('create-material',[MaterialController::class,'addMaterialSubmit'])->name('material.add');
    Route::get('delete-material/{id}',[MaterialController::class,'materialDelete'])->name('material.delete');
    Route::get('company-material/{id}',[MaterialController::class,'companyWiseMaterial'])->name('material.company');
    Route::get('category-material/{id}',[MaterialController::class,'categoryWiseMaterial'])->name('material.category');
    Route::get('edit-material/{id}',[MaterialController::class,'editMaterial'])->name('material.edit');
    Route::post('edit-material/{id}',[MaterialController::class,'editMaterialSubmit'])->name('material.edit');
    Route::get('get-sub-cat/{catId}',[MaterialController::class,'getMaterialSubCategory'])->name('material.subCat');
    Route::post('update-material-qty',[MaterialController::class,'updateQty'])->name('material.qtyUpdate');
});