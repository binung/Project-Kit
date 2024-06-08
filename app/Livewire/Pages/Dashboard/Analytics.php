<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

class Analytics extends Component
{
    #[Title('Analytics')]
    public function render()
    {
        return view('livewire.pages.dashboard.analytics');
    }
}