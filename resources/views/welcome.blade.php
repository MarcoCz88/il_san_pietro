<x-layout>
  <x-slot name="title">
      Il San Pietro | Home
  </x-slot>
  <x-masthead/>
  
  <div class="container">
        <div class="row mb-4">
          <div id="projectsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <h1 class="text-center mb-4 bebas-neue-regular">Promozioni</h1>
                @foreach ($promotions as $index => $promotion)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="d-flex justify-content-center align-items-center"> 
                           <div class="card shadow w-100 custom-card-height">
                              <div class="card-img-container2">
                                 <img src="https://picsum.photos/900" alt="Promozione IL San Pietro Limone Piemonte" class="card-img-top2">
                              </div>
                              <div class="card-body">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <h3 class="card-title bebas-neue-regular">{{ $promotion->promotion_name }}</h3>
                                    </div>
                                    <div class="col-md-6">
                                       <p class="card-text">{{ Str::limit($promotion->promotion_body, 100) }}</p>
                                    </div>
                                 </div>
                                 <div class="row mt-2">
                                    <div class="col-md-6">
                                       <p class="card-text fs-3">€{{ $promotion->promotion_price }}</p>
                                    </div>
                                    <div class="col-md-6 text-center">
                                       <a href="{{ route('promotion.show', compact('promotion')) }}" class="btn buttonCP buttonCustom2 shadow">Visualizza</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <a href="https://api.whatsapp.com/send?text={{ urlencode($promotion->promotion_name . ' - ' . $promotion->promotion_body . ' - ' . $promotion->promotion_price . '€ - ' . route('promotion.show', compact('promotion'))) }}" target="_blank" class="whatsapp-button-custom position-absolute bottom-0 end-0 m-3"><img src="{{ asset('images/logo_whatsapp.png') }}" alt="WhatsApp">
                        </a>
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

  <div class="d-flex justify-content-center">
        <a href="{{ route('dishes.show') }}" class="fs-1 mt-2 btn-xl text-dark btn-light mx-auto bebas-neue-regular">Vai al Menù</a>
  </div> 
    
  <div class="container mt-4">
        <div class="card mt-3 "> 
            <img src="{{ asset('images/prodotti1.jpeg') }}" class="card-img-top" alt="Card Image" style="height: 300px; object-fit: cover;">
            <div class="card-img-overlay d-flex flex-column justify-content-center"> <!-- Utilizza flexbox per centrare verticalmente il contenuto -->
                <h5 class="fs-1 card-title text-center text-light bebas-neue-regular">I nostri prodotti</h5>
                <a href="{{ route('prodotti')}}" class="linkHover fs-4 mt-2 text-light mx-auto bebas-neue-regular">Vai a prodotti</a> <!-- Utilizza mx-auto per centrare orizzontalmente il pulsante -->
            </div>
        </div>
  </div>

</x-layout>
