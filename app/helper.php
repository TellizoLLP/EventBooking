<?php
 function getFilledSlots($roomId, $sessionId)
 {
     // Define the total number of slots for the session (e.g., 40)
     $totalSlots = 40;
 
     // Count how many registrations exist for the given room and session
     $filledSlots = \App\Models\EventRegistrationSession::where('room_id', $roomId)
         ->where('session_id', $sessionId)
         ->count();
 
     // Calculate the available slots
     $availableSlots = $totalSlots - $filledSlots;
 
     return [
         'filled' => $filledSlots,
         'available' => $availableSlots
     ];
 }