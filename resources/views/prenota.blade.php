<x-layout>
    <x-slot name="title">
         Il San Pietro | Prenota
    </x-slot>
    <div class="borderCustom">
        <div class="container mt-5">
          <h1 class="mb-4 text-center bebas-neue-regular">Prenota il tuo tavolo</h1>
          <p class="text-center">Siamo aperti da martedì a pranzo a domenica a pranzo. Chiusi domenica sera e lunedì. La prenotazione è valida previa conferma via mail.</p>

          <form method="POST" action="{{ route('prenota.submit') }}">
        @csrf
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="name" class="form-label">Nome</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
          <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
          </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="phone" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="col-md-6">
            <label for="datetime" class="form-label">Data e Ora</label>
            <input type="datetime-local" class="form-control" id="datetime" name="datetime" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="guests" class="form-label">Numero ospiti</label>
            <input type="number" class="form-control" id="guests" name="guests" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12 text-center"> <!-- Aggiunta della classe text-center -->
            <button type="submit" class="btn btn-primary">Prenota</button>
        </div>
    </div>
       </form>
    </div>
    </div>
    
</x-layout>