<div>
    <h1 class="text-center mt-5">Aggiungi un nuovo piatto al menù</h1>
    @if(session()->has('message'))
    <div class="flex flex-row justify-center my-2 alert alert-success">
        {{session('message')}}
    </div>
    @endif
    <form wire:submit.prevent="store">
        @csrf
        <div>
            <label for="dish_name">Nome del piatto</label>
            <input wire:model="dish_name" name="dish_name" type="text" class="form-control @error('dish_name') is-invalid @enderror">
            @error('dish_name')
            {{$message}}
            @enderror
        </div>
        <div>
            <label for="dish_body">Descrizione</label>
            <textarea wire:model="dish_body" name="dish_body" type="text" class="form-control @error('dish_body') is-invalid @enderror"></textarea>
            @error('dish_body')
            {{$message}}
            @enderror
        </div>
        <div>
           <input wire:model="temporary_images" type= file name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
           @error('temporary_images.*')
               <p class="text-danger mt-2">{{$message}}</p>
           @enderror
        </div>
        @if(!empty($images))
          <div class="row">
            <div class="col-12">
                <p>Anteprima Foto</p>
                <div class="row border border-4 border-info rounded shadow py-4">
                @foreach ($images as $key => $image)
                 <div class="col my-3">
                  <div class="img-preview mx-auto shadow rounded" style="background-image: url('{{ $image->temporaryUrl() }}')"></div>
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
