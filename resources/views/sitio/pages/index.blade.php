@extends('sitio.layout.principal')
@section('contenido')

    <section id="banner" class="portfolio-details" >
        <div class="container-fluid">
            <div class="row gy-12">
                <div class="col-lg-12">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <a href="nosotros.php"> <img src="{{ asset('assets/IMG/banner_acerca.png') }}"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="servicios.php"><img src="{{ asset('assets/IMG/banner_ser.png') }}"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="contacto.php"><img src="{{ asset('assets/IMG/banner_contacto.png') }}"></a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    </div>
    <!--Fin Banners -->

    <br><br>
    <!--Noticias -->
    <section id="Noticias" class="about" data-aos="fade-up" data-aos-delay="100">
        <div class="container-xl">
            <header class="t1" >
                <h2 class="tex6">- Noticias -</h2>
            </header>
            <br>
            <div class="row gy-4">
                <div  div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="{{ asset('assets/IMG/saul_fb.jpg') }}" class="card-img-top">

                        <div class="card-body">
                            <h5 class="card-title cen tex1">Únete a nuestro directo.</h5>
                            <p class="card-text p tex3">
                                ¿Quieres saber cómo hacemos nuestras animaciones?<br>
                                Únete a nuestro directo este 11 de agosto del 2022 en nuestra red social Facebook.</p>
                            <div class="cen"><a href="https://fb.me/e/4dz97STwd" target="_blank" class="btn btn-outline-light tex4">Ir</a></div>
                        </div>
                    </div>

                </div>

                <div div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="{{ asset('assets/IMG/saul_descuento.jpg') }}" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title cen tex1">A Saúl le cayó un 20...  <br>
                                pero un 20% de descuento.</h5>
                            <p class="card-text p tex3">No te pierdas esta gran oferta y aprovecha el descuento en todos nuestros paquetes.
                                <br> Del 20 de julio al 10 de agosto del 2022.
                            </p>
                            <div class="cen"><a href="servicios.php" class="btn btn-outline-light tex4">Ir</a></div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="{{ asset('assets/IMG/saul_redes.jpg') }}" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title cen tex1">No olvides seguirnos.</h5>
                            <p class="card-text p tex3">Se el primero en enterarte de nuestras novedades y síguenos en nuestras redes sociales.
                                <br> Únete a esta sombría familia.</p><br>
                            <div class="cen"><a href="https://www.facebook.com/Shadow-Corporation-101258892642972" target="_blank" class="btn btn-outline-light tex4">FB</a>
                                <a href="https://www.instagram.com/shadow._corporation/" target="_blank" class="btn btn-outline-light tex4">IG</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
