<x-layout>
    <x-slot name="title">
         Il San Pietro | Prodotti
    </x-slot>
    <div class="container marginCustomP">
        <div class="row align-items-center justify-content-center">
            <div class="col-10 col-md-5">
                <h1 class="text-center mt-5 bebas-neue-regular borderYellow">{{__('ui.OurProd')}}</h1>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/prodotti3.jpg') }}" alt="" class="img-fluid mb-4">
            </div>
            <div class="col-md-6">
                <p id="target" class="fs-4"><strong>{{__('ui.FreshProd')}}</strong>{{__('ui.FreshProdBody')}}</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('images/prodotti2.jpeg') }}" alt="" class="img-fluid mb-4">
            </div>
            <div class="col-md-6 order-md-1">
                <p id="target" class="fs-4"><strong>{{__('ui.Km0')}}</strong>{{__('ui.Km0Body')}}</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="{{ asset('images/prodotti1.jpeg') }}" alt="" class="img-fluid mb-4">
            </div>
            <div class="col-md-6">
                <p id="target" class="fs-4"><strong>{{__('ui.Quality')}}</strong>{{__('ui.QualityBody')}}</p>
            </div>
        </div>
    </div>
</x-layout>