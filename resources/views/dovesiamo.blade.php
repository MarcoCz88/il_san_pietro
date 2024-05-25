<x-layout>
    <x-slot name="title">
        Il San Pietro | Dove Siamo
    </x-slot>
    <div class="container bebas-neue-regular">
        <div class="row justify-content-center marginCustomP">
            <div class="col-md-6 mt-5">
                <div class="menu-image2">
                    <img src="{{ asset('images/ilsanpietro_entrata.jpeg') }}" class="img-fluid" alt="Menu Image2">
                </div>
                <div class="text-dark mt-5">
                        <h1 class="text-center">{{__('ui.Dist')}}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-2">
                <a href="https://www.google.it/maps/place/Via+Roma,+9,+12015+Limone+Piemonte+CN/@44.2019996,7.5745189,17z/data=!3m1!4b1!4m6!3m5!1s0x12cd7719b119b95d:0xd4d3e4672db8f42a!8m2!3d44.2019996!4d7.5770938!16s%2Fg%2F11csnw1m6c?entry=ttu" target="_blank">
                   <img src="{{ asset('images/ilsanpietro_mappa.png') }}" class="imgCustom" alt="Mappa">
                </a>
            </div>
            <div class="col-md-6 text-center bebas-neue-regular mt-5">
                <h3>{{__('ui.Pos&ind')}}</h3>
                <h3>{{__('ui.FCuneo')}}</h3>
                <h3>{{__('ui.Road')}}</h3>
            </div>
        </div>
    </div>
</x-layout>