<x-layout>
  <x-slot name="title">
    Il San Pietro | Promozioni
  </x-slot>
  <div class="container">
    <div class="row">
      <div class="col-12 mt-4">
        <h1 class="text-center mt-5 bebas-neue-regular">Le Nostre Promozioni</h1>
      </div>
    </div>
    <div class="row">
      @foreach ($promotions as $promotion)
      <div class="col-12 my-3">
        <div class="card shadow w-100 custom-card-height position-relative">
          <div class="card-img-container2">
            <img src="https://picsum.photos/900" alt="Promozione IL San Pietro Limone Piemonte" class="card-img-top2">
          </div>
          <div class="card-body">
             <div class="row">
                <div class="col-md-6 text-center">
                   <h3 class="card-title bebas-neue-regular">{{ $promotion->promotion_name }}</h3>
                </div>
                <div class="col-md-6">
                   <p class="card-text text-center">{{ Str::limit($promotion->promotion_body, 100) }}</p>
                </div>
             </div>
             <div class="row mt-2">
               <div class="col-md-6 text-center">
                 <p class="fs-3 ">€{{ $promotion->promotion_price }}</p>
               </div>
               <div class="col-md-6 text-center">
                        <a href="{{ route('promotion.show', compact('promotion')) }}" class="btn buttonCP buttonCustom2 shadow">Visualizza</a>
                </div>
             </div>
          </div>
          <a href="https://api.whatsapp.com/send?text={{ urlencode($promotion->promotion_name . ' - ' . $promotion->promotion_body . ' - ' . $promotion->promotion_price . '€ - ' . route('promotion.show', compact('promotion'))) }}" target="_blank" class="whatsapp-button-custom position-absolute bottom-0 end-0 m-3">
            <img src="{{ asset('images/logo_whatsapp.png') }}" alt="il San Pietro Condividi Promozione">
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</x-layout>
