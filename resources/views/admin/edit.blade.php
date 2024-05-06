<x-layout>
    <x-slot name="title">
        Modifica Piatto - {{ $dish->dish_name }}
    </x-slot>

    <div class="container">
        <h1>Modifica Piatto</h1>

        <form method="POST" action="{{ route('admin.update', $dish->id) }}">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="dish_name">Nome Piatto</label>
                <input type="text" class="form-control" id="dish_name" name="dish_name" value="{{ $dish->dish_name }}">
            </div>

            <div class="form-group">
                <label for="dish_body">Descrizione</label>
                <textarea class="form-control" id="dish_body" name="dish_body">{{ $dish->dish_body }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Salva Modifiche</button>
        </form>
    </div>
</x-layout>