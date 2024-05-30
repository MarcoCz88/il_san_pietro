<footer class="shadow py-5 mt-5 footer-custom bg-dark text-light">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-4 mb-4">
                <img class="logoCustomF" src="{{ asset('images/sanpietro_logo.png') }}" alt="Logo de Il San Pietro">
                <h4 class="great-vibes-regular logoCustom2 text-light text-center mb-4 mt-3x">Il San Pietro</h4>
                <p class="text-center">{{__('ui.Footer')}}</p>
            </div>
            <div class="col-md-4 mb-4">
                <h4 class="bebas-neue-regular text-center mt-3">{{__('ui.InfoC')}}</h4>
                <p class="text-center">Via Roma, 9</p>
                <p class="text-center">Limone Piemonte (CN)</p>
                <p class="text-center">Tel. 333.598086</p>
                <p class="text-center">ilsanpietro.contatti@gmail.com</p>
            </div>
            <div class="col-md-4 mb-4">
                <h4 class="bebas-neue-regular text-center mt-3">{{__('ui.Link')}}</h4>
                <ul class="list-unstyled text-center">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('promotion.show')}}">{{__('ui.Promotion')}}</a></li>
                    <li><a href="{{ route('dishes.show')}}">Menu</a></li>
                    <li><a href="{{ route('prodotti')}}">{{__('ui.Prod')}}</a></li>
                    <li><a href="{{ route('dovesiamo')}}">{{__('ui.Where')}}</a></li>
                </ul>
                <h4 class="bebas-neue-regular text-center mt-4">Seguici su</h4>
                <ul class="list-inline text-center mt-3 fs-1">
                    <li class="list-inline-item"><a href="https://www.facebook.com/ilsanpietroristorante/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/il_san_pietro_limone_piemonte/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <hr class="my-1">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; 2024 Il San Pietro | {{__('ui.Dirict')}}</p>
            </div>
        </div>
    </div>
</footer>
