<x-layout>
    <x-slot name="title">
         Il San Pietro | Prenota
    </x-slot>
    @if(session('success'))
             <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="container mt-4 bebas-neue-regular">
        <div class="row justify-content-center align-items-center"> <!-- Aggiunta align-items-center per centrare verticalmente -->
            <div class="col-md-8">
                <div class="borderCustom text-center"> <!-- Aggiunta text-center per centrare tutto il contenuto -->
                    <h1 class="mt-1 mb-2 bebas-neue-regular">Prenota il tuo tavolo</h1>
                    <div class="imgPrenotaCustom mb-2"> </div>
                    <p>Chiusi domenica sera e lunedì. La prenotazione è valida previa conferma via mail.</p>

                    <form method="POST" action="{{ route('prenota.submit') }}">
                        @csrf
                        <div class="">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="">
                            <label for="phone" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="">
                            <label for="datetime" class="form-label">Data e Ora</label>
                            <input type="datetime-local" class="form-control" id="datetime" name="datetime" required>
                        </div>
                        <div class="">
                            <label for="guests" class="form-label">Numero ospiti</label>
                            <input type="number" class="form-control" id="guests" name="guests" required>
                        </div>
                        <div class="text-center my-2">
                            <button type="submit" class="btn btnPrenotaCustom">Prenota</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>