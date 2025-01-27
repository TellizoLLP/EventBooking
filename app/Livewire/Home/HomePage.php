<?php

namespace App\Livewire\Home;

use App\Mail\RegistrationCreated;
use App\Models\EventRegistration;
use App\Models\EventRegistrationSession;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Component;

class HomePage extends Component
{
    public $current_status = 1, $first_name, $last_name, $email, $phone, $school_name, $school_grade, $referral_method, $page = 1;
    public $selectedSessions = [];
    public $selectedMainSessions = [];
    public $selectedAdditionalSessions = [];
    public $disabledTimeSlots = [], $current_registration_id = '';

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
    #[Layout('components.layouts.home-layout')]
    public function render()
    {
        return view('livewire.home.home-page');
    }

    public function pageOneSave()
    {
        $this->validate(
            [
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email|unique:event_registrations,email',
                'phone' => 'required|string',
                'current_status' => 'required',
                'school_name' => 'required_if:current_status,1',
                'school_grade' => 'required_if:current_status,1',
                'referral_method' => 'required',
            ],
            [
                'school_name.required_if' => 'The school name field is required.',
                'school_grade.required_if' => 'The school grade field is required.',
            ]
        );

        if ($this->current_status == 1) {
            $this->page = 2;
        } else {
            $this->page = 5;
        }
    }

