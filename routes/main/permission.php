<?php
use App\Http\Controllers\PermissionController;
Route::group(['middleware' => 'auth'], function () {
      //Permission
    Route::get('user-permission',[PermissionController::class,'index'])->name('user-permission');
    Route::post('create-userpermission',[PermissionController::class,'addPermissionSubmit'])->name('userpermission.add');
    Route::get('edit-userpermission/{id}', [PermissionController::class, 'editPermission'])->name('userpermission.edit');
    Route::post('edit-userpermission/{id}',[PermissionController::class,'editPermissionSubmit'])->name('userpermission.edit');
    Route::post('delete-userpermission', [PermissionController::class, 'deletePermission'])->name('userpermission.delete');
});