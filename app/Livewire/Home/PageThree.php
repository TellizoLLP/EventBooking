<?php

namespace App\Livewire\Home;

use Livewire\Attributes\Layout;
use Livewire\Component;

class PageThree extends Component
{
    #[Layout('components.layouts.home-layout')]
    public function render()
    {
        return view('livewire.home.page-three');
    }
}
