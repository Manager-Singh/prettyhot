<?php
use App\Http\Controllers\TeamController;
Route::group(['middleware' => 'auth'], function () {
      //Team
    Route::get('team',[TeamController::class,'index'])->name('team.list');
    Route::post('create-team',[TeamController::class,'addTeamSubmit'])->name('team.add');
    Route::get('edit-team/{id}',[TeamController::class,'editTeam'])->name('team.edit');
    Route::post('edit-team/{id}',[TeamController::class,'editTeamSubmit'])->name('team.edit');
    Route::post('delete-team',[TeamController::class,'deleteTeam'])->name('team.delete');
});