<div class="sectionClients">
    <div class="containerClient">
        <div class="content">
            <div class="title">

                <h2>
                    Nuestros socios
                </h2>
            </div>
            <p class="description">
                “Evolucionamos juntos, trabajando en equipo, fortaleciendo nuestras
                <br>capacidades y creando valor a cada paso”
            </p>

            <div class="cardGrid" id="cardClients">
              <div  class="card" id="clientsCard" style="--count: {{ count($cliens) }};">
                @foreach ($cliens as $client)
                <img src="{{ $client['imagen'] }}" alt="{{ $client['nombre'] }}" />
            
                    @endforeach
                </div>

            </div>

        </div>
    </div>
</div>


