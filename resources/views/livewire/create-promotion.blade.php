<div>
    <h1 class="text-center mt-5">Aggiungi una nuova promozione</h1>
    @if(session()->has('message'))
    <div class="flex flex-row justify-center my-2 alert alert-success">
        {{session('message')}}
    </div>
    @endif
    <form wire:submit.prevent="storeP">
        @csrf
        <div>
            <label for="promotion_name">Nome della Promozione</label>
            <input wire:model="promotion_name" name="promotion_name" type="text" class="form-control @error('promotion_name') is-invalid @enderror">
            @error('promotion_name')
            {{$message}}
            @enderror
        </div>
        <div>
            <label for="promotion_body">Descrizione</label>
            <textarea wire:model="promotion_body" name="promotion_body" type="text" class="form-control @error('promotion_body') is-invalid @enderror"></textarea>
            @error('promotion_body')
            {{$message}}
            @enderror
        </div>
        <div>
            <label for="promotion_price">Prezzo</label>
            <input wire:model="promotion_price" name="promotion_price" type="number" class="form-control @error('promotion_price') is-invalid @enderror">
            @error('promotion_price')
            {{$message}}
            @enderror
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg fs-3 shadow my-3">Crea</button>
        </div>
    </form>
</div>
