<?php

namespace App\Livewire\Admin\Reports\Rooms\Micro;

use Livewire\Component;
use App\Models\EventRegistrationSession;

class Room2 extends Component
{
    public $users, $total,$search;
    public function render()
    {
        $this->users = EventRegistrationSession::where('room_id', 2)->where('course_id', 3)
        ->where(function ($query) {
            $query->whereHas('eventRegistration', function ($subQuery) {
                $subQuery->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('phone', 'like', '%' . $this->search . '%');
            });
        })->get();
        $this->total = EventRegistrationSession::where('room_id', 2)->where('course_id', 3)->count();
        return view('livewire.admin.reports.rooms.micro.room2');
    }
}
