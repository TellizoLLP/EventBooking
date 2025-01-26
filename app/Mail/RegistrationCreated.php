<?php

namespace App\Mail;

use App\Models\EventRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistrationCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $first_name = '',$last_name,$email,$phone,$referral_method,$school_name,$school_grade;
    public $current_status,$items,$itemsMicro,$itemsAdditional;

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
                    'slots' => '40',
                ],
                [
                    'id' => 2,
                    'name' => 'Medicine',
                    'session' => 'Session 2',
                    'duration' => '1 hour',
                    'start_time' => '12:00 pm',
                    'end_time' => '01:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 3,
                    'name' => 'Medicine',
                    'session' => 'Session 3',
                    'duration' => '1 hour',
                    'start_time' => '4:00 pm',
                    'end_time' => '5:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 4,
                    'name' => 'Medicine',
                    'session' => 'Session 4',
                    'duration' => '1 hour',
                    'start_time' => '5:00 pm',
                    'end_time' => '6:00 pm',
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
                    'name' => 'Pharmacy',
                    'session' => 'Session 1',
                    'duration' => '1 hour',
                    'start_time' => '11:00 am',
                    'end_time' => '12:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 2,
                    'name' => 'Pharmacy',
                    'session' => 'Session 2',
                    'duration' => '1 hour',
                    'start_time' => '12:00 pm',
                    'end_time' => '01:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 3,
                    'name' => 'Pharmacy',
                    'session' => 'Session 3',
                    'duration' => '1 hour',
                    'start_time' => '4:00 pm',
                    'end_time' => '5:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 4,
                    'name' => 'Pharmacy',
                    'session' => 'Session 4',
                    'duration' => '1 hour',
                    'start_time' => '5:00 pm',
                    'end_time' => '6:00 pm',
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
                    'name' => 'Dentistry',
                    'session' => 'Session 1',
                    'duration' => '1 hour',
                    'start_time' => '11:00 am',
                    'end_time' => '12:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 2,
                    'name' => 'Dentistry',
                    'session' => 'Session 2',
                    'duration' => '1 hour',
                    'start_time' => '12:00 pm',
                    'end_time' => '01:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 3,
                    'name' => 'Dentistry',
                    'session' => 'Session 3',
                    'duration' => '1 hour',
                    'start_time' => '4:00 pm',
                    'end_time' => '5:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 4,
                    'name' => 'Dentistry',
                    'session' => 'Session 4',
                    'duration' => '1 hour',
                    'start_time' => '5:00 pm',
                    'end_time' => '6:00 pm',
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
                    'name' => 'Allied Health',
                    'session' => 'Session 1',
                    'duration' => '1 hour',
                    'start_time' => '11:00 am',
                    'end_time' => '12:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 2,
                    'name' => 'Allied Health',
                    'session' => 'Session 2',
                    'duration' => '1 hour',
                    'start_time' => '12:00 pm',
                    'end_time' => '01:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 3,
                    'name' => 'Allied Health',
                    'session' => 'Session 3',
                    'duration' => '1 hour',
                    'start_time' => '4:00 pm',
                    'end_time' => '5:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 4,
                    'name' => 'Allied Health',
                    'session' => 'Session 4',
                    'duration' => '1 hour',
                    'start_time' => '5:00 pm',
                    'end_time' => '6:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
            ],

        ],
        [
            'roomName' => 'Studio 3',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'Veterinary Sciences',
                    'session' => 'Session 1',
                    'duration' => '1 hour',
                    'start_time' => '11:00 am',
                    'end_time' => '12:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 2,
                    'name' => 'Veterinary Sciences',
                    'session' => 'Session 2',
                    'duration' => '1 hour',
                    'start_time' => '12:00 pm',
                    'end_time' => '01:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 3,
                    'name' => 'Veterinary Sciences',
                    'session' => 'Session 3',
                    'duration' => '1 hour',
                    'start_time' => '4:00 pm',
                    'end_time' => '5:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
                [
                    'id' => 4,
                    'name' => 'Veterinary Sciences',
                    'session' => 'Session 4',
                    'duration' => '1 hour',
                    'start_time' => '5:00 pm',
                    'end_time' => '6:00 pm',
                    'clickable' => true,
                    'slots' => '40',
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
                    'start_time' => '2:00 am',
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
                    'session' => 'Arabic Session',
                    'duration' => '2 hours',
                    'start_time' => '2:00 am',
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
                    'start_time' => '2:00 am',
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
                    'name' => "Parents’ workshop",
                    'session' => "Parents’ workshop",
                    'start_time' => '11:00 am',
                    'end_time' => '12:00 pm',
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
                    'name' => 'Environmental Health:',
                    'session' => 'Water Sustainability in Kuwait',
                    'start_time' => '1:00 pm',
                    'end_time' => '2:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
            ],
        ],
        [
            'roomName' => 'Main auditorium',
            'sessions' => [
                [
                    'id' => 1,
                    'name' => 'Sports Health',
                    'session' => 'Sports Health',
                    'start_time' => '4:00 pm',
                    'end_time' => '5:00 pm',
                    'clickable' => true,
                    'slots' => '40',
                ],
            ],
        ],
    ];
    /**
     * Create a new message instance.
     */
    public function __construct(public EventRegistration $registration)
    {
       $this->first_name = $registration->first_name;

       $this->last_name = $registration->last_name;
        $this->email = $registration->email;
        $this->phone = $registration->phone;
        $this->referral_method = $registration->referral_method;
        $this->school_name = $registration->school_name;
        $this->school_grade = $registration->school_grade;
        $this->current_status = $registration->current_status;
        $this->items = \App\Models\EventRegistrationSession::where(
            'event_registration_id',
            $registration->id,
        )
            ->where('course_id', 1)
            ->latest()
            ->get();
        $this->itemsMicro = \App\Models\EventRegistrationSession::where(
            'event_registration_id',
            $registration->id,
        )
            ->where('course_id', 2)
            ->latest()
            ->get();
        $this->itemsAdditional = \App\Models\EventRegistrationSession::where(
            'event_registration_id',
            $registration->id,
        )
            ->where('course_id', 3)
            ->latest()
            ->get();
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Registration Created',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.registration-created',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
