<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegistrationSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_registration_id',
        'course_id',
        'room_id',
        'session_id',
    ];
    
}
