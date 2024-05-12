<nav class="navbar shadow navbarCustom navbar-expand-lg fixed-top bg-dark text-light">
    <div class="container justify-content-between">
        <a class="col-4 navbar-brand logoCustom text-center bebas-neue-regular" href="{{ route('home') }}">Il San Pietro</a>
        @if(Auth::check() && Auth::user()->is_revisor)
        <div class="nav-item">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="prenotaCustom btn bebas-neue-regular fs-1">Logout</button>
            </form>
        </div>
        @else
        <a class="col-4 text-center nav-link prenotaCustom fs-1 bebas-neue-regular" href="{{ route('prenota.form')}}">Prenota</a>
        @endif
        <button class="col-4 navbar-toggler btnCustom " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa-xl fa-solid fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center text-center bgLight" id="navbarSupportedContent">
            <ul class="navbar-nav bebas-neue-regular">
                
                @if(Auth::check() && Auth::user()->is_revisor)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.prenotazioni.index')}}">Gestione Prenotazioni</a>
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
                    <a class="nav-link" href="{{ route('dishes.show')}}">Menù</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('prodotti')}}">Prodotti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('storia')}}">Storia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dovesiamo')}}">Dove Siamo</a>
                </li>
                @endif 
            </ul>
        </div>
    </div>
</nav>