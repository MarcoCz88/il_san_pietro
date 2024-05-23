<x-layout>
    <x-slot name="title">
        Il San Pietro | Promozioni
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5">Le Nostre Promozioni</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($promotions as $promotion)
            <div class="col-12 col-md-4">
                <div class="card shadow" style="width: 18rem">
                    <img src="htttps://picsum.photos/200" alt="Promozione IL San Pietro Limone Piemonte" class="card-img-top p-3 rounded">
                    <div class="card-body">
                        <h5 class="card-title">{{ $promotion->promotion_name }}</h5>
                        <p class="card-text">{{ Str::limit($promotion->promotion_body, 100) }}</p>
                        <p class="card-text">{{ $promotion->promotion_price }}</p>
                        <a href="{{ route('promotion.show', compact('promotion')) }}" class="btn buttonCustom shadow">Visualizza</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>