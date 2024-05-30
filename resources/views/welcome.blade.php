<x-layout>
  <x-slot name="title">
      Il San Pietro | Home
  </x-slot>
  <x-masthead/>
  
  <div class="container mb-5 ">
    <div class="row">
      <div class="col-md-4">
        <div class="card border-0">
          <img src="{{ asset('images/il_nostro_menù.png') }}" class="card-img-top" alt="Card Image" style="height: 300px; object-fit: contain;">
          <div class="card-img-overlay d-flex flex-column justify-content-center mt-5">
            <a href="{{ route('dishes.show') }}" style="text-decoration: none; color: white;">
              <h5 class="fs-2 card-title text-center text-dark bebas-neue-regular marginPromoCustom">{{__('ui.OurMenù')}}</h5>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0">
          <img src="{{ asset('images/img_Promo.png') }}" class="card-img-top" alt="Card Image" style="height: 300px; object-fit: contain;">
          <div class="card-img-overlay d-flex flex-column justify-content-center mt-5">
          <a href="{{ route('promotion.show') }}" style="text-decoration: none; color: white;">
            <h5 class="fs-2 card-title text-center text-dark bebas-neue-regular marginPromoCustom">{{__('ui.Promotion3')}}</h5>
          </a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0">
          <img src="{{ asset('images/solo-mortaio.png') }}" class="card-img-top" alt="Card Image" style="height: 300px; object-fit: contain;">
          <div class="card-img-overlay d-flex flex-column justify-content-center mt-5">
            <a href="{{ route('vegetal') }}" style="text-decoration: none; color: white;">
              <h5 class="fs-2 card-title text-center text-dark bebas-neue-regular marginPromoCustom">{{__('ui.Vegetarian')}}</h5>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5 mb-5">
        <div class="card mt-5 "> 
            <img src="{{ asset('images/prodotti1.jpeg') }}" class="card-img-top opacityProd" alt="Card Image" style="height: 300px; object-fit: cover;">
            <div class="card-img-overlay d-flex flex-column justify-content-center"> <!-- Utilizza flexbox per centrare verticalmente il contenuto -->
                <h5 class="fs-1 card-title text-center text-light bebas-neue-regular">{{__('ui.OurProd')}}</h5>
                <a href="{{ route('prodotti')}}" class="linkHover fs-4 mt-2 mx-auto bebas-neue-regular hoverCustom2">{{__('ui.GoProd')}}</a> <!-- Utilizza mx-auto per centrare orizzontalmente il pulsante -->
            </div>
        </div>
  </div>
  <div class="container">
   <div class="row align-items-center justify-content-around">
      <div class="col-10 col-md-3 text-center mt-5 mb-3 mx-auto amita-bold ">
         <h1 class="sizeChef hoverCustomChef">{{__('ui.Chef')}}</h1>
      </div>
   </div>
   <div class="row align-items-center justify-content-around">
      <div class="col-12 col-md-4 chef-container mt-5">
         <img class="imgChef" src="{{ asset('images/ChefArtuso.png') }}" alt="Chef Artuso Edoardo Il San Pietro">
         <p class="chef-name bebas-neue-regular borderPY fs-5">Chef Artuso Edoardo</p>
         
      </div>
      <p class="col-12 col-md-6 text-center bebas-neue-regular borderChefRL"> {{__('ui.Edoardo')}} </p>
      
      <div class="col-12 col-md-4  chef-container mt-5">
         <img class="imgChef" src="{{ asset('images/ChefFedele.png') }}" alt="Chef Fedele Alessandro Il San Pietro">
         <p class="chef-name bebas-neue-regular borderPY fs-5">Chef Fedele Alessandro</p>
      </div>
      <p class="col-12 col-md-6 text-center bebas-neue-regular borderChefRL">
        {{__('ui.Alessandro')}}
      </p>
   </div>
   <div class="container mt-5 backgroundOrari">
      <div class="row align-items-center justify-content-center">
         <div class="col-12 text-center amita-bold fs-1 mt-3">
              {{__('ui.Orari')}}
         </div>
         <div class="col-12 text-center bebas-neue-regular mt-2 fs-3">
              {{__('ui.LunVen')}}
         </div>
         <div class="col-12 text-center bebas-neue-regular mt-1 fs-3">
            12:00 - 14:30 <br>
            19:30 - 22:30
         </div>
         <div class="col-12 text-center bebas-neue-regular mt-2 fs-3">
              {{__('ui.Dom')}}
         </div>
         <div class="col-12 text-center bebas-neue-regular mt-1 fs-3 mb-3">
            12:00 - 15:00 <br>
            19:30 - 22:30
         </div>
         </div>
      </div>
   </div>
</div>


</x-layout>
