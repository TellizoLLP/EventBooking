<?php

namespace App\Livewire\Admin\Reports;

use App\Models\EventRegistration;
use Livewire\Component;

class RegistrationReport extends Component
{
    public $students,$parents,$total_registrations;
    
    public function render()
    {
        $this->students = EventRegistration::where ('current_status',1)->count();
        $this->parents = EventRegistration::where ('current_status',2)->count();
        $this->total_registrations = $this->students + $this->parents;
        return view('livewire.admin.reports.registration-report');
    }


}
