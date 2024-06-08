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
            'image' => ['required', 'image|max:1024'],
        ]);

        $image = time().'.'.$this->image->extension();
        $path = Storage::putFile('public/profiles', $this->image);

        Project::create(['title'=>$this->title, 'description'=>$this->description, 'skill'=>$this->skill, 'image'=>$path]);

        return $this->redirect(route('project_manage'), navigate: true);
    }

    public function storeImage()
    {
        if (!$this->image) {
            return null;
        }

        // $img   = Image::make($this->image)->encode('jpg');
        $name  = Str::random() . '.jpg';
        Storage::disk('public')->put($name, $this->image);
        return $name;


        // $name  = Str::random() . '.jpg';
        // $image = Image::make($this->image->getRealPath());
        // $image->resize(300, null, function($constraint){
        //     $constraint->aspectRatio();
        // });

        // $image->save(storage_path('app/public/photos').'/'.$name);
        // return $name;

    }

    #[Title('Project-Create')]
    public function render()
    {
        return view('livewire.pages.dashboard.project-add');
    }
}
