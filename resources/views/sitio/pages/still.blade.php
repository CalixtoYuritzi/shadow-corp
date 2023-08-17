@extends('sitio.layout.principal')
@section('contenido')

<!--Info Productos-->
<main id="main">
    <section id="Productos" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-7">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="{{ asset('assets/IMG/ra1.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('assets/IMG/ra3.png') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="portfolio-info">
              <h3>Detalles</h3>
              <ul>
                <li>
                  <strong>Video Juego: </strong> El perfecto imperfecto
                </li>
                <li>
                  <strong>Autor(es): </strong> Shadow Corporation
                </li>
                <li>
                  <strong>Plataformas: </strong>Android 
                </li>
                <li>
                  <strong>Año: </strong>2021
                </li>
                <li>
                  <strong>Precio: </strong>$1899.90
                </li>
                <li>
                  <a class="btn btn-agregar">
                    <i class="bi bi-box-arrow-down"></i> Agregar 
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row gy-4">
          <div class="col-lg-12">
            <h2>Descripción</h2>
            <p class="align-content-around">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio inventore corporis ullam ipsum a atque eum vel, consectetur placeat pariatur, magni harum! Ullam officiis quasi, odio voluptatem repellat dolores delectus minus doloribus quia corrupti distinctio deleniti quibusdam dolorem blanditiis nemo magnam ipsam placeat reprehenderit iure quis velit a porro ut?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio inventore corporis ullam ipsum a atque eum vel, consectetur placeat pariatur, magni harum! Ullam officiis quasi, odio voluptatem repellat dolores delectus minus doloribus quia corrupti distinctio deleniti quibusdam dolorem blanditiis nemo magnam ipsam placeat reprehenderit iure quis velit a porro ut?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio inventore corporis ullam ipsum a atque eum vel, consectetur placeat pariatur, magni harum! Ullam officiis quasi, odio voluptatem repellat dolores delectus minus doloribus quia corrupti distinctio deleniti quibusdam dolorem blanditiis nemo magnam ipsam placeat reprehenderit iure quis velit a porro ut?
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>
<!--Productos RA
  <section>
  <video class="elementor-video" src="{{ asset('assets/VIDEO/ra-empaques.mp4') }}" autoplay loop muted="muted"
  playsinline controlslist="nodownload"> </video> 
  <main id="main">
    <section id="Productos" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
        <video class="elementor-video" src="{{ asset('assets/VIDEO/ra-empaques.mp4') }}" autoplay loop muted="muted"
  playsinline controlslist="nodownload"> </video>
          <div class="col-lg-5">
            <div class="portfolio-info">
              <h3>RA Empaques</h3>
              <ul>
                <li>
                  <strong>Video Juego:</strong> El perfecto imperfecto
                </li>
                <li>
                  <strong>Autor(es):</strong> Shadow Corporation
                </li>
                <li>
                  <strong>Plataformas:</strong>Android 
                </li>
                <li>
                  <strong>Año:</strong>2021
                </li>
                <li>
                  <strong>Precio:</strong>$1899.90
                </li>
                <li>
                  <a class="btn btn-agregar">
                    <i class="bi bi-box-arrow-down"></i> Agregar 
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  </section>
  -->
  @endsection