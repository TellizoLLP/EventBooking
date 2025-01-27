<?php

namespace App\Livewire\Admin;

use App\Models\EventRegistration;
use Livewire\Component;

class Dashboard extends Component
{
    public $bookings;  // Total number of bookings
    public $students;  // List of students
    public $parents;   // List of parents

    public function mount()
    {
        // Fetch total bookings count
        $this->bookings = EventRegistration::count();

        // Fetch students ordered by the most recent entries
        $this->students = EventRegistration::whereIn('current_status', [1, 2])
            ->select('first_name', 'last_name', 'email', 'phone', 'created_at') // Include created_at for sorting
            ->orderBy('created_at', 'desc') // Sort by newest entries
            ->get();

        // Fetch parents ordered by the most recent entries
        $this->parents = EventRegistration::where('current_status', 2)
            ->select('first_name', 'last_name', 'email', 'phone', 'created_at') // Include created_at for sorting
            ->orderBy('created_at', 'desc') // Sort by newest entries
            ->get();
    }

    public function render()
    {
        return view('livewire.admin.dashboard', [
            'students' => $this->students,
            'parents' => $this->parents,
        ]);
    }
}
