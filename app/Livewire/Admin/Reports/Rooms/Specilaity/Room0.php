<?php

namespace App\Livewire\Admin\Reports\Rooms\Specilaity;

use App\Exports\Specilaity\Room0Report;
use App\Models\EventRegistration;
use App\Models\EventRegistrationSession;
use Livewire\Component;
use Excel;

class Room0 extends Component
{
    public $users, $students, $parents, $total,$search,$session_filter;

    public function render()
    {
        $query  = EventRegistrationSession::where('room_id', 0)->where('course_id', 1)
        ->where(function ($query) {
            $query->whereHas('eventRegistration', function ($subQuery) {
                $subQuery->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('phone', 'like', '%' . $this->search . '%');
            });
        });

        if($this->session_filter!='') {
            $query = $query->where('session_id',$this->session_filter);
        }

        $this->users = $query->get();

        $this->students = EventRegistrationSession::where('room_id', 0)
        ->where('course_id', 1)
            ->whereRelation('eventRegistration', 'current_status', 1)
            ->count();

        $this->parents = EventRegistrationSession::where('room_id', 0)
        ->where('course_id', 1)
            ->whereRelation('eventRegistration', 'current_status', 2)
            ->count();

        $this->total = $this->students + $this->parents;
        return view('livewire.admin.reports.rooms.specilaity.room0');
    }

     /* export to excel */
     public function downloadFile()
     {
         return Excel::download(new Room0Report($this->users), 'Roomwise_report.xlsx');
     }

}
