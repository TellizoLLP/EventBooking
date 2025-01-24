<?php

namespace App\Livewire\Home;

use App\Models\EventRegistration;
use Livewire\Attributes\Layout;
use Livewire\Component;

class PageOne extends Component
{
    #[Layout('components.layouts.home-layout')]
    public function render()
    {
        return view('livewire.home.page-one');
    }

    public $event;

    public function mount($id){
        $this->event = EventRegistration::findOrFail($id);
    }


}
