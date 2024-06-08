<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Title;

class Projects extends Component
{
    #[Title('Projects')]
    public function render()
    {
        return view('livewire.pages.dashboard.projects');
    }
}