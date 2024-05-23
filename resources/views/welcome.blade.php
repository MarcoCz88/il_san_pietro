<x-layout>
  <x-slot name="title">
      Il San Pietro | Home
  </x-slot>
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
            <a href="{{ route('dishes.show') }}" class="fs-1 mt-2 btn-xl text-dark btn-light mx-auto bebas-neue-regular">Vai al Menù</a>
        </div>   
    </div>

    
    <div class="container">
        <div class="row mt-4 mb-4">
          <div id="projectsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <h5 class="card-title fs-2 abril-fatface-regular text-center my-3">Promozioni</h5>
                @foreach ($promotions as $index => $promotion)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="d-flex justify-content-center align-items-center"> 
                            <div class="card shadow" style="width: 18rem;">
                                <img src="https://picsum.photos/500" alt="promozione Il San Pietro" class="card-img-top p-3 rounded">
                                <div class="card-body text-center"> 
                                    <h5 class="card-title">{{ $promotion->promotion_name }}</h5>
                                    <p class="card-text">{{ Str::limit($promotion->promotion_body, 100) }}</p>
                                    <p class="card-text">{{ $promotion->promotion_price }}</p>
                                    <a href="{{ route('promotion.show', compact('promotion')) }}" class="btn buttonCustom shadow">Visualizza</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#projectsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#projectsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </div>


    
    <div class="container mt-4">
        <div class="card mt-3 position-relative"> 
            <img src="{{ asset('images/prodotti1.jpeg') }}" class="card-img-top" alt="Card Image"style="height: 300px; object-fit: cover;">
            <div class="card-img-overlay d-flex flex-column justify-content-center"> <!-- Utilizza flexbox per centrare verticalmente il contenuto -->
                <h5 class="fs-1 card-title text-center text-light bebas-neue-regular">I nostri prodotti</h5>
                <a href="{{ route('prodotti')}}" class="linkHover fs-4 mt-2 text-light mx-auto bebas-neue-regular">Vai a prodotti</a> <!-- Utilizza mx-auto per centrare orizzontalmente il pulsante -->
            </div>
        </div>
    </div>
  </div>
</x-layout>