<?php

namespace App\Livewire\Admin\Reports\Rooms\Micro;

use Livewire\Component;
use App\Models\EventRegistrationSession;

class Room2 extends Component
{
    public $users, $total;
    public function render()
    {
        $this->users = EventRegistrationSession::where('room_id', 2)->where('course_id', 3)->get();
        $this->total = EventRegistrationSession::where('room_id', 2)->where('course_id', 3)->count();
        return view('livewire.admin.reports.rooms.micro.room2');
    }
}