    public function pageTwoSave()
    {
        $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:event_registrations,email',
            'phone' => 'required|string',
            'current_status' => 'required',
            'school_name' => 'required_if:current_status,1',
            'school_grade' => 'required_if:current_status,1',
            'referral_method' => 'required',
        ]);

        $this->page = 3;
    }

    public function pageThreeSave()
    {
        $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:event_registrations,email',
            'phone' => 'required|string',
            'current_status' => 'required',
            'school_name' => 'required_if:current_status,1',
            'school_grade' => 'required_if:current_status,1',
            'referral_method' => 'required',
        ]);

        $this->page = 5;
    }


    public function backPageOne()
    {
        $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:event_registrations,email',
            'phone' => 'required|string',
            'current_status' => 'required',
            'school_name' => 'required_if:current_status,1',
            'school_grade' => 'required_if:current_status,1',
            'referral_method' => 'required',
        ]);

        $this->page = 1;
    }


    public function backPageTwo()
    {
        $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:event_registrations,email',
            'phone' => 'required|string',
            'current_status' => 'required',
            'school_name' => 'required_if:current_status,1',
            'school_grade' => 'required_if:current_status,1',
            'referral_method' => 'required',
        ]);

        $this->page = 2;
    }

    public function backPageThree()
    {
        $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:event_registrations,email',
            'phone' => 'required|string',
            'current_status' => 'required',
            'school_name' => 'required_if:current_status,1',
            'school_grade' => 'required_if:current_status,1',
            'referral_method' => 'required',
        ]);
        if ($this->current_status == 1) {
            $this->page = 3;
        } else {
            $this->page = 1;
        }
    }
    public function save()
    {
        $this->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:event_registrations,email',
            'phone' => 'required|string',
            'current_status' => 'required',
            'school_name' => 'required_if:current_status,1',
            'school_grade' => 'required_if:current_status,1',
            'referral_method' => 'required',
        ]);


        $eventRegistration = new EventRegistration();
        $eventRegistration->first_name = $this->first_name;
        $eventRegistration->last_name = $this->last_name;
        $eventRegistration->email = $this->email;
        $eventRegistration->phone = $this->phone;
        $eventRegistration->current_status = $this->current_status;
        if ($this->current_status == 1) {
            $eventRegistration->school_name = $this->school_name;
            $eventRegistration->school_grade = $this->school_grade;
        }
        $eventRegistration->referral_method = $this->referral_method;
        $eventRegistration->save();
        $this->current_registration_id = $eventRegistration->id;
        if ($this->current_status == 1) {

            foreach ($this->selectedSessions as $roomIndex => $sessionId) {
                // Ensure the session ID exists before saving
                if ($sessionId) {
                    // Get the selected session from the sessions array
                    $selectedSession = collect($this->rooms[$roomIndex]['sessions'])->firstWhere('id', $sessionId);

                    // Ensure that the session exists
                    if ($selectedSession) {
                        // Create the event registration session
                        EventRegistrationSession::create([
                            'event_registration_id' => $eventRegistration->id, // Assuming this is set in your class
                            'course_id' => 1, // Assuming this is set in your class
                            'room_id' => $roomIndex, // Use room index or adjust based on your structure
                            'session_id' => $sessionId, // Selected session ID
                        ]);
                    } else {
                        // Handle case where the session is not found in the room
                        Log::error("Session with ID {$sessionId} not found in Room {$roomIndex}");
                    }
                }
            }

            foreach ($this->selectedMainSessions as $roomIndex => $sessionId) {
                // Ensure the session ID exists before saving
                if ($sessionId) {
                    // Get the selected session from the sessions array
                    $selectedSession = collect($this->rooms[$roomIndex]['sessions'])->firstWhere('id', $sessionId);

                    // Ensure that the session exists
                    if ($selectedSession) {
                        // Create the event registration session
                        EventRegistrationSession::create([
                            'event_registration_id' => $eventRegistration->id, // Assuming this is set in your class
                            'course_id' => 2, // Assuming this is set in your class
                            'room_id' => $roomIndex, // Use room index or adjust based on your structure
                            'session_id' => $sessionId, // Selected session ID
                        ]);
                    } else {
                        // Handle case where the session is not found in the room
                        Log::error("Session with ID {$sessionId} not found in Room {$roomIndex}");
                    }
                }
            }
        }


        foreach ($this->selectedAdditionalSessions as $roomIndex => $sessionId) {
            // Ensure the session ID exists before saving
            if ($sessionId) {
                // Get the selected session from the sessions array
                $selectedSession = collect($this->rooms[$roomIndex]['sessions'])->firstWhere('id', $sessionId);

                // Ensure that the session exists
                if ($selectedSession) {
                    // Create the event registration session
                    EventRegistrationSession::create([
                        'event_registration_id' => $eventRegistration->id, // Assuming this is set in your class
                        'course_id' => 3, // Assuming this is set in your class
                        'room_id' => $roomIndex, // Use room index or adjust based on your structure
                        'session_id' => $sessionId, // Selected session ID
                    ]);
                } else {
                    // Handle case where the session is not found in the room
                    Log::error("Session with ID {$sessionId} not found in Room {$roomIndex}");
                }
            }
        }

        // $this->reset();
        try {
            Mail::to($eventRegistration->email)->send(new RegistrationCreated($eventRegistration));
        } catch (\Exception $e) {
            //  dd($e);
        }
        $this->page = 4;
        // return redirect()->route('page-1', ['id' => $eventRegistration->id]);
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
        // Check if the session is already selected
        if (isset($this->selectedSessions[$roomIndex]) && $this->selectedSessions[$roomIndex] === $sessionId) {
            // Deselect the session
            $selectedSession = collect($this->rooms[$roomIndex]['sessions'])->firstWhere('id', $sessionId);
            $this->disabledTimeSlots = array_diff($this->disabledTimeSlots, [$selectedSession['start_time']]);
            unset($this->selectedSessions[$roomIndex]);
            return;
        }
        if (count($this->selectedSessions) >= 3 && !isset($this->selectedSessions[$roomIndex])) {
            $this->dispatch('alert', [
                'type' => 'error',
                'message' => "You can't select more than 3 sessions!",
            ]);
            return;
        }

        $slots = getFilledSlots($roomIndex, $sessionId);
        if ($slots['filled'] >= 40) {
            return;
        } else {
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
    }
    public function selectMainSession($roomIndex, $sessionId)
    {
        $slots = getFilledSlotsMain($roomIndex, $sessionId);
        if($roomIndex==2)
        {
            $this->selectedMainSessions = [];
            $this->selectedMainSessions[$roomIndex] = $sessionId;
        } else {
        if ($slots['filled'] >= 40) {
            return;
        } else {
            $this->selectedMainSessions = [];
            $this->selectedMainSessions[$roomIndex] = $sessionId;
        }
    }
    }
    public function selectAdditionalSession($roomIndex, $sessionId)
    {
     //   $this->selectedAdditionalSessions = [];
            if ($this->current_status == 1) {
                foreach ($this->selectedSessions as $existingRoomIndex => $existingSessionId) {
                    if (isset($existingSessionId) && ($existingSessionId-1) === $roomIndex) {
                        $this->dispatch('alert', [
                            'type' => 'error',
                            'message' => 'This session is already selected for another room!',
                        ]);
                        return; 
                    }
                }
            }
            $this->selectedAdditionalSessions[$roomIndex] = $sessionId;
    }
}
