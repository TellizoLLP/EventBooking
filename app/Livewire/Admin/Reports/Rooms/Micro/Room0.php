<?php

namespace App\Livewire\Admin\Reports\Rooms\Micro;

use App\Exports\Micro\Room0Report;
use Livewire\Component;
use App\Models\EventRegistrationSession;
use Excel;

class Room0 extends Component
{
    public $users, $total,$search;
    public function render()
    {
        $this->users = EventRegistrationSession::where('room_id', 0)->where('course_id', 2)
        ->where(function ($query) {
            $query->whereHas('eventRegistration', function ($subQuery) {
                $subQuery->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('phone', 'like', '%' . $this->search . '%');
            });
        })
        ->get();
        $this->total = EventRegistrationSession::where('room_id', 0)->where('course_id', 2)->count();
        return view('livewire.admin.reports.rooms.micro.room0');
    }
     /* export to excel */
     public function downloadFile()
     {
         return Excel::download(new Room0Report($this->users), 'Roomwise_report.xlsx');
     }
}
