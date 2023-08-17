@extends('sitio.layout.principal')
@section('contenido')

    <section id="Servicios" class="services d-flex">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
            <br>
                <h1 class="tex6">Servicios</h1>
            </header>
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box color">
                        <video width="65%" autoplay playsinline muted loop><source src="{{ asset('assets/VIDEO/saul_basico.mp4') }}" type="video/mp4"></video>
                        <h3 class="tex1"><br>Paquete Básico</h3>
                        <p class="tex3">Creación del manual de identidad.
                            <br>2 publicaciones semanales (no incluye carrusel).
                            <br>Creación y manejo de redes sociales por 1 mes.
                            <br>1,000 tarjetas de presentación.
                            <br>Reporte de resultados.

                            <br><br><span class="tex1"> 50% de anticipo </span>
                            <br><br> <span class="tex5">= $6,000.00</span>
                        </p>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box color">
                        <video width="65%" autoplay playsinline muted loop><source src="{{ asset('assets/VIDEO/saulEstandar.mp4') }}" type="video/mp4"></video>
                        <h3 class="tex1"><br>Paquete Estandar</h3>
                        <p class="tex3">
                            <br>Creación/estandarización de la marca.
                            <br>Manejo de redes sociales por 1 mes.
                            <br>2 publicaciones semanales y 1 carrusel al mes.
                            <br>1 historia semanal.
                            <br>1,000 volantes( 1 lado).
                            <br>1,000 tarjetas de presentación.
                            <br>Reporte de resultados.

                            <br><br><span class="tex1"> 40% de anticipo. </span>
                            <br><br> <span class="tex5">= $8,000.00</span>
                        </p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box color">
                        <video width="65%" autoplay playsinline muted loop><source src="{{ asset('assets/VIDEO/saul_premium.mp4') }}"></video>
                        <h3 class="tex1"><br>Paquete Premium</h3>
                        <p class="tex3"><br>Identidad corporativa.
                            <br>3 publicaciones semanales y 2 carruseles al mes.
                            <br>2 historias semanales.
                            <br> Manejo de redes sociales por 1 mes.
                            <br> Sitio web con 4 apartados(incluye host y dominio básico).
                            <br> 1,000 tarjetas de presentación.
                            <br> Reporte de resultados.

                            <br><br><span class="tex1"> 60% de anticipo. </span>
                            <br><br> <span class="tex5">= $13,500.00</span>
                        </p>

                    </div>
                </div>
            </div>



        </div>
        </div>
    </section>

@endsection
