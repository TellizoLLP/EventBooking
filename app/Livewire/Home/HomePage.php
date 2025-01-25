<?php

namespace App\Livewire\Home;

use App\Mail\RegistrationCreated;
use App\Models\EventRegistration;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Component;

class HomePage extends Component
{
    public $current_status = 1,$first_name,$last_name,$email,$phone,$school_name,$school_grade,$referral_method,$page = 1;
    public $selectedSessions = []; 
    public $selectedMainSessions = []; 
    public $disabledTimeSlots = [];

    public $rooms = [
        [
            'roomName' => 'Room 6',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'Medicine',
                    'session' => 'Session 1',
                    'duration' => '1 hour',
                    'start_time' => '11:00 am',
                    'end_time' => '12:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
                ['id' => 2,
                    'name' => 'Medicine',
                    'session' => 'Session 2',
                    'duration' => '1 hour',
                    'start_time' => '12:00 pm',
                    'end_time' => '01:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
                ['id' => 3,
                    'name' => 'Medicine',
                    'session' => 'Session 3',
                    'duration' => '1 hour',
                    'start_time' => '4:00 pm',
                    'end_time' => '5:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
                ['id' => 4,
                    'name' => 'Medicine',
                    'session' => 'Session 4',
                    'duration' => '1 hour',
                    'start_time' => '5:00 pm',
                    'end_time' => '6:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
            ],
        ],
        [
            'roomName' => 'Studio 7',
            'sessions' => [
                ['id' => 1,
                    'name' => 'Pharmacy',
                    'session' => 'Session 1',
                    'duration' => '1 hour',
                    'start_time' => '11:00 am',
                    'end_time' => '12:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
                ['id' => 2,
                    'name' => 'Pharmacy',
                    'session' => 'Session 2',
                    'duration' => '1 hour',
                    'start_time' => '12:00 pm',
                    'end_time' => '01:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
                ['id' => 3,
                    'name' => 'Pharmacy',
                    'session' => 'Session 3',
                    'duration' => '1 hour',
                    'start_time' => '4:00 pm',
                    'end_time' => '5:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
                ['id' => 4,
                    'name' => 'Pharmacy',
                    'session' => 'Session 4',
                    'duration' => '1 hour',
                    'start_time' => '5:00 pm',
                    'end_time' => '6:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
            ],
        ],
        [
            'roomName' => 'Room 4',
            'sessions' => [
                ['id' => 1,
                    'name' => 'Dentistry',
                    'session' => 'Session 1',
                    'duration' => '1 hour',
                    'start_time' => '11:00 am',
                    'end_time' => '12:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
                ['id' => 2,
                    'name' => 'Dentistry',
                    'session' => 'Session 2',
                    'duration' => '1 hour',
                    'start_time' => '12:00 pm',
                    'end_time' => '01:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
                ['id' => 3,
                    'name' => 'Dentistry',
                    'session' => 'Session 3',
                    'duration' => '1 hour',
                    'start_time' => '4:00 pm',
                    'end_time' => '5:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
                ['id' => 4,
                    'name' => 'Dentistry',
                    'session' => 'Session 4',
                    'duration' => '1 hour',
                    'start_time' => '5:00 pm',
                    'end_time' => '6:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
            ],
            
        ],
        [
            'roomName' => 'Room 5',
            'sessions' => [
                ['id' => 1,
                    'name' => 'Allied Health',
                    'session' => 'Session 1',
                    'duration' => '1 hour',
                    'start_time' => '11:00 am',
                    'end_time' => '12:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
                ['id' => 2,
                    'name' => 'Allied Health',
                    'session' => 'Session 2',
                    'duration' => '1 hour',
                    'start_time' => '12:00 pm',
                    'end_time' => '01:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
                ['id' => 3,
                    'name' => 'Allied Health',
                    'session' => 'Session 3',
                    'duration' => '1 hour',
                    'start_time' => '4:00 pm',
                    'end_time' => '5:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
                ['id' => 4,
                    'name' => 'Allied Health',
                    'session' => 'Session 4',
                    'duration' => '1 hour',
                    'start_time' => '5:00 pm',
                    'end_time' => '6:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
            ],
            
        ],
        [
            'roomName' => 'Studio 3',
            'sessions' => [
                ['id' => 1,
                    'name' => 'Veterinary Sciences',
                    'session' => 'Session 1',
                    'duration' => '1 hour',
                    'start_time' => '11:00 am',
                    'end_time' => '12:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
                ['id' => 2,
                    'name' => 'Veterinary Sciences',
                    'session' => 'Session 2',
                    'duration' => '1 hour',
                    'start_time' => '12:00 pm',
                    'end_time' => '01:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
                ['id' => 3,
                    'name' => 'Veterinary Sciences',
                    'session' => 'Session 3',
                    'duration' => '1 hour',
                    'start_time' => '4:00 pm',
                    'end_time' => '5:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
                ['id' => 4,
                    'name' => 'Veterinary Sciences',
                    'session' => 'Session 4',
                    'duration' => '1 hour',
                    'start_time' => '5:00 pm',
                    'end_time' => '6:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
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
                    'start_time' => '2:00 am',
                    'end_time' => '4:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
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
                    'start_time' => '2:00 am',
                    'end_time' => '4:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
            ],
        ],
        [
            'roomName' => 'Main Auditorium',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'Use of AI in learning',
                    'session' => 'Arabic Session',
                    'duration' => '2 hours',
                    'start_time' => '2:00 am',
                    'end_time' => '4:00 pm',
                    'clickable' => true,
                    'slots' => 'No Seats Limit',
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
                    'start_time' => '2:00 am',
                    'end_time' => '4:00 pm',
                    'clickable' => true,
                    'slots' => '40/40',
                ],
            ],
        ],
    ];
    #[Layout('components.layouts.home-layout')]
    public function render()
    {
        return view('livewire.home.home-page');
    }

    public function pageOneSave(){
        // $this->validate([
        //     'first_name' => 'required|string',
        //     'last_name' => 'required|string',
        //     'email' => 'required|email',
        //     'phone' => 'required|string',
        //     'current_status' => 'required',
        //     'school_name' => 'required_if:current_status,1',
        //     'school_grade' =>'required_if:current_status,1',
        //     'referral_method' => 'required_if:current_status,1',
        // ]);


        $this->page = 2;
    }

    public function pageTwoSave(){
        // $this->validate([
        //     'first_name' => 'required|string',
        //     'last_name' => 'required|string',
        //     'email' => 'required|email',
        //     'phone' => 'required|string',
        //     'current_status' => 'required',
        //     'school_name' => 'required_if:current_status,1',
        //     'school_grade' =>'required_if:current_status,1',
        //     'referral_method' => 'required_if:current_status,1',
        // ]);

        $this->page = 3;
    }

    public function pageThreeSave(){
        // $this->validate([
        //     'first_name' => 'required|string',
        //     'last_name' => 'required|string',
        //     'email' => 'required|email',
        //     'phone' => 'required|string',
        //     'current_status' => 'required',
        //     'school_name' => 'required_if:current_status,1',
        //     'school_grade' =>'required_if:current_status,1',
        //     'referral_method' => 'required_if:current_status,1',
        // ]);

        $this->page = 4;
    }

    public function save(){
        $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'current_status' => 'required',
            'school_name' => 'required_if:current_status,1',
            'school_grade' =>'required_if:current_status,1',
            'referral_method' => 'required_if:current_status,1',
        ]);

       
        $eventRegistration = new EventRegistration();
        $eventRegistration->first_name = $this->first_name;
        $eventRegistration->last_name = $this->last_name;
        $eventRegistration->email = $this->email;
        $eventRegistration->phone = $this->phone;
        $eventRegistration->current_status = $this->current_status;
        $eventRegistration->school_name = $this->school_name;
        $eventRegistration->school_grade = $this->school_grade;
        $eventRegistration->referral_method = $this->referral_method;
        $eventRegistration->save();
        $this->reset();
        try{
            Mail::to($eventRegistration->email)->send(new RegistrationCreated($eventRegistration));
        }
        catch(\Exception $e){
            dd($e);
        }   
        return redirect()->route('page-1',['id' => $eventRegistration->id]);
    }

    // public function selectSession($roomIndex, $sessionId)
    // {
       
    //     $selectedSession = collect($this->rooms[$roomIndex]['sessions'])->firstWhere('id', $sessionId);
    
       
    //     if (in_array($selectedSession['start_time'], $this->disabledTimeSlots)) {
           
    //         return; 
    //     }
    
       
    //     if (isset($this->selectedSessions[$roomIndex]) && $this->selectedSessions[$roomIndex] == $sessionId) {
    //         unset($this->selectedSessions[$roomIndex]);
    
        
    //         $this->disabledTimeSlots = array_diff($this->disabledTimeSlots, [$selectedSession['start_time']]);
    //     } else {
            
    //         if (count($this->selectedSessions) >= 3) {
               
    //             if (isset($this->selectedSessions[$roomIndex]) && $this->selectedSessions[$roomIndex] == $sessionId) {
                    
    //             } else {
    //             $removedSession = array_pop($this->selectedSessions);
    //             $removedSessionStartTime = collect($this->rooms[$roomIndex]['sessions'])->firstWhere('id', $removedSession)['start_time'];
    //             $this->disabledTimeSlots = array_diff($this->disabledTimeSlots, [$removedSessionStartTime]);
    //             }
    //         }
    
          
    //         $this->selectedSessions[$roomIndex] = $sessionId;

    //         $this->disabledTimeSlots[] = $selectedSession['start_time'];
    //     }
    // }


    public function selectSession($roomIndex, $sessionId)
{
    // Find the selected session details
    $selectedSession = collect($this->rooms[$roomIndex]['sessions'])->firstWhere('id', $sessionId);

    // If the session's start_time is already disabled, do nothing
    if (in_array($selectedSession['start_time'], $this->disabledTimeSlots)) {
        return;
    }

    // Check if the room already has a selected session
    if (isset($this->selectedSessions[$roomIndex])) {
        // Remove the current session's start_time from disabledTimeSlots
        $currentSessionId = $this->selectedSessions[$roomIndex];
        $currentSession = collect($this->rooms[$roomIndex]['sessions'])->firstWhere('id', $currentSessionId);
        $this->disabledTimeSlots = array_diff($this->disabledTimeSlots, [$currentSession['start_time']]);
    }

    // If the total selected sessions exceed the limit, remove the oldest selected session
    if (count($this->selectedSessions) >= 3) {
        // Remove the oldest session and its start_time
         if (!isset($this->selectedSessions[$roomIndex])) {
        $removedSessionId =  array_pop($this->selectedSessions);
        $removedSessionStartTime = collect($this->rooms)->flatMap(function ($room) {
            return $room['sessions'];
        })->firstWhere('id', $removedSessionId)['start_time'];
        $this->disabledTimeSlots = array_diff($this->disabledTimeSlots, [$removedSessionStartTime]);
    }
    }

    // Add the new session to the selectedSessions and disable its time slot
    $this->selectedSessions[$roomIndex] = $sessionId;
    $this->disabledTimeSlots[] = $selectedSession['start_time'];
}
public function selectMainSession($roomIndex, $sessionId)
{
    $this->selectedMainSessions = []; 
    $this->selectedMainSessions[$roomIndex] = $sessionId;
    dd($this->selectedSessions);

}
}
