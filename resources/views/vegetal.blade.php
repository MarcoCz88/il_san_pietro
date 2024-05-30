<x-layout>
    <x-slot name="title">
        Il San Pietro | Menù Vegetale
    </x-slot>

    <div class="container">
        <div class="row align-items-center justify-content-center mt-3">
            <h1 class="col-9 col-md-7 text-center mt-5 bebas-neue-regular borderYellow">
            {{__('ui.OurMenùV')}}
            </h1>
           
            <div class="col-12 col-md-6 my-4">
                <div class="card shadow">
                    <div class="d-flex align-items-center">
                      
                            <!-- Immagine a sinistra, testo a destra -->
                            <img src="{{ asset('images/gnocchetti.jpg') }}" class="card-img-top p-3 rounded-circle imgRoundedMenu" alt="none" style="width: 150px; height: 150px;">
                            <div class="card-body">
                                <h5 class="card-title">Gnocchetti fatti in casa ripieni di pesto e basilico</h5>
                                <p class="card-text">Saltati all’acqua di pomodoro, pomodorini confit e foglie di basilico</p>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 my-4">
                <div class="card shadow">
                    <div class="d-flex align-items-center">
                            <!-- Immagine a destra, testo a sinistra -->
                            <div class="card-body">
                                <h5 class="card-title">Uovo con spuma di asparagi</h5>
                                <p class="card-text">punte di asparagi, fonduta di Parmigiano, croccante pan brioches</p>
                            </div>
                            <img src="{{ asset('images/asparagi.jpeg') }}" class="card-img-top p-3 rounded-circle imgRoundedMenu" alt="none" style="width: 150px; height: 150px;">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 my-4">
                <div class="card shadow">
                    <div class="d-flex align-items-center">
                      
                            <!-- Immagine a sinistra, testo a destra -->
                            <img src="{{ asset('images/cipolla.jpg') }}" class="card-img-top p-3 rounded-circle imgRoundedMenu" alt="none" style="width: 150px; height: 150px;">
                            <div class="card-body">
                                <h5 class="card-title">Cipolla piatta di Andezeno ripiena di ratatouille di verdure</h5>
                                <p class="card-text">su vellutata di piselli tiepida e riduzione al Nebbiolo</p>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 my-4">
                <div class="card shadow">
                    <div class="d-flex align-items-center">
                            <!-- Immagine a destra, testo a sinistra -->
                            <div class="card-body">
                                <h5 class="card-title">Risotto Carnaroli della Baraggia vercellese</h5>
                                <p class="card-text">con crema di peperoni di Carmagnola, acciughe, fonduta di Blue e fiori di cappero</p>
                            </div>
                            <img src="{{ asset('images/risotto.jpg') }}" class="card-img-top p-3 rounded-circle imgRoundedMenu" alt="none" style="width: 150px; height: 150px;">
                    </div>
                </div>
            </div>
  
        </div>
    </div>
</x-layout>