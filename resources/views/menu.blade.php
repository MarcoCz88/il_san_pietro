<x-layout>
    <x-slot name="title">
        Il San Pietro | Menù
    </x-slot>
    <div class="menu-page bebas-neue-regular">
        <div class="menu-image">
            <img src="{{ asset('images/menu-background.jpg') }}" alt="Menu Image">
            <div class="menu-text">
                <h1></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h1 class="col-12 text-center mt-5 bebas-neue-regular">
            {{__('ui.OurMenù')}}
            </h1>
            @foreach ($dishes as $index => $dish)
            <div class="col-12 col-md-6 my-4"> <!-- Utilizza col-md-6 per due piatti per riga su desktop -->
                <div class="card shadow">
                    <div class="d-flex align-items-center">
                        @if ($index % 2 == 0)
                            <!-- Immagine a sinistra, testo a destra -->
                            <img src="{{ Storage::url($dish->images->first()->path) }}" class="card-img-top p-3 rounded-circle imgRoundedMenu" alt="none" style="width: 150px; height: 150px;">
                            <div class="card-body">
                                <h5 class="card-title">{{$dish->dish_name}}</h5>
                                <p class="card-text">{{$dish->dish_body}}</p>
                            </div>
                        @else
                            <!-- Immagine a destra, testo a sinistra -->
                            <div class="card-body">
                                <h5 class="card-title">{{$dish->dish_name}}</h5>
                                <p class="card-text">{{$dish->dish_body}}</p>
                            </div>
                            <img src="{{ Storage::url($dish->images->first()->path) }}" class="card-img-top p-3 rounded-circle" alt="none" style="width: 150px; height: 150px;">
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
