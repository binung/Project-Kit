<?php

namespace App\Livewire\Pages\Dashboard;
use Livewire\Attributes\Title;
use Livewire\Component;

class ProjectManage extends Component
{
    #[Title('ProjectManage')]
    public function render()
    {
        return view('livewire.pages.dashboard.project-manage');
    }
}