<?php
use App\Http\Controllers\AssetController;
Route::group(['middleware' => 'auth'], function () {
     //asset
    Route::get('asset',[AssetController::class,'index'])->name('asset.list');
    Route::get('create-asset',[AssetController::class,'addAsset'])->name('asset.add');
    Route::post('create-asset',[AssetController::class,'addAssetSubmit'])->name('asset.add');
    Route::get('edit-asset/{id}',[AssetController::class,'editAsset'])->name('asset.edit');
    Route::post('edit-asset/{id}',[AssetController::class,'editAssetSubmit'])->name('asset.edit');
    Route::post('delete-asset',[AssetController::class,'deleteAsset'])->name('asset.delete');
    Route::get('company-wise-asset/{id}',[AssetController::class,'companyWiseAssets'])->name('asset.companyList');
    Route::get('search-staff',[AssetController::class,'getStaff'])->name('asset.staff');
});