<x-layout>
    <x-slot name="title">
        Elenco Prenotazioni
    </x-slot>

    <div class="container">
        <h1 class="text-center">Elenco Prenotazioni</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data e Ora</th>
                        <th>Numero Ospiti</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prenotazioni as $prenotazione)
                        <tr>
                            <td>{{ $prenotazione->name }}</td>
                            <td>{{ $prenotazione->email }}</td>
                            <td>{{ $prenotazione->datetime }}</td>
                            <td>{{ $prenotazione->guests }}</td>
                            <td>{{ $prenotazione->phone }}</td>
                            <td class="text-center">
                                <form action="{{ route('admin.prenotazioni.destroy', $prenotazione->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Elimina Prenotazione</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>