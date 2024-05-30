<x-layout>
    <x-slot name="title">
        Il San Pietro | Promozione
    </x-slot>
    <div class="container-fluid p-2 bg-gradient bg-showCustom shadow mb-4">
        <div class="row">
            <div class="col-12 p-4">
                <h1 class="display-2 text-center textShowCustom mt-5 bebas-neue-regular"><strong>{{$promotion->promotion_name}}</strong> </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @forelse ($promotion->photos as $index => $photo)
                            <div class="d-flex justify-content-center">
                                <img src="{{ Storage::url($photo->path) }}" class="img-fluid p-2 rounded carousel-img" alt="Promozione Il San Pietro"style="max-height: 400px; object-fit: cover;">
                            </div>

                        @empty
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/1200/200" class="img-fluid p-3 rounded" alt="...">
                            </div>
                        @endforelse
                    </div>
                </div>
                <p class="card-text text-center fs-4 mt-3 borderChefRL">{{$promotion->promotion_body}}</p>
                <div class="text-center fs-3 card-text mt-5">
                    <p class="text-center"> <strong>{{__('ui.Price')}}:</strong></p>
                    <p href="{{ $promotion->promotion_price }}">€{{ $promotion->promotion_price}}</p>
                </div>
                

                <div class="carousel-item">
                   
                </div>



            </div>
        </div>
    </div>
</x-layout>