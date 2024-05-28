<nav class="navbar shadow navbarCustom navbar-expand-lg fixed-top bg-dark text-light">
    <div class="container justify-content-center">
        <a class="col-4 navbar-brand logoCustom text-center bebas-neue-regular" href="{{ route('home') }}">Il San Pietro</a>
        <button class="col-8 navbar-toggler btnCustom " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa-xl fa-solid fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between text-center bgLight" id="navbarSupportedContent">
            <ul class="navbar-nav bebas-neue-regular">
                @if(Auth::check() && Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboardp')}}">Modifica Promozioni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('promotion.add')}}">Aggiungi Promozione</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard')}}">Modifica Menù</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dish.add')}}">Aggiungi piatto</a>
                </li>
                    
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('promotion.show')}}">{{__('ui.Promotion')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dishes.show')}}">Menù</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('prodotti')}}">{{__('ui.Prod')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('storia')}}">{{__('ui.History')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dovesiamo')}}">{{__('ui.Where')}}</a>
                </li>
                
                @endif   
            </ul> 
            <div class="nav-item d-flex justify-content-center ml-auto">
                      <x-_locale class="nav-link" lang="it" nation="it"> </x-_locale>
                      <x-_locale class="nav-link" lang="fr" nation="fr"> </x-_locale>
                      <x-_locale class="nav-link" lang="en" nation="gb"> </x-_locale>
                      <x-_locale class="nav-link" lang="de" nation="de"> </x-_locale>
            </div> 
        </div>  
    </div>
</nav>
@if(Auth::check() && Auth::user()->is_revisor)
<div class="">
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button class="btn text-center bebas-neue-regular fs-5 indexLogout">Logout</button>
    </form>
</div>
@else
<div class="row align-items-center justify-content-center">
    <a class="col-7 col-md-3 btn btn-success text-center bebas-neue-regular fs-2 index" href="tel:+39333598086">{{__('ui.Chiama')}}</a>
</div>
@endif