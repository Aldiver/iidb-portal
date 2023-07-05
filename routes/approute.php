<?php

use App\Http\Controllers\ProgramsController;

Route::middleware('web')->group(function () {
    // Define your resourceful routes for programs
    Route::resource('programs', ProgramsController::class);
    Route::get('/programs', [ProgramsController::class, 'index'])
    ->name('programs.index')->middleware(['auth', 'verified']);
    Route::get('programs/{program}/export/csv', [ProgramsController::class, 'exportCsv'])->name('programs.exportCsv');
    Route::get('programs/{program}/export/excel', [ProgramsController::class, 'exportExcel'])->name('programs.exportExcel');

});
