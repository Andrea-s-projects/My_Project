<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $title;
    public $body;
    public $price;
    public $category;
    public $announcement;
    // public $validated;
    // public $message;
    // public $form_id;

    public $images = [];
    public $image;
    public $temporary_images;

    protected array $rules = [
        'title' => 'required|min:4',
        'body' => 'required|min:4',
        'category' => 'required',
        'price' => 'required',

        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    protected array $messages = [
        'required' => 'Il campo :attribute è obbligatorio',
        'min' => 'Testo troppo corto',
        // 'numeric' => 'Il campo :attribute può contenere solo numeri',

        'temporary_images.required' => 'L\'immagine è richiesta',
        'temporary_images.*.image' => 'I file devono essere immagini ',
        'temporary_images.*.max' => 'L\'immagine dev\'essere massimo di 1mb',
        'images.image' => 'L\'immagine dev\'essere un\'immagine ',
        'images.max' => 'L\'immagine dev\'essere massimo di 1mb',
    ];

    public function updatedTemporaryImages()
    {
        if (
            $this->validate([
                'temporary_images.*' => 'image|max:1024',
            ])
        ) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store()
    {

        $category = Category::find($this->category);

        $this->validate();

        $this->announcement = $category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
        ]);

        if (count($this->images)) {
            foreach ($this->images as $image) {
                // $announcement->images()->create(['path' => $image->store('images', 'public')]);
                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path' => $image->store($newFileName, 'public')]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 400, 300), //dimensioni delle immagini che vogliamo usare
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        Auth::user()
            ->announcements()
            ->save($this->announcement);

        session()->flash('success', 'Annuncio creato correttamente!');
        $this->cleanForm();

        // $this->announcement->user()->associate(Auth::user());

        // $this->announcement->save();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cleanForm()
    {
        $this->title = null;
        $this->body = null;
        $this->price = null;
        $this->category = null;
        $this->images = null;
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
