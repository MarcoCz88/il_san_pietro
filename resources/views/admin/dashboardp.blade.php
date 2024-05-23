<x-layout>
    <x-slot name="title">
        Il San Pietro | Modifica Promozioni
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-4">Modifica/Elimina promozioni</h1>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($promotions as $promotion)
                            <tr>
                                <td>{{ $promotion->promotion_name }}</td>
                                <td>{{ $promotion->promotion_body }}</td>
                                <td>{{ $promotion->promotion_price }}</td>
                                <td>
                                    <a href="{{ route('admin.editP', $promotion->id) }}" class="btn btn-primary">Modifica</a>
                                    <form action="{{ route('admin.deleteP', $promotion->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questa promozione?')">Elimina</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>