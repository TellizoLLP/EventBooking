<?php

namespace App\Livewire\Admin\Reports;

use App\Models\EventRegistration;
use Livewire\Component;

class StudentsReport extends Component
{
    public $search = '';
    public function render()
    {
       // Query to fetch students with search functionality
       $students = EventRegistration::where('current_status', 1)
       ->select('first_name', 'last_name', 'email', 'phone', 'school_name', 'school_grade', 'referral_method')
       ->when($this->search, function ($query) {
        // Apply the search condition only if the search term is provided
        $query->where(function ($subQuery) {
            $subQuery->where('first_name', 'like', '%' . $this->search . '%')
                     ->orWhere('last_name', 'like', '%' . $this->search . '%')
                     ->orWhere('email', 'like', '%' . $this->search . '%')
                     ->orWhere('phone', 'like', '%' . $this->search . '%')
                     ->orWhere('school_name', 'like', '%' . $this->search . '%')
                     ->orWhere('school_grade', 'like', '%' . $this->search . '%')
                     // Use || for string concatenation in SQLite
                     ->orWhereRaw("first_name || ' ' || last_name LIKE ?", ['%' . $this->search . '%']);
        });
    })
    ->get();
        return view('livewire.admin.reports.students-report', compact('students'));
    }
}
