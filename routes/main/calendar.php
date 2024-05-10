<?php
use App\Http\Controllers\CalendarController;
Route::group(['middleware' => 'auth'], function () {
      //calendar
    Route::get('calendar',[CalendarController::class,'index'])->name('calendar.list');
    Route::get('get-cal-event',[CalendarController::class,'getEvents'])->name('calendar.event');
    Route::get('get-site-visit/{contact_id}',[CalendarController::class,'siteVisit'])->name('calendar.sitevisit');
    Route::post('add-site-visit-task',[CalendarController::class,'addSitVisitTaskSubmit'])->name('sitevisit.TaskAdd');
    Route::get('get-site-visit-event/{userid?}',[CalendarController::class,'getSiteVisitEvents'])->name('sitevisit.eventCal');
    Route::get('get-planning-cal/{team_id?}',[CalendarController::class,'planningCalendar'])->name('calendar.planning');
    Route::get('get-planning-events/{team_id?}',[CalendarController::class,'getPlanningEvents'])->name('planning.planevent');
});