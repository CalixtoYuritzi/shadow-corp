@extends('sitio.layout.principal')
@section('contenido')

    <section id="Contacto" class="contact d-flex">
        <div class="container-xl" data-aos="fade-up">
            <header class="section-header">
            <br>
                <h2 class="cen tex6-3">No te quedes con una tormenta de dudas y contactanos.</h2>
            </header>
            <br>
            <div class="row gy-4">
                <div class="row-lg-6">
                    <div class="row gy-4">
                        <div class="col-md-6 ">
                            <video width="95%" autoplay playsinline muted loop> <source src="{{ asset('assets/VIDEO/SaulLluvia.mp4') }}" type="video/mp4"></video>
                        </div>

                        <div class="col-md-6">
                            <div>
                                <form action="./PHP/correo.php" method="post"class="php-email-form tex1">
                                    <div class="row gy-4">
                                        <br>
                                        <div class="col-md-6">
                                            Nombre:
                                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Escribe tu nombre completo" >
                                        </div>
                                        <div class="col-md-6">
                                            E-mail:
                                            <input type="email" id="correo" name="correo" class="form-control" placeholder="Escribe tu correo electrónico" >
                                        </div>
                                        <div class="col-md-12">
                                            Titulo del mensaje:
                                            <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Encabezado del mensaje">
                                        </div>
                                        <div class="col-md-12">
                                            Contenido:
                                            <textarea class="form-control" id="mensaje" name="mensaje" rows="6" placeholder="Escribe tu mensaje" ></textarea>

                                            <div class="col-md-12 text-center">
                                                <div class="loading">loading</div>
                                                <div class="error-message">Ha ocurrido un error. Intentalo más tarde.</div>
                                                <div class="sent-message">Tu mensaje ha sido enviado. Gracias!</div>
                                                <br> <br>
                                                <button type="submit" onclick="validarMensaje(); color();">Enviar</button>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>


@endsection
