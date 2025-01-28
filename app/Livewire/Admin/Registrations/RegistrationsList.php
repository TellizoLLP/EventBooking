<?php

namespace App\Livewire\Admin\Registrations;

use App\Models\EventRegistration;
use App\Models\EventRegistrationSession;
use Livewire\Component;
use App\Exports\EventRegistrationExport;
use Excel;

class RegistrationsList extends Component

{
    public $registrations, $search = '';
    
    protected $listeners = ['deleteConfirmed'];

 
    public $rooms = [
        [
            'roomName' => 'Room 6',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'Medicine - طب',
                    'session' => 'Session 1',
                    'duration' => '1 hour',
                    'start_time' => '11:15 am',
                    'end_time' => '12:15 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 2,
                    'name' => 'Medicine - طب',
                    'session' => 'Session 2',
                    'duration' => '1 hour',
                    'start_time' => '12:30 pm',
                    'end_time' => '01:30 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 3,
                    'name' => 'Medicine - طب',
                    'session' => 'Session 3',
                    'duration' => '1 hour',
                    'start_time' => '4:15 pm',
                    'end_time' => '5:15 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 4,
                    'name' => 'Medicine - طب',
                    'session' => 'Session 4',
                    'duration' => '1 hour',
                    'start_time' => '5:30 pm',
                    'end_time' => '6:30 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
            ],
        ],
        [
            'roomName' => 'Studio 7',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'Pharmacy - صيدلة',
                    'session' => 'Session 1',
                    'duration' => '1 hour',
                    'start_time' => '11:15 am',
                    'end_time' => '12:15 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 2,
                    'name' => 'Pharmacy - صيدلة',
                    'session' => 'Session 2',
                    'duration' => '1 hour',
                    'start_time' => '12:30 pm',
                    'end_time' => '01:30 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 3,
                    'name' => 'Pharmacy - صيدلة',
                    'session' => 'Session 3',
                    'duration' => '1 hour',
                    'start_time' => '4:15 pm',
                    'end_time' => '5:15 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 4,
                    'name' => 'Pharmacy - صيدلة',
                    'session' => 'Session 4',
                    'duration' => '1 hour',
                    'start_time' => '5:30 pm',
                    'end_time' => '6:30 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
            ],
        ],
        [
            'roomName' => 'Room 4',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'Dentistry - أسنان طب',
                    'session' => 'Session 1',
                    'duration' => '1 hour',
                    'start_time' => '11:15 am',
                    'end_time' => '12:15 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 2,
                    'name' => 'Dentistry - أسنان طب',
                    'session' => 'Session 2',
                    'duration' => '1 hour',
                    'start_time' => '12:30 pm',
                    'end_time' => '01:30 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 3,
                    'name' => 'Dentistry - أسنان طب',
                    'session' => 'Session 3',
                    'duration' => '1 hour',
                    'start_time' => '4:15 pm',
                    'end_time' => '5:15 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 4,
                    'name' => 'Dentistry - أسنان طب',
                    'session' => 'Session 4',
                    'duration' => '1 hour',
                    'start_time' => '5:30 pm',
                    'end_time' => '6:30 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
            ],

        ],
        [
            'roomName' => 'Room 5',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'Allied Health - مساعد طب علو',
                    'session' => 'Session 1',
                    'duration' => '1 hour',
                    'start_time' => '11:15 am',
                    'end_time' => '12:15 pm',
                    'clickable' => true,
                    'slots' => '32',
                ],
                [
                    'id' => 2,
                    'name' => 'Allied Health - مساعد طب علو',
                    'session' => 'Session 2',
                    'duration' => '1 hour',
                    'start_time' => '12:30 pm',
                    'end_time' => '01:30 pm',
                    'clickable' => true,
                    'slots' => '32',
                ],
                [
                    'id' => 3,
                    'name' => 'Allied Health - مساعد طب علو',
                    'session' => 'Session 3',
                    'duration' => '1 hour',
                    'start_time' => '4:15 pm',
                    'end_time' => '5:15 pm',
                    'clickable' => true,
                    'slots' => '32',
                ],
                [
                    'id' => 4,
                    'name' => 'Allied Health - مساعد طب علو',
                    'session' => 'Session 4',
                    'duration' => '1 hour',
                    'start_time' => '5:30 pm',
                    'end_time' => '6:30 pm',
                    'clickable' => true,
                    'slots' => '32',
                ],
            ],

        ],
        [
            'roomName' => 'Studio 3',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'Veterinary Sciences- بيطري طب',
                    'session' => 'Session 1',
                    'duration' => '1 hour',
                    'start_time' => '11:15 am',
                    'end_time' => '12:15 pm',
                    'clickable' => true,
                    'slots' => '30',
                ],
                [
                    'id' => 2,
                    'name' => 'Veterinary Sciences- بيطري طب',
                    'session' => 'Session 2',
                    'duration' => '1 hour',
                    'start_time' => '12:30 pm',
                    'end_time' => '01:30 pm',
                    'clickable' => true,
                    'slots' => '30',
                ],
                [
                    'id' => 3,
                    'name' => 'Veterinary Sciences- بيطري طب',
                    'session' => 'Session 3',
                    'duration' => '1 hour',
                    'start_time' => '4:15 pm',
                    'end_time' => '5:15 pm',
                    'clickable' => true,
                    'slots' => '30',
                ],
                [
                    'id' => 4,
                    'name' => 'Veterinary Sciences- بيطري طب',
                    'session' => 'Session 4',
                    'duration' => '1 hour',
                    'start_time' => '5:30 pm',
                    'end_time' => '6:30 pm',
                    'clickable' => true,
                    'slots' => '30',
                ],
            ],

        ],
    ];



    public $Mainrooms = [
        [
            'roomName' => 'Room 4',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'How to build your portfolio',
                    'session' => 'English Session',
                    'duration' => '2 hours',
                    'start_time' => '2:00 pm',
                    'end_time' => '4:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
            ],
        ],
        [
            'roomName' => 'Room 6',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'First aid emergency response',
                    'session' => 'Arabic & English Session',
                    'duration' => '2 hours',
                    'start_time' => '2:00 pm',
                    'end_time' => '4:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
            ],
        ],
        [
            'roomName' => 'Main Auditorium',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'Use of AI in learning',
                    'session' => 'Arabic & English Session',
                    'duration' => '2 hours',
                    'start_time' => '2:00 pm',
                    'end_time' => '4:00 pm',
                    'clickable' => true,
                    'slots' => '0',
                ],
            ],
        ],
        [
            'roomName' => 'Room 5',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'Energy management',
                    'session' => 'Arabic Session',
                    'duration' => '2 hours',
                    'start_time' => '2:00 pm',
                    'end_time' => '4:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
            ],
        ],
        [
            'roomName' => 'Studio 7',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'Become an amazing presenter',
                    'session' => 'Arabic Session',
                    'duration' => '2 hours',
                    'start_time' => '2:00 pm',
                    'end_time' => '4:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
            ],
        ],
    ];


    public $Additionalrooms = [
        [
            'roomName' => 'Main auditorium',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => "Parents’ workshop - استثمروا في علاقاتكم : ذكريات تلهم وانصات يثري",
                    'session' => "Parents’ workshop",
                    'start_time' => '11:30 am',
                    'end_time' => '12:30 pm',
                    'clickable' => true,
                    'slots' => '0',
                ],
            ],
        ],
        [
            'roomName' => 'Main auditorium',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'Environmental Health: Conserving Water, sustaining life ',
                    'session' => 'Water Sustainability in Kuwait',
                    'start_time' => '12:30 pm',
                    'end_time' => '1:30 pm',
                    'clickable' => true,
                    'slots' => '0',
                ],
            ],
        ],
        [
            'roomName' => 'Main auditorium',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'Sports Health - تحرك تنجح - كيف تعزز الرياضة قدراتك الدراسية ',
                    'session' => 'Sports Health',
                    'start_time' => '4:30 pm',
                    'end_time' => '5:30 pm',
                    'clickable' => true,
                    'slots' => '0',
                ],
            ],
        ],
        [
            'roomName' => 'Main auditorium',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'Financial Awareness - التوعية المالية',
                    'session' => 'Financial Awareness',
                    'start_time' => '5:30 pm',
                    'end_time' => '6:00 pm',
                    'clickable' => true,
                    'slots' => '0',
                ],
            ],
        ],
    ];


    public function render()
    {
        $this->registrations = EventRegistration::with('eventRegistrationSessions')
            ->when($this->search, function ($query) {
                $query->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%');
            })
            ->latest()->get();
        return view('livewire.admin.registrations.registrations-list');
    }

    public function confirmDelete($id)
    {
        $this->dispatch('triggerDelete', $id);
    }

     /* expense category delete */
     public function deleteConfirmed($id)
     {   
       $item = EventRegistration::find($id);
       if($item){
       $sessions = EventRegistrationSession::where('event_registration_id',$id)->get();
        foreach($sessions as $row) {
            $row->delete();
        }   
        $item->delete();
    }
}

    /* export to excel */
    public function downloadFile()
    {
        return Excel::download(new EventRegistrationExport($this->rooms, $this->Mainrooms, $this->Additionalrooms), 'participants_list.xlsx');
    }
}