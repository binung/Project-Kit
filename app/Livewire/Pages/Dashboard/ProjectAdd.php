<?php

namespace App\Livewire\Pages\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Project;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class ProjectAdd extends Component
{
    use WithFileUploads;

    public $title = '';
    public $description = '';
    public $skill = '';
    public $image;

    /**
     * Handle an incoming project save request.
     */
    public function store()
    {
        $validated = $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'skill' => ['required', 'string'],
            'image' => 'image|max:1024',
        ]);

        $image = $this->storeImage();
        Project::create(['title'=>$this->title, 'description'=>$this->description, 'skill'=>$this->skill, 'image'=>$image]);

        return $this->redirect(route('project_manage'), navigate: true);
    }

    public function storeImage()
    {
        if (!$this->image) {
            return null;
        }

        $image = Storage::putFile('public/profiles', $this->image);

        return $image;
    }

    #[Title('Project-Create')]
    public function render()
    {
        return view('livewire.pages.dashboard.project-add');
    }
}
