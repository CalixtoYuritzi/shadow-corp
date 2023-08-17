<!DOCTYPE html>
<head>
    @include('sitio.includes.head')
</head>

<html lang="es">
<body>

<!--Header -->
<header id="header" class="header fixed-top bg-light tex3">
    @include('sitio.includes.menu')
</header>
<!--Fin Header -->
<br> <br> <br>
<!--Banners-->
<div class="align-items-center" data-aos="fade-up" data-aos-delay="100" >

    @yield('contenido')<!--instanciamiento-->

</div>
<br> <br> <br>
<!--Inicio footer -->
<footer id="footer" class="footer bg-light tex3">
    @include('sitio.includes.footer')
</footer>
    @include('sitio.includes.scripts')
</body>
</html>
