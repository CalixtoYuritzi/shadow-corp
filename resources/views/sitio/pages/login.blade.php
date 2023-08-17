@extends('sitio.layout.principal')
@section('contenido')

    <section id="login" class="d-flex" data-aos="fade-up" data-aos-delay="200">
        <?php
        if (isset($_SESSION['session_msj']))
        {
            echo "<alert class='alert-danger'>$_SESSION[session_msj]</alert>";
        }
        ?>
        <div class="container xl">
            <header class="section-header">
                <h2 class="cen tex6">Buuuu!</h2>
            </header>
            <br>
            <div class="row gy-4">
                <div class="col-lg-8">
                    <video width="98%" autoplay playsinline muted loop><source src="{{ asset('assets/VIDEO/PortadaFB.mp4') }}" type="video/mp4"></video>
                </div>

                <div class="col-lg-4 con">
                    <div class="es">
                        <form action="PHP/api/Buscar.php" method="POST" class="tex1">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <span class="t1">Usuario:</span>
                                    <input type="email" id="correo" name="correo" placeholder="Escribe tu correo" >
                                </div>
                                <div class="col-md-12">
                                    <span class="t1">Contraseña:</span>
                                    <input type="password" id="contra" name="contra" placeholder="Escribe tu contraseña">
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-12 text-center">
                                        <br>
                                        <button type="submit" class="btn btn-outline-light" >Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
