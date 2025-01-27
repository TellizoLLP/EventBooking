<?php

namespace App\Livewire\Admin\Reports\Rooms\Additional;

use Livewire\Component;
use App\Models\EventRegistrationSession;

class Auditorium extends Component
{
    public $users, $students, $parents, $total, $search, $session_filter;
    public function render()
    {
        $query = EventRegistrationSession::where('course_id', 3)
        ->where(function ($query) {
            $query->whereHas('eventRegistration', function ($subQuery) {
                $subQuery->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('phone', 'like', '%' . $this->search . '%');
            });
        });
        if($this->session_filter!='') {
            $query = $query->where('room_id',$this->session_filter);
        }
        $this->users = $query->get();

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
