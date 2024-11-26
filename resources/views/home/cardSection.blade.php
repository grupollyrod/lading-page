

<div class="cardContainer">
    <div class="page-title">
        <h3>Nuestras actividades</h3>
     </div>

     <div class="cardsContainer">
         @foreach ($cards as $card)
         <div onclick="window.location.href='/nuestroTrabajo#{{ $card['id']}}'" class="card" data-aos="{{$card['data-aos']}}"    data-aos-offset="400"
         data-aos-easing="linear">
             <img src="{{ asset($card['imagen']) }}" alt="Imagen Home" />
             <div class="overlay"></div>
             <p class="content">
                 <span >{{ $card['tittle'] }}</span>
                     <a href="/nuestroTrabajo#{{ $card['id'] }}">Leer más</a>
             </p>
         </div>

         @endforeach
     </div>
</div>
