<?php
use App\Http\Controllers\TaskController;
Route::group(['middleware' => 'auth'], function () {
     //Tasks
   Route::get('tasks',[TaskController::class,'index'])->name('task.list');
   Route::post('create-task',[TaskController::class,'addTaskSubmit'])->name('task.add');
   Route::get('edit-task/{id}',[TaskController::class,'editTask'])->name('task.edit');
   Route::post('edit-task/{id}',[TaskController::class,'editTaskSubmit'])->name('task.edit');
   Route::post('delete-task',[TaskController::class,'deleteTask'])->name('task.delete');
   Route::get('job-catwise-task/{id}',[TaskController::class,'jobCategoryWiseTask'])->name('task.catwise');
   Route::get('task-completed/{id}',[TaskController::class,'changeTaskStatus'])->name('task.complete');
});