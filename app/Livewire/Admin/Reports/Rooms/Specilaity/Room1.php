<?php

namespace App\Livewire\Admin\Reports\Rooms\Specilaity;

use Livewire\Component;
use App\Models\EventRegistrationSession;

class Room1 extends Component
{
    public $users, $students,$parents,$total,$search;
    public function render()
    {
        $this->users = EventRegistrationSession::where('room_id', 1)->where('course_id', 1)
        ->where(function ($query) {
            $query->whereHas('eventRegistration', function ($subQuery) {
                $subQuery->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('phone', 'like', '%' . $this->search . '%');
            });
        })
        ->get();

        $this->students = EventRegistrationSession::where('room_id', 1)
        ->where('course_id', 1)
            ->whereRelation('eventRegistration', 'current_status', 1)
            ->count();

        $this->parents = EventRegistrationSession::where('room_id', 1)
        ->where('course_id', 1)
            ->whereRelation('eventRegistration', 'current_status', 2)
            ->count();

        $this->total = $this->students + $this->parents;
        return view('livewire.admin.reports.rooms.specilaity.room1');
    }
}
