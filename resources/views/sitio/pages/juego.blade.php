@extends('sitio.layout.principal')
@section('contenido')

  <section id="Servicios" class="services d-flex">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <br>
                <h1 class="tex6">Realidad Aumentada</h1>
            </header>
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box ">
                        <video width="100%" src="{{ asset('assets/VIDEO/n1.mp4') }}" autoplay loop muted="muted"
  playsinline controlslist="nodownload"></video>
                    <h3 class="tex1"><br>RA en Ropa</h3>
                    <p class="tex3"><br>Genera visibilidad de tu marca, incentivando a tus usuarios con experiencias unicas.</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box ">
                    <video width="100%" src="{{ asset('assets/VIDEO/n2.mp4') }}" autoplay loop muted="muted"
  playsinline controlslist="nodownload"></video>
                        <h3 class="tex1"><br>RA en Arquitectura</h3>
                        <p class="tex3"><br>Permite a tus clientes visualizar de manera interactiva los inmuebles.</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box ">
                    <video width="100%" src="{{ asset('assets/VIDEO/n3.mp4') }}" autoplay loop muted="muted"
  playsinline controlslist="nodownload"></video>
                        <h3 class="tex1"><br>RA en Filtros</h3>
                        <p class="tex3"><br>Proyecta accesorios sobre el rostro del usuario.</p>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection