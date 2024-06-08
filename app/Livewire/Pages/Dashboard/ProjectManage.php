<?php

namespace App\Livewire\Pages\Dashboard;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectManage extends Component
{
    public function remove($id, $event)
    {
        $project = Project::find($id);

        Storage::delete($project->image);
        $project->delete();

    }

    #[Title('ProjectManage')]
    public function render()
    {
        return view('livewire.pages.dashboard.project-manage', ['projects'=>Project::latest()->get()]);
    }
}
