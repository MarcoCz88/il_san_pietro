<x-layout>
  <x-slot name="title">
      Il San Pietro | Home
  </x-slot>
  @if(session('success'))
             <div class="alert alert-success">{{ session('success') }}</div>
  @endif
  <x-masthead/>
  <div class="spaceCustom"></div>
    <div class="container mt-2">
        <h3 class="text-center mb-4 fs-1 bebas-neue-regular">i Nostri Piatti</h3>
        <div id="carouselExampleIndicators" class="carousel slide mt-2" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/piatto1.jpg') }}" class="d-block w-100" alt="..." style="height: 300px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/piatto2.jpg') }}" class="d-block w-100" alt="..." style="height: 300px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/piatto3.jpg') }}" class="d-block w-100" alt="..." style="height: 300px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/piatto4.jpg') }}" class="d-block w-100" alt="..." style="height: 300px; object-fit: cover;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('dishes.show') }}" class="fs-1 mt-2 btn-xl text-dark btn-light mx-auto bebas-neue-regular">Vai al Menu</a>
        </div>   
    </div>
    </div>
    <div class="container mt-4">
        <div class="card mt-3 position-relative"> 
            <img src="http://picsum.photos/200" class="card-img-top" alt="Card Image"style="height: 300px; object-fit: cover;">
            <div class="card-img-overlay d-flex flex-column justify-content-center"> <!-- Utilizza flexbox per centrare verticalmente il contenuto -->
                <h5 class="fs-2 card-title text-center text-dark bebas-neue-regular bg-light">I nostri prodotti</h5>
                <a href="{{ route('prodotti')}}" class="fs-4 btn btn-light mx-auto bebas-neue-regular">Vai a prodotti</a> <!-- Utilizza mx-auto per centrare orizzontalmente il pulsante -->
            </div>
        </div>
    </div>
  </div>
</x-layout>