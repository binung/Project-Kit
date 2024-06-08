<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Project;

class ProjectAdd extends Component
{
    public $title = '';
    public $description = '';
    public $skill = '';


    /**
     * Handle an incoming project save request.
     */
    public function store()
    {
        $validated = $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'skill' => ['required', 'string'],
        ]);


        Project::create($validated);

        return $this->redirect(route('project_manage'), navigate: true);
    }

    #[Title('Project-Create')]
    public function render()
    {
        return view('livewire.pages.dashboard.project-add');
    }
}
