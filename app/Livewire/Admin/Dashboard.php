<?php

namespace App\Livewire\Admin;

use App\Models\EventRegistration;
use Livewire\Component;

class Dashboard extends Component
{
    public $bookings;
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
    public function mount(){
        $this->bookings = EventRegistration::count();
    }
}
