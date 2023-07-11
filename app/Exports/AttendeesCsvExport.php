<?php

namespace App\Exports;

use App\Models\Program;
use App\Models\Attendee;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AttendeesCsvExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    private $program;

    public function __construct(Program $program)
    {
        $this->program = $program;
    }

    public function collection()
    {
        // Retrieve the attendees data based on the program
        $attendees = $this->program->attendees;

        // Map the attendees data to the desired collection
        return collect($attendees)->map(function ($attendee) {
            return [
                'first name' => $attendee->first_name,
                'last name' => $attendee->last_name,
                'email' => $attendee->email,
                // Add more fields as needed
            ];
        });
    }

    public function headings(): array
    {
        return [
            'first name',
            'last name',
            'email',
            // Add more headings as needed
        ];
    }
}