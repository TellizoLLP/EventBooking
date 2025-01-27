<?php

namespace App\Livewire\Admin\Reports;

use App\Models\EventRegistration;
use Livewire\Component;

class StudentsReport extends Component
{
    public function render()
    {
        $students = EventRegistration::where('current_status', 1)
            ->select('first_name', 'last_name', 'email', 'phone', 'school_name', 'school_grade', 'referral_method')
            ->get();
        return view('livewire.admin.reports.students-report', compact('students'));
    }
}
