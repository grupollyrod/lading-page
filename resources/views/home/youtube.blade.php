<section class="containerYoutube" id="canal"
    style="background-image: url('{{ asset('assets/img/home/iaPublicidad.webp') }}');">
    <div class="content">
        <div class="page-title">
            <h3>Novedades en nuestro canal</h3>
            <p>IA e Innovación en colaboración con Microsoft - <br>
                Founderz Edición 2024</p>
            <p>Accede a la plataforma de aprendizaje más innovadora.</p>
        </div>
        <div class="novedades">
            <video id="myVideo" data-aos="fade-right" data-aos-offset="400" data-aos-easing="linear" width="100%"
                autoplay playsinline>
                <source src="{{ asset('assets/video/video_yt.mkv') }}" type="video/mp4">
                Tu navegador no soporta videos.
            </video>
        {{-- esta imagen me redireccione a otro lado  --}}
            <a href="{{url('contactanos')}}">
                <img src="{{ asset('assets/img/home/iagenerativa.webp') }}" alt="iagenerativa" data-aos="fade-left"
                data-aos-offset="400" data-aos-easing="linear">
            </a>
        </div>

        <div class="videoContainer">
            <div class="cardtitle">
                <p> Sigue nuestro canal para más contenido y aprendizaje</p>
            </div>
            <div class="video-container">

                <div class="video-item">
                    <div class="video-thumbnail">
                        <iframe width="1280" height="720"
                            src="https://www.youtube.com/embed/0TDPRTUG42w?si=w3UbTmBm18pQnnOG"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <h2>Programa de formación para Data Eng. Jr. Sesión 01</h2>
                    <p>Aprenderás fundamentos de Ingeniería de Datos, Scala con Spark y herramientas clave de Big Data
                        usadas en la industria.
                    </p>
                </div>

                <div class="video-item">
                    <div class="video-thumbnail">
                        <iframe width="1280" height="720"
                            src="https://www.youtube.com/embed/_zBfLVxvb2w?si=ZNSzVnIU22TIHU50"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <h2>Programa de formación para Data Eng. Jr. Sesión 02</h2>
                    <p>Esta sesión cubre herramientas clave para Big Data: ETL, streaming, servicios cloud,
                        visualización y machine learning.
                    </p>
                </div>

                <div class="video-item">
                    <div class="video-thumbnail">
                        <iframe width="1280" height="720"
                            src="https://www.youtube.com/embed/P74Y-aO6QyQ?si=qnr_2XN5ZaV7T13G"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <h2>Programa de formación para Data Eng. Jr. Sesión 03</h2>
                    <p>La sesión explora servicios clave de Google Cloud: DataFlow, BigQuery, Bigtable, y orquestación
                        con Functions y Composer.</p>
                </div>
            </div>
        </div>
    </div>
</section>
