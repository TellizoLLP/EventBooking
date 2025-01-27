<?php

namespace App\Livewire\Admin\Reports\Rooms\Additional;

use Livewire\Component;
use App\Models\EventRegistrationSession;

class Auditorium extends Component
{
    public $users, $students, $parents, $total;
    public function render()
    {
        $this->users = EventRegistrationSession::where('course_id', 3)->get();

        $this->students = EventRegistrationSession::
        where('course_id', 3)
            ->whereRelation('eventRegistration', 'current_status', 1)
            ->count();

        $this->parents = EventRegistrationSession::
        where('course_id', 3)
            ->whereRelation('eventRegistration', 'current_status', 2)
            ->count();

        $this->total = $this->students + $this->parents;
        return view('livewire.admin.reports.rooms.additional.auditorium');
    }
}
