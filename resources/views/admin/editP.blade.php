<x-layout>
    <x-slot name="title">
        Modifica Piatto - {{ $promotion->promotion_name }}
    </x-slot>

    <div class="container">
        <h1>Modifica Promozione</h1>

        <form method="POST" action="{{ route('admin.updateP', $promotion->id) }}">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="promotion_name">Nome Piatto</label>
                <input type="text" class="form-control" id="promotion_name" name="promotion_name" value="{{ $promotion->promotion_name }}">
            </div>

            <div class="form-group">
                <label for="promotion_body">Descrizione</label>
                <textarea class="form-control" id="promotion_body" name="promotion_body">{{ $promotion->promotion_body }}</textarea>
            </div>

            <div class="form-group">
                <label for="promotion_price">Nome Piatto</label>
                <input type="number" class="form-control" id="promotion_price" name="promotion_price" value="{{ $promotion->promotion_price }}">
            </div>
            
            <button type="submit" class="btn btn-primary">Salva Modifiche</button>
        </form>
    </div>
</x-layout>