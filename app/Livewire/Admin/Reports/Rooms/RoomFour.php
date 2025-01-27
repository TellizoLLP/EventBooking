<?php

namespace App\Livewire\Admin\Reports\Rooms;

use App\Models\EventRegistrationSession;
use Livewire\Component;

class RoomFour extends Component
{
    public $users, $students,$parents,$total;
    public function render()
    {
        $this->users = EventRegistrationSession::where('room_id', 0)->get();

        $this->students = EventRegistrationSession::where('room_id', 0)
            ->whereHas('eventRegistration', function ($query) {
                $query->where('current_status', 1);
            })
            ->count();

        $this->parents = EventRegistrationSession::where('room_id', 0)
            ->whereHas('eventRegistration', function ($query) {
                $query->where('current_status', 2);
            })
            ->count();

        $this->total = $this->students + $this->parents;
        return view('livewire.admin.reports.rooms.room-four');
    }
}
