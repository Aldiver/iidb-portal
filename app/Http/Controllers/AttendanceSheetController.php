<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProgramsController; // Import the Controller class

use Illuminate\Support\Facades\Route;

use Inertia\Inertia;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\Attendee;

class AttendanceSheetController extends Controller
{
    public function index()
    {
        //
    }
    public function create(Program $program)
    {
        return Inertia::render('AttendanceSheet/Create', [
            'program' => $program,
        ]);
    }

    public function register(Program $program)
    {
        return Inertia::render('AttendanceSheet/Register', [
            'program' => $program,
        ]);
    }

    public function store(Request $request, Program $program)
    {
        // Validation rules for the attendee data
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'nullable',
            'gender' => 'required',
            'email' => 'nullable|email',
            'contact_number' => 'nullable',
            'affiliation' => 'nullable',
            'affiliation_name' => 'nullable',
        ];
        $data = $request->validate($rules); 

        $attendee = $program->attendees()->create($data);


        // Redirect or perform any other action after storing the attendee

        return redirect()->route('attendancesheet.show', ['program' => $program->id]);
    }

    public function show($id)
    {
        $program = Program::findOrFail($id);
        $program->load('attendees'); // Eager load the attendees relationship
        
        return Inertia::render('AttendanceSheet/Show', [
            'program' => $program,
        ]);
    }

    public function edit(Program $program, Attendee $attendee)
    {
        // Pass both the program and attendee to the view
        return Inertia::render('AttendanceSheet/Edit', [
            'program' => $program,
            'attendee' => $attendee,
        ]);
    }
    

 public function update(Request $request, Program $program, Attendee $attendee)
{   
    // Validation rules for the attendee data
    $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'middle_name' => 'nullable',
        'gender' => 'required',
        'email' => 'nullable|email',
        'contact_number' => 'nullable',
        'affiliation' => 'nullable',
        'affiliation_name' => 'nullable',
    ];
    $data = $request->validate($rules); 

    // Update the specific attendee with the validated data
    $attendee->update($data);

    // Redirect or perform any other action after updating the attendee
    return response()->action('program.show', ['program' => $program->id]);
}

public function destroy(Program $program, Attendee $attendee)
{
    $attendee->delete();

    Route::get('/programs/{program}', [ProgramsController::class, 'show'])
    ->name('program.show');
}

}
