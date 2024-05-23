<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Promotion;

class CreatePromotion extends Component
{
    

    public $promotion_name;
    public $promotion_body;
    public $promotion_price;

    protected $rules = [
        'promotion_name' => 'required|min:5',
        'promotion_body' => 'required|min:10',
        'promotion_price' => 'required|numeric',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è richiesto',
        'min' => 'Il campo :attribute è troppo corto',
        
    ];
    public function storeP()
    {
        $this->validate();
        Promotion::create([
            'promotion_name'=>$this->promotion_name,
            'promotion_body'=>$this->promotion_body,
            'promotion_price'=>$this->promotion_price,
        ]);

        session()->flash('message', 'Promozione inserita con successo!');
        $this->cleanFormP();
    
    }
    public function cleanFormP()
    {
        $this->promotion_name = '';
        $this->promotion_body = '';
        $this->promotion_price = '';
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
