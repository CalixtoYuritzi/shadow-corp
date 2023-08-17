<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="{{ route('sitio.index') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/IMG/logo.png') }}" alt="Logo de Shadow Corporation">
    </a>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="{{ route('sitio.index') }}">Inicio</a></li>
            <li><a class="nav-link scrollto" href="{{ route('sitio.nosotros') }}">Nosotros</a></li>
            <li><a class="nav-link scrollto" href=" {{ route('sitio.servicios') }}">Servicios</a></li>
            <li><a class="nav-link scrollto" href="{{ route('sitio.juego') }}">RA</a></li>
            <li><a class="nav-link scrollto" href="{{ route('sitio.still') }}">Still Life</a></li>
            <li><a class="nav-link scrollto" href="{{ route('sitio.contacto') }}">Contacto</a></li>
            <?php
            session_start();
            if (isset($_SESSION['session_user']))
            {
                echo '<li><a class="getstarted scrollto disabled" href="indexCat.php">Panel Administrativo</a></li>';
            }
            else
            {
                $aux='login';
                echo '<li><a class="getstarted scrollto disabled" href="'.$aux.'">Inicio de Sesión</a></li>';
            }
            ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>

</div>
