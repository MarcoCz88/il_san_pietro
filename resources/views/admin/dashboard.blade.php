<x-layout>
    <x-slot name="title">
        Il San Pietro | Modifica Menù
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-4">Modifica/Elimina piatti dal Menù</h1>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dishes as $dish)
                            <tr>
                                <td>{{ $dish->dish_name }}</td>
                                <td>{{ $dish->dish_body }}</td>
                                <td>
                                    <a href="{{ route('admin.edit', $dish->id) }}" class="btn btn-primary">Modifica</a>
                                    <form action="{{ route('admin.delete', $dish->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questo piatto?')">Elimina</button>
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