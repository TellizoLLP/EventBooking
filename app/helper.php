<?php
 function getFilledSlots($roomId, $sessionId,$editingBooking = null)
 {
     // Define the total number of slots for the session (e.g., 40)
     $totalSlots = 40 ;
 
     // Count how many registrations exist for the given room and session
     $filledSlotsQuery = \App\Models\EventRegistrationSession::where('room_id', $roomId)
         ->where('session_id', $sessionId)
         ->where('course_id', 1);
    if($editingBooking){
        $filledSlotsQuery->where('event_registration_id','!=', $editingBooking->id);
    }
     $filledSlots = $filledSlotsQuery->count() ;
 

     // Calculate the available slots
     $availableSlots = $totalSlots - $filledSlots;
 
     return [
         'filled' => $filledSlots,
         'available' => $availableSlots
     ];
 }

 function getFilledSlotsMain($roomId, $sessionId,$editingBooking = null )
 {
     // Define the total number of slots for the session (e.g., 40)
     $totalSlots = 40 ;
 
     // Count how many registrations exist for the given room and session
     $filledSlotsQuery = \App\Models\EventRegistrationSession::where('room_id', $roomId)
         ->where('session_id', $sessionId)
         ->where('course_id', 2);
    if($editingBooking){
        $filledSlotsQuery->where('event_registration_id','!=', $editingBooking->id);
    }
     $filledSlots = $filledSlotsQuery->count() ;
 
     // Calculate the available slots
     $availableSlots = $totalSlots - $filledSlots;
 
     return [
         'filled' => $filledSlots,
         'available' => $availableSlots
     ];
 }