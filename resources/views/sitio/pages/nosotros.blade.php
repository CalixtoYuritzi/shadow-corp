@extends('sitio.layout.principal')
@section('contenido')

    <section id="conocenos ">
        <div class="container-xl" data-aos="fade-up">
            <div class="row gx-3">
                <div class="col-lg-6 d-flex-column justify-content-center con bor" data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <br>
                        <h2 class="tex5">Conócenos</h2>
                        <h1 class="tex1">Somos una empresa de Marketing Digital veracruzana.</h1>
                        <br>
                        <p class="t1 tex3">Shadow Corporation es una compañia que comprende la importancia de conocer y entender al consumidor
                            para ofrecerle la calidad que busca, creando una fuerte relación con el.
                            <br><br>
                            Esta conformada por un  grupo de 6 mujeres creativas, ambiciosas y altamente colaborativas que se empoderan entre si para ofrecer un servicio de calidad.
                            <br> <br>
                            <span class="tex4">¿Quieres conocer a nuestro equipo?</span>
                        </p>
                        <br>
                        <div class="text-center text-lg-start" >
                            <div class="cen"><a href="#equipo" class="btn btn-outline-dark d-inline-flex align-items-center aling-self-center tex1">
                                    <span> Leer más... </span>
                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                </a></div><br>
                        </div>

                    </div>

                </div>
                <div class="col-lg-6 d-flex flex-column align-content-center " data-aos="fade-up" data-aos-delay="200">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner bor">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/IMG/visión.jpg') }}" class="d-block w-100" alt="Visión de Shadow Corporation">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/IMG/mision.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/IMG/valores.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="equipo">
        <div class="container-xl">
            <h3  class="t2 tex6">Equipo</h3>
            <div class="row gx-4" data-aos="fade-up" data-aos-delay="300">
                <div class="col-lg-4 d-flex-column justify-content-center">
                    <div class="tarj">
                        <div class="cover">
                            <img src="{{ asset('assets/IMG/ale.png') }}" alt="">
                            <div class="img__back"></div>
                        </div>
                        <div class="description">
                            <h2 class="tex6-2">Alexia Patricia Gonzalez Peña</h2>
                            <p  class="tex3">Artista y programadora. Encargada de las páginas web, tanto en el código como de los elementos visuales de la misma. Me veras por los pasillos de la empresa con grandes ojeras y una gran mochila.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex-column justify-content-center">
                    <div class="tarj">
                        <div class="cover">
                            <img src="{{ asset('assets/IMG/diana.png') }}" alt="">
                            <div class="img__back"></div>
                        </div>
                        <div class="description">
                            <h2 class="tex6-2">Diana Yuritzi Ramírez Calixto</h2>
                            <p class="tex3">Founder de DevYC. Escritora. Developer en mis tiempos libres. Aprendiz de todo y amante de hacer que las cosas sucedan. <br><br> <br></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex-column justify-content-center">
                    <div class="tarj">
                        <div class="cover">
                            <img src="{{ asset('assets/IMG/jenny.png') }}" alt="">
                            <div class="img__back"></div>
                        </div>
                        <div class="description">
                            <h2 class="tex6-2">Jennifer Eileen Alvarado Barrios</h2>
                            <p class="tex3">Encargada de la base de datos y sus servicios, aunque también me dedico a otras cosas, me gusta todo lo que hago aunque no tanto como los chicles. <br><br></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-4" data-aos="fade-up" data-aos-delay="250">
                <div class="col-lg-4 d-flex-column justify-content-center">
                    <div class="tarj">
                        <div class="cover">
                            <img src="{{ asset('assets/IMG/mariam.png') }}" alt="">
                            <div class="img__back"></div>
                        </div>
                        <div class="description">
                            <h2 class="tex6-2">Mariam Arantza Vásquez Sánchez </h2>
                            <p class="tex3">Encargada de las redes sociales, despistada, pero muy comprometida con los labores que desempeño en nuestra empresa. Fanatica de KeniaOS.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex-column justify-content-center">
                    <div class="tarj">
                        <div class="cover">
                            <img src="{{ asset('assets/IMG/lei.png') }}" alt="">
                            <div class="img__back"></div>
                        </div>
                        <div class="description ">
                            <h2 class="tex6-2">Sara Leilani Hernández Rangel</h2>
                            <p class="tex3">Bestie de Photoshop e Illustrator, encargada del marketing digital y diseño visual de estos, su religión es Harry Styles.<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex-column justify-content-center">
                    <div class="tarj">
                        <div class="cover">
                            <img src="{{ asset('assets/IMG/liliana.png') }}" alt="">
                            <div class="img__back"></div>
                        </div>
                        <div class="description">
                            <h2 class="tex6-2">Liliana Rojas Ramos</h2>
                            <p class="tex3">Desarrolladora creativa en el ámbito de páginas web, mi mayor pasión es observar y crear, me encanta bailar. y siempre dispuesta a hacer cosas nuevas. <br><br></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection
