<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceSheetController;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


///
Route::resource('attendancesheet', AttendanceSheetController::class)->except([
    'create', 'store' // Exclude the create and store actions
]);
Route::get('/export-attendees', [AttendanceSheetController::class, 'exportAttendees'])->name('export.attendees');

Route::get('attendancesheet/{program}', [AttendancesheetController::class, 'show'])->name('attendancesheet.show');
Route::get('attendancesheet/register/{program}', [AttendanceSheetController::class, 'register'])->name('attendancesheet.register');
Route::post('/attendancesheet/{program}/store', [AttendanceSheetController::class, 'store'])
->name('attendancesheet.store');

Route::get('/programs/{programs}/export-csv', [ProgramsController::class, 'exportCsv'])->name('programs.exportCsv');

