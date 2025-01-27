<?php

namespace App\Livewire\Admin\Reports\Rooms;

use App\Models\EventRegistrationSession;
use Livewire\Component;

class RoomFour extends Component
{
    public $users;
    public function render()
    {
        $this->users = EventRegistrationSession::where('room_id',3)->get();
        return view('livewire.admin.reports.rooms.room-four');
    }
}
