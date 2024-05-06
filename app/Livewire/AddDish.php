<?php

namespace App\Livewire;

use App\Models\Dish;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class AddDish extends Component
{
    use WithFileUploads;

    public $dish_name;
    public $dish_body;
    public $temporary_images = [];
    public $images = [];
    public $dish;

    protected $rules = [
        'dish_name' => 'required|min:3',
        'dish_body' => 'required|min:6',
        'temporary_images.*' => 'image|max:4000',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è richiesto',
        'min' => 'Il campo :attribute è troppo corto',
        'temporary_images.*.image' => 'Il file deve essere un\'immagine',
        'temporary_images.*.max' => 'Il file non può superare :max KB',
    ];

    public function mount()
    {
        // Inizializzazione dei dati del componente se necessario
        $this->dish = new Dish(); // Se stai creando un nuovo piatto
    }

    public function updatedTemporaryImages()
    {
        $this->validateOnly('temporary_images');

        foreach ($this->temporary_images as $image) {
            $this->images[] = $image;
        }
    }

    public function removeImage($key)
    {
        if (isset($this->images[$key])) {
            unset($this->images[$key]);
        }
    }
    public function store()
    {
    $this->validate();
        {
        $dish = new Dish();
        $dish->dish_name = $this->dish_name;
        $dish->dish_body = $this->dish_body;
        $dish->save();

        // Salva le immagini associate al piatto
        foreach ($this->images as $image) {
            $dish->images()->create(['path' => $image->store('images', 'public')]);
        }

        session()->flash('message', 'Piatto inserito con successo nel menù');
        $this->cleanForm();
        }
    }
    public function cleanForm()
    {
        $this->dish_name = '';
        $this->dish_body = '';
        $this->temporary_images = [];
        $this->images = [];
    }

    public function update($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.add-dish');
    }
}
