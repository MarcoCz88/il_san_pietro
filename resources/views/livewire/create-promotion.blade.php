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
        <div>
           <input wire:model="temporary_photos" type= file name="photos" multiple class="form-control shadow @error('temporary_photos.*') is-invalid @enderror" placeholder="Img"/>
           @error('temporary_photos.*')
               <p class="text-danger mt-2">{{$message}}</p>
           @enderror
        </div>
        @if(!empty($photos))
          <div class="row">
            <div class="col-12">
                <p>Anteprima Foto</p>
                <div class="row border border-4 border-info rounded shadow py-4">
                @foreach ($photos as $key => $photo)
                 <div class="col my-3">
                  <div class="img-preview mx-auto shadow rounded" style="background-image: url('{{ $photo->temporaryUrl() }}')"></div>
                  <button type="button" class="btn btn-danger shadow d-block text-center mx-auto" wire:click="removeImage({{ $key }})">Cancella</button>
                 </div>
                @endforeach
                </div>
            </div>
          </div>
        @endif
        
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg fs-3 shadow my-3">Crea</button>
        </div>
    </form>
</div>
