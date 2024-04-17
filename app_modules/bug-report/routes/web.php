<?php

use Modules\BugReport\Http\Controllers\BugReportController;

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/bug-reports', [BugReportController::class, 'index'])->name('bug-reports.index');
});
