<?php
use App\Http\Controllers\UserController;
Route::group(['middleware' => 'auth'], function () {
      //users
    Route::get('users',[UserController::class,'index'])->name('user.list');
    Route::get('create-user',[UserController::class,'addUser'])->name('user.add');
    Route::post('create-user',[UserController::class,'addUserSubmit'])->name('user.add');
    Route::get('edit-user/{id}',[UserController::class,'editUser'])->name('user.edit');
    Route::post('edit-user/{id}',[UserController::class,'editUserSubmit'])->name('user.edit');
    Route::post('delete-user',[UserController::class,'deleteUser'])->name('user.delete');
});