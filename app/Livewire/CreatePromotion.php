<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Promotion;
use Livewire\WithFileUploads;

class CreatePromotion extends Component
{
    use WithFileUploads;

    public $promotion_name;
    public $promotion_body;
    public $promotion_price;
    public $temporary_photos = [];
    public $photos = [];
    public $promotion;

    protected $rules = [
        'promotion_name' => 'required|min:5',
        'promotion_body' => 'required|min:10',
        'promotion_price' => 'required|numeric',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è richiesto',
        'min' => 'Il campo :attribute è troppo corto',
        
    ];
    public function mount()
    {
        // Inizializzazione dei dati del componente se necessario
        $this->promotion = new Promotion(); // Se stai creando un nuovo piatto
    }
    public function updatedTemporaryPhotos()
    {
        $this->validateOnly('temporary_photos');

        foreach ($this->temporary_photos as $photo) {
            $this->photos[] = $photo;
        }
    }

    public function removeImage($key)
    {
        if (isset($this->photos[$key])) {
            unset($this->photos[$key]);
        }
    }
    public function storeP()
    {
    $this->validate();
        {
        $promotion = new Promotion();
        $promotion->promotion_name = $this->promotion_name;
        $promotion->promotion_body = $this->promotion_body;
        $promotion->promotion_price = $this->promotion_price;
        $promotion->save();

       
        foreach ($this->photos as $photo) {
            $promotion->photos()->create(['path' => $photo->store('photos', 'public')]);
        }

        session()->flash('message', 'Promozione inserita con successo!');
        $this->cleanFormP();
        }
    }
    public function cleanFormP()
    {
        $this->promotion_name = '';
        $this->promotion_body = '';
        $this->promotion_price = '';
        $this->temporary_photos = [];
        $this->photos = [];
    }
    public function updateP($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.create-promotion');
    }
}
