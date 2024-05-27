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
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ Storage::url($photo->path) }}" class="img-fluid p-2 rounded carousel-img" alt="...">
                            </div>

                        @empty
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/1200/200" class="img-fluid p-3 rounded" alt="...">
                            </div>
                        @endforelse
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <p class="card-text text-center fs-4 mt-3">{{$promotion->promotion_body}}</p>
                <div class="text-center fs-3 card-text mt-5">
                    <p class="text-center"> <strong>{{__('ui.Price')}}:</strong></p>
                    <p href="{{ $promotion->promotion_price }}">€{{ $promotion->promotion_price}}</p>
                </div>
                
            </div>
        </div>
    </div>
</x-layout>